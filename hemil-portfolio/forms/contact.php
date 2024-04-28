<?php
if(isset($_POST["SubmitBtn"])){

$to = "hemilchovatiya4@gmail.com";
$subject = "Contact mail";
$from=$_POST["email"];
$msg=$_POST["message"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>