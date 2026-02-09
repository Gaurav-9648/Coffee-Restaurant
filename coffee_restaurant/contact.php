<?php include("includes/header.php"); ?>

<section class="page-hero" style="background-image:url('assets/images/g4.jpg')">
  <div class="page-hero-overlay"></div>
  <div class="container">
    <h1>Contact Us</h1>
    <p>We would love to hear from you.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="section-title">Send Message</h2>
    <p class="section-subtitle">
      Have questions? Drop a message and we will contact you soon.
    </p>

    <?php
    if(isset($_POST['send'])){
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];

      $conn->query("INSERT INTO messages(fullname,email,phone,message)
      VALUES('$fullname','$email','$phone','$message')");

      echo "<div class='notice'>Message Sent Successfully!</div>";
    }
    ?>

    <div class="contact-grid">

      <div class="contact-info">
        <div class="info-card">
          <h3><i class="fa-solid fa-location-dot"></i> Address</h3>
          <p>India, Coffee Street</p>
        </div>

        <div class="info-card">
          <h3><i class="fa-solid fa-phone"></i> Phone</h3>
          <p>+91 96480 98151</p>
        </div>

        <div class="info-card">
          <h3><i class="fa-solid fa-envelope"></i> Email</h3>
          <p>tatvikamarketing@gmail.com</p>
        </div>
      </div>

      <form method="POST" class="form-card">
        <input class="input" type="text" name="fullname" placeholder="Full Name" required>
        <input class="input" type="email" name="email" placeholder="Email Address" required>
        <input class="input" type="text" name="phone" placeholder="Phone Number" required>
        <textarea class="input" name="message" placeholder="Write your message..." required></textarea>

        <button class="btn btn-primary" type="submit" name="send">Send Message</button>
      </form>

    </div>
  </div>
</section>

<?php include("includes/footer.php"); ?>
