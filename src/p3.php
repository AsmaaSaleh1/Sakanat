<?php
session_start();
include 'connect.php';
$property_id=$_SESSION['user_email'];
$sql="SELECT * from user where Email='$property_id'";
$query=mysqli_query($db,$sql);
$rows=mysqli_fetch_assoc($query);

$user=$rows['userId'];

$sql2 = "SELECT * FROM booking where userId='$user'";
$query2 = mysqli_query($db, $sql2);
echo mysqli_num_rows($query2);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/p3.css">
</head>
<body>
<div class="profile-info col-md-9">
    <div class="panel">
        <div class="bio-graph-heading">
            I'm here because I'm the best and I want the best.
        </div>
        <div class="panel-body bio-graph-info">
            <h1>Recent Activity</h1>
            <div class="blog-card">
                <div class="inner-part">
                    <label for="imgTap" class="img">
                        <img class="img-1" src="img/s.png">
                    </label>
                    <div class="content">
                        <div class="title">
                            Name Of Apartment
                        </div>
                        <div class="text">
                            <p>
                                Here I place the description of the apartment, we take the description of the database.
                            </p>
                        </div>
                        <button>For More Information >>></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

