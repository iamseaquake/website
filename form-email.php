<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "info@krowdinnovation.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
  
<script type="text/javascript">
    alert("Message recieved!");
    window.location.href="contact.html";
    </script>
';


?>