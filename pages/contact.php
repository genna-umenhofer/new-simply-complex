<?php 
include("../includes/header.inc.php");
include("../.env.php");
?>
<div class="contact-form-container">
  <h1 class="top-heading">Contact Us</h1>
  
    <form class="contact-form" action="../includes/sendemail.php" method="POST">
      <input class="contact-form-input" type="text" name="Name" placeholder="Your Name" required>
      <input class="contact-form-input" type="email" name="Email" placeholder="Your Email" required>
      <textarea class="contact-form-input"  name="Message" id="message" rows="3" placeholder="Your message" required></textarea>
      <div class="g-recaptcha" data-sitekey=<?php echo $sitekey?>></div>
      <button class="button-dark" type="submit">Submit</button>
    </form>
  
</div>

<?php include("../includes/footer.inc.php");?>