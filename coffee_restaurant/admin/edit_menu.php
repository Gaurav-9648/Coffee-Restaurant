<?php
include("admin_header.php");
include("../config/db.php");

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM menu_items WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];

    if($_FILES['image']['name'] != ""){
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $folder = "../assets/images/menu_items/".$image;
        move_uploaded_file($tmp_name, $folder);
        $conn->query("UPDATE menu_items SET name='$name', description='$desc', price='$price', image='$image' WHERE id=$id");
    } else {
        $conn->query("UPDATE menu_items SET name='$name', description='$desc', price='$price' WHERE id=$id");
    }
    echo "<script>alert('Menu updated'); window.location='manage_menu.php';</script>";
}
?>

<div class="add-menu-container">
    <h2>Edit Menu Item</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name" value="<?php echo $res['name']; ?>" required>
        <textarea name="description" required><?php echo $res['description']; ?></textarea>
        <input type="number" name="price" value="<?php echo $res['price']; ?>" required>
        <input type="file" name="image">
        <button type="submit" name="update">Update</button>
    </form>
</div>

