<?php

$message_sent = false;

if(isset($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //submit form
        $username = $_POST['name'];
        $useremail = $_POST['email'];
        $message = $_POST['message'];

        $to = "swagatika2000p@gmail.com";
        $body = "";
        $body = "From: ".$username. "\r\n";
        $body = "Email: ".$useremail. "\r\n";
        $body = "Message: ".$message "\r\n";

        //mail($to,$subject,$body);

        $message_sent = true;
    }   
}

?>