<?php
include("admin_header.php");
include("../config/db.php");

$msg = "";

$cats = $conn->query("SELECT * FROM categories ORDER BY name ASC");

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];

    $sql = "INSERT INTO menu_items (category_id, name, description, price)
            VALUES ('$category_id', '$name', '$description', '$price')";

    if($conn->query($sql)){
        $msg = "<div class='notice'>✅ Menu Item Added Successfully!</div>";
    }else{
        $msg = "<div class='error'>❌ Error: ".$conn->error."</div>";
    }
}
?>

<div class="admin-page">
  <h2>Add Menu Item</h2>

  <?php echo $msg; ?>

  <form method="POST" class="admin-form">
    <label>Category</label>
    <select class="input" name="category_id" required>
      <option value="">Select Category</option>
      <?php while($c = $cats->fetch_assoc()){ ?>
        <option value="<?php echo $c['id']; ?>">
          <?php echo $c['name']; ?>
        </option>
      <?php } ?>
    </select>

    <label>Item Name</label>
    <input class="input" type="text" name="name" required placeholder="Ex: Cappuccino">

    <label>Description</label>
    <textarea class="input" name="description"  placeholder="Ex: Fresh espresso with milk foam"></textarea>

    <label>Price (₹)</label>
    <input class="input" type="number" name="price" required placeholder="Ex: 199">

    <button class="btn btn-primary" type="submit" name="add">Add Item</button>
  </form>
</div>

