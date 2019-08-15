<?php
//Settings...
$facebook_link = '';
$instagram_link = 'https://www.instagram.com/2plantastic/?hl=en';
$twitter_link = '';

if($_GET['contact'] == 'success'){
  $send_btn = 'Message Sent!';
}else{
  $send_btn = 'SEND';
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Sophisticated Decorating Concepts</title>
    <?php include 'global/sections/head.php'; ?>
  </head>
  <body>
    <?php include 'global/sections/ie.php'; ?>
    <?php include 'global/sections/pre-loader.php'; ?>
    
    <div class="page">
      <!-- Page Header-->
      <?php include 'global/sections/nav.php'; ?>
      
      <!-- Swiper-->
      <?php include 'home/sections/hero.php'; ?>
      
      <!-- About Us -->
      <?php include 'home/sections/about.php'; ?>
      
      <!-- Service-->
      <?php include 'home/sections/services.php'; ?>
      
      <!-- Plan the Event in 4-steps-->
      <?php include 'home/sections/plan.php'; ?>
      
      <!--	Portfolio-->
      <?php include 'home/sections/portfolio.php'; ?>
      
      <!-- Testimonials-->
      <?php include 'home/sections/testimonials.php'; ?>
      
      <!-- Event Plans-->
      <?php //include 'home/sections/pricing.php'; ?>
      
      <!-- Our Blog-->
      <?php //include 'home/sections/blog.php'; ?>
      
      <!--	Vendors -->
      <?php //include 'home/sections/vendors.php'; ?>
      
      <!--Call To Action-->
      <?php include 'home/sections/call-to-action.php'; ?>
      
      <!--Contact-->
      <?php include 'home/sections/contact.php'; ?>
      
      <!-- Page Footer-->
      <?php include 'global/sections/footer.php'; ?>
      
    </div>
      <?php include 'global/sections/includes.php'; ?>
    
    <?php
    if($_GET['contact'] == 'success'){
      echo '<script>
              document.getElementById("contact-form-btn").click();
            </script>';
    }
    ?>
  </body>
</html>