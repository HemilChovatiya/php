<?php


if($_POST["message"]) {
echo $_POST["message"];

//mail("your@email.address", "Here is the subject line",
//$_POST["insert your message here"]. "From: an@email.address");
mail('hemilchovatiya4@gmail.com', 'Here is the subject line',$_POST["message"], 'From: hemilchovatiya4@gmail.com');


}


?>