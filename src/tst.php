<?php

include("connect.php");

if(isset($_POST['book_property'])){


        global $db,$property_id;
        $u_email=$_SESSION["user_email"];

        $property_id=$_SESSION['pid'];
$date=$_POST['date'];
$dur=$_POST['dur'];
        $sql="SELECT * FROM user where email='$u_email'";
        $query=mysqli_query($db,$sql);

        if(mysqli_num_rows($query)>0)
        {
            while ($rows=mysqli_fetch_assoc($query)) {
                $tenant_id=$rows['userId'];

                $sql1="UPDATE home SET booked=1 WHERE hID='$property_id'";
                $query1=mysqli_query($db,$sql1);
                $can='No';
                $sql2="INSERT INTO booking(hId,userId,bookDate,duration,canceled) VALUES ('$property_id','$tenant_id','$date','$dur','$can')";
                $query2=mysqli_query($db,$sql2);

                if($query2)
                {
                    $email=$rows['Email'];
                    $msg="Thankyou Mr/Ms ".$rows['fName']." for booking Property. Please visit the property location to view it personally.";
                    $recipient=$email;
                    $subject="Property Booked";
                    $mailheaders="From: RentHouse\n";
                    $notifications_name="New Booking";
                    $message=$rows['fName']."Booked a house";
                    $insert_query = "INSERT INTO inf(notifications_name,message,active)VALUES('".$notifications_name."','".$message."','1')";

                    $result = mysqli_query($db,$insert_query);



                    ?>


                    <style>
                        .alert {
                            padding: 20px;
                            background-color: #DC143C;
                            color: white;
                        }

                        .closebtn {
                            margin-left: 15px;
                            color: white;
                            font-weight: bold;
                            float: right;
                            font-size: 22px;
                            line-height: 20px;
                            cursor: pointer;
                            transition: 0.3s;
                        }

                        .closebtn:hover {
                            color: black;
                        }
                    </style>
                    <script>
                        window.setTimeout(function() {
                            $(".alert").fadeTo(1000, 0).slideUp(500, function(){
                                $(this).remove();
                            });
                        }, 2000);
                    </script>
                    <div class="container">
                        <div class="alert" role='alert'>
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            <center><strong>Thankyou for booking this property.</strong></center>
                        </div></div>



                    <?php



                }
            }




        }
}
?>