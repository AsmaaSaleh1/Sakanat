<?php
session_start();
if(isset($_POST["verify"]) and isset($_POST['var'])) {
    $code = $_POST["verify"];
    echo $_SESSION['email'];
    echo $_SESSION['random'];
    if ($code == $_SESSION['random']) {
header("Location:updatePass.php");
    }
    else{
        echo "<script> alert('Not correct code')</script>";
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
                <form action="verifyCode.php" method="post">
                    <div class="actual-form">
                        <div class="input-wrap">

                            <input
                                type="text"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                name="email2"
                                value="<?php echo $_SESSION['email']?>"

                            />
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
                        <button name="var" class="btn" id="ver">Verify</button>
                    </div>
            </div>
            <div class="image">
                <img src="img/forgPass.svg" alt="">
            </div>
            </form>
        </div>

    </div>

</div>

<script src="java/log-sign.js"></script>
</body>
</html>