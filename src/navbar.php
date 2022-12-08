<?php
session_start();
if(isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'owner')
        $src = "owner.php";
    if ($_SESSION['type'] == 'user')
        $src = "browse.php";
    if ($_SESSION['type'] == 'admin')
        $src = "admin.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sakanat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Css/all.min.css"> </head>
<style>
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Times New Roman', 'Times','serif';

    }
    .nb {
        background-color: #f0f0f0;
        padding: 0;
        height: 72px;
    }
    body{
        font-family: 'Times New Roman', 'Times','serif';
    }
    .nvb{
        font-family: "Lobster";
        color:#1F5662;
        font-weight: 700;
        font-size: 2.2em;
        margin-left: 80px;
    }
    .navbar-nav{
        margin-right: 20px;
        font-family: "sans-serif";
        font-size: 1.1em;
        font-weight: 600;
    }
    .navbar-nav .nav-item .nav-link{
        width: 116px;
        height: 70px;
        overflow: hidden;
        position: relative;
        text-align: center;
    }
    .navbar-nav .nav-item .nav-link::before{
        content: '';
        background-color: #1F5662;
        width: 100%;
        height: 4px;
        transition: 0.25s;
        position: absolute;
        top: 0;
        left: -100%;
    }
    .navbar-nav .nav-item .nav-link:hover{
        color:#1F5662;
        background-color: #fff;

    }
    navbar-nav .nav-item .nav-link{
        padding-top: 100px ;
    }
    .navbar-nav .nav-item .nav-link:hover::before{
        left: 0;

    }
    .navbar .navbar-toggler{
        font-size: 25px;
    }
</style>
<body>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Header section -->
<nav id="head" class="navbar nb navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a style="color: #1F5662;font-size: 28px" class="navbar-brand nvb" href="index.php">Sakanat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%;">
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link active p-lg-4" aria-current="page" href="<?php echo $src?>">Browser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="#about">About</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION["user_email"])){

                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle p-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <h5 style="text-align: center;color: #ecb920"><?=$_SESSION['user_full_name']?></h5>
                            <li><a class="dropdown-item" href="prof.php">Profile</a></li>
                            <li><a class="dropdown-item" href="log_out.php"><i class="fa-solid fa-right-from-bracket"></i>
                                    Log out</a></li>

                        </ul>
                    </li>

                    <?php

                }

                else {?>
                    <li><a href="log_sign.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php } ?>
            </ul>

        </div>
    </div>
</nav>
</body>
</html>