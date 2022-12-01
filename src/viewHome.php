<?php
//session_start();
include "nav.php";
isset($_SESSION["email"]);

?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <style>
        #mapid { height: 180px; }

       span{
            background-color: black;
        }
       .carousel-item{
           max-height: 400px;
       }
       .row{
           position: relative;
           top: 50px;
       }
       h3, h4{
           display: inline-block;
       }
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            width: fit-content;
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 30px;
            font-weight: 300;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }
       .b{
            text-decoration: none;
            color: white;
            background-color: #1F5662;
            width: 100px;
            height: 40px;
            border-radius: 10px;
        }

    </style>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>




<?php
//include('config/config.php');
//include('navbar.php');
//include('review-engine.php');
//include('booking-engine.php');
//?>



<?php
global $d;
try {
    $db = new mysqli('localhost','root','','sakanatpro');

}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}

$property_id=$_GET['property_id'];
$sql="SELECT * from Home where hID='$property_id'";
$query=mysqli_query($db,$sql);

if(mysqli_num_rows($query)>0)
{
    while($rows=mysqli_fetch_assoc($query)){



        $sql2="SELECT * FROM Home_img where HID='$property_id'";
        $query2=mysqli_query($db,$sql2);

        $rowcount=mysqli_num_rows($query2);
        ?>



        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">


                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($query2);
                            $photo=$row['imgPath'];
                            ?>

                            <?php
                            if($i==1)
                            {
                                ?>
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt="..."src="<?php echo $photo ?>">
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="..."src="<?php echo $photo ?>">
                                </div>

                                <?php
                            }
                        }
                        ?>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-sm-6">
                <center><h2 style="color: #1F5662">Room Details</h2></center>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>City:</h3>  <h4><?php echo $rows['city']; ?></h4>
                        <br><br>
                        <h3>Street:</h3>  <h4><?php echo $rows['street']; ?></h4>
                        <br><br>
                        <h3>Rate per month: </h3> <h4><?php echo $rows['price']; ?></h4>
                        <br><br>
                        <p style="font-size: 20px;font-weight: 600"><?php echo $rows['description']; ?></p>
                        <br>
                        <h3>Room For: </h3> <h4><?php echo $rows['gender']; ?></h4>
                        <br><br>
                        <?php

                        if(isset($_SESSION["user_email"]) && !empty($_SESSION['user_email'])){

                        ?>
                        <form method="POST" action="book.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                                           $booked=$rows['booked'];
$_SESSION['pid']=$property_id;
                                    if ($booked==0){ ?>
                                        <input type="hidden" name="property_id" value="<?php echo $rows['property_id']; ?>">
                                        <h3 style="font-size: 20px"><?php echo '<a style="text-decoration:none" href="book.php?property_id='.$rows['hID'].'"  class="" >Book Now </a><br>'; ?></h3><br>

                                    <?php } else { ?>
                                        <label style="width: max-content;font-size: 22px; font-weight: 600" value="" disabled>Property Booked</label>
                                    <?php } ?>
                                </div>
                        </form>
                        <form method="POST" action="chatpage.php">
                            <div class="col-sm-6">
                                <input type="hidden" name="owner_id" value="<?php echo $rows['owner_id']; ?>">
                            </div>
                        </form>
                    </div>

                    <?php }
                    else{
                        echo "<center><h3 style='position: relative;top: 20px'>You should login to book property.</h3></center>";
                    }


                    ?>
                    </div>


                </div>

            </div>

        </div>
        <br>

        <br>
        <form method="post" style="position: relative;top: 20px;width: fit-content">
       <textarea name="rev" cols="40" placeholder="Write Your Comment"></textarea>
            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
            </div>
                <button class="btn btn-success btn-lg" type="submit" name="review">Save</button>
        </form>
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1199&amp;height=400&amp;hl=en&amp;q=Nablus&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>

        <br>


    <?php }}
if(isset($_POST['review'])) {
    $rate=$_POST['rating'];
    $comment = $_POST['rev'];
    $sql2 = "INSERT INTO `review`(`revID`, `comment`, `rate`, `HID`) VALUES (NULL,'$comment','$rate','$property_id')";
    $query2 = mysqli_query($db, $sql2);
}
?>
</div>


<?php

$sql1="SELECT * from review where HID='$property_id'";
$query=mysqli_query($db,$sql1);
echo '<div class="container-fluid">';
echo '<h3>Reviews:</h3>';
echo '</div>';
if(mysqli_num_rows($query)>0)

{
    while($row=mysqli_fetch_assoc($query)){
        ?>
        <div class="container-fluid">
            <ul><li><?php echo $row['comment']; ?> &nbsp;&nbsp;&nbsp;(<i class="fa-regular fa-star"></i><?php echo $row['rate']; ?></span>)</li></ul>
        </div>


        <?php
    }
}
?>
<br><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


</body>
</html>
<script type="text/javascript">
    function initialize() {
        var x=document.getElementById("lat").innerText ;
        var y=document.getElementById("lon").innerText ;
        var latlng = new google.maps.LatLng(x,y);
        var map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            zoom: 13
        });
        var marker = new google.maps.Marker({
            map: map,
            position: latlng,
            draggable: false,
            anchorPoint: new google.maps.Point(0, -29)
        });
        var infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(marker, 'click', function() {
            var iwContent = '<div id="iw_container">' +
                '<div class="iw_title"><b>Location</b> : Noida</div></div>';
            // including content to the infowindow
            infowindow.setContent(iwContent);
            // opening the infowindow in the current map and at the current marker location
            infowindow.open(map, marker);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style>
    h3 {
        font-size: 20px;
    }

    h4  {
        font-size: 20px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        text-align: left;
        padding: 1px;
    }
</style>

<style>
    .animated {
        -webkit-transition: height 0.2s;
        -moz-transition: height 0.2s;
        transition: height 0.2s;
    }

    .stars
    {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
    }
</style>
