<?php
include("../config/db.php");
session_start();

if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit();
}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM menu_items WHERE id='$id'");
header("Location: manage_menu.php");
exit();
?>


