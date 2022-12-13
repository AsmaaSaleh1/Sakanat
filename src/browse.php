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
            border: 5px double #f0f0f0;
            margin: 20px;
            border-radius: 20px;
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
input{
    width: 30px;
}

    </style>
    <!-- For number of room -->
    <style>
        .containerx{
            position: relative;
            width: 80px;
            height: 50px;
            border-radius: 40px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: 0.5s;
        }
        .containerx:hover{
            width: 120px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0px 0px 14px #00deff;
        }
        .containerx .next{
            position: absolute;
            top: 50%;
            right: 30px;
            display: block;
            width: 12px;
            height: 12px;
            border-top: 2px solid #fff;
            border-left: 2px solid #fff;
            z-index: 1;
            transform: translateY(-50%) rotate(135deg);
            cursor: pointer;
            opacity: 0;
            transition: 0.5s;
        }
        .containerx:hover .next{
            opacity: 1;
            right: 20px;
        }
        .containerx .prev{
            position: absolute;
            top: 50%;
            left: 20px;
            display: block;
            width: 12px;
            height: 12px;
            border-top: 2px solid #fff;
            border-left: 2px solid #fff;
            z-index: 1;
            transform: translateY(-50%) rotate(315deg);
            cursor: pointer;
            opacity: 0;
            transition: 0.5s;
        }
        .containerx:hover .prev{
            opacity: 1;
            right: -20px;
        }
        #box span{
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 46px;
            display: none;
            color: #f0f0f0;
            font-size: 24px;
            font-weight: 700;
            user-select: none;
        }

        /* js code */

        #box span:nth-child(1){
            display: inline;
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
<br>
        <label>Number of Room</label>
        <br>
        <div class="containerx">
            <span class="next" onclick="nextNum()"></span>
            <span class="prev" onclick="prevNum()"></span>
            <div id="box"></div>
        </div>
        <br>
        <script>
            var numbers = document.getElementById('box');
            for(i=0; i<100; i++){
                var span = document.createElement('span')
                span.textContent = i;
                numbers.appendChild(span);
            }
            var num = numbers.getElementsByTagName('span');
            var index = 0;

            function nextNum(){
                num[index].style.display = "none";
                index = (index + 1) % num.length;
                num[index].style.display = "initial";
            }
            function prevNum(){
                num[index].style.display = "none";
                index = (index - 1 + num.length) % num.length;
                num[index].style.display = "initial";
            }
        </script>
        <label>Home for: </label>
        <br>
        <input type="radio" name="gender" value="male"><span style="font-size: 20px;font-weight: 600">Male</span>
        <input type="radio" name="gender"value="female"><span style="font-size: 20px;font-weight: 600">Female</span>

<button type="submit"style="left: 80px">Search</button>
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