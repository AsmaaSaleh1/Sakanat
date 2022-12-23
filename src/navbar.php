<?php
include 'connect.php';
session_start();
if(isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'Owner')
        $src = "owner.php";
    if ($_SESSION['type'] == 'Tenant')
        $src = "browse.php";
    if ($_SESSION['type'] == 'admin')
        $src = "admin.php";


}
else
    $src = "browse.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sakanat</title>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="Css/all.min.css"> </head>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


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
    .nav-link{
        color: #1F5662;
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
    a{
        color: #1F5662;
    }
</style>
<body>
<script src="js/bootstrap.bundle.min.js"></script>

            <!-- Header section -->
            <nav style="margin: 0;padding: 0" id="head" class="navbar nb navbar-expand-lg sticky-top">
                <div class="container-fluid">
                    <a style="color: #1F5662;font-size: 28px" class="navbar-brand nvb" href="index.php">Sakanat</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <?php
                        if(isset($_SESSION["user_email"]) and $_SESSION["user_email"]=="sakanat@gmail.com"){
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                            <?php $sql = "SELECT * FROM inf WHERE active='1' ORDER BY n_id DESC";
                            $res = mysqli_query($db, $sql); ?>
                            <li class="nav-item dropdown">
                                <a style="font-size: 18px;text-decoration: none" class="nav-link dropdown-toggle p-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <i style="color: #1F5662;position: static" class="fa-sharp fa-solid fa-bell"></i>
                                    <span style="position:static;background-color:transparent;display: inline-block;color: #1F5662" class="count"><?php echo mysqli_num_rows($res); ?></span>


                                </a>

                                <ul class="dropdown-menu">
                                    <li>


                                        <?php
                                        if (mysqli_num_rows($res) > 0) {
                                        foreach ($res as $item) {
                                        ?>
                                    <li style="margin: 10px;padding:10px;background-color: rgba(82,138,150);
;color: white"><p><?php echo $item["message"]; ?></p></li>
                                    <?php }
                                    } ?>
                                </ul>
                            </li>
                        </ul>
<?php
    }
                        ?>
                        <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%;">
                <li class="nav-item">
                    <a style="font-size: 18px;text-decoration: none" class="nav-link active p-lg-4" aria-current="page" href="index.php">Home</a>
                </li>
                <li  class="nav-item"><a style="font-size: 18px;text-decoration: none" class="nav-link active p-lg-4" aria-current="page" href="<?php echo $src?>">Browser</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: 18px;text-decoration: none" class="nav-link active p-lg-4" aria-current="page" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: 18px;text-decoration: none" class="nav-link active p-lg-4" aria-current="page" href="#about">About</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION["user_email"])){

                    ?>
                    <li class="nav-item dropdown">
                        <a style="font-size: 18px;text-decoration: none" class="nav-link dropdown-toggle p-lg-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <h5 style="text-align: center;color: #ecb920"><?=$_SESSION['user_full_name']?></h5>
                            <li><a class="dropdown-item" href="prof.php">Profile</a></li>
                            <li><a class="dropdown-item" href="log_out.php"><i style="color: #1F5662" class="fa-solid fa-right-from-bracket"></i>
                                    Log out</a></li>

                        </ul>
                    </li>

                    <?php

                }

                else {?>
                    <li><a style="font-size: 18px;text-decoration: none;color: #1F5662" href="log_sign.php"><span class="glyphicon glyphicon-log-in"></span><i style="color: #1F5662;font-size: 16px" class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li>
                <?php } ?>
            </ul>
                        </ul>

        </div>
    </div>
</nav>

</body>
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
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
<script>
    $(document).ready(function(){
        var ids = new Array();
        $('#over').on('click',function(){
            $('#list').toggle();
        });

        //Message with Ellipsis
        $('div.msg').each(function(){
            var len =$(this).text().trim(" ").split(" ");
            if(len.length > 12){
                var add_elip =  $(this).text().trim().substring(0, 65) + "…";
                $(this).text(add_elip);
            }

        });


        $("#bell-count").on('click',function(e){
            e.preventDefault();

            let belvalue = $('#bell-count').attr('data-value');

            if(belvalue == ''){

                console.log("inactive");
            }else{
                $(".round").css('display','none');
                $("#list").css('display','block');

                // $('.message').each(function(){
                // var i = $(this).attr("data-id");
                // ids.push(i);

                // });
                //Ajax
                $('.message').click(function(e){
                    e.preventDefault();
                    $.ajax({
                        url:'./connection/deactive.php',
                        type:'POST',
                        data:{"id":$(this).attr('data-id')},
                        success:function(data){

                            console.log(data);
                            location.reload();
                        }
                    });
                });
            }
        });

        $('#notify').on('click',function(e){
            e.preventDefault();
            var name = $('#notifications_name').val();
            var ins_msg = $('#message').val();
            if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
                var form_data = $('#frm_data').serialize();
                $.ajax({
                    url:'./connection/insert.php',
                    type:'POST',
                    data:form_data,
                    success:function(data){
                        location.reload();
                    }
                });
            }else{
                alert("Please Fill All the fields");
            }


        });
    });
</script>
</html>