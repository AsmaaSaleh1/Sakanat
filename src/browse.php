<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

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
        .navbar-brand{
            color: #1F5662;
            font-size: 22px;
        }


    </style>
</head>

<body>

<!-- Header section -->

<div class="con">

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
<script>
    function myFunction2() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput2");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable2");
        tr = table.getElementsByTagName("tr");
        th = table.getElementsByTagName("th");
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            for(var j=0; j<th.length; j++){
                td = tr[i].getElementsByTagName("td")[j];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1)
                    {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
</script>
<?php
include("Home_list.php");

?>