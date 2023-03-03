<?php 
include("../includes/header.inc.php");
include("../includes/dbc.inc.php");
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" nonce="9DsX08vr"></script>

<div class="events-container">
  <h1 class="top-heading">Upcoming Live Events</h1>
  <hr><br>
</div>
<div class="event-and-social-container">
<div class="events-card-container">
        <?php
          $select = "SELECT * FROM live_events;";
          $result = mysqli_query($conn, $select);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "  <div class='events-card'>
              <p class='second-heading'>{$row['date']}</p>
              <p class='bold-body-text'>{$row['name']}</p>
              <p class='body-text'>{$row['location']}</p>
              <a href='{$row['url']}' class='button-light' target='_blank'>Find Out More</a>
            </div>";
            }
          }

          mysqli_close($conn);
        ?>

</div>
<div class="social-feed">
  <div class="facebook">
  <div class="fb-page" data-href="https://www.facebook.com/SimplyComplexArtShop" data-tabs="timeline" data-width="340" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SimplyComplexArtShop" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SimplyComplexArtShop">Simply Complex Art Shop</a></blockquote></div>
  </div>
</div>
</div>
<?php include("../includes/footer.inc.php");?>