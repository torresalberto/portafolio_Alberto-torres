<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
      
    // Set your email address where you want to receive emails. 
    $to = 'alberto.torres@1inkea.com';
      
    $subject = 'Contacto desde tu POrtafolio';
    $headers = "De: ".$name." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>