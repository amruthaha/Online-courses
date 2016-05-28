<?php session_start(); ?>
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

if (isset($_SESSION['login_user'])) {
    ?>
    <script>
        window.addEventListener('load', isLoggedIn);
    </script>
    <?php

}
?>
<html>
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

<head>

<title>EatBliss||failure</title>
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
    <link rel="stylesheet" href="css/footer.css">


    <script type = "text/javascript" >
    history.pushState(null, null, 'error404.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'error404.php');
    });
    </script>


</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper" style="background-color:#fff;">
            <a href="#" class="brand-logo left"><img src="images/logo.jpg" width="230em"
                                                     style="padding-left: 30%; height: 100%"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"
                                                                                style="color: purple; padding-left: 10px;">menu</i></a>
            <ul class="right hide-on-med-and-down" style="padding-right: 5%;">
                <li><a href="index.php" class="nav-override">Home</a></li>
                <!-- <li><a href="#card_container" class="nav-override"><i class="material-icons left" style="margin-right: 1px; width: .9em;">shopping_cart</i>Cart<sup class="rounded">3</sup></a></li> -->
                <li><a href="track-order.php" class="nav-override">Track Order</a></li>
                <li><a href="aboutus.php" class="nav-override">About Us</a></li>
                <li><a href="#" class="cd-login nav-override" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
                <li><a href="my_account.php" class="nav-override" id="cd-myaccount-button" style="display: none;">My
                        Account</a></li>
                <li><a href="logout.php" class="nav-override" id="cd-logout-button" style="display: none;">Logout</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="nav-override-mobile">Home</a></li>
                <!-- <li><a href="#card_container" class="nav-override-mobile"><i class="material-icons left" style="margin-right: 1px; width: .9em;">shopping_cart</i>Cart<sup class="rounded">3</sup></a></li> -->
                <li><a href="track-order.php" class="nav-override-mobile">Track Order</a></li>
                <li><a href="aboutus.php" class="nav-override-mobile">About Us</a></li>
                <li id="cd-login"><a href="#" class="cd-login nav-override-mobile" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override-mobile" id="cd-signup" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
                <li><a href="my_account.php" class="nav-override" id="cd-myaccount-button" style="display: none;">My
                        Account</a></li>
                <li><a href="logout.php" class="nav-override" id="cd-logout-button" style="display: none;">Logout</a></li>

            </ul>
        </div>
    </nav>
</div>


<div id="failureContainer" style="background-image: url(images/bg.png);height:100%" >
 <div>

   <img src="images/404.png" class="img-responsive" style="margin-left:30vw;padding-top:5vw;height:27em;width:39vw"></img>

 </div>
 <div>
        <span style="font-size:3vw;font-weight:600;margin-left:30%">OOPS COULD NOT FOUND</span>
        <div style="font-size:2vw;font-weight:300;margin-left:25%"> There could be many reason why you on this Page(404)</div>
 </div>
<div>
       <a class='button js-checkout-button' onclick="redirect";>Go to Home</a>
</div>

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
<footer class="footer-distributed" style="background-color:#825AA7 !important">

    <div class="footer-left">

        <div style="color:#fff;font-size:18px">Eat<span>Bliss</span></div>

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

            <p style="">Customer Care-08790-041-041</p>
        </div>

        <div>
            <i class="fa fa-envelope" style="background-color:#825AA7 !important""></i>
            <p><a href="mailto:eatbliss.social@gmail.com" style="color: #fff">info@eatbliss.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-name" style="color: #fff;">Connect With Us:</p>

        <div class="footer-icons">

            <a href="https://www.facebook.com/eatbliss"  target="_blank"  style="background:#3b5998"><i class="fa fa-facebook" style="padding-top:0.4em;"></i></a>
            <a href="https://twitter.com/eatbliss" target="_blank" class="btn btn-social-icon btn-twitter" style="background:#00aced;text-align:center"><i
                    class="fa fa-twitter"></i></a>
            <a href="#" style="background:#dd4b39 !important"><i class="fa fa-google-plus " style="background:#dd4b39 !important;padding-top: 0.4em;"></i></a>

        </div>
        <br/><br/>

        <p class="footer-company-name" style="color: #fff;"> EatBliss &copy; All Right Reserved 2015</p>

    </div>


</footer>
<script src="js/login.js"></script>
<script src="js/main.js"></script>


</body>
</html>
