<?php
include 'connect.php';
session_start();

if(isset($_POST['send']) and isset($_SESSION['user_id'])){
    $fb=$_POST['fb'];
    $user= $_SESSION['user_id'];
    $stmt = "UPDATE `user` SET `feedback`='$fb'WHERE userId='$user'";
    $query = mysqli_query($db, $stmt);
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="Css/all.min.css">
    <title>Let Us Know Your Feedback</title>
    <style>

        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            background-image:linear-gradient(45deg,#c49f72,#c49f72,#1F5662);
            font-family: 'Times New Roman', 'Times', 'serif';
            font-weight: bold;
            font-size: 20px;
            overflow: hidden;
            height:100vh;
        }
        .panel-container {
            background-color: rgba(221, 221, 221,0.3);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            font-size: 90%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
            max-width: 700px;
            height: 400px;
            color:#1F5662;
            margin:8% auto 2% auto;
        }

        .panel-container strong {
            line-height: 20px;
        }

        .ratings-container {
            display: flex;
            margin: 20px 0;
        }

        .rating {
            flex: 1;
            cursor: pointer;
            padding: 20px;
            margin: 10px 5px;
        }

        .rating:hover,
        .rating.active {
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .rating img {
            width: 40px;
        }

        .rating small {
            color: #fff;
            display: inline-block;
            margin: 10px 0 0;
        }

        .rating:hover small,
        .rating.active small {
            color: #1F5662;
        }
        .btn {
            background-color: #1F5662;
            color: #ffffff;
            font-weight: bold;
            font-family: 'Times New Roman', 'Times', 'serif';
            border: 0;
            border-radius: 4px;
            padding: 12px 30px;
            cursor: pointer;
        }
        .btn:focus {
            outline: 0;
        }

        .btn:active {
            transform: scale(0.98);
        }

        .fa-heart {
            color: red;
            font-size: 30px;
            margin-bottom: 10px;
        }


        .credit a{
            text-decoration: none;
            color: #fff;
        }

        .credit {
            text-align: center;
        }
        textarea{
            width: 300px;
            height: 50px;
            max-width: 300px;
            max-height: 100px;
            margin: 20px;
        }

    </style>
</head>
<body>
<div id="panel" class="panel-container">
    <form method="post" action="feedback.php">
    <strong>How satisfied are you with our site?</strong>
    <div class="ratings-container">
        <div class="rating">
            <i style="font-size: 30px" class="fa-regular fa-face-frown"></i>
            <small>Unhappy</small>
        </div>

        <div class="rating">
            <i style="font-size: 30px" class="fa-regular fa-face-smile"></i>
            <small style="display: block">Neutral</small>
        </div>

        <div class="rating active">
            <i style="font-size: 30px" class="fa-regular fa-face-smile-beam"></i>
            <small>Satisfied</small>
        </div>
    </div>
    <div>
        <textarea name="fb">

        </textarea>
    </div>
    <button type="submit" name="send" class="btn" id="send">Send Review</button>
    </form>
</div>

<div class="credit">Made with <span style="color:tomato">❤</span> by <a  href="#">Sakanat</a></div>

</body>
<!--<script>-->
<!---->
<!--    const ratings = document.querySelectorAll('.rating')-->
<!--    const ratingsContainer = document.querySelector('.ratings-container')-->
<!--    const sendBtn = document.querySelector('#send')-->
<!--    const panel = document.querySelector('#panel')-->
<!--    let selectedRating = 'Satisfied'-->
<!---->
<!--    ratingsContainer.addEventListener('click', (e) => {-->
<!--        if(e.target.parentNode.classList.contains('rating')) {-->
<!--            removeActive()-->
<!--            e.target.parentNode.classList.add('active')-->
<!--            selectedRating = e.target.nextElementSibling.innerHTML-->
<!--        }-->
<!--        if(e.target.classList.contains('rating')) {-->
<!--            removeActive()-->
<!--            e.target.classList.add('active')-->
<!--            selectedRating = e.target.nextElementSibling.innerHTML-->
<!--        }-->
<!---->
<!--    })-->
<!---->
<!--    sendBtn.addEventListener('click', (e) => {-->
<!--        panel.innerHTML = `-->
<!---->
<!--        Thank You!-->
<!---->
<!--        Feedback : ${selectedRating}-->
<!--        We'll use your feedback to improve our customer support-->
<!--    `-->
<!--    })-->
<!---->
<!--    function removeActive() {-->
<!--        for(let i = 0; i < ratings.length; i++) {-->
<!--            ratings[i].classList.remove('active')-->
<!--        }-->
<!--    }-->
<!---->
<!---->
<!--</script>-->


</html>
