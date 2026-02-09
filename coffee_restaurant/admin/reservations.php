<?php include("admin_header.php"); ?>
<?php include("../config/db.php"); ?>

<h2>Reservations</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
    <?php
    $res = $conn->query("SELECT * FROM reservations ORDER BY id DESC");
    while($r=$res->fetch_assoc()){
        echo "<tr>
                <td>{$r['id']}</td>
                <td>{$r['fullname']}</td>
                <td>{$r['phone']}</td>
                <td>{$r['res_date']}</td>
                <td>{$r['res_time']}</td>
              </tr>";
    }
    ?>
</table>


