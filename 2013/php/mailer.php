<?php
if(isset($_POST['submit'])) {
  
  require_once('recaptchalib.php');

  $privatekey = "MY_PRIVATE_KEY"; // replace by a private recaptcha key
  $resp = recaptcha_check_answer ($privatekey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
  if ($resp->is_valid) {
    $to = "jsfernandes91@gmail.com";
 
    // data the visitor provided
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
    //constructing the message
    $body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
    // ...and away we go!
    mail($to, $subject, $body);
 
    // redirect to confirmation
    header('Location: ../mail_success.html');
  }
  else {
    header('Location: ../captcha_fail.html');
  }

} else {

  // handle the error somehow

}
?> 