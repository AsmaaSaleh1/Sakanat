<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/profile.css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Css/all.min.css">
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class="card-body">
                        <div class="card-image">
                            <img src="img/userprofile.png" class="rounded-circle" width="200">
                            <h3>Mis.Asmaa</h3><!--user name from database-->
                        </div>
                        <div class="mt-3">
                            <button id="upload">Upload profile picture</button>
                            <button>User Information</button>
                            <button>Update account</button>
                            <button>Log out</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 contact" id="content">
                    <h1 class="m-3 pt-3">User Information</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Full Name</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                <!--name come from database-->
                                Asmaa Saleh
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Emile</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                <!--emile come from database-->
                                asmaatareq1999@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone Number</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                <!--Phone Number come from database-->
                                0592676710
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Birthdate</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                <!--Birthdate come from database-->
                                23/6/2002
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                                <!--Address come from database-->
                                Nablus
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>