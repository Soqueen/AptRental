<?php
   $from=$_POST['email'];
   $name=$_POST['name'];
   $to="sokhenglim973@gmail.com";
   $message="From: $name"."\n"."Email: $from"."\n\n".$_POST['message']."\n";

   mail($to, "No Subject", $message, "From:".$from);

   // echo "Message Sent! Thank You!";
   // echo "to: $to <br>";
   // echo "from: $from <br>";
   // echo "message: $message <br>";
?>