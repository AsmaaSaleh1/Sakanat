<?php
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

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
<?php
global $d;
try {
    $db = new mysqli('localhost','root','','sakanatpro');

}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();

}
$email=$_SESSION['user_email'];
$property_id=$_GET['property_id'];
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
<input type="hidden"id="p" value="    <?php echo"$price "?>">
<div id="booking" class="section">
    <img style="width: 300px;height: 300px;position: relative;top: 50px;left: 20px" src="<?php echo $photo ?>">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <form>
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
                            <button class="submit-btn">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>