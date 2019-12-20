<?php 
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);
echo "<p>Votre Email :   $email </p>";
echo "<p>Votre message :   $message</p>";
?>