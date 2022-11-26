<?php
if(isset($_POST["message"]) and isset($_POST["name"]) and isset($_POST["email"])) {
    $receiver = "rubaqawareeq2@gmail.com";
    $body = $_POST["message"];
    $name = $_POST["name"];
    $subject = "Message From: " . $name;
    $email = $_POST["email"];
    $sender = "email address:" . $email;
    if (mail($receiver, $subject, $body, $sender)) {

              header("location:Contact-us.html");
        echo "<script> alert('Message sent successfully')</script>";
    } else {
        echo "<script> alert('Message sent successfully')</script>";
    }
}
else{
    echo "<script> alert('There is an empty field')</script>";
}
?>

