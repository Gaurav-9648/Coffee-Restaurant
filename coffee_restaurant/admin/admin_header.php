<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

// Get current page name
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<link rel="stylesheet" href="/coffee_restaurant/assets/css/admin_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="sidebar">
    <h2>Coffee Admin</h2>
    <a href="dashboard.php" class="<?php if($current_page=='dashboard.php'){echo 'active';} ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="add_menu.php" class="<?php if($current_page=='add_menu.php'){echo 'active';} ?>"><i class="fas fa-plus"></i> Add Menu</a>
    <a href="manage_menu.php" class="<?php if($current_page=='manage_menu.php'){echo 'active';} ?>"><i class="fas fa-list"></i> Manage Menu</a>
    <a href="reservations.php" class="<?php if($current_page=='reservations.php'){echo 'active';} ?>"><i class="fas fa-calendar-alt"></i> Reservations</a>
    <a href="messages.php" class="<?php if($current_page=='messages.php'){echo 'active';} ?>"><i class="fas fa-envelope"></i> Messages</a>
    <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
<div class="topnav">
    <div class="user-info"><i class="fas fa-user"></i> <?php echo $_SESSION['admin']; ?></div>
</div>
<div class="page-container">
