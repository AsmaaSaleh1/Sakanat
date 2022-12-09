<?php include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Css/all.min.css"> </head>    <title>Notification System - Pure Coding</title>
    <style>

        .navbar ul {
            list-style: none;
        }

        .navbar > ul > li {
            position: relative;
            display: inline-block;
        }

        .navbar > ul > li .dropdown-check {
            display: none;
        }

        .navbar > ul > li > a {
            color: #fff;
            font-size: 1.5rem;
            padding: 1rem 0;
            display: inline-block;
            cursor: pointer;
        }

        .navbar > ul > li > a .count {
            position: absolute;
            right: -1px;
            top: 14px;
            border-radius: 50%;
            font-size: 0.8rem;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            color: #0066ff;
            width: 12px;
            height: 12px;
        }

        .navbar > ul > li .dropdown-check:checked ~ .dropdown {
            visibility: visible;
            opacity: 1;
        }

        .navbar ul li .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 1rem;
            visibility: hidden;
            opacity: 0;
            width: 250px;
            transition: 0.3s;
        }

        .navbar ul li .dropdown li {
            margin-bottom: 1rem;
            border-bottom: 1px solid #ccc;
            padding-bottom: 1rem;
        }

        .navbar ul li .dropdown li:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: 0;
        }
    </style>
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
    .navbar > ul > li > a .count {
        position: absolute;
        right: -1px;
        top: 14px;
        border-radius: 50%;
        font-size: 0.8rem;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        color: #0066ff;
        width: 12px;
        height: 12px;
    }

    .navbar > ul > li .dropdown-check:checked ~ .dropdown {
        visibility: visible;
        opacity: 1;
    }

    .navbar ul li .dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 1rem;
        visibility: hidden;
        opacity: 0;
        width: 250px;
        transition: 0.3s;
    }

    .navbar ul li .dropdown li {
        margin-bottom: 1rem;
        border-bottom: 1px solid #ccc;
        padding-bottom: 1rem;
    }

    .navbar ul li .dropdown li:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: 0;
    }
</style>

</head>

<body>
<script src="js/bootstrap.bundle.min.js"></script>

<nav class="navbar" style="background-color: #ddd">

    <ul>
        <li>
            <?php $sql = "SELECT * FROM inf WHERE active='0' ORDER BY n_id DESC";
            $res = mysqli_query($db, $sql); ?>
            <a href="#" id="notifications">
                <label for="check">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <span class="count"><?php echo mysqli_num_rows($res); ?></span>
                </label>
            </a>
            <input type="checkbox" class="dropdown-check" id="check" />
            <ul class="dropdown">
                <?php
                if (mysqli_num_rows($res) > 0) {
                    foreach ($res as $item) {
                        ?>
                        <li><?php echo $item["message"]; ?></li>
                    <?php }
                } ?>
            </ul>
        </li>
    </ul>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#notifications").on("click", function() {
            $.ajax({
                url: "readNotifications.php",
                success: function(res) {
                    console.log(res);
                }
            });
        });
    });
</script>
</body>

</html>