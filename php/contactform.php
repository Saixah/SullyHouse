<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $mailfrom= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];
    
    $mailTo = "neneonesoto1@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    
    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.html?mailsend");
}