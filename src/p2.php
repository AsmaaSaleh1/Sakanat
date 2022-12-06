<?php
include "navbar.php";

include "connect.php";
$property_id=$_SESSION['user_email'];
$sql="SELECT * from user where Email='$property_id'";
$query=mysqli_query($db,$sql);
$rows=mysqli_fetch_assoc($query);


include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="Css/p2.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
<style>
    .navbar-brand{
        font-family: "Lobster";

    }
</style>
</head>
    <body>

    <form action="prof.php" method="post">
        <div class="profile-info col-md-9">
            <div class="panel">

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
                            <p><span>Feedback </span>: <input name="fb" type="text"value="<?php echo $rows['feedback']; ?>"></p><!--P.N come from database-->
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
                                        <div class="input-field"><input name="prePass" placeholder="Old Password" class="validate"></div>
                                        <div class="input-field"><input name="newPass" placeholder="New Password" class="validate"></div>
                                        <div class="input-field"><input name="confPass" placeholder="Conform Password" class="validate"></div>
                                        <button name="savePass" class="second-button">Save</button>
                                    </div>
                                </div>
                            </div>
                            <a style="text-align: center" onclick="togglePopup()" class="btn bio-row">Change Password</a>
                            <script>
                                function togglePopup() {
                                    document.getElementById("popup-1")
                                        .classList.toggle("active");
                                }
                            </script>
                            <button class="btn bio-row" type="submit" name="update">Update</button>

                        </div>
                        <div class="butt">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    </body>
</html>
