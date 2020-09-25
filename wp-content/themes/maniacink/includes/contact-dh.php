<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['explanation'];

//send email
    mail("email@helvinrymer.com", "This is an email from:" .$email, $message);
