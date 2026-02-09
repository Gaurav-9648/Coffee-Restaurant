<?php include("admin_header.php"); ?>
<?php include("../config/db.php"); ?>

<h2>Messages</h2>
<div class="grid">
<?php
$res = $conn->query("SELECT * FROM messages ORDER BY id DESC");
while($r=$res->fetch_assoc()){
    echo "<div class='card'>
            <h4>{$r['fullname']}</h4>
            <p>Email: {$r['email']}</p>
            <p>Phone: {$r['phone']}</p>
            <p>{$r['message']}</p>
          </div>";
}
?>
</div>



