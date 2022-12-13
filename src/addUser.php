<?php
;
?>
<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/prof.css">
    <link rel="stylesheet" href="Css/p2.css">
<link rel="stylesheet" href="Css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
   <style>
    .profile-info{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    }
    button{
        position: relative;
        left: 70%;
    }
   </style>
</head>
    <form action="code.php" method="post">
        <div class="profile-info col-md-9">
            <div class="panel">

                <div class="bio-graph-heading">
                    I'm here because I'm the best and I want the best.
                </div>
                <div class="panel-body bio-graph-info">
                    <h1>Add New User</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>First Name </span>: <input name="fname" type="text" ></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Last Name </span>: <input name="lname" type="text"></p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>City </span>: <input name="city" type="text" "></p><!--City come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Street </span>: <input name="street" type="text" </p><!--street come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Mobile </span>: <input name="mob" type="tel" ></p><!--mobile come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: <input name="email" type="email" ></p><!--email come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Phone </span>: <input name="phone" type="tel"></p><!--P.N come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Password </span>: <input name="pass" type="password"></p><!--P.N come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Birthday</span>: <input name="bd" type="date" ></p><!--Birthdate come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Profile Picture </span>: <input type="file" id="img" name="img" accept="image/*"> </p>
                        </div>
                        <div class="bio-row" style="position: relative; top: -10px;" >
                            <input id="u" type="radio" name="type" value="Tenant">
                            <h4 style="display: inline-block;padding-right: 30px;font-size: 18px">Tenant </h4>

                            <input id="o" type="radio" name="type" value="Owner">
                            <h4 style="display: inline-block;font-size: 18px"> Owner</h4>
                        </div>
                        <div class="bio-row">
                            <button class="btn" type="submit" name="addUser" style="position: absolute;margin-right: auto">Add</button>
                        </div>
                        <div class="bio-row">
                            <a href="admin.php"> <i style="color: #1F5662;font-size: 32px" class="fa-solid fa-left-long"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
