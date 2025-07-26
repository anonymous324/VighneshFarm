<footer class="py-5" style="background-color: #da9501ff;">
  <div class="container-lg">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 col-sm-12 text-center text-md-start">
        <div class="footer-menu">
          <img src="images/logo.png" width="70" height="70" alt="logo" />
          <div class="social-links mt-3 d-flex justify-content-center justify-content-md-start gap-2">
            <a href="#" class="btn btn-outline-light">
              <svg width="22" height="22"><use xlink:href="#facebook"></use></svg>
            </a>
            <a href="#" class="btn btn-outline-light">
              <svg width="22" height="22"><use xlink:href="#twitter"></use></svg>
            </a>
            <a href="#" class="btn btn-outline-light">
              <svg width="22" height="22"><use xlink:href="#youtube"></use></svg>
            </a>
            <a href="#" class="btn btn-outline-light">
              <svg width="22" height="22"><use xlink:href="#instagram"></use></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="col-md-2 col-sm-6">
        <div class="footer-menu">
          <h5 class="widget-title text-dark">Vighnesh Farm</h5>
          <ul class="menu-list list-unstyled">
            <li><a href="aboutus.php" class="nav-link text-light">About us</a></li>
            <li><a href="#" class="nav-link text-light">Conditions</a></li>
            <li><a href="#" class="nav-link text-light">Careers</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6">
        <div class="footer-menu">
          <h5 class="widget-title text-dark">Quick Links</h5>
          <ul class="menu-list list-unstyled">
            <li><a href="#" class="nav-link text-light">Offers</a></li>
            <li><a href="shop.php" class="nav-link text-light">Shop</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-2 col-sm-6">
        <div class="footer-menu">
          <h5 class="widget-title text-dark">Customer Service</h5>
          <ul class="menu-list list-unstyled">
            <li><a href="#" class="nav-link text-light">FAQ</a></li>
            <li><a href="contact.php" class="nav-link text-light">Contact</a></li>
            <li><a href="#" class="nav-link text-light">Privacy Policy</a></li>
            <li><a href="#" class="nav-link text-light">Returns & Refunds</a></li>
            <li><a href="#" class="nav-link text-light">Delivery Info</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-8">
        <div class="footer-menu">
          <h5 class="widget-title text-dark">Subscribe Us</h5>
          <p class="text-light">Subscribe to our newsletter to get updates about our grand offers.</p>
          <form class="d-flex mt-3" action="#">
            <input
              class="form-control rounded-start bg-light"
              type="email"
              placeholder="Email Address"
              aria-label="Email"
              required
            />
            <button class="btn btn-dark rounded-end" type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Footer Bottom -->
<div id="footer-bottom" class="py-3" style="background-color: #f3e4a8;">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-12 text-center text-dark">
        <p class="mb-0">© 2025 Vighnesh. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('navbarToggle');
    const navMenu = document.getElementById('navbarMain');

    toggleButton.addEventListener('click', function () {
      navMenu.classList.toggle('show'); // toggle menu

      // disable/enable scroll
      if (navMenu.classList.contains('show')) {
        document.body.classList.add('no-scroll');
      } else {
        document.body.classList.remove('no-scroll');
      }
    });
  });
</script>



