<?php include("admin_header.php"); ?>
<?php include("../config/db.php"); ?>

<h1>Welcome, <?php echo $_SESSION['admin']; ?> 👋</h1>

<div class="grid">
    <div class="card total-menu">
        <i class="fas fa-coffee"></i>
        <h3>Total Menu Items</h3>
        <?php
        $q = $conn->query("SELECT * FROM menu_items");
        echo "<p>".$q->num_rows."</p>";
        ?>
    </div>

    <div class="card total-reservation">
        <i class="fas fa-calendar-alt"></i>
        <h3>Total Reservations</h3>
        <?php
        $q = $conn->query("SELECT * FROM reservations");
        echo "<p>".$q->num_rows."</p>";
        ?>
    </div>

    <div class="card total-messages">
        <i class="fas fa-envelope"></i>
        <h3>Total Messages</h3>
        <?php
        $q = $conn->query("SELECT * FROM messages");
        echo "<p>".$q->num_rows."</p>";
        ?>
    </div>
</div>

<h2>Recent Reservations</h2>
<div class="grid">
<?php
$res = $conn->query("SELECT * FROM reservations ORDER BY id DESC LIMIT 5");
while($r=$res->fetch_assoc()){
    echo "<div class='card'>
            <h4>{$r['fullname']}</h4>
            <p>Phone: {$r['phone']}</p>
            <p>Date: {$r['res_date']}</p>
            <p>Time: {$r['res_time']}</p>
          </div>";
}
?>
</div>

<h2>Recent Messages</h2>
<div class="grid">
<?php
$res = $conn->query("SELECT * FROM messages ORDER BY id DESC LIMIT 5");
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
