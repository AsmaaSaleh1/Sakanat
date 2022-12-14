<?php
include 'navbar.php';
include 'dbcon.php';
include "connect.php";
if (isset($_POST['add_home'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $type = $_POST['for'];
    $cont = $_POST['contactNum'];
    $price = $_POST['price'];
    $rooms = $_POST['total_rooms'];
    $kit = $_POST['kitchen'];
    $bath = $_POST['bathroom'];
    $location = $_POST['location'];
    $desc = $_POST['description'];
    $booked = 'No';
    $area = $_POST['area'];
    $f1=0;
    $f2=0;
    $f3=0;
    $f4=0;
    if(isset($_POST['tv']))
        $f1=$_POST['tv'];
    if(isset($_POST['frdg']))
        $f2=$_POST['frdg'];
    if(isset($_POST['wifi']))
        $f3=$_POST['wifi'];
    if(isset($_POST['desk']))
        $f4=$_POST['desk'];

    $u_email = $_SESSION["user_email"];
    $sql1 = "SELECT * from user where email='$u_email'";
    $result1 = mysqli_query($db, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        while ($rowss = mysqli_fetch_assoc($result1)) {
            $email = $_POST['owner'];
            $sql4 = "SELECT * from user where email='$email'";
            $result4 = mysqli_query($db, $sql4);
            $users = mysqli_fetch_assoc($result4);
            $owner_id=$users['userId'];

            $sql = "INSERT INTO `home`(`hName`, `city`, `street`, `description`, `booked`, `ownerId`, `gender`, `contact`, `price`, `numOfRoom`, `Area`, `numOfKitchen`, `numOfBath`, `Location`) VALUES ('$name','$city','$street','$desc','$booked','$owner_id','$type','$cont','$price','$rooms','$area','$kit','$bath','$location')";
            $query = mysqli_query($db, $sql);

            $property_id = mysqli_insert_id($db);
            if($f1) {
                $sql = "INSERT INTO `homefeatures`(`hID`, `fID`) VALUES ('$property_id','$f1')";
                $query = mysqli_query($db, $sql);
            }
            if($f2) {
                $sql = "INSERT INTO `homefeatures`(`hID`, `fID`) VALUES ('$property_id','$f2')";
                $query = mysqli_query($db, $sql);
            } if($f3) {
                $sql = "INSERT INTO `homefeatures`(`hID`, `fID`) VALUES ('$property_id','$f3')";
                $query = mysqli_query($db, $sql);
            }
            if($f4) {
                $sql = "INSERT INTO `homefeatures`(`hID`, `fID`) VALUES ('$property_id','$f4')";
                $query = mysqli_query($db, $sql);
            }

            $countfiles = count($_FILES['p_photo']['name']);
            for ($i = 0; $i < $countfiles; $i++) {
                $paths = $_FILES['p_photo']['tmp_name'][$i];
                if ($paths != "") {
                    $path = "img/" . $_FILES['p_photo']['name'][$i];
                    if (move_uploaded_file($paths, $path)) {
                        $sql2 = "INSERT INTO home_img(imgPath,HID) VALUES('$path','$property_id')";
                        $query = mysqli_query($db, $sql2);

                    }
                }

            }

        }
    }

}


?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Css/prof.css">

    <style>
        th{
            background-color: #1F5662;
            color: white;
        }
        ul{
            width: fit-content;
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }
        ul li{
            margin-bottom: 10px;
        }
        thead{
            background-color: #1F5662;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <ul class="nav nav-pills nav-justified" style="margin-top: 20px">
        <li class="active" style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#home">All Users</a></li>
        <li style="width: 150px; background-color: #dddddd"><a data-toggle="pill" href="#menu1">Add Home</a></li>
        <li style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#menu">View Home</a></li>
        <li style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#menu4">New Home</a></li>

        <!--        <li style="width: 200px;background-color: #FFFAF0"><a data-toggle="pill" href="#menu3">Update Property</a></li>-->
        <li style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#menu2">Feedbacks</a></li>
        <li style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#menu5">Booking</a></li>

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="container">
                    <div class="container">
                        <a style="background-color: #1F5662;border: none" href="addUser.php?" class="btn btn-success btn-sm"><i class="fa-solid fa-plus"></i>Add User</a>

                        <center><h3>Users</h3></center>
                        <div class="container-fluid">
                            <input type="text" id="myInput2" onkeyup="myFunction1()" placeholder="Search..." title="Type in a name">
                            <table id="myTable2">
                                <tr class="header">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Street</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Photo</th>
                                    <th>Birthdate</th>
                                    <th>Send Message</th>
                                </tr>
                                <?php
                                include("connect.php");
                                $email=$_SESSION["user_email"];
                                $owner=$_SESSION['user_id'];

                                $sql="SELECT * FROM `user` WHERE Email !='sakanat@gmail.com';";
                                $result=mysqli_query($db,$sql);

                                if(mysqli_num_rows($result)>0)
                                {
                                    while($rows=mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['fName'] ?></td>
                                            <td><?php echo $rows['lName'] ?></td>
                                            <td><?php echo $rows['city'] ?></td>
                                            <td><?php echo $rows['street'] ?></td>
                                            <td><?php echo $rows['mobile'] ?></td>
                                            <td><?php echo $rows['phone'] ?></td>
                                            <td><?php echo $rows['Email'] ?></td>
                                            <td><?php echo  $rows['type'] ?></td>
                                            <td><img style="width: 80px;height: 80px" src="<?php echo $rows['photo'] ?>"> </td>
                                            <td><?php echo $rows['bd'] ?></td>
                                            <td><a href="mailto:<?php echo $rows['Email'] ?>"><i style="color: #1F5662;font-size: 22px" class="fa-solid fa-envelope"></i></a></td>
                                            <!--                                <td>     <td><button name="del" style="border: none;background-color: transparent"><i style="color: red;margin-right: 10px" class="fa-regular fa-trash-can"></i></button><button data-toggle="modal" data-target="#myModal" name="update" style="border: none;background-color: transparent"><i class="fa-solid fa-pen-to-square"></i></button></td>-->

                                        </tr>

                                        <!--                                <td><img id="myImg" src="../--><?php //echo $rows['id_photo'] ?><!--" width="50px"></td>-->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Update Profile</h4>
                                                    </div>
                                                    <div class="modal-body">



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                        </tr>
                                    <?php }} ?>
                            </table>
                        </div>

                    </div>



            </div>
        </div>

        <div id="menu6" class="tab-pane fade">
            <center><h3>My Home</h3></center>
            <div class="container-fluid">
                <input type="text" id="myInput2" onkeyup="myFunction1()" placeholder="Search..." title="Type in a name">
                <table id="myTable2">
                    <tr class="header">
                        <th>Name</th>
                        <th>City</th>
                        <th>Street</th>
                        <th>Description</th>
                        <th>Contact Number</th>
                        <th>For</th>
                        <th>R/month</th>
                        <th>Booked</th>
                        <th>Number of room</th>
                        <th>Number of Bathroom</th>
                        <th>Area</th>
                        <th>Owner Email</th>
                        <th>Owner Name</th>

                    </tr>
                    <?php
                    include("connect.php");
                    $email=$_SESSION["user_email"];
                    $owner=$_SESSION['user_id'];

                    $sql="SELECT * from home";
                    $result=mysqli_query($db,$sql);

                    if(mysqli_num_rows($result)>0)
                    {
                        while($rows=mysqli_fetch_assoc($result)){
                            if($rows['booked']==0)
                                $booked='No';
                            else
                                $booked='Yes';
                            $owner=$rows['ownerId'];
                            $sql="SELECT fName,Email from user where userId='$owner'";
                            $res=mysqli_query($db,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                                $em=$row['Email'];
                                $nam=$row['fName'];
                            }

                            ?>
                            <tr>
                                <td><?php echo $rows['hName'] ?></td>
                                <td><?php echo $rows['city'] ?></td>
                                <td><?php echo $rows['street'] ?></td>
                                <td><?php echo $rows['description'] ?></td>
                                <td><?php echo $rows['contact'] ?></td>
                                <td><?php echo $rows['gender'] ?></td>
                                <td><?php echo $rows['price'] ?></td>
                                <td><?php echo $booked ?></td>
                                <td><?php echo $rows['numOfRoom'] ?></td>
                                <td><?php echo $rows['numOfBath'] ?></td>
                                <td><?php echo $rows['Area'] ?></td>
                                <td><?php echo $em ?></td>
                                <td><?php echo $nam ?></td>
                                <!--                                <td><img id="myImg" src="../--><?php //echo $rows['id_photo'] ?><!--" width="50px"></td>-->
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                            </tr>
                        <?php }} ?>
                </table>
            </div>

        </div>


        <div id="menu4" class="tab-pane fade">
            <div class="container">

                <?php include('message.php'); ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Owner Name</th>
                                        <th>Owner Email</th>
                                        <th>City</th>
                                        <th>Street</th>
                                        <th>Description</th>
                                        <th>Contact Number</th>
                                        <th>For</th>
                                        <th>R/month</th>
                                        <th>Booked</th>
                                        <th>Number of room</th>
                                        <th>Number of Bathroom</th>
                                        <th>Area</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query = "SELECT * FROM home where accepted='0'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $rows)
                                        {
                                            if($rows['booked']==0)
                                                $booked='No';
                                            else
                                                $booked='Yes';
                                            $owner=$rows['ownerId'];
                                            $sql="SELECT fName,Email from user where userId='$owner'";
                                            $res=mysqli_query($db,$sql);
                                            while($row=mysqli_fetch_assoc($res)){
                                                $em=$row['Email'];
                                                $nam=$row['fName'];
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $rows['hName']; ?></td>
                                                <td><?= $nam; ?></td>
                                                <td><?= $em; ?></td>
                                                <td><?= $rows['city']; ?></td>
                                                <td><?= $rows['street']; ?></td>
                                                <td><?=$rows['description']; ?></td>
                                                <td><?= $rows['contact']; ?></td>
                                                <td><?=$rows['gender']; ?></td>
                                                <td><?= $rows['price']; ?></td>
                                                <td><?= $booked; ?></td>
                                                <td><?= $rows['numOfRoom']; ?></td>
                                                <td><?= $rows['numOfBath']; ?></td>
                                                <td><?= $rows['Area']; ?></td>
                                                <td>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="accHome" value="<?= $rows['hID'];?>" class="btn btn-danger btn-sm">Accept</button>
                                                    </form>
                                                    <a href="viewHome.php?property_id=<?=  $rows['hID']; ?>" class="btn btn-info btn-sm">Remove</a>

                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                    ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu5" class="tab-pane fade">
            <div class="container">
                <center><h3>Booking</h3></center>
                <div class="container-fluid">
                    <input type="text" id="myInput2" onkeyup="myFunction1()" placeholder="Search..." title="Type in a name">
                    <table id="myTable2">
                        <tr class="header">
                            <th>Home Name</th>
                            <th>Home Owner</th>
                            <th>Tenant Name</th>
                            <th>Booking Date</th>
                            <th>Booking Duration</th>
                            <th>Total Pay</th>
                            <th>Canceled?</th>

                        </tr>
                        <?php
                        include("connect.php");


                        $sql="SELECT `hID`, `userId`, `bookDate`, `duration`, `canceled` FROM `booking`";
                        $result=mysqli_query($db,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($rows=mysqli_fetch_assoc($result)){
                                $uid=$rows['userId'];
                                $sql2="SELECT fName,Email from user where userId=$uid";
                                $res=mysqli_query($db,$sql2);
                                $r1=mysqli_fetch_assoc($res);
                                $hid=$rows['hID'];
                                $sql3="SELECT hName,ownerId,price from home where hID=$hid";
                                $res2=mysqli_query($db,$sql3);
                                $r2=mysqli_fetch_assoc($res2);
                                $own=$r2['ownerId'];
                                $sql4="SELECT fName from user where userId=$own";
                                $res3=mysqli_query($db,$sql4);
                                $r3=mysqli_fetch_assoc($res3);

                                $tot=$rows['duration']*$r2['price'];
                                ?>
                                <tr>

                                    <td><?php echo $r2['hName'] ?></td>
                                    <td><?php echo $r3['fName'] ?></td>
                                    <td><?php echo $r1['fName'] ?></td>
                                    <td><?php echo $rows['bookDate'] ?></td>
                                    <td><?php echo $rows['duration'] ?></td>
                                    <td><?php echo $tot ?></td>
                                    <td><?php echo $rows['canceled'] ?></td>


                                    <!--                                <td><img id="myImg" src="../--><?php //echo $rows['id_photo'] ?><!--" width="50px"></td>-->
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                        <div id="caption"></div>
                                    </div>
                                </tr>
                            <?php }} ?>
                    </table>
                </div>

            </div>
        </div>

        <div id="menu1" class="tab-pane fade" style="background-image: url('img/xx.jpg')">
            <div>
                <div class="container con">

                    <div id="map_canvas"></div>
                    <form class="tst" method="POST" action="admin.php" enctype="multipart/form-data">
                        <div class="row">
                            <center><h2 style="font-weight: 800;color: black">Add Home</h2></center>

                            <div class="cx col-sm-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input placeholder="Home Name" class="form-control" type="text" name="name">

                                </div>
                                <div class="form-group">
                                    <label for="zone">Owner:</label>
                                    <select name="owner" style="width: 100%;height: 35px;border-radius: 10px;border: none"  class="form-group">
                                    <?php
                                    $sql="SELECT * from `user` WHERE type='Owner'";
                                    $query_run=mysqli_query($db,$sql);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                    foreach($query_run as $row) {

                                    ?>
                                        <option><?php echo $row['Email']?></option>

                                    <?php
                                    }
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                                </div>
                                <div class="form-group">
                                    <label for="zone">Street:</label>
                                    <input placeholder="Street" class="form-control" type="text" name="street">

                                </div>

                                <div class="form-group">
                                    <label for="district">For:</label>
                                    <select class="form-control" name="for" required="required">
                                        <option>---</option>
                                        <option value="Men">Male</option>
                                        <option value="Women">Female</option>
                                        <option value="Family">Family</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="vdc/municipality">Area (m&sup2;):</label>
                                    <input placeholder="Area" class="form-control" type="text" name="area">

                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact Number:</label>
                                    <input name="contactNum" type="text" class="form-control" id="contact" placeholder="Enter Contact Number." >
                                </div>
                                <div class="form-group">
                                    <label for="property_type">Property Type:</label>
                                    <select class="form-control" name="property_type">
                                        <option value="">--Select Property Type--</option>
                                        <option value="Full House Rent">Full House Rent</option>
                                        <option value="Flat Rent">Flat Rent</option>
                                        <option value="Room Rent">Room Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="estimated_price">Estimated Price:</label>
                                    <input type="estimated_price" class="form-control" id="estimated_price" placeholder="Enter Estimated Price" name="price">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="total_rooms">Number of Rooms:</label>
                                    <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms" name="total_rooms">
                                </div>

                                <div class="form-group">
                                    <label for="kitchen">Number of Kitchen:</label>
                                    <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen" name="kitchen">
                                </div>
                                <div class="form-group">
                                    <label for="bathroom">Number of Bathroom/Washroom:</label>
                                    <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                                </div>
                                <div class="form-group">
                                    <label for="">Location in map:</label>
                                    <input type="text" class="form-control" id="" name="location">
                                </div>
                                <div class="form-group">
                                    <label for="description">Full Description:</label>
                                    <textarea type="comment" class="form-control" id="description" placeholder="Enter Property Description" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <h3 for="description">Features:</h3>
                                    <input type="checkbox" name="tv" value="1" id="tv">
                                    <label for="tv">TV</label> <br>
                                    <input type="checkbox" value="2" name="wifi" id="wifi">
                                    <label for="wifi">Wi-Fi</label> <br>
                                    <input type="checkbox"value="3" name="desk" id="desk">
                                    <label for="desk">Desk</label> <br>
                                    <input type="checkbox" value="5" name="frdg" id="frdg">
                                    <label for="frdg">Fridge</label> <br>
                                </div>
                                <table class="table" id="dynamic_field">
                                    <tr>
                                        <div class="form-group">
                                            <label><b>Photos:</b></label>
                                            <td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td>
                                            <td><button style="background-color: #1F5662" type="button" id="add" name="add" class="btn btn-success col-lg-12">Add More</button></td>
                                        </div>
                                    </tr>
                                </table>
                                <input name="lat" type="text" id="lat" hidden>
                                <input name="lng" type="text" id="lng" hidden>
                                <hr>
                                <div class="form-group">
                                    <input style="background-color: #1F5662" type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Home" name="add_home">
                                </div>
                            </div>
                        </div>
                    </form>
                    <br><br>

                </div>
            </div>
        </div>

        <div id="menu2" class="tab-pane fade">
            <div class="container">
                <center><h3>Feedbacks</h3></center>
                <div class="container-fluid">
                    <input type="text" id="myInput2" onkeyup="myFunction1()" placeholder="Search..." title="Type in a name">
                    <table id="myTable2">
                        <tr class="header">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Photo</th>
                            <th>Feedback</th>
                            <th></th>

                        </tr>
                        <?php
                        include("connect.php");
                        $email=$_SESSION["user_email"];
                        $owner=$_SESSION['user_id'];
                        $fb='';
                        $sql="SELECT feedback,fName,photo,lName,userId from user WHERE Email !='sakanat@gmail.com' and feedback !='$fb';";
                        $result=mysqli_query($db,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($rows=mysqli_fetch_assoc($result)){

                                ?>
                                <tr>
                                    <td><img style="width: 80px;height: 80px" src="<?php echo $rows['photo'] ?>"> </td>

                                    <td><?php echo $rows['fName'] ?></td>
                                    <td><?php echo $rows['lName'] ?></td>

                                    <td><?php echo $rows['feedback'] ?></td>
                                    <td>
                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="fb" value="<?= $rows['userId'];?>" class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </td>

                                   <!--                                <td><img id="myImg" src="../--><?php //echo $rows['id_photo'] ?><!--" width="50px"></td>-->
                                    <div id="myModal" class="modal">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="img01">
                                        <div id="caption"></div>
                                    </div>
                                </tr>
                            <?php }} ?>
                    </table>
                </div>

            </div>
        </div>

        <div id="menu" class="tab-pane fade"
        <div class="container mt-4">

            <?php include('message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Owner Name</th>
                                    <th>Owner Email</th>
                                    <th>City</th>
                                    <th>Street</th>
                                    <th>Description</th>
                                    <th>Contact Number</th>
                                    <th>For</th>
                                    <th>R/month</th>
                                    <th>Booked</th>
                                    <th>Number of room</th>
                                    <th>Number of Bathroom</th>
                                    <th>Area</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM home where accepted='1'";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $rows)
                                    {
                                        if($rows['booked']==0)
                                            $booked='No';
                                        else
                                            $booked='Yes';
                                        $owner=$rows['ownerId'];
                                        $sql="SELECT fName,Email from user where userId='$owner'";
                                        $res=mysqli_query($db,$sql);
                                        while($row=mysqli_fetch_assoc($res)){
                                            $em=$row['Email'];
                                            $nam=$row['fName'];
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $rows['hName']; ?></td>
                                            <td><?= $nam; ?></td>
                                            <td><?= $em; ?></td>
                                            <td><?= $rows['city']; ?></td>
                                            <td><?= $rows['street']; ?></td>
                                            <td><?=$rows['description']; ?></td>
                                            <td><?= $rows['contact']; ?></td>
                                            <td><?=$rows['gender']; ?></td>
                                            <td><?= $rows['price']; ?></td>
                                            <td><?= $booked; ?></td>
                                            <td><?= $rows['numOfRoom']; ?></td>
                                            <td><?= $rows['numOfBath']; ?></td>
                                            <td><?= $rows['Area']; ?></td>
                                            <td>
                                                <a href="viewHome.php?property_id=<?=  $rows['hID']; ?>" class="btn btn-info btn-sm">View</a>
<!--                                                <a href="home-edit.php?id=--><?//=  $rows['hID']; ?><!--" class="btn btn-success btn-sm">Edit</a>-->
                                                <form style="display: inline-block" action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $rows['hID'];?>" class="btn btn-sm"><i style="color: #1F5662;font-size: 20px" class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="new" class="tab-pane fade">
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Owner Name</th>
                                <th>Owner Email</th>
                                <th>City</th>
                                <th>Street</th>
                                <th>Description</th>
                                <th>Contact Number</th>
                                <th>For</th>
                                <th>R/month</th>
                                <th>Booked</th>
                                <th>Number of room</th>
                                <th>Number of Bathroom</th>
                                <th>Area</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = "SELECT * FROM home where accepted='0'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $rows)
                                {
                                    if($rows['booked']==0)
                                        $booked='No';
                                    else
                                        $booked='Yes';
                                    $owner=$rows['ownerId'];
                                    $sql="SELECT fName,Email from user where userId='$owner'";
                                    $res=mysqli_query($db,$sql);
                                    while($row=mysqli_fetch_assoc($res)){
                                        $em=$row['Email'];
                                        $nam=$row['fName'];
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $rows['hName']; ?></td>
                                        <td><?= $nam; ?></td>
                                        <td><?= $em; ?></td>
                                        <td><?= $rows['city']; ?></td>
                                        <td><?= $rows['street']; ?></td>
                                        <td><?=$rows['description']; ?></td>
                                        <td><?= $rows['contact']; ?></td>
                                        <td><?=$rows['gender']; ?></td>
                                        <td><?= $rows['price']; ?></td>
                                        <td><?= $booked; ?></td>
                                        <td><?= $rows['numOfRoom']; ?></td>
                                        <td><?= $rows['numOfBath']; ?></td>
                                        <td><?= $rows['Area']; ?></td>
                                        <td>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="submit" name="accHome" value="<?= $rows['hID'];?>" class="btn btn-danger btn-sm">Accept</button>
                                            </form>
                                            <a href="viewHome.php?property_id=<?=  $rows['hID']; ?>" class="btn btn-info btn-sm">Remove</a>

                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

</body>




<script>
    function viewProperty() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
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
    function myFunction1() {
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
<script>
    function updateProperty() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
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
<script>
    function bookedProperty() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
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
<script>
    $(document).ready(function(){
        var i=1;
        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td></td> <td><button id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });





        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            $.ajax({
                url:"name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
</script>

<script>
    if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker;
        document.getElementById('lat').value = results[0].geometry.location.lat();
        document.getElementById('lng').value = results[0].geometry.location.lng();


        // add this
        var latt=results[0].geometry.location.lat();
        var lngg=results[0].geometry.location.lng();
        $.ajax({
            url: "your-php-code-url-to-save-in-database",
            dataType: 'json',
            type: 'POST',
            data:{ lat: lat, lng: lngg }
            success: function(data)
            {
                //check here whether inserted or not
            }
        });


    }
</script>


<script>
    //For Latitude and Longitude
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            document.getElementById("latitude").value = "Geolocation is not supported by this browser.";
            document.getElementById("longitude").value = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;
    }
</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>