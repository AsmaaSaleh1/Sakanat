<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/prof.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <img src="img/userprofile.png" alt="">
                    </a>
                    <h1>Mis.<span>Asmaa</span></h1> <!--Name come from database-->
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                    <!--TODO: the number of Recent Activity is counter for user Sakanat-->
                    <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>
                    <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
                </ul>
            </div>
        </div>
        <div class="profile-info col-md-9">
            <div class="panel">
                <div class="bio-graph-heading">
                    I'm here because I'm the best and I want the best.
                </div>
                <div class="panel-body bio-graph-info">
                    <h1>Bio Graph</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>First Name </span>: Asmaa</p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Last Name </span>: Saleh</p><!--Name come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>ID </span>: 12028417</p><!--ID come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Birthday</span>: 23 June 2002</p><!--Birthdate come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>City </span>: Nablus</p><!--City come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Street </span>: Amman Street</p><!--street come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: asmaatareq1999@gmail.com</p><!--email come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Mobile </span>: 0592676710</p><!--mobile come from database-->
                        </div>
                        <div class="bio-row">
                            <p><span>Phone </span>: 2321209</p><!--P.N come from database-->
                        </div>
                        <div class="bio-row">
                            <!--TODO: but limitation about number of char for example 200char-->
                            <!--Description come from database-->
                            <p><span>Description </span>: Description Description Description Description Description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>