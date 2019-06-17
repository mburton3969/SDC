<?php
//Settings...
$facebook_link = '';
$instagram_link = '';
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
    <? include 'global/sections/head.php'; ?>
  </head>
  <body>
    <? include 'global/sections/ie.php'; ?>
    <? include 'global/sections/pre-loader.php'; ?>
    
    <div class="page">
      <!-- Page Header-->
      <? include 'global/sections/nav.php'; ?>
      
      <!-- Swiper-->
      <? include 'home/sections/hero.php'; ?>
      
      <!-- About Us -->
      <? include 'home/sections/about.php'; ?>
      
      <!-- Service-->
      <? include 'home/sections/services.php'; ?>
      
      <!--	Portfolio-->
      <? include 'home/sections/portfolio.php'; ?>
      
      <!-- Plan the Event in 4-steps-->
      <? //include 'home/sections/plan.php'; ?>
      
      <!-- Testimonials-->
      <? include 'home/sections/testimonials.php'; ?>
      
      <!-- Event Plans-->
      <? //include 'home/sections/pricing.php'; ?>
      
      <!-- Our Blog-->
      <? //include 'home/sections/blog.php'; ?>
      
      <!--	Vendors -->
      <? //include 'home/sections/vendors.php'; ?>
      
      <!--Call To Action-->
      <? include 'home/sections/call-to-action.php'; ?>
      
      <!--Contact-->
      <? include 'home/sections/contact.php'; ?>
      
      <!-- Page Footer-->
      <? include 'global/sections/footer.php'; ?>
      
    </div>
      <? include 'global/sections/includes.php'; ?>
    
    <?
    if($_GET['contact'] == 'success'){
      echo '<script>
              document.getElementById("contact-form-btn").click();
            </script>';
    }
    ?>
  </body>
</html>