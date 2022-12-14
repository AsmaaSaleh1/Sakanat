<?php
    include 'navbar.php';


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sakanat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/bootstrap.min.css">

        <link rel="stylesheet" href="Css/test.css">
        <style>
            .content{
                display: flex;
                justify-content: center;
                flex-direction: row;
                flex-wrap: wrap;
            }
            .card,{
                background-color: #ffffff;
                width: 220px;
                box-shadow: 0 5px 25px RGBA(1 1 1 /15%);
                border-radius: 10px;
                padding: 10px;
                margin: 1%;
                transition: 0.7s ease;
            }
            .card:hover{
                transform: scale(1.1);
            }
            .pic{
                text-align: center;
                /*to scale the picture*/
            }
            .info{
                text-align: center;
            }
            .pic-card{
                text-align: center;
                position: relative;
                overflow: hidden;
            }
            .con{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                gap: 30px;
            }
            .con .card{
                border-radius: 15px;
                max-width: 300px;
                box-shadow: 0 5px 25px RGBA(1 1 1 /15%);
                transition: 0.7s ease;
                padding: 25px;
                box-shadow: 0 5px 25px rgba(1 1 1 /15%);
            }
        </style>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="Css/all.min.css"> </head>
    <body>

    <!-- Header section -->

<!--    <h1 class="text-center display-4" style="font-size: 2rem">--><?//=$_SESSION['user_phone']?><!--</h1>-->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-be-interval="4000">

                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome Dear</h2>
                    <p>Love where you line,and who you live with.</p>            </div>
                <img src="img/Home.png" style="width: 700px;height: 400px;position: relative;top: 100px" class="d-block w-40 "  alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/house-.png" class="d-block w-40" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Save Time</h2>
                    <p>Best Website To Find Home You Search For.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Student.png" class="d-block w-40" style="" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Rent Home</h2>
                    <p>Rent Home With Best Price.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 500" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,500 C 0,500 0,250 0,250 C 86.97217451047749,278.1332875300584 173.94434902095497,306.2665750601168 232,284 C 290.055650979045,261.7334249398832 319.19477842665754,189.0669872895912 373,183 C 426.80522157334246,176.9330127104088 505.276537272415,237.46547578151842 589,276 C 672.723462727585,314.5345242184816 761.6990724836827,331.07110958433526 835,303 C 908.3009275163173,274.92889041566474 965.9271727928547,202.25008588114048 1027,197 C 1088.0728272071453,191.74991411885952 1152.5922363448985,253.9285468911027 1222,274 C 1291.4077636551015,294.0714531088973 1365.7038818275507,272.0357265544486 1440,250 C 1440,250 1440,500 1440,500 Z" stroke="none" stroke-width="0" fill="#1f5662" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 250)"></path></svg>
    <!--About section  -->
    <div class="wrapper" id="about">
        <h1>About Us</h1>
        <span class="line"></span>
        <p id="msg">
        </p></div>
    <!-- Why us -->
    <div class="container text-center reveal">
        <h1 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">Why Us?</span>
  </span>
        </h1>
        <div class="content con" >
            <div class="card">
                <div class="pic-card">
                    <!--picture-->
                    <img class="size-img-card" src="img/Easy-chat.png" alt="Easy Communicate">
                </div>
                <div class="info">
                    <!-- title + information-->
                    <h3>Communicate</h3>
                    <p>We provide you with easy communication between the renter and the owner.</p>
                </div>
            </div>
            <div class="card">
                <div class="pic-card">
                    <!--picture-->
                    <img class="size-img-card" src="img/Best_place.png" alt="Place">
                </div>
                <div class="info">
                    <!-- title + information-->
                    <h3>Place</h3>
                    <p>We provide you with the opportunity to choose the best location to satisfy your needs at the lowest prices.</p>
                </div>
            </div>
            <div class="card">
                <div class="pic-card">
                    <!--picture-->
                    <img class="size-img-card" src="img/lowest-cost.png" alt="Cost">
                </div>
                <div class="info">
                    <!-- title + information-->
                    <h3>Cost</h3>
                    <p>This site lets you choose the best apartment you want easily for as little cost as possible.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Home-->

    <section class="houses reveal">
        <h2 class="title">Latest House</h2>
        <span class="line"></span>
        <div class="content">
            <?php
            $sql="SELECT * FROM home where accepted='1'";
            $query=mysqli_query($db,$sql);
             $i=0;
            if(mysqli_num_rows($query)>0)
            {
                while ($rows=mysqli_fetch_assoc($query) and $i<3){
                    $home=$rows['hID'];
                    ?>

                    <div class="col-md-4">
                        <div class="house">
                            <div class="pic">
                                    <!--picture-->
                                    <?php
                                    $sql2="SELECT * FROM home_img where HID='$home'";
                                    $query2=mysqli_query($db,$sql2);

                                    if(mysqli_num_rows($query2)>0)
                                    {
                                        $row=mysqli_fetch_assoc($query2);
                                        $photo=$row['imgPath'];
//                $photo=$rows['photo'];
                                        echo  '<img class="image" src="'.$photo.'">'; }?>
                              <style>i{
                                      color: #ebb00e;
                                  }</style>
                                <div><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                </div>

                            <div class="info">
                                <!-- title + information-->
                                <h3><?php echo $rows['hName']?>  <a href="viewHome.php?property_id=<?=  $rows['hID']; ?> "> <i class="fa-solid fa-angles-right"></i></a></h3>
                                <p><?php echo $rows['description']?> </p>
                            </div>
                            </div>

                    </div>
                    <?php
                    $i++;
                }
            }
            ?>
<!--            <div class="house">-->
<!--                <div class="pic">-->
                    <!--picture-->
<!--                    <img src="img/hom21.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="info">-->
                    <!-- title + information-->
<!--                    <h3>Nablus <a href="#"><i class="fa-solid fa-angles-right"></i></a></h3>-->
<!--                    <p>Room near An Najah University with wifi </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="house">-->
<!--                <div class="pic">-->
                    <!--picture-->
<!--                    <img src="img/home2.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="info">-->
                    <!-- title + information-->
<!--                    <h3>Ramallah <a href="#"><i class="fa-solid fa-angles-right"></i></a></h3>-->
<!--                    <p>Two Room near Bergzeit University</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="house">-->
<!--                <div class="pic">-->
                    <!--picture-->
<!--                    <img src="img/h3.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="info">-->
                    <!-- title + information-->
<!--                    <h3>Nablus <a href="#"><i class="fa-solid fa-angles-right"></i></a></h3>-->
<!--                    <p>Apartment in Rafidia street</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="house">-->
<!--                <div class="pic">-->
                    <!--picture-->
<!--                    <img src="img/Home3.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="info">-->
                    <!-- title + information-->
<!--                    <h3 >Tulkarem <a href="#"><i class="fa-solid fa-angles-right"></i></a></h3>-->
<!--                    <p>Room near Kadoorie university</p>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </section>
    <!-- Counters-->

    <div class="container counter text-center">
        <img src="img/agr.svg" alt="">
        <div class="row co">
            <div class="col">
                <div class="container2">
                    <i class="fa-solid fa-house z"></i>
                    <span class="num" data-val="600">000</span>
                    <span class="text">House</span>
                </div>
            </div>
            <div class="col">
                <div class="container2">
                    <i class="fa-solid fa-users z"></i>
                    <span class="num" data-val="540">000</span>
                    <span class="text">Users</span>
                </div>
            </div>
            <div class="col">
                <div class="container2">
                    <i class="fa-regular fa-comment z"></i>
                    <span class="num" data-val="425">000</span>
                    <span class="text">Contact</span>
                </div>
            </div>
            <div class="col">
                <div class="container2">
                    <i class="fas fa-star z"></i>
                    <span class="num" data-val="280">000</span>
                    <span class="text">Five Stars</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Users Feedback -->
    <h2 class="title">Customers Feedback</h2>
    <span class="line"></span>
    <div id="carouselExampleIndicators" class="carousel slide feedback" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

        </div>



        <div class="carousel-inner">
            <?php

            $fb="";
            $sql="SELECT feedback,fName,photo,lName,photo from user WHERE Email!='sakanat@gmail.com' and feedback !=''";
            $query=mysqli_query($db,$sql);
            if(mysqli_num_rows($query)>0) {

                while ($rows = mysqli_fetch_assoc($query)) {
                    $name = $rows['fName'] . " " . $rows['lName'];
                    $photo = $rows['photo'];
                    $fb = $rows['feedback'];

                }
            ?>
            <div class="carousel-item active">
                <img src="<?php echo $photo ?>" class="d-block " alt="...">
                <h4><?php echo $name ?></h4>
                <p><?php echo $fb ?></p>
            </div>
            <?php

            }
            ?>

            <div class="carousel-item ">
                <img src="img/man.png" class="d-block " alt="...">
                <h4>Mohammad Awad</h4>
                <p>So easy to use and I find the home that I was searched</p>
            </div>
            <div class="carousel-item">
                <img src="img/x.png" class="d-block " alt="...">
                <h4>Hiba khaled</h4>
                <p>Fast reply and sweet home with good price.</p>
            </div>
            <div class="carousel-item">
                <img src="img/girl.png" class="d-block " alt="...">
                <h4>Alaa Ali</h4>
                <p>Fast reply and sweet home with good price.</p>
            </div>
        </div>
    </div>

    <section style="width: 100%;text-align: center">

        <h2 style="color: #1F5662;display: inline-block;">Do you enjoy this site? <a style="color: #1F5662" href="feedback.php">Leave feedback</a></h2>
        <svg width="80" height="80" viewBox="0 0 200 200" style="position:relative;right:0">
            <g transform="translate(100 100)">
                <path transform="translate(-50 -50)" fill="#1F5662" d="M92.71,7.27L92.71,7.27c-9.71-9.69-25.46-9.69-35.18,0L50,14.79l-7.54-7.52C32.75-2.42,17-2.42,7.29,7.27v0 c-9.71,9.69-9.71,25.41,0,35.1L50,85l42.71-42.63C102.43,32.68,102.43,16.96,92.71,7.27z"></path>
                <animateTransform
                        attributeName="transform"
                        type="scale"
                        values="1; 1.5; 1.25; 1.5; 1.5; 1;"
                        dur="1s"
                        repeatCount="indefinite"
                        additive="sum">
                </animateTransform>
            </g>
        </svg>

    </section>


    <!-- Our Team -->
    <section class="reveal t">
        <h2 class="title ot">OUR TEAM</h2>
        <div class="content">
            <div class="cardt team">
                <div class="img">-->
                    <img src="img/x.png" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h2>Ruba Qawareeq <br><span>Backend developer</span></h2>
                        <div class="data">
                            <h3>Computer Engineer</h3><br>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="cardt team">
                <div class="img">-->
                    <img src="img/x.png" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h2>Asmaa Saleh <br><span>Front developer</span></h2>
                        <div class="data">
                            <h3>Computer Engineer</h3><br>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <div class="cardt team">
                <div class="img">-->
                    <img src="img/x.png" alt="">
                </div>
                <div class="content">
                    <div class="info">
                        <h2>Ruba Qawareeq <br><span>Backend developer</span></h2>
                        <div class="data">
                            <h3>Computer Engineer</h3><br>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                            </div>


                        </div>

                    </div>
                </div>
            </div>


        </div>

    </section>

    <!--Footer -->
    <section class="end">
        <h3 class="title-diff" style="color:#ecb920">Sakanat</h3>
        <div class="contact">
            <p class="par" style="color:#ecb920">Thank you for visit my own website</p>
            <div class="social-links">
                <a href="#" class="twitter">
                    <i class="fa-brands fa-twitter" style="color: #dddddd"></i>
                </a>
                <a href="#" class="facebook">
                    <i class="fa-brands fa-facebook" style="color: #dddddd"></i>
                </a>
                <a href="#" class="instagram">
                    <i class="fa-brands fa-instagram" style="color: #dddddd"></i>
                </a>
            </div>
            <div class="copyright">
                © Copyright <strong><span>Sakanat</span></strong>.
            </div>
            <div class="links" >
                <h2>Useful Links</h2>
                <ul>
                    <li><a href="#about" style="color: #dddddd">About</a></li>
                    <li><a href="Contact-us.html" style="color: #dddddd">Contact</a></li>
                    <li><a href="#" style="color: #dddddd">Brows</a></li>
                    <li><a href="#" style="color: #dddddd">Company Overview</a></li>
                </ul>
            </div>
            <div class="up">
                <a href="#carouselExampleDark"> <i class="fa-solid fa-arrow-up"></i></a>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    </body>
    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal(){
            var reveals = document.querySelectorAll('.reveal');

            for(var i = 0; i < reveals.length; i++){

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>
    <script>
        //for counters
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 10000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function () {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });
        document.addEventListener('DOMContentLoaded', function() {
            showText("#msg", " On the site, we offer you the best housing and the closest to the area you want, at the best price\n" +
                "    We see the suffering of students, especially in trying to find housing close to his university at an affordable price, so we created this website to help you.", 0, 100);
        });
        //For display paragraph letter by letter
        let showText = function (target, message, index, interval) {
            if (index < message.length) {
                document.querySelector(target).innerHTML =
                    document.querySelector(target).innerHTML + message[index++];
                setTimeout(function () { showText(target, message, index, interval); }, interval);
            }
        }
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml11 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
            .add({
                targets: '.ml11 .line',
                scaleY: [0,1],
                opacity: [0.5,1],
                easing: "easeOutExpo",
                duration: 700
            })
            .add({
                targets: '.ml11 .line',
                translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
                easing: "easeOutExpo",
                duration: 700,
                delay: 100
            }).add({
            targets: '.ml11 .letter',
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: (el, i) => 34 * (i+1)
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
        /**/

    </script>
    </html>
