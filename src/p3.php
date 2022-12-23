<?php
include 'navbar.php';
include 'connect.php';
$property_id=$_SESSION['user_email'];
if(isset($_POST['can'])){
    if(isset($_SESSION['bid'])) {
        $bid=mysqli_real_escape_string($db, $_SESSION['bid']);
$stmt="UPDATE `booking` SET `canceled`='yes'where bId='$bid'";
        $query = mysqli_query($db, $stmt);
        $booked=0;
       $hid=$_SESSION['hid'];
        $stmt2 ="UPDATE `home` SET `booked`='$booked'where hID='$hid'";

        $query2 = mysqli_query($db, $stmt2);

        $notifications_name='Cancelled';
        $message=$property_id." Cancel his booking";
        $insert_query = "INSERT INTO inf(notifications_name,message,active)VALUES('".$notifications_name."','".$message."','1')";

        $result = mysqli_query($db,$insert_query);

    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/p3.css">
    <style>
       .bio-graph-info{
           min-height: 200px;
       }
       .blog-card:not(:first-child){
           top: 250px;
           left: 20px;
       }
       .blog-card{
           max-width: 900px;

       }
       .profile-info{
           height: 1000px;
       }
       .panel{
           background-color: white;
           min-height: 100%;
           height:fit-content;
       }
       .inner-part{
           max-width: 800px;
       }

    </style>
</head>

<body>
<div class="profile-info col-md-9">
    <div class="panel">
        <div class="bio-graph-heading">
            I'm here because I'm the best and I want the best.
        </div>
        <div class="panel-body bio-graph-info">
            <h1>Recent Activity</h1>

            <?php
            try {
                $db = new mysqli('localhost','root','','sakanatpro');

            }catch(PDOException $e){
                echo "Connection failed : ". $e->getMessage();
            }
            $sql="SELECT * from user where Email='$property_id'";
            $query=mysqli_query($db,$sql);

            if(mysqli_num_rows($query)>0)
            {
            $row=mysqli_fetch_assoc($query);

$user=$row['userId'];
            $sql="SELECT * from booking where userId='$user'";
            $query=mysqli_query($db,$sql);

            if(mysqli_num_rows($query)>0) {
                while ($rows = mysqli_fetch_assoc($query)) {
            $home=$rows['hID'];
            $_SESSION['hid']=$home;
            $bId=$rows['bId'];
            $can=$rows['canceled'];
            ?>

            <div class="blog-card">
                <div class="inner-part">
                    <label for="imgTap" class="img">
<!--                        <img class="img-1" src="img/s.png">-->
                        <?php
                        $sql2="SELECT * FROM home_img where HID='$home'";
                        $query2=mysqli_query($db,$sql2);

                        if(mysqli_num_rows($query2)>0)
                        {
                            $row=mysqli_fetch_assoc($query2);
                            $photo=$row['imgPath'];
                            echo  '<img class="image" src="'.$photo.'">'; }
                        $sql2="SELECT * FROM home where hID='$home'";
                        $query2=mysqli_query($db,$sql2);

                        if(mysqli_num_rows($query2)>0)
                        {
                            $row=mysqli_fetch_assoc($query2);
                            $name=$row['hName'];
                            $desc=$row['description'];
                            $date=$rows['bookDate'];
                            $dur=$rows['duration'];
                            $price=$row['price'];
                            $var=$price*$dur;
                        }

                        ?>
                    </label>
                    <form action="p3.php" method="post">
                    <div class="content">
                        <div class="title">
                           <?php echo  $name; ?>

                        <div class="text">
                            <p>
                                <?php echo  $desc; ?>
                            </p>
                            <p>
                               Booked in: <?php echo  $date; ?>
                            </p>
                            <p>
                               Booked For: <?php echo  $dur; ?> month.
                            </p>
                            <p>
                              Total pay  <?php echo  $var; ?>
                            </p>
                        <?php
                        if($can=='No'){
                        ?>


                        <button name="can" style="position: absolute;left: 500px;top: 150px;"><a name="can" href="p3.php?bookid=<?= $rows['bId']; ?>"></a>Cancele</button>
                            <?php  $_SESSION['bid']=$bId;
                            $_SESSION['hid']=$home;}
                           else{
                            ?>
                            <p style="position: absolute;color:red;left: 500px;top: 150px;">Canceled</p>
                            <?php }?>
                    </div>
                </div>
            </div>
                    </form>
                    <br><br><br>
                <?php

                }
                }
                }
            ?>
        </div>

    </div>
</div>
</body>
</html>

