<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "jdnahum@mail.com";
$subject = "Mail From Resin Realm";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com";
if($email!=NULL and $name!=NULL and $message!=NULL){
    mail($to,$subject,$txt,$headers);
    echo "Form submitted!";
} else {
    echo "Fill in all fields before submitting" ;
}
//redirect
//header("Location:thankyou.html");
?>