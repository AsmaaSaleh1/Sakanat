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
        $db_name = "sakanat";

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
            $user_id =5;
            $user_email = $user['Email'];
            $user_password = $user['Password'];
            $user_full_name = $user['Name'];
            $user_phone=$user['phone'];

            if ($email === $user_email) {
                if ($password== $user_password) {
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_full_name'] = $user_full_name;
                    $_SESSION['user_phone'] = $user_phone;
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