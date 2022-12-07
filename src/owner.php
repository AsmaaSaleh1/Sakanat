<?php
include 'navbar.php';

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
            $owner_id = $rowss['userId'];

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
</style>
</head>

<body>

<div class="container-fluid">
    <ul class="nav nav-pills nav-justified">
        <li class="active" style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#home">Profile</a></li>
        <li style="width: 150px; background-color: #dddddd"><a data-toggle="pill" href="#menu1">Add Home</a></li>
        <li style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#menu2">View Home</a></li>
<!--        <li style="width: 200px;background-color: #FFFAF0"><a data-toggle="pill" href="#menu3">Update Property</a></li>-->
        <li style="width: 150px;background-color: #dddddd"><a data-toggle="pill" href="#menu6">Booked Home</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <center><h3>Owner Profile</h3></center>
            <div class="container">
                <?php
                include 'connect.php';
                $u_email= $_SESSION["user_email"];

                $sql="SELECT * from user where Email='$u_email'";
                $result=mysqli_query($db,$sql);

                if(mysqli_num_rows($result)>0)
                {
                while($rows=mysqli_fetch_assoc($result)){
                    $photo=$rows['photo'];
                ?>
                <div class="row">
                    <div class="profile-nav col-md-3">
                        <div class="panel">
                            <div class="user-heading round">
                                <a href="#">
                                    <?php
                                    if($rows['photo']==NULL){
                                        ?>
                                        <img src="img/userprofile.png" alt="">
                                    <?php }
                                    else
                                    ?>
                                    <img src="<?php echo $rows['photo']; ?>" alt="">
                                </a>
                                <h1>Mis/Mr.<span><?php echo $rows['fName']; ?></span></h1> <!--Name come from database-->
                            </div>
                            <div id="myModal" class="profile-info modal col-md-9">
                                <div class="panel">
                                    <form method="post" action="p2.php">
                                        <div class="bio-graph-heading">
                                            I'm here because I'm the best and I want the best.
                                        </div>
                                        <div class="panel-body bio-graph-info">
                                            <h1>Edit My Information</h1>
                                            <div class="row">
                                                <div class="bio-row">
                                                    <p><span>First Name </span>: <input name="fname" type="text" value="<?php echo $rows['fName']; ?>"></p><!--Name come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Last Name </span>: <input name="lname" type="text" value="<?php echo $rows['lName']; ?>"></p><!--Name come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>ID </span>: <input type="number" disabled value="<?php echo $rows['userId']; ?>"></p><!--ID come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Birthday</span>: <input name="bd" type="date" value="<?php echo $rows['bd']; ?>"></p><!--Birthdate come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>City </span>: <input name="city" type="text" value="<?php echo $rows['city']; ?>"></p><!--City come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Street </span>: <input name="street" type="text" value="<?php echo $rows['street']; ?>"></p><!--street come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Mobile </span>: <input name="mob" type="tel" value="<?php echo $rows['mobile']; ?>"></p><!--mobile come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Email </span>: <input name="email" type="email" disabled value="<?php echo $rows['Email']; ?>"></p><!--email come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Phone </span>: <input name="phone" type="tel"value="<?php echo $rows['phone']; ?>"></p><!--P.N come from database-->
                                                </div>
                                                <div class="bio-row">
                                                    <!--TODO: but limitation about number of char for example 200char-->
                                                    <!--Description come from database-->
                                                    <!--                            <p><span>Type </span>: <input type="radio" name="type"><label>Owner </label><input type="radio" name="type"><label>Tenant </label></p>-->
                                                </div>
                                                <div class="bio-row">
                                                    <p><span>Profile Picture </span>: <input type="file" id="img" name="img" accept="image/*"> </p>
                                                </div>
                                                <div class="butt">
                                                    <div class="body-in">
                                                        <div class="popup" id="popup-1">
                                                            <div class="content">
                                                                <div class="close-btn" onclick="togglePopup()">×</div>
                                                                <h1 class="change">Change Password</h1>
                                                                <div class="input-field"><input placeholder="Old Password" class="validate"></div>
                                                                <div class="input-field"><input placeholder="New Password" class="validate"></div>
                                                                <div class="input-field"><input placeholder="Conform Password" class="validate"></div>
                                                                <button class="second-button">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button onclick="togglePopup()" class="btn bio-row">Change Password</button>
                                                    <script>
                                                        function togglePopup() {
                                                            document.getElementById("popup-1")
                                                                .classList.toggle("active");
                                                        }
                                                    </script>
                                                </div>
                                                <div class="butt">
                                                    <button class="btn bio-row" type="submit" name="update">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                                <!--TODO: the number of Recent Activity is counter for user Sakanat-->
                                <li><a href="p3.php" data-toggle="pill"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>
                                <li><a href="p2.php"> <i class="fa fa-edit" data-toggle="modal" data-target="#myModal"></i> Edit profile</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="profile-info col-md-9">
                        <div class="panel">
                            <div class="bio-graph-heading">
                                I'm here because I'm the best and I want the best.
                            </div>
                            <div class="panel-body bio-graph-info">
                                <h1>My Information</h1>
                                <div class="row">
                                    <div class="bio-row">
                                        <p><span>First Name </span>: <?php echo $rows['fName']; ?></p><!--Name come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Last Name </span>: <?php echo $rows['lName']; ?></p><!--Name come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>ID </span>: <?php echo $rows['userId']; ?></p><!--ID come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Birthday</span>: <?php echo $rows['bd']; ?></p><!--Birthdate come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>City </span>: <?php echo $rows['city']; ?></p><!--City come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Street </span>: <?php echo $rows['street']; ?></p><!--street come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Mobile </span>: <?php echo $rows['mobile']; ?></p><!--mobile come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Email </span>: <?php echo $rows['Email']; ?></p><!--email come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Phone </span>: <?php echo $rows['phone']; ?></p><!--P.N come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Type </span>: <?php echo $rows['type']; ?></p><!--come from database-->
                                    </div>
                                    <div class="bio-row">
                                        <p><span>Feedback </span>: <?php echo $rows['feedback']; ?></p><!--come from database-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="menu6" class="tab-pane fade">
            <div class="container">
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
                            <th></th>

                        </tr>
                        <?php
                        include("connect.php");
                        $email=$_SESSION["user_email"];
                        $owner=$_SESSION['user_id'];

                        $sql="SELECT * from home where ownerId='$owner' and booked=1";
                        $result=mysqli_query($db,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($rows=mysqli_fetch_assoc($result)){
if($rows['booked']==0)
    $booked='No';
else
    $booked='Yes';                         ?>
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
<!--                                <td>     <td><button name="del" style="border: none;background-color: transparent"><i style="color: red;margin-right: 10px" class="fa-regular fa-trash-can"></i></button><button data-toggle="modal" data-target="#myModal" name="update" style="border: none;background-color: transparent"><i class="fa-solid fa-pen-to-square"></i></button></td>-->
                                  <td>
                                   <form method="POST">

                                        <input type="hidden" name="property_id" value="<?php echo $rows['hID']; ?>">
                                        <a data-toggle="pill" class="" name="edit_property" onclick="<?php $property_id = $rows['hID'] ?>" href="#menu5"><i class="fa-solid fa-pen-to-square"></i></a><input type="submit" class="btn btn-danger" name="delete_property" value="Delete">

                                </form> </td>
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


        <div id="menu4" class="tab-pane fade">
            <div class="container">
                <center><h3>See Messages</h3></center>
                <?php
                $owner_id=$rows['owner_id'];
                $sql1="SELECT * FROM chat where owner_id='$owner_id' ";

                $query1 = mysqli_query($db,$sql1);

                if(mysqli_num_rows($query1)>0)
                {
                    while($row= mysqli_fetch_assoc($query1)){

                        $tenant_id=$row['tenant_id'];
                        $sql2="SELECT * FROM tenant where tenant_id='$tenant_id' ";

                        $query2 = mysqli_query($db,$sql2);

                        if(mysqli_num_rows($query2)>0)
                        {
                            while ($rows= mysqli_fetch_assoc($query2)){

                                ?>


                                <link rel="stylesheet" type="text/css" href="message-style.css">

                                <div class="tab">
                                    <button class="tablinks" id="defaultOpen" onmouseover="openCity(event, '<?php echo $rows["full_name"]; ?>')"><?php echo $rows["full_name"]; ?></button>
                                </div>

                                <div id="<?php echo $rows["full_name"]; ?>" class="tabcontent">
                                    <?php
                                    $sql3="SELECT * FROM chat where tenant_id='$tenant_id' AND owner_id='$owner_id' ";

                                    $query3 = mysqli_query($db,$sql3);

                                    if(mysqli_num_rows($query3)>0)
                                    {
                                        while($ro= mysqli_fetch_assoc($query3)){
                                            echo $ro["message"]."<br>";
                                        }}
                                    ?>
                                </div>

                                <div class="clearfix"></div>


                                <?php
                                //echo '<a href="send-message.php?owner_id='.$owner_id.'&tenant_id='.$tenant_id.'">'.$rows["full_name"].'</a>';
                            }
                        }}}}}?>
            </div>
        </div>
        <div id="menu5" class="tab-pane fade">
            <div>
                <div class="container con">

                    <div id="map_canvas"></div>
                    <form class="tst" method="POST" action="owner.php" enctype="multipart/form-data">
                        <div class="row">
                            <center><h2 style="font-weight: 800;color: black">Add Home</h2></center>

                            <div class="cx col-sm-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input placeholder="Home Name" class="form-control" type="text" name="name">

                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
                                </div>
                                <div class="form-group">
                                    <label for="zone">Street:</label>
                                    <input placeholder="Street" class="form-control" value="<?php echo $property_id ?>" type="text" name="street">

                                </div>
                                <div class="form-group">
                                    <label for="district">For:</label>
                                    <select class="form-control" name="for" required="required">
                                        <option>---</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Family">Family</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="vdc/municipality">Area:</label>
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

        <div id="menu1" class="tab-pane fade">
            <div>
                <div class="container con">

                    <div id="map_canvas"></div>
                    <form class="tst" method="POST" action="owner.php" enctype="multipart/form-data">
                        <div class="row">
                            <center><h2 style="font-weight: 800;color: black">Add Home</h2></center>

                            <div class="cx col-sm-6">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input placeholder="Home Name" class="form-control" type="text" name="name">

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
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Family">Family</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="vdc/municipality">Area:</label>
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
                            <th></th>

                        </tr>
                        <?php
                        include("connect.php");
                        $email=$_SESSION["user_email"];
                        $owner=$_SESSION['user_id'];

                        $sql="SELECT * from home where ownerId='$owner'";
                        $result=mysqli_query($db,$sql);

                        if(mysqli_num_rows($result)>0)
                        {
                            while($rows=mysqli_fetch_assoc($result)){
                                if($rows['booked']==0)
                                    $booked='No';
                                else
                                    $booked='Yes';                         ?>
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
                                   <td
                                    <form method="POST">

                                        <input type="hidden" name="property_id" value="<?php echo $rows['hID']; ?>">
                                        <a data-toggle="pill" class="" name="edit_property" onclick="<?php $property_id = $rows['hID'] ?>" href="#menu5"><i class="fa-solid fa-pen-to-square"></i></a><input type="submit" class="btn btn-danger" name="delete_property" value="Delete">

                                    </form>
                                    </td><!--                                <td><img id="myImg" src="../--><?php //echo $rows['id_photo'] ?><!--" width="50px"></td>-->
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