<?php
//session_start();
isset($_SESSION["user_email"]);

?>

<?php
include("connect.php");
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
.r{
    position: relative;top: 500px
}
        </style>
    </head>
<body>
<?php
$q_string = $_POST['search_property'];
$sql="SELECT * FROM home where concat(hName,city,street,description,contact,price) like '%$q_string%'";
$query=mysqli_query($db,$sql);
echo '<center><h1>Searched Properties</h1></center>';
if(mysqli_num_rows($query)>0)
{
    while ($rows=mysqli_fetch_assoc($query)) {
        $property_id=$rows['hID'];
        ?>

      \

        </body>
        </html>


        <?php
        include("Home_list.php");

    }
}

else{
    echo "<center><h3>Searched Property not found...</h3></center>";
}
?>