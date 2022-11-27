<?php
include "nav.php"
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
            background-color: rgb(31, 86, 98,0.5);
            width: 250px;
            height: 600px;
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
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sakanat</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/test.css">

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Css/all.min.css"> </head>

<body>
<!-- Header section -->


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
        <h5 style="margin: 0;padding: 0"><button type="reset"><i style="font-size: 18px" class="fa-solid fa-arrows-rotate"></i></button> Search Features</h5>
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
        <form class="d-flex" style="width: 70%; margin-left: auto;margin-right: auto">
            <input class="form-control me-4 serinp" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
</nav>

</div>


</body>
</html>

<?php

include("Home_list.php");

?>