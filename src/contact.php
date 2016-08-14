<?php
   $from=$_POST['email'];
   $name=$_POST['name'];
   $phone=$_POST['phone']
   $to="2zc.apartment@gmail.com";
   $message="From: $name"."\n"."Email: $from"."\n".$_POST['phone']."\n\n".$_POST['message']."\n";

   mail($to, "No Subject", $message, "From:".$from);

   echo "Message Sent! Thank You!";
   echo "to: $to <br>";
   echo "from: $from <br>";
   echo "message: $message <br>";
?>