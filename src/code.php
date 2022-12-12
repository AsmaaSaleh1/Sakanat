<?php
session_start();
require 'dbcon.php';

if(isset($_POST['accHome']))
{
    $home_id = mysqli_real_escape_string($con, $_POST['accHome']);

    $query = "UPDATE home set accepted='1' where hID='$home_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Home Accepted Successfully";
        header("Location: admin.php");
        exit(0);
    }

}
if(isset($_POST['delete_home'])){


    $home_id = mysqli_real_escape_string($con, $_POST['delete_home']);

    $query = "delete from home where hID='$home_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Home Accepted Successfully";
        header("Location: owner.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{

    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name =mysqli_real_escape_string($con, $_POST['hname']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $cont= mysqli_real_escape_string($con, $_POST['con']);
    $for=mysqli_real_escape_string($con, $_POST['for']);
    $desc=mysqli_real_escape_string($con, $_POST['desc']);
    $room=mysqli_real_escape_string($con, $_POST['total_rooms']);
    $ket=mysqli_real_escape_string($con, $_POST['kitchen']);
    $bath=mysqli_real_escape_string($con, $_POST['bathroom']);
   $loc= mysqli_real_escape_string($con, $_POST['location']);
    $query = "UPDATE `home` SET `hName`='$name',`city`='$city',`street`='$street',`description`='$desc',`contact`='$cont',`price`='$price',`numOfRoom`='$room',`numOfKitchen`='$ket',`numOfBath`='$bath',`Location`='$loc' WHERE hID='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Home Updated Successfully";
        header("Location: owner.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: admin.php");
        exit(0);
    }

}
if(isset($_POST['fb'])){
    $fb='';
    $user = mysqli_real_escape_string($con, $_POST['fb']);
echo $user;
    $query = "UPDATE `user` SET `feedback`='$fb' where userId='$user'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
//        $_SESSION['message'] = "Home Updated Successfully";
        header("Location: admin.php");
        exit(0);
    }

}

if(isset($_POST['addUser']))
{
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mob'];
    $passw=$_POST['pass'];
    $bd = $_POST['bd'];
    $img='img/'.$_POST['img'];
    $type=$_POST['type'];
    $sql = "INSERT INTO `user`(`fName`, `lName`, `Email`, `phone`, `password`, `type`,city,street,mobile,bd,photo) VALUES ('$fname','$lname','$email','$phone','$passw','$type','$city','$street','$mobile','$bd','$img')";

    $query_run = mysqli_query($con, $sql);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>