<?php include("includes/header.php"); ?>

<section class="page-hero" style="background-image:url('assets/images/bg_parallax.jpg')">
  <div class="page-hero-overlay"></div>
  <div class="container">
    <h1>Our Menu</h1>
    <p>Fresh coffee, snacks, and premium taste.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title">Special Menu</h2>
    <p class="section-subtitle">
      Explore our handcrafted coffee, desserts, and signature items.
    </p>

    <div class="menu-grid">
      <?php
      $res = $conn->query("
  SELECT menu_items.*, categories.name AS catname
  FROM menu_items
  LEFT JOIN categories ON menu_items.category_id = categories.id
  ORDER BY menu_items.id DESC
");
      while($r = $res->fetch_assoc()){
  echo "
    <div class='menu-card'>
      <div class='menu-card-top'>
        <h3>{$r['name']}</h3>
        <span class='menu-price'>₹{$r['price']}</span>
      </div>
      <p class='menu-desc'>{$r['description']}</p>
      <div class='menu-cat'>{$r['catname']}</div>
    </div>
  ";
}

      ?>
    </div>
  </div>
</section>

<?php include("includes/footer.php"); ?>
