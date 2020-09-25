<?php 

add_action('rest_api_init', 'maniacRegisterNewMessage');

  // MAYBE
function maniacRegisterNewMessage(){
  register_rest_route('maniac/v1/', 'new-message', array(
    'methods' => 'POST',
    'callback' => 'message',
  ));
}

function test(){
  return 'thank you for trying to contact us.';
}

function message($data){
  $title = sanitize_text_field($data['title']);
  $phone = sanitize_text_field($data['phone']);
  $email = sanitize_text_field($data['email']);
  $explanation = sanitize_text_field($data['explanation']);
  $concept = sanitize_text_field($data['concept']);
  $covid = sanitize_text_field($data['covid']);
  
  wp_insert_post(array(
      'post_type' => 'contact',
      'post_status' => 'publish',
      'post_title' => $title,
      'post_content' => 'New Contact',
      'meta_input' => array(
        'phone_number' =>  $phone,
        'email' => $email,
        'explanation' => $explanation,
        'concept' => $concept,
        'covid' => $covid
      )
    ));

  $to = "Helvin@HelvinRymer.com"; // this is your Email address
  $from = $email; // this is the sender's Email address
  $subject = "Form submission";
  $subject2 = "Thank you!";
  $message = "$name sent the following details:
  Email: $email
  Phone: $phone
  Comments: $concept";

  $message2 = "Thank you for your email. I'll be in touch as soon as possible."
  ."\n"."
  Melii
  ManiacInk.com
  Melii@ManiacInk.com";

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;

  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}

function newMessage(){
    // wp_insert_post(array(
    //   'post_type' => 'contact',
    //   'post_status' => 'publish',
    //   'post_title' => 'New Contact',
    //   'post_content' => 'Hi'
    // ));


  // $name = $_POST['name'];
  // $lastname = $_POST['lastname'];
  // $phone = $_POST['pNumber'];
  // $email = $_POST['email'];
  // $comment = $_POST['comments'];

  $to = "Helvin@HelvinRymer.com"; // this is your Email address
  $from = $email; // this is the sender's Email address
  $subject = "Form submission";
  $subject2 = "Thank you!";
  $message = "$name sent the following details:
  Email: $email
  Phone: $phone
  Comments: $comment";

  $message2 = "Thank you for your email. I'll be in touch as soon as possible."
  ."\n"."
  Melii
  ManiacInk.com
  Melii@ManiacInk.com";

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;

  mail($to,$subject,$message,$headers);
  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

  // header('location:index.php');
  }