<?php
session_start();

?>
<script>
    function isLoggedIn() {
        var login_button = document.getElementById('cd-login-button');
        login_button.style.display = "none";
        var signup_button = document.getElementById('cd-signup-button');
        signup_button.style.display = "none";
        var myacc_button = document.getElementById('cd-myaccount-button');
        myacc_button.style.display = "block";         var logout = document.getElementById('cd-logout-button');         logout.style.display = "block";
    }

</script>

<?php
if (isset($_SESSION['login_user']) && $_SESSION['login_user'] != "") {

    ?>
    <script>
        console.log('<?php echo $_SESSION["login_user"]?>');
        console.log('-------')
        window.addEventListener('load', isLoggedIn);
    </script>
    <?php

}
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto%20Slab">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/checkout.css">
<script src="js/modernizr.js"></script>
<script src="js/login.js"></script>
<script src="js/main.js"></script>

<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<link rel="stylesheet" href="css/footer.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<html>
<head>

    <title>OnlineCourses||About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>

    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/checkout.css">
    <script src="js/materialize.min.js"></script>

    <style type="text/css">

        @media (max-width: 720px) {
            #leftImg {
                max-width: 15vw;
                margin-left: 4vw;

            }

            #rightImg {
                max-width: 15vw;
            }

        }


    </style>
    <style>
        .product {
            float: left;
        }

        input::-webkit-input-placeholder {
            /* WebKit browsers */
            line-height: 1.5em;
            padding-left: 3em;
        }

        input:-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            line-height: 1.5em;
            padding-left: 3em;
        }

        input::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            line-height: 1.5em;
            padding-left: 3em;
        }

        input:-ms-input-placeholder {
            /* Internet Explorer 10+ */
            line-height: 1.5em;
            padding-left: 3em;
        }

        input {
            text-indent: 3em;
            text-color: #545656;
        }
    </style>



</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper" style="background-color:#fff;">
            <a href="index.php" class="brand-logo left"><img src="images/logo.png" width="230em"
                                                     style="padding-left: 30%; height: 56px"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"
                                                                                style="color: purple; padding-left: 10px;">menu</i></a>
            <ul class="right hide-on-med-and-down" style="padding-right: 5%;">
                <li><a href="index.php" class="nav-override">Home</a></li>
                
                <li><a href="aboutus.php" class="nav-override">About Us</a></li>
                <li><a href="#" class="cd-login nav-override" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
                <li><a href="#.php" class="nav-override" id="cd-myaccount-button" style="display: none;">My
                        Account</a></li>

                <li><a href="logout.php" class="nav-override" id="cd-logout-button" style="display: none;">Logout</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="nav-override-mobile">Home</a></li>
                
                <li><a href="aboutus.php" class="nav-override-mobile">About Us</a></li>
                <li id="cd-login"><a href="#" class="cd-login nav-override-mobile" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override-mobile" id="cd-signup" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
                <li><a href="#" class="nav-override" id="cd-myaccount-button" style="display: none;">My
                        Account</a></li>
                <li><a href="logout.php" class="nav-override" id="cd-logout-button" style="display: none;">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="cd-user-modal">
    <div class="cd-user-modal-container">
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul>

        <div id="cd-login">
            <form class="cd-form" id="login">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width  has-border" name="email" id="signin-email" type="email"
                           placeholder="E-mail">

                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-border" id="signin-password" name="password" type="text"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message" name="login-error"></span>
                </p>


                <p class="fieldset">
                    <input class="full-width" style="margin-top: 10px; background-color: #00A24A;"
                           onmousemove="this.style.backgroundColor = '#03C55C';"
                           onmouseout="this.style.backgroundColor = '#00A24A';"
                           type="submit" value="Login">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>

        </div>

        <div id="cd-signup">
            <form class="cd-form" id="signup">
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Username</label>
                    <input class="full-width has-border" id="signup-username" name="username" type="text"
                           placeholder="Username">
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width  has-border" id="signup-email" type="email" name="email"
                           placeholder="E-mail">

                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-mobile">Mobile Number</label>
                    <input class="full-width  has-border login-mod" id="signup-mobile" type="number" name="mobile"
                           placeholder="Mobile Number">

                </p>


                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width  has-border" id="signup-password" type="text" name="password"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message" name="signup-error"></span>
                </p>


                <p class="fieldset">
                    <input class="full-width" style="margin-top: 10px; background-color: #00A24A;"
                           onmousemove="this.style.backgroundColor = '#03C55C';"
                           onmouseout="this.style.backgroundColor = '#00A24A';"
                           type="submit" value="Signup">
                </p>
            </form>


        </div>

        <div id="cd-reset-password">
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to
                create a new password.</p>

            <form class="cd-form" id="reset">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width  has-border" name="emailid" id="reset-email" type="email" placeholder="E-mail">
                    <input type="hidden" name="forgetpassword" value="1"></input>
                    <span class="cd-error-message" id="cd-error-message"></span>
                </p>

                <p class="fieldset">
                    <input class="full-width" style="margin-top: 10px; background-color: #00A24A;"
                           onmousemove="this.style.backgroundColor = '#03C55C';"
                           onmouseout="this.style.backgroundColor = '#00A24A';"
                           type="submit" value="Reset">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div>
        <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div>
</div>
<div id="aboutUsContainer">
    <div
        style="background-color:white ;margin: 5% 15%;box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.16), 1px 2px 1px 0px rgba(0, 0, 0, 0.12);">
        <div id="contentContainer" class="row" style="border-bottom: 1px solid #ccc;    padding: 5em;">
            <div style="text-align: center;font-size: 3em;"><img id="leftImg"
                                                                 style="float: left;max-width: 20vw;margin-left:6vw"
                                                                 class="img-responsive" src="images/shape.png">

                <div style="float: left;font-weight:600;font-size:2.5vw">About Us</div>
                <img id="rightImg" style="max-width: 20vw" class="img-responsive" src="images/shape_reverse.png">
            </div>
            <div style="clear:both"></div>
            <br/><br/><br/>

            <div><img src="images/aboutus.jpg"></div>
            <div
                style="font-family: Gabriola !important;font-size: 2em !important; color: #29B56D;font-weight: 600 !important;text-align: center;">
                OUR MISSION
            </div>
            <div style="font-family: Lucida Calligraphy !important;font-size: 1.3em !important;">
            We provide universal access to the world’s best education.

            </div>

            <hr>

            <div style="font-family: Gabriola;font-size: 2em !important; color: #29B56D !important;font-weight: 600;">
                How It Works?
            </div>
            <div style="font-family: Lucida Calligraphy !important;font-size: 1.3em;">Online Courses is an education platform that partners with top universities and organizations worldwide, to offer courses online for anyone to take.
            <div class="bt3-col-md-6 coursera-about-photo"><img src="https://coursera_assets.s3.amazonaws.com/about/overview/about_discover_a_course_youre_interested_in.jpg"></div><div class="bt3-col-md-6 text"><h2 class="display-2-text">Discover a course and sign up today</h2><p class="byline">Choose from hundreds of courses created by the world's top educational institutions. Courses are open to anyone, and financial aid is available.</p><div><a href="#" class="link-button primary learn-more">View courses
&nbsp;<i class="cif-arrow-right"></i></a></div></div>

            </div>

            <hr>

            <div style="font-family: Gabriola !important;font-size: 2em; color: #29B56D !important;font-weight: 600;text-align: center;">
                Our Approach?
            </div>
            <div style="font-family: Lucida Calligraphy !important;font-size: 1.3em;margin-top: 10px">
            <div class="bt3-col-md-6 coursera-about-photo"><img src="https://coursera_assets.s3.amazonaws.com/about/overview/about_effectiveness_of_online_learning.jpg"></div><div class="bt3-col-md-6 text"><h2 class="display-2-text">Effectiveness of online learning</h2><p class="byline">Online learning plays a significant role in a lifelong education.
In fact, a recent report by the Indian Department of Education found that “classes with online learning (whether taught completely online or blended) on average produce stronger student learning outcomes than do classes with solely face-to-face instruction.”</p></div>

            </div>


        </div>

    </div>
    <footer class="footer-distributed" style="background-color:#825AA7 !important">

        <div class="footer-left">

            <div style="color:#fff;font-size:18px">Online<span>Courses</span></div>

            <p class="footer-links">
                <a href="contactus.php">Contact Us</a>
                .
                <a href="contactus.php">Testimonials</a>.
                <a href="faq.php">FAQ</a>.


            </p>

            <br/>

            <div id="disclaimer" class="footer-company-name" style="font-size:10px !important;color:#fff !important; " >
                <div  >Disclaimer:-</div>
                The images shown are only indicative in nature & the actual product may vary in size, colour etc.
                Eatbliss reserves the right to change any part or piece of information on this website without any notice to customers or visitors

            </div>
        </div>

        <div class="footer-center" style="background-color:#825AA7 !important">


            <div>
                <i class="fa fa-phone" style="background-color:#825AA7 !important"></i>

                <p style="">Customer Care-0000-000-100</p>
            </div>

            <div>
                <i class="fa fa-envelope" style="background-color:#825AA7 !important""></i>
                <p><a href="mailto:onlinecourseaha@gmail.com" style="color: #fff">onlinecourseaha@gmail.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-name" style="color: #fff;">Connect With Us:</p>

            <div class="footer-icons">

                <a href="https://www.facebook.com/amrutha.ha"  target="_blank"  style="background:#3b5998"><i class="fa fa-facebook" style="padding-top:0.4em;"></i></a>
                <a href="https://twitter.com/" target="_blank" class="btn btn-social-icon btn-twitter" style="background:#00aced;text-align:center"><i
                        class="fa fa-twitter"></i></a>
                <a href="#" style="background:#dd4b39 !important"><i class="fa fa-google-plus " style="background:#dd4b39 !important;padding-top: 0.4em;"></i></a>

            </div>
            <br/><br/>

            <p class="footer-company-name" style="color: #fff;"> OnlineCourses &copy; All Right Reserved 2016</p>

        </div>


    </footer>

</body>

</html>
