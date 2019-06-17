<?php
//Load Variables...
$from_subject = 'Contact Form';
$from_email = $_POST['email'];
$from_name = $_POST['name'];
$from_message = $_POST['message'];
$from_phone = $_POST['phone'];

include 'email-template-to-host.php';
$to = 'michael@burtonsolution.com';

$header = 'From: Sophisticated Design Concepts<no-reply@sdc.com>' . "\r\n";
   //'Reply-To: ' . $email . "\r\n";
$header .= "Bcc: michael@burtonsolution.com" . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=UTF-8\nContent-Transfer-Encoding: 8bit\r\n";

if($_POST['submit_button'] == 'submitted'){
  //Send to Host...
  mail($to, $from_subject, $etemp, $header);
  
  $our_email = 'info@demolink.com';
  $our_phone = '(347) 319-3533';
  include 'email-template-to-visitor.php';
  $sub = 'Thank You!';
  //Send to Visitor...
  mail($from_email, $sub, $etemp, $header);
}



/*echo '<script>
        window.location = "../../index.php?contact=success";
      </script>';*/
?>