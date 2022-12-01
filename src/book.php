<?php
session_start();
include 'tst.php'
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
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="Css/css.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    nav{
        background-color: #ddd;
    }
    .navbar-brand{
        font-family: "Lobster";
        color:#1F5662;
        font-weight: 700;
        font-size: 2.2em;
        margin-left: 80px;
    }
    .navbar-nav{
        margin-right: 20px;
        font-family: "sans-serif";
        font-size: 1.1em;
        font-weight: 600;
    }
</style>
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
$photo=$images['imgPath'];
//$photo="img/h3.jpg";
?>
<body>
<nav id="head" class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand t" href="index.php" style="font-size: 30px;color: #1F5662">Sakanat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll x" style="--bs-scroll-height: 100%;">
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="browse.php">Browser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="Contact-us.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="#about">About</a>
                </li>
                <li>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION["user_email"])){

                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle p-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu">
                                    <h5 style="text-align: center;color: #ecb920"><?=$_SESSION['user_full_name']?></h5>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i>
                                            Log out</a></li>

                                </ul>
                            </li>

                            <?php

                        }

                        else {?>
                            <li><a href="log_sign.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php } ?>
                    </ul>


                </li>
            </ul>

        </div>
    </div>
</nav>

<input type="hidden"id="p" value="    <?php echo"$price "?>">
<div id="booking" class="section">
    <img style="width: 300px;height: 300px;position: relative;top: 50px;left: 20px" src="<?php echo $photo ?>">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <form method="post">
                        <div class="row no-margin">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check In</span>
                                    <input class="form-control" type="date" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Book For (Month)</span>
                                    <input class="form-control" type="number" min="1" max="10" step="1" required
                                           onchange="document.getElementById('tst').innerHTML=this.value*document.getElementById('p').value">
                                </div>
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <span class="form-label">Total Price</span>
                                   <label id="tst" class="form-control" style="width: 100%">
                                  <?php echo"$price "?>
                                   </label>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <span class="form-label">Email</span>
                            <input class="form-control" type="email" value=<?=$_SESSION['user_email']?>>
                        </div>
                        <div class="form-group">
                            <span class="form-label">Message</span>
                            <input class="form-control" type="text" placeholder="Enter your description">
                        </div>
                        <div class="form-btn">
                            <input type="submit" class="btn btn-lg btn-primary" name="book_property" style="width: 100%" value="Book Now">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>