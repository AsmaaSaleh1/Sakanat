<?php
include 'navbar.php';

include 'tst.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">

    <title>Booking</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="Css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="Css/css.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
global $d;
try {
    $db = new mysqli('localhost','root','','sakanatpro');

}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();

}
$email=$_SESSION['user_email'];
$property_id=$_SESSION['pid'];
$sql="SELECT * from Home where hID='$property_id'";
$query=mysqli_query($db,$sql);
$rows=$query->fetch_array();
$price=$rows['price'];


$sql2="SELECT * FROM Home_img where hID='$property_id'";
$query2=mysqli_query($db,$sql2);
$images=$query2->fetch_array();
$row=mysqli_fetch_array($query2);
if($images)
$photo=$images['imgPath'];
?>
<body>
<style>
    body{
        background-image:url("img/welcome.svg"),linear-gradient(45deg,#c49f72,#c49f72,#1F5662);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
    .box {
        position: relative;
        width: 100%;
        max-width: 1020px;
        height: 500px;
        background-color: rgb(255,255,255,0.6);
        border-radius: 25px;
        box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
        overflow: hidden;
        top: 30px;
        margin-left: auto;
        margin-right: auto;
    }
    .box img{
        opacity: 0.2;
        object-fit: cover;
    }

</style>

<input type="hidden"id="p" value="    <?php echo"$price "?>">
<div id="booking" class="section">
    <div class="box">
        <div class="section-center">
            <h3 style="text-align: center;font-weight: bold; margin-bottom: 30px">Book Now!!!</h3>
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <form method="post">
                            <div class="row no-margin">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label" >Check In</span>
                                        <input name="date" class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Book For (Month)</span>
                                        <input name="dur" style="color: #1F5662" class="form-control" type="number" min="1" max="10" step="1" required
                                               onchange="document.getElementById('tst').innerHTML=this.value*document.getElementById('p').value">
                                    </div>
                                </div>
                            </div>
                            <div class="row no-margin">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <span class="form-label">Total Price</span>
                                       <label id="tst" class="form-control" style="width: 100%;color: #1f5662">
                                      <?php echo"$price "?>
                                       </label>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" style="color: #1F5662" type="email" value=<?=$_SESSION['user_email']?>>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Message</span>
                                <input name="msg" class="form-control" style="color: #1F5662" type="text" placeholder="Enter your description">
                            </div>
                            <div class="form-btn">
                                <input type="submit" class="btn btn-lg btn-primary" name="book_property" style="width: 100% ;background-color: #1f5662" value="Book Now">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>