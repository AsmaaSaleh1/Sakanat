<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .d{
            background-color: rgb(31, 86, 98);
            width: 250px;
            height: 100vh;
            padding: 30px;
            position: static;
            border: 5px double #f0f0f0;
            /*margin: 20px;*/
            border-radius: 20px;
            position: relative;
            left: -85px;
            top: 20px;
        }
        .house{
            padding: 10px;
        }

        form input{
            background-color: #1F5662;
        }
        .d input{
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
    <style>
        .pic{
            text-align: center;
            /*to scale the picture*/
        }
        .info{
            text-align: center;
        }
        .pic-card{
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .size-img-card{
            height: 160px;
            width: 200px;
        }
        .info h3{
            color: var(--main-clr2);
            font-size: 1.2em;
            font-weight: 700;
            margin: 10px;
        }
        section{
            padding: 30px 120px;
        }
        .pic{
            position: relative;
            overflow: hidden;
        }
        .pic img{
            width: 250px;
            height: 220px;
            transition: 0.3s;
        }
        .pic::before{
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            opacity: 0;
            background-color: rgb(255 255 255 /20%);
            z-index: 2;
        }
        .pic:hover::before{
            animation: animat 0.7s;
        }
        .pic:hover img{
            transform: rotate(5deg) scale(0.95);
        }
        .info p{
            color: black;
        }
        .pic{
            position: relative;
            overflow: hidden;
        }
        .pic img{
            width: 250px;
            height: 220px;
            transition: 0.3s;
        }
        .pic::before{
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            opacity: 0;
            background-color: rgb(255 255 255 /20%);
            z-index: 2;
        }
        .pic:hover::before{
            animation: animat 0.7s;
        }
        .pic:hover img{
            transform: rotate(5deg) scale(0.95);
        }
        @keyframes animat{
            0%,40%{
                opacity: 1;
            }
            100%{
                opacity: 0;
                width: 200%;
                height: 200%;
            }

        }
        .info h3{
            color: #1F5662;
            left: 0;
            width: 100%;
            position: relative;
        }
        .pic{
            position: relative;
            overflow: hidden;
        }
        .pic img{
            width: 250px;
            height: 220px;
            transition: 0.3s;
            padding: 10px;

        }
        .pic::before{
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            opacity: 0;
            background-color: rgb(255 255 255 /20%);
            z-index: 2;

        }
        .pic:hover::before{
            animation: animat 0.7s;
        }
        .pic:hover img{
            transform: rotate(5deg) scale(0.95);
        }
        @keyframes animat{
            0%,40%{
                opacity: 1;
            }
            100%{
                opacity: 0;
                width: 200%;
                height: 200%;
            }

        }
        .info h3{
            color: #1F5662;
            left: 0;
            width: 100%;
            position: relative;
        }
        h2.title{
            color: black;

        }
        h2.line{
            margin-bottom: 20px;
        }
        h3 i{
            position: absolute;
            right: 40px;
            cursor: pointer;
            animation: arrow 0.5s linear infinite;
            color: #fcb900;
        }
        /*
         arrow read more*/
        @keyframes arrow{
            100%{
                transform: translateX(10px);
            }
        }
        .house:hover:not(.img){
            transform: translateY(-10px);
            box-shadow: 0 35px 80px rgba(0,0,0,0.15);
        }
        .card,{
            background-color: #ffffff;
            width: 220px;
            box-shadow: 0 5px 25px RGBA(1 1 1 /15%);
            border-radius: 10px;
            padding: 10px;
            margin: 1%;
            transition: 0.7s ease;
        }
        .card:hover{
            transform: scale(1.1);
        }
        .pic{
            text-align: center;
            /*to scale the picture*/
        }
        .info{
            text-align: center;
        }
        .pic-card{
            text-align: center;
            position: relative;
            overflow: hidden;
        }
    </style>
</head>
<body>
<div class="container justify-content-between d-flex">
    <div class="d-flex col-6 d">
        <form method="post" action="nav.php">
            <h5 style="margin: 0;padding: 0;color: white"><button type="reset"><i style="font-size: 18px;color: white" class="fa-solid fa-arrows-rotate"></i></button> Search Features</h5>
            <input type="checkbox" name="TV" value="1" id="tv">
            <label for="tv">TV</label> <br>
            <input type="checkbox" value="2" name="WiFi" id="wifi">
            <label for="wifi">Wi-Fi</label> <br>
            <input type="checkbox" name="Desk" id="desk">
            <label for="desk">Desk</label> <br>
            <input type="checkbox" value="3" name="Fridge" id="frdg">
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
            <input type="radio" name="gender"value="Women"><span style="font-size: 20px;font-weight: 600">Female</span>

            <button name="sr" type="submit"style="left: 80px">Search</button>
        </form >


    </div>
    <div class="col-10">

        <div class="col-md-12">
            <div class="mt-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="input-group mb-5">
                                    <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                    <button style="background-color: #1F5662;color: white" type="submit" class="btn">Search</button>
                                </div>
                            </form>

                        </div>

                        <div class="container py-5">
                            <div class="row">
                                <div class="row mt-4">
                                    <?php
                                    include 'connect.php';
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM home WHERE CONCAT(hID,hName,city,street,contact,description,gender,numOfRoom,Area) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($db, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            $i=0;
                                            foreach($query_run as $items){
                                                $home=$items['hID'];

                                                ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="card">
                                                        <div class="pic">
                                                            <!--picture-->
                                                            <?php
                                                            $sql2="SELECT * FROM home_img where HID='$home'";
                                                            $query2=mysqli_query($db,$sql2);

                                                            if(mysqli_num_rows($query2)>0)
                                                            {
                                                                $row=mysqli_fetch_assoc($query2);
                                                                $photo=$row['imgPath'];
//                $photo=$rows['photo'];
                                                                echo  '<img class="image" src="'.$photo.'">'; }?>

                                                        </div>

                                                        <div class="card-body">
                                                            <!-- title + information-->
                                                            <h3><?php echo $items['hName']?></h3>
                                                            <p><?php echo $items['description']?> </p>
                                                            <button type="submit" style="font-size: 20px;top: -18px" name="book"><h3><?php echo '<a style="text-decoration:none" href="viewHome.php?property_id='.$items['hID'].'"  class="" >Read more <i style="position:relative; left: 30px" class="fa-solid fa-angles-right"></i> </a></h3><br>'; ?></button><br>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }


                                    if (isset($_POST['sr'])) {
                                        $tv="";
                                        $wf="";
                                        $desk="";
                                        $frdg="";
                                        $gen="";
                                        if(isset($_POST['TV']))
                                            $tv=$_POST['TV'];
                                        if(isset($_POST['WiFi']))
                                            $tv=$_POST['WiFi'];
                                        if(isset($_POST['Fridge']))
                                            $tv=$_POST['Fridge'];
                                        if(isset($_POST['Desk']))
                                            $tv=$_POST['Desk'];
                                        if(isset($_POST['gender']))
                                            $gen=$_POST['gender'];
                                        $filtervalues =$tv.$wf.$desk.$frdg.$gen;

                                        $query = "SELECT name, homefeatures.hID,home.hName,home.description from homefeatures JOIN features ON features.fID=homefeatures.fID JOIN home on home.hID=homefeatures.hID  where CONCAT (homefeatures.fID, home.gender)LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($db, $query);
                                        if (mysqli_num_rows($query_run) > 0) {

                                            foreach ($query_run as $items) {
                                                $home = $items['hID'];

                                                ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="card">
                                                        <div class="pic">
                                                            <!--picture-->
                                                            <?php
                                                            $sql2="SELECT * FROM home_img where HID='$home'";
                                                            $query2=mysqli_query($db,$sql2);

                                                            if(mysqli_num_rows($query2)>0)
                                                            {
                                                                $row=mysqli_fetch_assoc($query2);
                                                                $photo=$row['imgPath'];
//                $photo=$rows['photo'];
                                                                echo  '<img class="image" src="'.$photo.'">'; }?>

                                                        </div>

                                                        <div class="card-body">
                                                            <!-- title + information-->
                                                            <h3><?php echo $items['hName']?></h3>
                                                            <p><?php echo $items['description']?> </p>
                                                            <button type="submit" style="font-size: 20px;top: -18px" name="book"><h3><?php echo '<a style="text-decoration:none" href="viewHome.php?property_id='.$items['hID'].'"  class="" >Read more <i style="position:relative; left: 30px" class="fa-solid fa-angles-right"></i> </a></h3><br>'; ?></button><br>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                    }


                                    ?>



                                </div>
                            </div>

                        </div>
                    </div>


                    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</body>
</html>