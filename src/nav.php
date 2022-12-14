!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/test.css">
    <style>
        .container{
            background-color: transparent;
            position: initial;
        }
        .card{
            margin: 15px;
            width: 300px;
        }
        .z{
            position: relative;
            top: -550px;
            left: 180px;
        }
        }
        a{
            text-decoration: none;
        }
        card{

        }
        button{
            border: none;
            background-color: transparent;
        }
    </style>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #000d0f;
        }
        .container{
            position: relative;
            width: 80px;
            height: 50px;
            border-radius: 40px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            transition: 0.5s;
        }
        .container:hover{
            width: 120px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0px 0px 14px #00deff;
        }
        .container .next{
            position: absolute;
            top: 50%;
            right: 30px;
            display: block;
            width: 12px;
            height: 12px;
            border-top: 2px solid #fff;
            border-left: 2px solid #fff;
            z-index: 1;
            transform: translateY(-50%) rotate(135deg);
            cursor: pointer;
            opacity: 0;
            transition: 0.5s;
        }
        .container:hover .next{
            opacity: 1;
            right: 20px;
        }
        .container .prev{
            position: absolute;
            top: 50%;
            left: 20px;
            display: block;
            width: 12px;
            height: 12px;
            border-top: 2px solid #fff;
            border-left: 2px solid #fff;
            z-index: 1;
            transform: translateY(-50%) rotate(315deg);
            cursor: pointer;
            opacity: 0;
            transition: 0.5s;
        }
        .container:hover .prev{
            opacity: 1;
            right: -20px;
        }
        #box span{
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 46px;
            display: none;
            color: #00deff;
            font-size: 24px;
            font-weight: 700;
            user-select: none;
        }

        /* js code */

        #box span:nth-child(1){
            display: inline;
        }

        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap");

    </style>
</head>
<body>
<div class="container">
    <span class="next" onclick="nextNum()"></span>
    <span class="prev" onclick="prevNum()"></span>
    <div id="box"></div>
</div>

<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=An%20Najah%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 750px; height: 400px;"></iframe><a href="https://technologg.com/" style="display:none">technologg</a><style>.mapouter{position:relative;text-align:right;height:400px;width:750px;}</style><style>.gmap_canvas{overflow:hidden;background:none!important;height:400px;width:750px;}</style></div></div>
<input type="text" value="https://maps.google.com/maps?q=An%20Najah%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 750px; height: 400px;">

<script>
    var numbers = document.getElementById('box');
    for(i=0; i<100; i++){
        var span = document.createElement('span')
        span.textContent = i;
        numbers.appendChild(span);
    }
    var num = numbers.getElementsByTagName('span');
    var index = 0;

    function nextNum(){
        num[index].style.display = "none";
        index = (index + 1) % num.length;
        num[index].style.display = "initial";
    }
    function prevNum(){
        num[index].style.display = "none";
        index = (index - 1 + num.length) % num.length;
        num[index].style.display = "initial";
    }
</script>

</body>
</html>