<?php
$to="ruchiihwebagrawal@gmail.com";
$subject="I am a test mail";
$message="Hello!This is a simple mail";
$from="ruchi2211agrawal@gmail.com";
$headers = "From : $from";

mail($to, $subject, $message, $headers);
echo="mil sent";

?>