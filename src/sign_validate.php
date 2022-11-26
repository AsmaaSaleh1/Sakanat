<?php
session_start();

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "sakanat";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
        $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}
if (isset($_POST['email']) && isset($_POST['regPass'])
    && isset($_POST['name']) && isset($_POST['pNum'])  && isset($_POST['confPass'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['email']);
    $pass = validate($_POST['regPass']);

    $re_pass = validate($_POST['confPass']);
    $name = validate($_POST['name']);

    $user_data = 'uname='. $uname. '&name='. $name;


    if (empty($uname)) {
        header("Location: log_sign.php?error=User Name is required&$user_data");
        exit();
    }else if(empty($pass)){
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

    else if($pass !== $re_pass){
        header("Location: log_sign.php?error=The confirmation password  does not match&$user_data");
        exit();
    }

    else{

        // hashing the password
//        $pass = md5($pass);

        $sql = "SELECT * FROM user WHERE Email='$uname' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: log_sign.php?error=The username is taken try another&$user_data");
            exit();
        }else {
            $sql2 = "INSERT INTO user(Name, Password, Email, phone, Birthdate, photo ) VALUES('$name', '$pass', '$uName', '$pass', '$uName')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            }else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }

}else{
    header("Location: signup.php");
    exit();
}