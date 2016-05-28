<?php session_start(); ?>
<script xmlns="http://www.w3.org/1999/html">
    function isLoggedIn() {
        var login_button = document.getElementById('cd-login-button');
        login_button.style.display = "none";
        var signup_button = document.getElementById('cd-signup-button');
        signup_button.style.display = "none";
        var myacc_button = document.getElementById('cd-myaccount-button');
        myacc_button.style.display = "block";
        var logout = document.getElementById('cd-logout-button');
        logout.style.display = "block";
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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  

      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="css/owl.carousel.css">

   <link id="switcher" href="css/themes/pink-theme.css" type="text/css" rel="stylesheet" media="screen,projection"/>     
      
      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>
          
      <script src="js/owl.carousel.min.js"></script>    

      <script src="js/custom.js"></script>

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

<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
    $(document).ready(function () {
        $('ul.tabs').tabs();
    });
</script>


<div class="navbar-fixed" style="height: 3% !important">
    <nav>
        <div class="nav-wrapper" style="background-color:#fff;">
            <a href="index.php" class="brand-logo left"><img src="images/logo.png" width="230em"
                                                     style="padding-left: 30%; height: 56px"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"
                                                                                style="color: purple; padding-left: 10px;">menu</i></a>
            <ul class="right hide-on-med-and-down" style="padding-right: 5%;">
                <li><a href="index.php" class="nav-override">Home</a></li>
                
                <li><a href="aboutus.php" class="nav-override">About Us</a></li>
                <li><a href="my_account.php" class="nav-override" id="cd-myaccount-button" style="display: none;">My
                        Account</a></li>
                <li><a href="#" class="cd-login nav-override" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
         
                <li><a href="logout.php" class="nav-override" id="cd-logout-button" style="display: none;">Logout</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="index.php" class="nav-override-mobile">Home</a></li>
                
                <li><a href="aboutus.php" class="nav-override-mobile">About Us</a></li>
                <li id="cd-login"><a href="#" class="cd-login nav-override-mobile" id="cd-login-button">Login</a></li>
                <li><a href="#" class="cd-signup nav-override-mobile" id="cd-signup" onclick="signup_selected();"
                       id="cd-signup-button">Signup</a></li>
                
                <li><a href="logout.php" class="nav-override" id="cd-logout-button" style="display: none;">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>



<div class="parallax-first">
    
    <a href="#">Register Now</a>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-lg-offset-2 col-lg-8">
        <h4 class="header-hr">MOST FAMOUS COURSES</h4>

        <div class='product' style="width:100%; margin-top:1%; text-align:center;">
            <div class="row" id='menu'>
                  <section id="experience">
              <div class="container">
                <div class="experience-inner">
                  
                  
                  <div id="owl-carousel" class="experience-slider row">
                    
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">Starts on 4th Jan</h2>
                          <img class="activator" src="images/bigdata.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Big Data course<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.ABC</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Big Data Course<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.ABC</a>
                          <p>Big data is a term for data sets that are so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying, updating and information privacy. </p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">Starts on 14th Feb</h2>
                          <img class="activator" src="images/cloud.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Cloud computing<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.XYZ</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Cloud Computing<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.XYZ</a>
                          <p>Cloud computing, also known as on-the-line computing, is a kind of Internet-based computing that provides shared processing resources and data to computers and other devices on demand. It is a model for enabling ubiquitous, on-demand access to a shared pool of configurable computing resources (e.g., networks, servers, storage, applications and services)</p>
                        </div>
                      </div>
                    </div>

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">Starts on 12th Jan</h2>
                          <img class="activator" src="images/bigdata.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Big Data course<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.ABC</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Big Data Course<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.ABC</a>
                          <p>Big data is a term for data sets that are so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying, updating and information privacy. </p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">Open always</h2>
                          <img class="activator" src="images/cloud.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Cloud computing<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.XYZ</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Cloud Computing<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.XYZ</a>
                          <p>Cloud computing, also known as on-the-line computing, is a kind of Internet-based computing that provides shared processing resources and data to computers and other devices on demand. It is a model for enabling ubiquitous, on-demand access to a shared pool of configurable computing resources (e.g., networks, servers, storage, applications and services)</p>
                        </div>
                      </div>
                    </div>

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="imges/bigdata.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Big Data course<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.ABC</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Big Data Course<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.ABC</a>
                          <p>Big data is a term for data sets that are so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying, updating and information privacy. </p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">Starts on 30th May</h2>
                          <img class="activator" src="images/cloud.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Cloud computing<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.XYZ</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Cloud Computing<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.XYZ</a>
                          <p>Cloud computing, also known as on-the-line computing, is a kind of Internet-based computing that provides shared processing resources and data to computers and other devices on demand. It is a model for enabling ubiquitous, on-demand access to a shared pool of configurable computing resources (e.g., networks, servers, storage, applications and services)</p>
                        </div>
                      </div>
                    </div>

                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">January 2013 - Present</h2>
                          <img class="activator" src="images/bigdata.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Big Data course<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.ABC</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Big Data Course<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.ABC</a>
                          <p>Big data is a term for data sets that are so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying, updating and information privacy. </p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">31st May</h2>
                          <img class="activator" src="images/cloud.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Cloud computing<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">By Prof.XYZ</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Cloud Computing<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">By Prof.XYZ</a>
                          <p>Cloud computing, also known as on-the-line computing, is a kind of Internet-based computing that provides shared processing resources and data to computers and other devices on demand. It is a model for enabling ubiquitous, on-demand access to a shared pool of configurable computing resources (e.g., networks, servers, storage, applications and services)</p>
                        </div>
                      </div>
                    </div>
                  </div>
             <!--        <div class="customNavigation">
                    <a class="btn prev btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn next btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>                    
                  </div> -->
                </div>
              </div>
            </section>
                 
    </body>
            </div>
            <!-- <a class="waves-effect waves-light btn " id="load_more">Load more</a> -->
        </div>
    </div>
</div></div>
<footer class="footer-distributed" style="background-color:#825AA7 !important">

    <div class="footer-left">

        <div style="color:#fff;font-size:18px">Online<span>Courses</span></div>

        <p class="footer-links">
            <a href="#">Contact Us</a>
            .
            <a href="#">Testimonials</a>.
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
            <a href="#" target="_blank" class="btn btn-social-icon btn-twitter" style="background:#00aced;text-align:center"><i
                    class="fa fa-twitter"></i></a>
            <a href="#" style="background:#dd4b39 !important"><i class="fa fa-google-plus " style="background:#dd4b39 !important;padding-top: 0.4em;"></i></a>

        </div>
        <br/><br/>

        <p class="footer-company-name" style="color: #fff;"> OnlineCourses &copy; All Right Reserved 2016</p>

    </div>


</footer>


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
                    <label class="image-replace cd-username" for="signup-interst">Interested In</label>
                    <input class="full-width  has-border" id="signup-interest" type="text" name="interest"
                           placeholder="Area of interest, saperate by ','">

                </p>
                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-college">College/Company</label>
                    <input class="full-width  has-border" id="signup-college" type="text" name="college"
                           placeholder="College/Company">

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
                    <input class="full-width  has-border" name="emailid" id="reset-email" type="email"
                           placeholder="E-mail">
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

<script src="js/login.js"></script>
<script src="js/main.js"></script>


<script type="text/javascript">
   

    $(document).ready(function () {
        $(".button-collapse").sideNav();
    });


</script>

<style type="text/css">
    .card {
        border-radius: 1%;
    }

    .card:hover {
        box-shadow: 0 0 10px gray;
    }

    .card .card-image {
        text-align: center;
        border: .2em solid white;
        border-radius: 1%;
    }

    .card .card-image span {
        position: absolute;
        padding: 10px;
        bottom: 0;
        width: 100%;
        left: 0;
        color: white;
        font-size: 1.5em;
        text-shadow: 2px 2px 10px black;
        background-color: rgba(155, 155, 155, 0.28)
    }

    .card .card-image span:hover {
        background-color: rgba(255, 255, 255, 0.44);
    }

</style>


</html>
