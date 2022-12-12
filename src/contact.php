<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cairo:wght@400;500;600;700&family=Lobster&family=Open+Sans:wght@400;700&family=Work+Sans:ital,wght@0,300;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
<!--    <link rel="stylesheet" href="Css/all.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/contactUs.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap");

        svg {
            width: 100%;
            overflow: visible;
            position: relative;
            top: -20px;
        }

        .hidden {
            visibility: hidden;
        }

        #base {
            cursor: pointer;
        }
.navbar-brand{
    font-family: "Lobster";

}
    </style>
</head>

<body>

<main>

    <div class="box">
        <img src="img/contact.svg" alt="">
        <div class="inner-box">
            <div class="heading">
                <h1>Contact Us</h1>
                <p>We will be happy to hear your suggestions and recommendations</p>
            </div>
            <div class="forms-wrap">

                <form action="mail.php" method="post" autocomplete="off" class="sign-in-form" id="login">



                    <div class="actual-form">
                        <div class="input-wrap">

                            <input
                                type="text"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                                name="name"
                            />
                            <label>Name</label>
                        </div>
                        <div class="input-wrap">
                            <input
                                type="email"
                                class="input-field"
                                autocomplete="off"
                                required
                                name="email"
                            />
                            <label>Email</label>
                        </div>
                        <div class="input-wrap">
        <textarea name="message" class="input-field"  style="height: 80px">
        </textarea>
                            <label>Type Your Message...</label>
                        </div>
                        <button style="background-color: transparent;border: none" type="submit" name="send">     <svg type="submit"class="sign" name="send" viewBox="200 100 1000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="paperPlaneRoute" d="M563.558,526.618 C638.854,410.19 787.84,243.065 916.53,334.949 1041.712,424.328 858.791,877.927 743.926,856.655 642.241,838.669 699.637,688.664 700,540" stroke="white"  stroke-width="3" style="stroke-dashoffset: 0.001px; stroke-dasharray: 0px, 999999px;"/>
                                <g id="rectSent" clip-path="url(#clipPath)">
                                    <g id="rectSentItems">
                                        <rect id="sentBase" x="460" y="468.5" width="480" height="143" rx="23" fill="white"/>
                                        <text id="txtSent" fill="#1F5662" xml:space="preserve" style="white-space: pre" font-family="Roboto" font-size="82" font-weight="bold" letter-spacing="0.025em"><tspan x="637.487" y="568.027">Sent!</tspan></text>
                                    </g>
                                </g>
                                <g id="base">
                                    <g filter="url(#flShadow)"><rect id="btnBase" x="418.117" y="460.55" width="563.765" height="158.899" rx="27" fill="#F1F3FF" /></g>
                                    <text id="txtSend" fill="#1F5662" xml:space="preserve" style="white-space: pre" font-family="Roboto" font-size="82" font-weight="bold" letter-spacing="0.06em"><tspan x="679.379" y="568.027">Send</tspan></text>
                                    <g id="paperPlane" style="transform-origin: 0px 0px 0px;" data-svg-origin="563.55859375 527.734375" transform="matrix(0.8396,0.5432,-0.5432,0.8396,377.09924,-222.6639)">
                                        <path id="paperPlanePath" d="M560.611 481.384C562.003 479.263 565.113 479.263 566.505 481.384L607.063 543.177C615.657 556.272 607.507 573.375 592.766 575.676L566.422 557.462V510.018C566.422 508.436 565.14 507.154 563.558 507.154C561.976 507.154 560.693 508.436 560.693 510.018V557.462L534.349 575.676C519.609 573.375 511.459 556.272 520.053 543.177L560.611 481.384Z" fill="#1F5662"/>
                                    </g>
                                </g>
                                <circle id="cBottom" cx="700" cy="540" r="97.516" fill="#1F5662"  class="hidden"/>
                                <circle id="cTop" cx="700" cy="502.365" r="107.898" fill="#1F5662" class="hidden"/>
                                <circle id="cCenter" cx="700" cy="540" r="123" fill="#1F5662" class="hidden" />
                                <circle id="cEnd" cx="495" cy="540" r="98" fill="#1F5662" class="hidden"/>
                                <path id="tickMark" fill-rule="evenodd" clip-rule="evenodd" d="M597.3 489.026C595.179 487.257 592.026 487.541 590.257 489.662L550.954 536.768L534.647 522.965C532.539 521.181 529.384 521.444 527.6 523.551L519.096 533.598C517.312 535.706 517.575 538.861 519.682 540.645L538.606 556.662C538.893 557.162 539.272 557.621 539.74 558.012L549.847 566.445C551.967 568.214 555.12 567.929 556.889 565.809L608.042 504.501C609.811 502.38 609.527 499.227 607.406 497.458L597.3 489.026Z" fill="#1F5662" class="hidden"/>
                                <defs>
                                    <clipPath id="clipPath">
                                        <rect id="mask1" x="700" y="450" width="520" height="180" fill="white" id="clipRect"/>
                                    </clipPath>
                                    <filter id="flShadow" x="0" y="0" width="1000" height="1000" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                        <feOffset dx="4" dy="4"/>
                                        <feGaussianBlur stdDeviation="3.5"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0.5125 0 0 0 0 0.420677 0 0 0 0 0.420677 0 0 0 0.25 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                                    </filter>
                                </defs>
                            </svg>
                        </button>

                    </div>
                </form>


            </div>

            <div class="carousel" id="c">
                <div class="contact-info">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>

                    <h3 class="em">Address</h3>
                    <p>Rafidia, Nablus, Palestine, 55060</p>
                </div>
                <div class="contact-info">
                    <i class="fa-solid fa-phone"></i>
                    <h3 class="em">Phone</h3>
                    <p>+970 56-292-3152</p>
                </div>
                <div class="contact-info">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h3 class="em">Email</h3>
                    <p>rubaqawareeq2@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- google map -->
<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1199&amp;height=400&amp;hl=en&amp;q=Nablus&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
<!-- Javascript file -->
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://assets.codepen.io/16327/MorphSVGPlugin3.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/MotionPathPlugin.min.js"></script>
<script src="https://assets.codepen.io/16327/DrawSVGPlugin3.min.js"></script>
<!--<script src="java/log-sign.js"></script>-->

</body>
<script type="text/javascript">
    /* For button animation*/
    gsap.registerPlugin(MotionPathPlugin);
    MorphSVGPlugin.convertToPath("circle, rect");
    gsap.set("#paperPlaneRoute", { drawSVG: "0% 0%" });
    gsap.set("#rectSentItems", { x: "-=240" });
    const tl = gsap.timeline();
    let ranOnce = false;
    function onBtnUp() {
        if (ranOnce) {
            tl.restart();
            return;
        }
        ranOnce = true;
        tl.to("#base", { duration: 0.2, scale: 1, transformOrigin: "50% 50%" });
        tl.to(
            "#btnBase",
            { duration: 0.77, morphSVG: "#cBottom", ease: "power1.inOut" },
            "start"
        );

        tl.to("#btnBase", { duration: 0.23, morphSVG: "#cTop", ease: "power1.inOut" });
        tl.to("#btnBase", {
            duration: 0.2,
            morphSVG: "#cCenter",
            ease: "power1.inOut"
        });
        tl.to(
            "#btnBase",
            { duration: 0.5, morphSVG: "#cEnd", ease: "power1.inOut" },
            "revealStart"
        );
        tl.to("#rectSentItems", { x: "0", duration: 0.5 }, "revealStart");
        tl.to(
            "#mask1",
            { x: "-=260", duration: 0.5, ease: "power1.inOut" },
            "revealStart"
        );
        tl.to(
            "#paperPlane",
            { x: "-=205", duration: 0.5, ease: "power1.inOut" },
            "revealStart"
        );
        tl.to(
            "#paperPlanePath",
            { duration: 0.43, morphSVG: "#tickMark" },
            "start+=0.77"
        );

        tl.to(
            "#txtSend",
            { duration: 0.6, scale: 0, transformOrigin: "50% 50%" },
            "start"
        );
        tl.to(
            "#paperPlaneRoute",
            { drawSVG: "80% 100%", duration: 0.7, ease: "power1.inOut" },
            "start+=0.3"
        );
        tl.to(
            "#paperPlaneRoute",
            { drawSVG: "100% 100%", duration: 0.2, ease: "power1.inOut" },
            "start+=1"
        );

        tl.to(
            "#paperPlane",
            {
                duration: 1,
                ease: "power1.inOut",
                immediateRender: true,
                motionPath: {
                    path: "#paperPlaneRoute",
                    align: "#paperPlaneRoute",
                    alignOrigin: [0.5, 0.5],
                    autoRotate: 90
                }
            },
            "start"
        );

        tl.to(
            "#paperPlanePath",
            { duration: 0.15, attr: { fill: "#ffffff" } },
            "start"
        );
        tl.to(
            "#paperPlanePath",
            { duration: 0.15, attr: { fill: "#4E67E8" } },
            "start+=0.77"
        );
    }

    function onBtnDown() {
        gsap.timeline({ defaults: { clearProps: true } });
        gsap.to("#base", { duration: 0.1, scale: 0.9, transformOrigin: "50% 50%" });
    }

    const btn = document.getElementById("base");
    btn.addEventListener("mousedown", onBtnDown);
    btn.addEventListener("mouseup", onBtnUp);
    /* For Counters*/

    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;

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
    const inputs = document.querySelectorAll(".input-field");
    const toggle_btn = document.querySelectorAll(".tog");
    const main = document.querySelector("main");
    const bullets = document.querySelectorAll(".bullets span");
    const images = document.querySelectorAll(".image");

    inputs.forEach((inp) => {
        inp.addEventListener("focus", () => {
            inp.classList.add("active");
        });
        inp.addEventListener("blur", () => {
            if (inp.value != "") return;
            inp.classList.remove("active");
        });
    });

    toggle_btn.forEach((btn) => {
        btn.addEventListener("click", () => {
            main.classList.toggle("sign-up-mode");
        });
    });

    function moveSlider() {
        let index = this.dataset.value;

        let currentImage = document.querySelector(`.img-${index}`);
        images.forEach((img) => img.classList.remove("show"));
        currentImage.classList.add("show");

        const textSlider = document.querySelector(".text-group");
        textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

        bullets.forEach((bull) => bull.classList.remove("active"));
        this.classList.add("active");
    }
</script>
</html>