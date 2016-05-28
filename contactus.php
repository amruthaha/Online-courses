<?php
include('db.php');
include('util.php');

?>
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

<html>
<head>

    <title>OnlineCourses||Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/login.js"></script>
    <script src="js/main.js"></script>

    <!-- <link rel="stylesheet" href="../css/materialize.min.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>

    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


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
        #contactemail,#messageField,#contactphone,#contactname{
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }

        #textareaForm{
            height: auto;
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
            text-indent: -3em;
            text-color: #545656;
        }
    </style>

    <script type="text/javascript">
        function clearError() {
            document.querySelector("#emailError").innerHTML = "";

        }

        function inputFormValidation() {

            var email = document.querySelector("#contactemail").value;

            var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
            if (!reg.test(email)) {
                document.querySelector("#emailError").innerHTML = "Please Enter Valid Email";
                return false;
            }

            var phoneno = /^\d{10}$/;
            if(!guestMobile.match(phoneno)){
                document.querySelector("#phoneError").innerHTML="Please enter Valid Mobile No. Like 8124003232";
                return false;
            }

            return true;
        }

    </script>

    <?php

    function saveContactUsMessages($email, $message,$name,$phone)
    {

        global $connection;

        if ($connection != null) {
            // debug_to_console("inside connection not null");
            if (!mysqli_ping($connection)) {
                global $connection;
                $connection = returnDBConnection();
            }
        } else {
            //debug_to_console("inside connecctin is null");
            global $connection;
            $connection = returnDBConnection();

        }


        $insertquery = "INSERT INTO `contactus` (`email`, `message`,`name`,`phone`) VALUES ('" . $email . "','" . $message ."','".$name."','".$phone. "');";
        // debug_to_console($insertquery);
        $result = mysqli_query($connection, $insertquery);
        if ($result) {
            return true;
        } else {
            redirect('error500.php');
            return false;
        }


    }


    if (isset($_POST['contactemail']) && isset($_POST['message'])&&isset($_POST['contactname'])&&isset($_POST['contactphone'])) {
        //echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-===-";

        saveContactUsMessages($_POST['contactemail'], $_POST['message'],$_POST['contactname'],$_POST['contactphone']);

    }

    ?>


</head>
<body>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper" style="background-color:#fff;">
            <a href="#" class="brand-logo left"><img src="images/logo.png" width="230em"
                                                     style="padding-left: 30%; height: 56px"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"
                                                                                style="color: purple; padding-left: 10px;">menu</i></a>
            <ul class="right hide-on-med-and-down" style="padding-right: 5%;">
                <li><a href="index.php" class="nav-override">Home</a></li>
                
                <li><a href="aboutus.php" class="nav-override">About Us</a></li>

                <li><a href="#" class="cd-login nav-override" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
                <li><a href="#" class="nav-override" id="cd-myaccount-button" style="display: none;">My
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
                    <input class="full-width  has-border login-mod"  name="email" id="signin-email" type="email"
                           placeholder="E-mail">

                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-border login-mod" id="signin-password" name="password" type="text"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message" name="login-error"></span>
                </p>


                <p class="fieldset">
                    <input class="full-width login-mod" style="margin-top: 10px; background-color: #00A24A;"
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
                    <input class="full-width has-border login-mod" id="signup-username" name="username" type="text"
                           placeholder="Username">
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width  has-border login-mod" id="signup-email" type="email" name="email"
                           placeholder="E-mail">

                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width  has-border login-mod" id="signup-password" type="text" name="password"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message" name="signup-error"></span>
                </p>


                <p class="fieldset">
                    <input class="full-width login-mod" style="margin-top: 10px; background-color: #00A24A;"
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
                    <input class="full-width  has-border login-mod" name="emailid" id="reset-email" type="email" placeholder="E-mail">
                    <input type="hidden" name="forgetpassword" value="1"></input>
                    <span class="cd-error-message" id="cd-error-message"></span>
                </p>

                <p class="fieldset">
                    <input class="full-width login-mod" style="margin-top: 10px; background-color: #00A24A;"
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

<div id="aboutUsContainer" >
    <div style="background-color:white ;margin: 5% 15%;box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.16), 1px 2px 1px 0px rgba(0, 0, 0, 0.12);"  >
        <div id="contentContainer"  class="row" style="padding: 4em;">
            <div style="border-bottom:1px solid #ccc;border-bottom-style: dashed;">
                <div style="font-weight:600;font-size:2em">
                    Contact Us
                </div>
            </div>


            <form action="#" method="POST"  action="contactus.php" onsubmit="return inputFormValidation()">
                <div class="form-group" style="margin-top:2em">
                    <label for="usr" style="font-size:1.5em;">Name:</label>
                    <input type="text" name="contactname" id="contactname" onclick="clearError();" style="padding: 4px 12px;max-width:70%;text-indent: 1px !important;padding-left: 1em !important;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"class="form-control" required placeholder="Enter Name*"/>
                    <div><span id="nameError" style="color:red;font-size:1em" ></span></div>
                </div>
                <div class="form-group" style="margin-top:2em">
                    <label for="usr" style="font-size:1.5em;">Email:</label>
                    <input type="text" name="contactemail" id="contactemail" onclick="clearError();" style="padding: 4px 12px;max-width:70%;text-indent: 1px !important;padding-left: 1em !important;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"class="form-control" required placeholder="Enter Email Address"/>
                    <div><span id="emailError" style="color:red;font-size:1em" ></span></div>
                </div>
                <div class="form-group" style="margin-top:2em">
                    <label for="usr" style="font-size:1.5em;">Mobile:</label>
                    <input type="text" name="contactphone" id="contactphone" onclick="clearError();" style="padding: 4px 12px;max-width:70%;text-indent:1px !important;padding-left: 1em !important;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"class="form-control" required placeholder="Enter Mobile Number"/>
                    <div><span id="phoneError" style="color:red;font-size:1em" ></span></div>
                </div>
                <div class="form-group" style="margin-top:2em">

                    <label for="usr" style="font-size:1.5em">Message:</label>
                    <textarea name="message" style="max-width:73%;min-height:7em;" id="messageField" placeholder="Enter Message Here"class="form-control" required></textarea>
                </div>
                <button type="submit" class='button js-checkout-button' style="max-width: 10vw;min-width: 8vw;font-size: 1em;" value="Send">Send</button>

            </form>

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
            <a href="#">FAQ</a>.


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