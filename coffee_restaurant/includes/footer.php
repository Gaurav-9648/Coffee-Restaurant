<footer class="site-footer">
  <div class="container">

    <div class="footer-grid">

      <div class="footer-box">
        <h3 class="footer-logo">Coffee Restaurant<span>.</span></h3>
        <p>
          Premium coffee house experience with warm ambience, fresh beans,
          and handcrafted specialty drinks.
        </p>

        <div class="socials">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-box">
        <h4>Quick Links</h4>
        <a href="/coffee_restaurant/index.php">Home</a>
        <a href="/coffee_restaurant/about.php">About</a>
        <a href="/coffee_restaurant/menu.php">Menu</a>
        <a href="/coffee_restaurant/gallery.php">Gallery</a>
        <a href="/coffee_restaurant/reservation.php">Reservation</a>
        <a href="/coffee_restaurant/contact.php">Contact</a>
      </div>

      <div class="footer-box">
        <h4>Opening Hours</h4>
        <p>Mon - Fri: 9:00 AM - 10:00 PM</p>
        <p>Saturday: 10:00 AM - 11:00 PM</p>
        <p>Sunday: 10:00 AM - 9:00 PM</p>
      </div>

      <div class="footer-box">
        <h4>Contact</h4>
        <p><i class="fa-solid fa-location-dot"></i> India, Coffee Street</p>
        <p><i class="fa-solid fa-phone"></i> +91 96480 98151</p>
        <p><i class="fa-solid fa-envelope"></i> tatvikamarketing@gmail.com</p>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© <?php echo date("Y"); ?> Kaffa Coffee Restaurant. All Rights Reserved.</p>
    </div>

  </div>
</footer>

<!-- JS (Safe) -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const header = document.getElementById("siteHeader");
  const menuBtn = document.getElementById("menuBtn");
  const navLinks = document.getElementById("navLinks");

  // Scroll Header Effect
  if (header) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 30) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  }

  // Mobile Menu Toggle
  if (menuBtn && navLinks) {
    menuBtn.addEventListener("click", function () {
      navLinks.classList.toggle("open");
    });
  }

});
</script>

</body>
</html>

