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

    </style>
</head>
<body>

<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Home Edit
                        <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM home WHERE hID='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $student = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $student['hID']; ?>">


                                <div class="mb-3">
                                    <label>Home Name</label>
                                    <input type="text" name="hname" value="<?=$student['hName'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" value="<?=$student['city'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Street</label>
                                    <input type="text" name="street" value="<?=$student['street'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Contact</label>
                                    <input type="text" name="con" value="<?=$student['contact'];?>" class="form-control">
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
                                    <input type="text" name="desc" value="<?=$student['description'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Rent/M</label>
                                    <input type="text" name="price" value="<?=$student['price'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="total_rooms">Number of Rooms:</label>
                                    <input type="number" class="form-control" id="total_rooms" value="<?=$student['numOfRoom'];?>" name="total_rooms">
                                </div>

                                <div class="mb-3">
                                    <label for="kitchen">Number of Kitchen:</label>
                                    <input type="number" class="form-control" id="kitchen" value="<?=$student['numOfKitchen'];?>" name="kitchen">
                                </div>
                                <div class="mb-3">
                                    <label for="bathroom">Number of Bathroom/Washroom:</label>
                                    <input type="number" class="form-control" id="bathroom" value="<?=$student['numOfBath'];?>" name="bathroom">
                                </div>
                                <div class="mb-3">
                                    <label for="">Location in map:</label>
                                    <input type="text" class="form-control" value="<?=$student['Location'];?>" id="" name="location">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_student" class="btn btn-primary">
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