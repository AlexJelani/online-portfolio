<?php
$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){
  // submit form 

  if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "jelanialexander82@gmail.com";
  $body = "";

  $body .= "From: ".$name. "\r\n";
  $body .= "Email: ".$email. "\r\n";
  $body .= "Subject: ".$subject. "\r\n";
  $body .= "Message: ".$message. "\r\n";


  // mail($to, $subject, $body);

  $message_sent = true;

  }
  
  

}




// $mailheader = "From:".$name."<".$email.">\r\n";


// $recipient = "jelanialexander82@gmail.com";

// $success = mail($recipient, $subject, $message, $mailheader);
// if(!$success) {
//   $errorMessage = error_get_last()['message'];
// }




echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/styles.css">
  <script src="https://kit.fontawesome.com/b3efaa88b1.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  
  <footer id="contact-me">
    <div class="container">
      <h1 class="contact">Thank you for contacting me. I will get back to you as soon as possible!</h1>
      <p class="back">Go back to the <a href="index.html">homepage</a>  </p>
      
    </div>
    <p>Contact me</p>
    <p>jelanialexander82@gmail.com</p>
  </footer>

</body>
</html>


';


?>