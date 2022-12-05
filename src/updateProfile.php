<?php
session_start();

include "connect.php";
if(isset($_POST['update'])){
    $email=$_SESSION['user_email'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $street=$_POST['street'];
    $phone=$_POST['phone'];
    $mobile=$_POST['mob'];
    $img="img/".$_POST['img'];
$bd=$_POST['bd'];
    $stmt = "UPDATE `user` SET `fName`='$fname',`phone`='$phone',`photo`='$img',`city`='$city',`street`='$street',`bd`='$bd',`lName`='$lname',`feedbach`='[value-12]',`mobile`='$mobile'WHERE Email='$email'";
    $query=mysqli_query($db,$stmt);
    echo 'doneeee';

}


?>