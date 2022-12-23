<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sakanat</title>
    <style>
        body{
            background-image:linear-gradient(45deg,#c49f72,#c49f72,#1F5662);
        }
        .card-header{
            background-color: #1F5662;
        }
        .card{
            background-color: #f0f0f0;
            font-family: 'Times New Roman', 'Times', 'serif';
        }
        label{
            color: #1F5662;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="font-family: 'Times New Roman', 'Times', 'serif'; font-weight: bold;color: white">Home Edit
                        <a href="owner.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $homeID = mysqli_real_escape_string($con, $_GET['id']);

                        $query = "SELECT * FROM home WHERE hID='$homeID' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $home = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $home['hID']; ?>">

                                <div class="mb-3">
                                    <label>Home Name</label>
                                    <input type="text" name="hname" value="<?=$home['hName'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" value="<?=$home['city'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Street</label>
                                    <input type="text" name="street" value="<?=$home['street'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Contact</label>
                                    <input type="text" name="con" value="<?=$home['contact'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>For</label>
                                    <select class="form-control" name="for" required="required">
                                        <option>---</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Family">Family</option>

                                    </select>                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <input type="text" name="desc" value="<?=$home['description'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Rent/M</label>
                                    <input type="text" name="price" value="<?=$home['price'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="total_rooms">Number of Rooms:</label>
                                    <input type="number" class="form-control" id="total_rooms" value="<?=$home['numOfRoom'];?>" name="total_rooms">
                                </div>

                                <div class="mb-3">
                                    <label for="kitchen">Number of Kitchen:</label>
                                    <input type="number" class="form-control" id="kitchen" value="<?=$home['numOfKitchen'];?>" name="kitchen">
                                </div>
                                <div class="mb-3">
                                    <label for="bathroom">Number of Bathroom/Washroom:</label>
                                    <input type="number" class="form-control" id="bathroom" value="<?=$home['numOfBath'];?>" name="bathroom">
                                </div>
                                <div class="mb-3">
                                    <label for="">Location in map:</label>
                                    <input type="text" style="height: 100px" class="form-control" value="<?=$home['Location'];?>" id="" name="location">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_student" class="btn btn-primary" style="background-color: #1F5662">
                                        Update Home
                                    </button>
                                </div>

                            </form>
                            <?php
                        }
                        else
                        {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>