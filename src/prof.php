<?php
$db='';
include "connect.php";
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/prof.css">

    <style>

</style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Header section -->
<div class="container bootstrap snippets bootdey">
    <?php
    $property_id=$_SESSION['user_email'];
    $sql="SELECT * from user where Email='$property_id'";
    $query=mysqli_query($db,$sql);
    $rows=mysqli_fetch_assoc($query);
    ?>
    <div class="row">
        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <?php
                        if($rows['photo']==NULL){
                        ?>
                        <img src="img/userprofile.png" alt="">
                            <?php }
                       else
                        ?>
                        <img src="<?php echo $rows['photo']; ?>" alt="">
                    </a>
                    <h1>Mis.<span>Asmaa</span></h1> <!--Name come from database-->
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                    <!--TODO: the number of Recent Activity is counter for user Sakanat-->
                    <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>
                    <li><a href="p2.php"> <i class="fa fa-edit"></i> Edit profile</a></li>
                </ul>
            </div>
        </div>

        <div class="profile-info col-md-9">
            <div class="panel">
                <div class="bio-graph-heading">
                    I'm here because I'm the best and I want the best.
                </div>
                <div class="panel-body bio-graph-info">
                    <h1>My Information</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>First Name </span>: <?php echo $rows['fName']; ?></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Last Name </span>: <?php echo $rows['lName']; ?></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>ID </span>: <?php echo $rows['userId']; ?></p><!--ID come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Birthday</span>: <?php echo $rows['bd']; ?></p><!--Birthdate come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>City </span>: <?php echo $rows['city']; ?></p><!--City come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Street </span>: <?php echo $rows['street']; ?></p><!--street come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Mobile </span>: <?php echo $rows['mobile']; ?></p><!--mobile come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: <?php echo $rows['Email']; ?></p><!--email come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Phone </span>: <?php echo $rows['phone']; ?></p><!--P.N come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Type </span>: <?php echo $rows['type']; ?></p><!--come from database-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>