<?php 
include("../includes/header.inc.php");
?>
<div class="contact-form-container">
  <h1 class="top-heading">Contact Us</h1>
  
    <form class="contact-form" action="" method="POST">
      <input class="contact-form-input" type="text" name="Name" placeholder="Your Name" required>
      <input class="contact-form-input" type="email" name="Email" placeholder="Your Email" required>
      <input class="contact-form-input" type="text" name="Subject" placeholder="Subject" required>
      <textarea class="contact-form-input" name="message" name="Message" id="message" cols="30" rows="6" placeholder="Your message" required></textarea><br>
      <button class="button-dark" type="submit">Submit</button>
    </form>
  
</div>

<?php include("../includes/footer.inc.php");?>