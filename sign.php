<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content"width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="Css/log-sign.css" />

</head>
<body>
<main>
    <div class="box">
        <div class="inner-box">
            <div class="forms-wrap">
                <form action="index.html" class="sign-up-form" id="signUp" method="post">
                    <div class="logo d-flex justify-content-between mt-5 cap v" style="position: absolute;
    " >
                        <a class="sign s1" href="#" style="background-color: #1F5662; " >Sign up</a>
                        <a class="log l1 tog" href="#" id="loginLink"style="background-color: #c49f72" >Login</a>
                    </div>

                    <div class="heading s">
                        <h2>Sign up</h2>
                    </div>

                    <div class="actual-form">
                        <div class="input-wrap">

                            <input
                                name="name"
                                type="text"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                            />
                            <label>Name</label>
                        </div>
                        <div class="input-wrap">
                            <input
                                name="email"
                                type="email"
                                class="input-field"
                                autocomplete="off"
                                required
                            />
                            <label>Email</label>
                        </div>
                        <div class="input-wrap">
                            <input
                                type="text"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                                name="pNum"
                            />
                            <label>Phone Number</label>
                        </div>
                        <div class="input-wrap">
                            <input
                                name="regPass"
                                type="password"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                            />
                            <label>Password</label>
                        </div>
                        <div class="input-wrap">
                            <input
                                name="confPass"
                                type="password"
                                minlength="4"
                                class="input-field"
                                autocomplete="off"
                                required
                            />
                            <label>Confirm Password</label>
                        </div>

                        <input type="submit" value="Sign Up" class="sign-btn" />


                    </div>
                </form>


                <form action=""  class="sign-in-form" method="post" id="login">
                    <div class="logo d-flex justify-content-between mt-5 cap2" >
                        <a class="sign tog" href="#"id="registerLink" >Sign up</a>
                        <a class="log" href="#" >Login</a>
                    </div>

                    <div class="heading s">
                        <h2 >Welcome Back
                        </h2>
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
                    </div>

                    <div class="actual-form">
                        <div class="input-wrap">
                            <i class="fas fa-user"></i>
                            <input
                                type="text"
                                name="uName"
                                minlength="4"
                                class="input-field"

                                required
                            />
                            <label>Username</label>
                        </div>

                        <div class="input-wrap">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input
                                type="password" id="password2"
                                name="uPass"
                                minlength="4"
                                class="input-field"
                                required
                            />
                            <label>Password</label>
                            <div id="toggle2" ><i class="fa fa-eye "style="left: 0;bottom: 0" aria-hidden="true"></i>
                            </div>
                        </div>
                        <button type="submit" value="Sign In" class="sign-btn">Login <span></span></button>

                        <p class="text">

                            <a href="reset.php">Forget Password?</a>
                        </p>
                    </div>
                </form >


            </div>

            <div class="carousel" id="c">
                <img src="img/Apartment rent-pana.svg" alt="" srcset="">
                <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 430" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(216.615, 209.925, 195.137, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,215L18.5,207.8C36.9,201,74,186,111,179.2C147.7,172,185,172,222,207.8C258.5,244,295,315,332,329.7C369.2,344,406,301,443,258C480,215,517,172,554,150.5C590.8,129,628,129,665,164.8C701.5,201,738,272,775,250.8C812.3,229,849,115,886,78.8C923.1,43,960,86,997,129C1033.8,172,1071,215,1108,200.7C1144.6,186,1182,115,1218,136.2C1255.4,158,1292,272,1329,322.5C1366.2,373,1403,358,1440,308.2C1476.9,258,1514,172,1551,164.8C1587.7,158,1625,229,1662,222.2C1698.5,215,1735,129,1772,129C1809.2,129,1846,215,1883,215C1920,215,1957,129,1994,143.3C2030.8,158,2068,272,2105,272.3C2141.5,272,2178,158,2215,93.2C2252.3,29,2289,14,2326,64.5C2363.1,115,2400,229,2437,258C2473.8,287,2511,229,2548,207.8C2584.6,186,2622,201,2640,207.8L2658.5,215L2658.5,430L2640,430C2621.5,430,2585,430,2548,430C2510.8,430,2474,430,2437,430C2400,430,2363,430,2326,430C2289.2,430,2252,430,2215,430C2178.5,430,2142,430,2105,430C2067.7,430,2031,430,1994,430C1956.9,430,1920,430,1883,430C1846.2,430,1809,430,1772,430C1735.4,430,1698,430,1662,430C1624.6,430,1588,430,1551,430C1513.8,430,1477,430,1440,430C1403.1,430,1366,430,1329,430C1292.3,430,1255,430,1218,430C1181.5,430,1145,430,1108,430C1070.8,430,1034,430,997,430C960,430,923,430,886,430C849.2,430,812,430,775,430C738.5,430,702,430,665,430C627.7,430,591,430,554,430C516.9,430,480,430,443,430C406.2,430,369,430,332,430C295.4,430,258,430,222,430C184.6,430,148,430,111,430C73.8,430,37,430,18,430L0,430Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(232.552, 221.062, 217.372, 1)" offset="0%"></stop><stop stop-color="rgba(224.52, 227.725, 241.659, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,129L18.5,172C36.9,215,74,301,111,329.7C147.7,358,185,330,222,308.2C258.5,287,295,272,332,243.7C369.2,215,406,172,443,172C480,172,517,215,554,250.8C590.8,287,628,315,665,286.7C701.5,258,738,172,775,114.7C812.3,57,849,29,886,78.8C923.1,129,960,258,997,308.2C1033.8,358,1071,330,1108,272.3C1144.6,215,1182,129,1218,136.2C1255.4,143,1292,244,1329,258C1366.2,272,1403,201,1440,150.5C1476.9,100,1514,72,1551,71.7C1587.7,72,1625,100,1662,100.3C1698.5,100,1735,72,1772,86C1809.2,100,1846,158,1883,200.7C1920,244,1957,272,1994,272.3C2030.8,272,2068,244,2105,193.5C2141.5,143,2178,72,2215,64.5C2252.3,57,2289,115,2326,164.8C2363.1,215,2400,258,2437,258C2473.8,258,2511,215,2548,222.2C2584.6,229,2622,287,2640,315.3L2658.5,344L2658.5,430L2640,430C2621.5,430,2585,430,2548,430C2510.8,430,2474,430,2437,430C2400,430,2363,430,2326,430C2289.2,430,2252,430,2215,430C2178.5,430,2142,430,2105,430C2067.7,430,2031,430,1994,430C1956.9,430,1920,430,1883,430C1846.2,430,1809,430,1772,430C1735.4,430,1698,430,1662,430C1624.6,430,1588,430,1551,430C1513.8,430,1477,430,1440,430C1403.1,430,1366,430,1329,430C1292.3,430,1255,430,1218,430C1181.5,430,1145,430,1108,430C1070.8,430,1034,430,997,430C960,430,923,430,886,430C849.2,430,812,430,775,430C738.5,430,702,430,665,430C627.7,430,591,430,554,430C516.9,430,480,430,443,430C406.2,430,369,430,332,430C295.4,430,258,430,222,430C184.6,430,148,430,111,430C73.8,430,37,430,18,430L0,430Z"></path></svg>

            </div>
        </div>
    </div>
</main>
<section class="load">
    <div class="loader">
        <div class="dot"style="--i:0;"></div>
        <div class="dot"style="--i:1;"></div>
        <div class="dot"style="--i:2;"></div>
        <div class="dot"style="--i:3;"></div>
        <div class="dot"style="--i:4;"></div>
        <div class="dot"style="--i:5;"></div>
        <div class="dot"style="--i:6;"></div>
        <div class="dot"style="--i:7;"></div>
        <div class="dot"style="--i:8;"></div>
        <div class="dot"style="--i:9;"></div>
    </div>

    <h2> Sakanat</h2>
    <div class="loader">
        <div class="dot"style="--i:0;"></div>
        <div class="dot"style="--i:1;"></div>
        <div class="dot"style="--i:2;"></div>
        <div class="dot"style="--i:3;"></div>
        <div class="dot"style="--i:4;"></div>
        <div class="dot"style="--i:5;"></div>
        <div class="dot"style="--i:6;"></div>
        <div class="dot"style="--i:7;"></div>
        <div class="dot"style="--i:8;"></div>
        <div class="dot"style="--i:9;"></div>
    </div>
</section>
<!-- Javascript file -->

<script src="java/log-sign.js"></script>
</body>
</html>