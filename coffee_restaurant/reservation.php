<?php include("includes/header.php"); ?>

<section class="page-hero" style="background-image:url('assets/images/g3.jpg')">
  <div class="page-hero-overlay"></div>
  <div class="container">
    <h1>Reservation</h1>
    <p>Book your table and enjoy premium coffee experience.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title">Book a Table</h2>
    <p class="section-subtitle">
      Fill the form below and reserve your seat.
    </p>

    <?php
    if(isset($_POST['book'])){
      $fullname = $_POST['fullname'];
      $phone = $_POST['phone'];
      $res_date = $_POST['res_date'];
      $res_time = $_POST['res_time'];

      $conn->query("INSERT INTO reservations(fullname,phone,res_date,res_time)
      VALUES('$fullname','$phone','$res_date','$res_time')");

      echo "<div class='notice'>Reservation Submitted Successfully!</div>";
    }
    ?>

    <div class="form-wrap">
      <form method="POST" class="form-card">
        <input class="input" type="text" name="fullname" placeholder="Full Name" required>
        <input class="input" type="text" name="phone" placeholder="Phone Number" required>

        <div class="two">
          <input class="input" type="date" name="res_date" required>
          <input class="input" type="time" name="res_time" required>
        </div>

        <button class="btn btn-primary" type="submit" name="book">Book Now</button>
      </form>
    </div>
  </div>
</section>

<?php include("includes/footer.php"); ?>
