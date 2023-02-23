<?php 
include("includes/header.inc.php");
?>
  <section class="hero">
    <div class="img-slider">
      <img src="" alt="main-logo">
    </div>
    <div class="img-slider-indicator">
      <ul>
        <li>o</li>
        <li>o</li>
        <li>o</li>
        <li>o</li>
        <li>o</li>
      </ul>
    </div>
    
  </section>
  <section class="featured-products">
    <h2 class="top-heading">Featured Products</h2>
    <hr>
    <div>
      <div class="card">
        <img src="assets/llama5_Medium.jpeg" alt="A miniature llama next to a quarter">
        <h3 class="second-heading">Lucky Little Llamas</h3>
        <p class="body-text">Check out these Lucky Llamas that are 15% off! Adopt yours today!</p>
        <a class="button-light" href="https://www.etsy.com/shop/SimplyComplexArtShop?section_id=34898639" target="_blank">See More ></a>
      </div>
      <div class="card">
        <img src="assets/poncho_Medium.jpeg" alt="A model wearing a poncho">
        <h3 class="second-heading">Ponchos</h3>
        <p class="body-text">Brand new ponchos are in stock now. Get yours to keep cozy warm this winter!</p>
        <a class="button-light" href="https://www.etsy.com/shop/SimplyComplexArtShop?section_id=39940283" target="_blank">See More ></a>
      </div>
      <div class="card">
        <img src="assets/sculpture_promo Medium.jpeg" alt="A bead and wire tree attached to a quartz crystal">
        <h3 class="second-heading">Sculptures</h3>
        <p class="body-text">Gift that special someone a handcrafted crystal sculpture. Custom orders available!</p>
        <a class="button-light" href="https://www.etsy.com/shop/SimplyComplexArtShop?section_id=37260560" target="_blank">See More ></a>
      </div>
    </div>
  </section>
  <section class="about-us">
    <img src="simp_comp_graphics/steph_skye_Medium.jpeg" alt="photo-of-stephie-and-skye">
    <div>
      <h2>Stephie & Skye</h2>
      <p>We are the owners of Simply Complex Art Shop. We enjoy sharing our handmade products with the Northern Illinois and Southern Wisconsin communities. If you don't see us at the farmer's market, then we are probably out hunting for treasures in the local quarries!</p>
    </div>
  </section>
  <section class="call-to-action">
    <form action="https://formsubmit.co/simplycomplexartshop@gmail.com" method="POST">
      <input type="email" name="Email" placeholder="Your Email" required>
      <button type="submit">Join!</button>
    </form>
    <p>Join our mailing list for updates and special offers!</p>
  </section>
  <section class="contact-us">
    <div>
      <h4>Contact Us</h4>
      <form action="https://formsubmit.co/simplycomplexartshop@gmail.com" method="POST">
        <input type="text" name="Name" placeholder="Your Name" required>
        <input type="email" name="Email" placeholder="Your Email" required>
        <input type="text" name="Subject" placeholder="Subject" required>
        <textarea name="message" name="Message" id="message" cols="30" rows="10" placeholder="Your message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>
    <div>
      <h5>Up-Coming Events</h5>
      <div>
        <p>Janesville Winter Market - December 3rd, 2022</p>
        <p>Janesville Winter Market - December 10th, 2022</p>
        <p>Janesville Winter Market - December 17th, 2022</p>
      </div>
      <hr>
      <div class="social-icons">
        <a href="https://www.facebook.com/SimplyComplexArtShop/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/simplycomplexartshop/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.youtube.com/@thestephieverse134" target="_blank"><i class="fa-brands fa-youtube"></i></a>
      </div>
      <p>Follow us!</p>
    </div>
  </section>
<?php include("includes/footer.inc.php");?>
