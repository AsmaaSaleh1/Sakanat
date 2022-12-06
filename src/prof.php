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
                    <h1>Mis/Mr.<span><?php echo $rows['fName']; ?></span></h1> <!--Name come from database-->
                </div>
                <div id="myModal" class="profile-info modal col-md-9">
                    <div class="panel">
                        <form method="post" action="p2.php">
                            <div class="bio-graph-heading">
                                I'm here because I'm the best and I want the best.
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1>Edit My Information</h1>
                                <div class="row">
                                    <div class="bio-row">
                                        <p><span>First Name </span>: <input name="fname" type="text" value="<?php echo $rows['fName']; ?>"></p><!--Name come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Last Name </span>: <input name="lname" type="text" value="<?php echo $rows['lName']; ?>"></p><!--Name come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>ID </span>: <input type="number" disabled value="<?php echo $rows['userId']; ?>"></p><!--ID come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Birthday</span>: <input name="bd" type="date" value="<?php echo $rows['bd']; ?>"></p><!--Birthdate come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>City </span>: <input name="city" type="text" value="<?php echo $rows['city']; ?>"></p><!--City come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Street </span>: <input name="street" type="text" value="<?php echo $rows['street']; ?>"></p><!--street come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Mobile </span>: <input name="mob" type="tel" value="<?php echo $rows['mobile']; ?>"></p><!--mobile come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Email </span>: <input name="email" type="email" disabled value="<?php echo $rows['Email']; ?>"></p><!--email come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Phone </span>: <input name="phone" type="tel"value="<?php echo $rows['phone']; ?>"></p><!--P.N come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <!--TODO: but limitation about number of char for example 200char-->
                                        <!--Description come from database-->
                                        <!--                            <p><span>Type </span>: <input type="radio" name="type"><label>Owner </label><input type="radio" name="type"><label>Tenant </label></p>-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Profile Picture </span>: <input type="file" id="img" name="img" accept="image/*"> </p>
                                    </div>
                                    <div class="butt">
                                        <div class="body-in">
                                            <div class="popup" id="popup-1">
                                                <div class="content">
                                                    <div class="close-btn" onclick="togglePopup()">×</div>
                                                    <h1 class="change">Change Password</h1>
                                                    <div class="input-field"><input placeholder="Old Password" class="validate"></div>
                                                    <div class="input-field"><input placeholder="New Password" class="validate"></div>
                                                    <div class="input-field"><input placeholder="Conform Password" class="validate"></div>
                                                    <button class="second-button">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                        <button onclick="togglePopup()" class="btn bio-row">Change Password</button>
                                        <script>
                                            function togglePopup() {
                                                document.getElementById("popup-1")
                                                    .classList.toggle("active");
                                            }
                                        </script>
                                    </div>
                                    <div class="butt">
                                        <button class="btn bio-row" type="submit" name="update">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                    <!--TODO: the number of Recent Activity is counter for user Sakanat-->
                    <li><a href="p3.php"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>
                    <li><a href="p2.php"> <i class="fa fa-edit" data-toggle="modal" data-target="#myModal"></i> Edit profile</a></li>
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
                        <div class="bio-row">
                            <p><span>Feedback </span>: <?php echo $rows['feedback']; ?></p><!--come from database-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>