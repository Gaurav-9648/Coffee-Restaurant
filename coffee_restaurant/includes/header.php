<?php
include(__DIR__ . "/../config/db.php");
$page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffee Restaurant</title>

  <!-- Main CSS -->
  <link rel="stylesheet" href="/coffee_restaurant/assets/css/style.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body>

<!-- HEADER -->
<header class="site-header" id="siteHeader">
  <div class="container">
    <div class="nav-inner">

      <!-- LOGO -->
      <a href="/coffee_restaurant/index.php" class="logo">
        Coffee Restaurant<span>.</span>
      </a>

      <!-- NAV LINKS -->
      <nav class="nav-links" id="navLinks">
        <a href="/coffee_restaurant/index.php" class="<?php echo ($page=='index.php')?'active':''; ?>">Home</a>
        <a href="/coffee_restaurant/about.php" class="<?php echo ($page=='about.php')?'active':''; ?>">About</a>
        <a href="/coffee_restaurant/menu.php" class="<?php echo ($page=='menu.php')?'active':''; ?>">Menu</a>
        <a href="/coffee_restaurant/gallery.php" class="<?php echo ($page=='gallery.php')?'active':''; ?>">Gallery</a>
        <a href="/coffee_restaurant/reservation.php" class="<?php echo ($page=='reservation.php')?'active':''; ?>">Reservation</a>
        <a href="/coffee_restaurant/contact.php" class="<?php echo ($page=='contact.php')?'active':''; ?>">Contact</a>
      </nav>

      <!-- RIGHT SIDE -->
      <div class="nav-right">
        <a href="/coffee_restaurant/reservation.php" class="btn btn-primary">
          Book Table
        </a>

        <!-- MOBILE BUTTON -->
        <button class="menu-btn" id="menuBtn" type="button">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>

    </div>
  </div>
</header>

