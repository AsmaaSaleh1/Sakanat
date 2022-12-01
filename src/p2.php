<?php
?>
<!DOCTYPE html>
<html lang="en">
<html>
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
                    <h1>My Information</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>First Name </span>: <input type="text"></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Last Name </span>: <input type="text"></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>ID </span>: <input type="number"></p><!--ID come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Birthday</span>: <input type="date"></p><!--Birthdate come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>City </span>: <input type="text"></p><!--City come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Street </span>: <input type="text"></p><!--street come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Mobile </span>: <input type="tel"></p><!--mobile come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: <input type="email"></p><!--email come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Phone </span>: <input type="tel"></p><!--P.N come from database-->
                        </div>
                        <div class="bio-row">
                            <!--TODO: but limitation about number of char for example 200char-->
                            <!--Description come from database-->
                            <p><span>Description </span>: <input type="text" maxlength="200"></p>
                        </div>
                        <div class="butt bio-row">
                            <button class="btn">Change Password</button>
                        </div>
                        <div class="butt bio-row">
                            <button class="btn">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
