<?php
session_start();
$type=$_POST['type'];
echo $type;
$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "sakanatpro";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
        $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}
if (isset($_POST['email']) && isset($_POST['regPass'])
    && isset($_POST['name']) && isset($_POST['pNum'])  && isset($_POST['confPass'])&&isset($_POST['type'])&&isset($_POST['lname'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['email']);
    $password = validate($_POST['regPass']);

    $re_pass = validate($_POST['confPass']);
    $name = validate($_POST['name']);
    $lname= validate($_POST['lname']);
$phone=$_POST['pNum'];
    $user_data = 'uname='. $uname. '&name='. $name;
    $type=$_POST['type'];


    if (empty($uname)) {
        header("Location: log_sign.php?error=User Name is required&$user_data");
        exit();
    }else if(empty($password)){
        header("Location: log_sign.php?error=Password is required&$user_data");
        exit();
    }
    else if(empty($re_pass)){
        header("Location: log_sign.php?error=Re Password is required&$user_data");
        exit();
    }

    else if(empty($name)){
        header("Location: log_sign.php?error=Name is required&$user_data");
        exit();
    }

    else if($password !== $re_pass){
        header("Location: log_sign.php?error=The confirmation password  does not match&$user_data");
        exit();
    }

    else{
        $sName = "localhost";
        $uName = "root";
        $pass = "";
        $db_name = "sakanatpro";

        try {
            $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                $uName, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed : ". $e->getMessage();
        }
        $uName="asmaatsaleh@gmail.com";
        $stmt = $conn->prepare("SELECT * FROM user WHERE Email=?");
        $stmt->execute([$uname]);
echo $stmt->rowCount();
        if ($stmt->rowCount() >0){
            header("Location: log_sign.php?error=The username is taken try another&$user_data");
            exit();
        }
        else {
            echo "<script> alert('Okkkkk') </script>";
            $sName = "localhost";
            $uName = "root";
            $pass = "";
            $db_name = "sakanatpro";
$type=$_SESSION['type'];

            try {
                $db = new mysqli('localhost','root','','sakanatpro');

            }catch(PDOException $e){
                echo "Connection failed : ". $e->getMessage();
            }
            $sql = "INSERT INTO `user`(`fName`, `lName`, `Email`, `phone`, `password`, `type`) VALUES ('$name','$lname','$uname','$phone','$password','$type')";
                        echo "<script> alert('Doneee') </script>";
            if($db->query($sql)===TRUE){
                $_SESSION['user_email'] = $uname;
                $_SESSION['type']=$type;

                header("location:index.php");
            }

            else {
                header("Location: log_sign.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }

}else{
    header("Location: log_sign.php");
    exit();
}