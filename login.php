<?php session_start(); ?>

<?php
include("db.php");
include("util.php");


function generateRandomString($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function sendForgetPasswordMail($emailAddress, $name, $newpassword)
{
    //  php echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";

    date_default_timezone_set('Etc/UTC');

    require 'mailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();


//$mail->SMTPDebug = 2;
//$mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
    $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "";

//Password to use for SMTP authentication
    $mail->Password = "";

//Set who the message is to be sent from
    $mail->setFrom('onlinecourseaha@gmail.com', 'OnlineCourses Admin');


    $mail->addAddress($emailAddress, '');

//Set the subject line
    $mail->Subject = 'Forget Password-New Password';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

//$mail->msgHTML(file_get_contents('invoictemplate.html'), dirname(__FILE__));


    $msg = 'Hi &nbsp;' . $name;
    $msg = $msg . ',<br/><br/><br/> You recently requested a Password.';
    $msg = $msg . '<br/> <br> Here is your new password';
    $msg = $msg . '<br>New password :&nbsp;' . $newpassword;
    $msg = $msg . '<br/><br/><br/>Facing any difficulty, please feel free to <a href="www.onlinecourseaha.com/contactus.php"> Contact Us </a>';
    $msg = $msg . '<br/>Thanks for using Online courses';
    $msg = $msg . '<br/>Online courses Admin';


    $mail->Body = $msg;


//Replace the plain text body with one created manually
    $mail->AltBody = 'This is a forget password  body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        return "Mailer Error: " . $mail->ErrorInfo;
    } else {
        return "true";
    }


}

if (isset($_POST['action'])) {
    $error = "";
    if ($_POST['action'] == "Login") {
        $email = mysqli_real_escape_string(returnDBConnection(), $_POST['email']);
        $password = mysqli_real_escape_string(returnDBConnection(), $_POST['password']);
        $strSQL = mysqli_query(returnDBConnection(), "select * from users where email='" . $email . "' and password='" . md5($password) . "'");
        $Results = mysqli_fetch_array($strSQL);
        if (count($Results) >= 1) {
            $message = $Results['name'];
            $_SESSION['login_user'] = $message;
            $_SESSION['loggedin'] = 'true';
            $_SESSION['userName'] = $Results['name'];
            $_SESSION['userEmail'] = $Results['email'];
            $_SESSION['id'] = $Results['id'];
            echo 'success';
            return;
        } else {
            $error = "Invalid email or password!!";
            echo $error;
            return;
        }
    } elseif ($_POST['action'] == "Signup") {
        $name = mysqli_real_escape_string(returnDBConnection(), $_POST['username']);
        $email = mysqli_real_escape_string(returnDBConnection(), $_POST['email']);
        $password = mysqli_real_escape_string(returnDBConnection(), $_POST['password']);
        $mobile = mysqli_real_escape_string(returnDBConnection(), $_POST['mobile']);
        $college = mysqli_real_escape_string(returnDBConnection(),$_POST['college']);
        $interest = mysqli_real_escape_string(returnDBConnection(),$_POST['interest']);
        $query = "SELECT email FROM users where email='" . $email . "'";
        $result = mysqli_query(returnDBConnection(), $query);
        $numResults = mysqli_num_rows($result);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email address please type a valid email!!";
            echo $error;
            return;
        } else if ($numResults >= 1) {
            $error = $email . " already exist!!";
            echo $error;
            return;
        } else {
            
           
            $id = generateUniqueId(10);
           
            $query = "insert into `users`(name,email,password,mobile,last_updated,college,interest) values('" . $name . "','" . $email . "','" . md5($password) . "'," . $mobile ."," . current_millis() . ",'".$college."','".$interest."')";
           
            
            $result = mysqli_query(returnDBConnection(), $query);
            if ($result) {
                $strSQL = mysqli_query(returnDBConnection(), "select * from users where email='" . $email . "'");
                $Results = mysqli_fetch_array($strSQL);
                if (count($Results) >= 1) {
                    $_SESSION['id'] = $Results['id'];

                } else {
                    echo 'failure';
                    return;
                }
                $_SESSION['login_user'] = $name;
                $_SESSION['loggedin'] = 'true';
                $_SESSION['userName'] = $name;
                $_SESSION['userEmail'] = $email;

                echo 'success';
                return;
            } else {
                echo 'failure1';
                return;
            }

        }
    } elseif ($_POST['action'] == "Reset") {

        if (isset($_POST['forgetpassword']) && isset($_POST['emailid'])) {
            $email = $_POST['emailid'];
            global $connection;

            if ($connection != null) {
                //debug_to_console("inside connection not null");
                if (!mysqli_ping($connection)) {
                    global $connection;
                    $connection = returnDBConnection();
                }
            } else {
                // debug_to_console("inside connecctin is null");
                global $connection;
                $connection = returnDBConnection();

            }
            $name = '';
            $getname = "select name from `users` where email='" . $email . "';";
            $result = mysqli_query($connection, $getname);
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row["name"];
            }
            if ($name) {
                $newpassword = generateRandomString();
                $response = sendForgetPasswordMail($email, $name, $newpassword);
                if($response=="true") {
                    $query = "UPDATE `users` SET password='" . md5($newpassword) . "' where email='" . $email . "';";
                    if(mysqli_query($connection, $query)){
                        echo 'success';
                        return;
                    }
                }

            }
            echo 'failure';
            return;

        }
    }
}


?>