<?php
include "nav.php";

include "connect.php";
if(isset($_POST['add_home'])) {
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
    $area=$_POST['area'];
    $u_email = $_SESSION["user_email"];
    $sql1 = "SELECT * from user where email='$u_email'";
    $result1 = mysqli_query($db, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        while ($rowss = mysqli_fetch_assoc($result1)) {
            $owner_id = $rowss['userId'];

            $sql = "INSERT INTO `home`(`hName`, `city`, `street`, `description`, `booked`, `ownerId`, `gender`, `contact`, `price`, `numOfRoom`, `Area`, `numOfKitchen`, `numOfBath`, `Location`) VALUES ('$name','$city','$street','$desc','$booked','$owner_id','$type','$cont','$price','$rooms','$area','$kit','$bath','$location')";
            $query = mysqli_query($db, $sql);

            $property_id = mysqli_insert_id($db);

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
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {

            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: 'Times New Roman', 'Times','serif';
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }

        .form-group {
            text-align: left;
        }


    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    .row{
        max-width: 900px;
        margin: auto;
    }
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Times New Roman', 'Times', 'serif';
        font-size: 16px;
        font-weight: bold;
    }
    .con{
        background-color: rgb(255,255,255,0.6);
        border-radius: 15px;
    }
    .navbar {
        background-color: #f0f0f0;
        padding: 0;
        height: 72px;
    }

    body{
        font-family: 'Times New Roman', 'Times','serif';
        background-image: url("img/addHome.jpg");
        background-repeat: no-repeat;
    }
    .navbar-brand{
        font-family: 'Times New Roman', 'Times','serif';
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
        background-color: #ddd;

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
    .tst{
        position: relative;
    }
    .cx{
        max-width: 400px;
        margin-right: 50px;
    }
</style>
<div>
    <div class="container con">

        <div id="map_canvas"></div>
        <form class="tst" method="POST" action="addHome.php" enctype="multipart/form-data">
            <div class="row">
                <center><h2 style="font-weight: 800;padding-bottom: 20px;font-size: 35px;color: black">Add Home</h2></center>

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
                        <input type="checkbox" name="tv" id="tv">
                        <label for="tv">TV</label> <br>
                        <input type="checkbox" name="wifi" id="wifi">
                        <label for="wifi">Wi-Fi</label> <br>
                        <input type="checkbox" name="desk" id="desk">
                        <label for="desk">Desk</label> <br>
                        <input type="checkbox" name="frdg" id="frdg">
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
