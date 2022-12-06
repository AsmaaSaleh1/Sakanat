<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        aside{
            background-color: rgb(31, 86, 98);
            width: 250px;
            height: 100vh;
            padding: 30px;
            position: static;
        }

        form input{
            background-color: #1F5662;
        }
        aside input{
            margin: 20px 0;
        }
        .ser select{
            height: 50px;
            width: 200px;
            font-size: 20px;
        }
        button{
            background-color: transparent;
            border: none;
            position: relative;

        }
        i{
            color: #1F5662;
            font-size: 30px;
        }


        h2{
            color: white;
        }
        .x{
            width: 90%;
            /* right: 0; */
            position: relative;
            top FONT-WEIGHT: 100;
            /* top: -100px; */
            top: -550px;
            left: 100px;
        }
        a{
            text-decoration: none;
        }
        .search{
            top: -20px;
        }
        .card{
            max-height: 430px;
            min-height: 430px;

        }
        label{
            color: white;
        }
        .navbar{
            background-color: #ddd;
        }
        .navbar-brand{
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
            background-color: #eee;

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sakanat</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Css/all.min.css">
    <link rel="stylesheet" href="Css/test.css">

</head>

<body>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Header section -->
<nav id="head" class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: #1F5662;font-size: 25px">Sakanat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%;">
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="browse.php">Browser</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active p-lg-4" aria-current="page" href="Contact-us.html">Contact</a>
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

<div class="con">
    <!--            <select name="city" >-->
    <!--                <option name="nablus">Nablus</option>-->
    <!--                <option name="tk">Tulkarem</option>-->
    <!--                <option name="najah">ANNajah University</option>-->
    <!--                <option name="ram">Ramallah</option>-->
    <!--                <option name="jar">Jerusalem</option>-->
    <!--                <option name="qal">Qalqiliah</option>-->
    <!---->
    <!--            </select>-->

    <!--
              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>-->
    <aside>
    <form>
        <h5 style="margin: 0;padding: 0;color: white"><button type="reset"><i style="font-size: 18px;color: white" class="fa-solid fa-arrows-rotate"></i></button> Search Features</h5>
    <input type="checkbox" name="tv" id="tv">
    <label for="tv">TV</label> <br>
    <input type="checkbox" name="wifi" id="wifi">
    <label for="wifi">Wi-Fi</label> <br>
    <input type="checkbox" name="desk" id="desk">
    <label for="desk">Desk</label> <br>
    <input type="checkbox" name="frdg" id="frdg">
    <label for="frdg">Fridge</label> <br>

    </form>
    </aside
<nav class="navbar navbar-light bg search">
    <div class="container-fluid x" style="text-align: center">
        <form class="d-flex" style="width: 70%; margin-left: auto;margin-right: auto"action="search.php" method="post">
            <input class="form-control me-4 serinp" type="search" name="search_property" placeholder="Search" aria-label="Search">
            <button class="btn btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
</nav>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</body>
</html>

<?php

include("Home_list.php");

?>