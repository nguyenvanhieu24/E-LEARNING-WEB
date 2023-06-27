<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login,register(css)/bootstrap.min.css">
    <link rel="stylesheet" href="login,register(css)/landing.min.css">
    <link rel="stylesheet" href="login,register(css)/Site.min.css">
    <link rel="stylesheet" href="login,register(css)/login-modal.min.css">
    <link rel="stylesheet" href="login,register(css)/login-register.css">
    <link rel="stylesheet" href="login,register(css)/showpassword.css">
    <link rel="stylesheet" href="icon.css">
    <script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
    <script src="js/jQuery1.js"></script>
    <title>Sign in with Google </title> 
    <script>
         function wennew(){
        location.href="wennew.php";
    }
    </script>
    <body class="hold-transition site-body skin-sku-light layout-top-nav modal-open" data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="" style="padding-right: 8px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="margin-top:220px">
                <div class="modal-body login-modal">
                    <div>
                        <center>
                            <div class="tab-content3">
                                            <div class="pw-meter1">
                                <div class="header-card"><h2>START TOGETHER NOW..!</h2></div>
                                <div role="tabpanel" class="tab-pane active" id="login">
<?php
require 'GGconfig.php';

if(isset($_SESSION['login_id'])){
    header('Location: Learning.php');
    exit;
}

require 'google-api/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('664038798721-4ldpfdfi5ohhla77sagcloj314ejrifg.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost:8080/Together2/GGlogin.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if(isset($_GET['code'])):

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if(!isset($token["error"])){

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $id = mysqli_real_escape_string($db_connection, $google_account_info->id);
        $full_name = mysqli_real_escape_string($db_connection, trim($google_account_info->name));
        $email = mysqli_real_escape_string($db_connection, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($db_connection, $google_account_info->picture);

        // checking user already exists or not
        $get_user = mysqli_query($db_connection, "SELECT `google_id` FROM `user` WHERE `google_id`='$id'");
        if(mysqli_num_rows($get_user) > 0){
            $_SESSION['login_id'] = $id; 
            header('Location: Learning.php');
            exit;
        }
        else{

            // if user not exists we will insert the user
            $insert = mysqli_query($db_connection, "INSERT INTO `user`(`google_id`,`name`,`email`,`profile_image`) VALUES('$id','$full_name','$email','$profile_pic')");

            if($insert){
                $_SESSION['login_id'] = $id; 
                header('Location: Learning.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }

    }
    else{
        header('Location: GGlogin.php');
        exit;
    }
    
else: 
    // Google Login Url = $client->createAuthUrl(); 
?>
<div class="signin-options1">
    <a class="btn btn-default btn-block btn--google icon-left btn-google-login" name="Google" title="Continue with Google account" aria-hidden="true" href="<?php echo $client->createAuthUrl(); ?>"><i class="cl-icon-google-full1" aria-hidden="true"></i>Sign in with Google</a></div>
    <a title="Home" onclick=" wennew()"><b><u><i class="fa-solid fa-house-chimney" style="margin-right: 2px;"></i>HOME</u></b></a>

<?php endif; ?>
</body>