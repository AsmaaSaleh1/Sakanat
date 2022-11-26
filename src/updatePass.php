<?php
if(isset($_POST['update'])and isset($_POST['pass']) and isset($_POST['conf'])){
    $p=$_POST['pass'];
    $c=$_POST['conf'];
    if($p==$c){
        header("Location:Log-Sign.html");
        echo "<script>alert('Password updated successfully') </script>";

    }
    else{
        echo "<script>alert('Miss match Password') </script>";
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

        <div style="display: flex" class="box" id="box2">

            <div class="form">
                <form action="" method="post">
                <div class="actual-form">
                    <div class="input-wrap">

                        <input
                            type="password" id="password2"
                            minlength="4"
                            class="input-field"
                            autocomplete="off"
                            required
                            name="pass"
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
                            name="conf"
                        />
                        <label>Confirm Password</label>

                    </div>
                    <button name="update" class="ubtn">Update Password</button>
                </div>
                </form>
            </div>

            <div class="image">
                <img src="img/forgPass.svg" alt="">
            </div>
        </div>
    </div>

</div>

<script src="java/log-sign.js"></script>
</body>
</html>