<?php
session_start();
include "connect.php";
$property_id=$_SESSION['user_email'];
$sql="SELECT * from user where Email='$property_id'";
$query=mysqli_query($db,$sql);
$rows=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="Css/p2.css">
    </head>
    <body>
        <div class="profile-info col-md-9">
            <div class="panel">
                <div class="bio-graph-heading">
                    I'm here because I'm the best and I want the best.
                </div>
                <div class="panel-body bio-graph-info">
                    <h1>Edit My Information</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>First Name </span>: <input type="text" value="<?php echo $rows['uName']; ?>"></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Last Name </span>: <input type="text"></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>ID </span>: <input type="number" disabled value="<?php echo $rows['userId']; ?>"></p><!--ID come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Birthday</span>: <input type="date" value="<?php echo $rows['bd']; ?>"></p><!--Birthdate come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>City </span>: <input type="text" value="<?php echo $rows['city']; ?>"></p><!--City come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Street </span>: <input type="text" value="<?php echo $rows['street']; ?>"></p><!--street come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Mobile </span>: <input type="tel" value="<?php echo $rows['phone']; ?>"></p><!--mobile come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: <input type="email" disabled value="<?php echo $rows['Email']; ?>"></p><!--email come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Phone </span>: <input type="tel"></p><!--P.N come from database-->
                        </div>
                        <div class="bio-row">
                            <!--TODO: but limitation about number of char for example 200char-->
                            <!--Description come from database-->
                            <p><span>Type </span>: <input type="radio" name="type"><label>Owner </label><input type="radio" name="type"><label>Tenant </label></p>
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
                            <button class="btn bio-row">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
