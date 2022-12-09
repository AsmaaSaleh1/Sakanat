<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email)) {
        header("Location: login.php?error=Email is required");
    }else if (empty($password)){
        header("Location: login.php?error=Password is required&email=$email");
    }else {


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
        $stmt = $conn->prepare("SELECT * FROM user WHERE Email=?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch();
            $password=sha1($password);
            $user_id =$user['userId'];
            $user_email = $user['Email'];
            $user_password = $user['password'];
            $user_full_name = $user['fName'];
            $user_phone=$user['phone'];
            $type=$user['type'];
            if ($email === $user_email) {
                if ($password== $user_password) {
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_full_name'] = $user_full_name;
                    $_SESSION['user_phone'] = $user_phone;
                    $_SESSION['type']=$type;

                    header("Location: index.php");

                }else {
                    header("Location: log_sign.php?error=Incorect User name or password&email=$email");

                }
            }else {

                header("Location: log_sign.php?error=Incorect User name or password&email=$email");

            }
        }else {

            header("Location: login.php?error=Incorect User name or password&email=$email");

        }
    }
}
/* For sign up*/
if(isset($_POST['email']) && isset($_POST['regPass']) && isset($_POST['pNum']) && isset($_POST['confPass']) &&isset($_POST['name']) )
$full_name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['regPass'];
$phone_no=$_POST['pNum'];
//$address=validate($_POST['address']);
//$id_type=validate($_POST['id_type']);
//$id_photo=$_POST['id_photo'];
//$password = md5($password); // Encrypt password
$bd=Null;
$img=Null;
try {
    $sName = "localhost";
    $uName = "root";
    $pass = "";
    $db_name = "sakanatpro";
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
        $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}
$sql = "INSERT INTO `user`(`Name`, `Password`, `Email`, `phone`, `Birthdate`, `photo`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
if($conn->query($sql)===TRUE){
    $_SESSION['user_email'] = $user_email;
    header("location:index.php");
}