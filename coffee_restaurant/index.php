<?php include("includes/header.php"); ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">

    <div class="hero-badge">
      <i class="fa-solid fa-mug-hot"></i> Premium Coffee House
    </div>

    <h1>Specialty Coffee & Bistro Experience</h1>
    <p>
      Freshly roasted beans, handcrafted drinks, and a warm bistro vibe.
      Come for coffee — stay for the ambiance.
    </p>

    <div class="hero-buttons">
      <a href="/coffee_restaurant/menu.php" class="btn btn-primary">Explore Menu</a>
      <a href="/coffee_restaurant/reservation.php" class="btn btn-outline">Book a Table</a>
    </div>

    <div class="hero-cards">
      <div class="hero-mini">
        <h4>Fresh Roasted Beans</h4>
        <p>Premium aroma, smooth taste, perfect crema.</p>
      </div>
      <div class="hero-mini">
        <h4>Cozy Bistro Vibes</h4>
        <p>Perfect for dates, meetings & family time.</p>
      </div>
      <div class="hero-mini">
        <h4>Handcrafted Menu</h4>
        <p>Coffee, desserts, breakfast & snacks.</p>
      </div>
    </div>

  </div>
</section>

<!-- FEATURES -->
<section class="section dark">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Why People Love Us</h2>
        <p class="section-sub">
          We bring you premium coffee, cozy bistro ambiance, and service that feels personal.
        </p>
      </div>
      <a class="link-btn" href="/coffee_restaurant/about.php">More About Us →</a>
    </div>

    <div class="grid">
      <div class="card feature-card">
        <h3><i class="fa-solid fa-seedling"></i> Quality Ingredients</h3>
        <p>We use fresh beans, premium milk, and handpicked ingredients.</p>
      </div>

      <div class="card feature-card">
        <h3><i class="fa-solid fa-mug-saucer"></i> Signature Coffee</h3>
        <p>Our coffee is roasted to perfection for a rich and smooth taste.</p>
      </div>

      <div class="card feature-card">
        <h3><i class="fa-solid fa-heart"></i> Warm Hospitality</h3>
        <p>We treat every customer like family — comfort, service, and smiles.</p>
      </div>
    </div>
  </div>
</section>

<!-- SPECIAL MENU -->
<section class="section dark">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Special Menu</h2>
        <p class="section-sub">
          Handpicked items from our bistro and specialty coffee collection.
        </p>
      </div>
      <div class="section-actions">
        <a class="btn btn-primary" href="/coffee_restaurant/menu.php">View Menu</a>
      </div>
    </div>

    <div class="menu-grid">
      <?php
      $res = $conn->query("SELECT * FROM menu_items ORDER BY id DESC LIMIT 6");
      if($res && $res->num_rows > 0){
        $imgs = ["m1.jpg","m2.jpg","m3.jpg","m4.jpg","m5.jpg","m6.jpg"];
        $i=0;

        while($r = $res->fetch_assoc()){
          $img = $imgs[$i % count($imgs)];
          $i++;

          echo "
          <div class='card menu-card'>
            <img class='menu-img' src='/coffee_restaurant/assets/images/$img' alt='Menu'>
            <div class='menu-body'>
              <div class='menu-top'>
                <h3>{$r['name']}</h3>
                <div class='price'>₹{$r['price']}</div>
              </div>
              <p class='desc'>{$r['description']}</p>
            </div>
          </div>";
        }
      } else {
        echo "<div class='notice'>No menu items found. Please add items from Admin Panel.</div>";
      }
      ?>
    </div>
  </div>
</section>

<!-- PARALLAX -->
<section class="parallax">
  <div class="container">
    <h2>Feel The Real Coffee Taste</h2>
    <p>
      The aroma, the crema, the warmth — coffee that feels like an experience.
    </p>
    <a href="/coffee_restaurant/reservation.php" class="btn btn-primary">Reserve Now</a>
  </div>
</section>

<!-- GALLERY -->
<section class="section dark">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Coffee Moments</h2>
        <p class="section-sub">
          A glimpse of our café, our coffee, and our bistro vibe.
        </p>
      </div>
      <div class="section-actions">
        <a class="btn btn-outline" href="/coffee_restaurant/gallery.php">See Gallery</a>
      </div>  
    </div>

    <div class="gallery-grid">
      <img src="/coffee_restaurant/assets/images/g1.jpg" alt="Gallery 1">
      <img src="/coffee_restaurant/assets/images/m4.jpg" alt="Gallery 2">
      <img src="/coffee_restaurant/assets/images/g3.jpg" alt="Gallery 3">
      <img src="/coffee_restaurant/assets/images/g4.jpg" alt="Gallery 4">
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-inner">
    <h2>Book Your Table Now</h2>
    <p>
      Planning a date, meeting, or family time?  
      Reserve your table today and enjoy a premium coffee experience.
    </p>
    <a href="/coffee_restaurant/reservation.php" class="btn btn-primary">Book Reservation</a>
  </div>
</section>

<?php include("includes/footer.php"); ?>
