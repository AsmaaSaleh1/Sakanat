<?php
session_start();
if(isset($_POST["email"]) and isset($_POST['send'])) {
    $email = $_POST["email"];
    $_SESSION['email']=$email;
    $receiver = $email;
    $digits = 5;
    $rand= rand(pow(10, $digits-1), pow(10, $digits)-1);
    $x=$rand;
    $_SESSION['random']=$rand;
    $body = "The verification code = ".$rand;
    $subject = "Reset Password";
    $sender = "From:s12028675@stu.najah.edu";
    if (mail($receiver, $subject, $body, $sender)) {
        echo "<script> alert('Message sent successfully')</script>";
        header("Location:verifyCode.php");
    }
    else {
        echo "<script> alert('Message Not Send')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Css/resetPass.css">
    <link rel="stylesheet" href="Css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<div class="container">
    <div class="tst">
        <h1>Sakanat</h1>
        <div class="box" id="box">

            <div class="form" >
                <form action="reset.php" method="post">
                <div class="actual-form">
                    <div class="input-wrap">
<input type="hidden" name="random">
                        <input
                            type="text"
                            minlength="4"
                            class="input-field"
                            autocomplete="off"
                            required
                            name="email"

                        />
                        <label>Enter Your Email</label>
                    </div>
                    <div class="input-wrap">
                        <input
                            type="text"
                            class="input-field"
                            autocomplete="off"
                            name="verify"
                        />
                        <label>Enter Verification Code</label>
                    </div>
                    <button class="btn" name="send">Send</button>
                    <button name="var" class="btn" id="ver">Verify</button>
                    <a href="log_sign.php" class="back"><i class="fa-solid fa-left-long"></i></a>
                </div>
            </div>
            <div class="image">
                <img src="img/forgPass.svg" alt="">
            </div>
            </form>
        </div>

        <div class="box" id="box2">

            <div class="form">
                <div class="actual-form">
                    <div class="input-wrap">

                        <input
                            type="password" id="password2"
                            minlength="4"
                            class="input-field"
                            autocomplete="off"
                            required
                        />
                        <label>Password</label>
                        <div id="toggle2" ><i class="fa fa-eye "style="left: 0;bottom: 0" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="input-wrap">

                        <input
                            type="password"
                            minlength="4"
                            class="input-field"
                            autocomplete="off"
                            required
                        />
                        <label>Confirm Password</label>

                    </div>
                    <button class="ubtn">Update Password</button>
                </div>
            </div>
            <div class="image">
                <img src="img/forgPass.svg" alt="">
            </div>
        </div>
    </div>

</div>
<!--<script type="text/javascript">-->
<!--    document.getElementById('ver').addEventListener('click',()=>{-->
<!--        document.getElementById('box').style.transform='translateX(-1000px)'-->
<!--        document.getElementById('box').style.display='none'-->
<!--        // document.getElementById('box2').style.transform='translateX(-1000px)'-->
<!--        document.getElementById('box2').style.display='flex'-->
<!--    });-->
<!---->
<!---->
<!--</script>-->
<script src="java/log-sign.js"></script>
</body>
</html>