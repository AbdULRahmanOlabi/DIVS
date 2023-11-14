<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $emailheader = "From:" .$name."<" .$email. ">\r\n";

  $recipient = "damasvschool@gmail.com";  //Company Email (That Will Recive The Mail)

  $body = $message." " ."\nThis Message Come From $email";
  
  $email_subject = "Damas International Virtual School";

  if (mail($recipient, $email_subject, $body, $emailheader)) {
    echo '<script>alert("Email Sent Successfully")</script>';
    header('Location: index-En.html');
  } 
  else{
    echo '<script>alert("Sorry, Failed While Sending Mail!")</script>';
  }
?>