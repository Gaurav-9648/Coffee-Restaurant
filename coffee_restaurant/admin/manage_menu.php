<?php include("admin_header.php"); ?>
<?php include("../config/db.php"); ?>

<h2>Manage Menu</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php
    $res = $conn->query("SELECT * FROM menu_items");
    while($r=$res->fetch_assoc()){
        echo "<tr>
                <td>{$r['id']}</td>
                <td>{$r['name']}</td>
                <td>{$r['price']}</td>
                <td>{$r['description']}</td>
                <td>
                    <a class='btn' href='edit_menu.php?id={$r['id']}'>Edit</a>
                    <a class='btn' href='delete_menu.php?id={$r['id']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
</table>

