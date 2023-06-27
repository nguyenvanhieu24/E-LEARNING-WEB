<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

require 'GGconfig.php';
$id = $_SESSION['login_id'];
$get_user = mysqli_query($db_connection, "SELECT * FROM `user` WHERE `google_id`='$id'");
if(mysqli_num_rows($get_user) > 0){
    $user = mysqli_fetch_assoc($get_user);
}
?>

<?php  
    if (isset($_POST['logout'])) {
        unset($_SESSION['username']);
    }
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Contact Us Form </title>
    <link rel="stylesheet" href="css/Responsive.css">
    <link rel="stylesheet" href="login,register(css)/bootstrap.min.css">
    <link rel="stylesheet" href="login,register(css)/landing.min.css">
    <link rel="stylesheet" href="login,register(css)/Site.min.css">
    <link rel="stylesheet" href="login,register(css)/login-modal.min.css">
    <link rel="stylesheet" href="login,register(css)/login-register.css">
    <link rel="stylesheet" href="icon.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
    function Learning(){
        location.href="Learning.php";
    }
    function goBack() {
        window.history.back()
    }
    function PersonalDetails(){
        location.href="PersonalDetails.php";
    }
</script>
   </head>
<body class="hold-transition site-body1 skin-sku-light layout-top-nav" data-new-gr-c-s-check-loaded="14.1052.0" data-gr-ext-installed="" style="padding-right: 15px;">
  <?php  
                            if ( isset($_SESSION['username'])) {
                                $name = $_SESSION['username'];
                                echo '<p style="text-align:center;"><i class="fa-solid fa-user" style="font-size:35px"></i>&nbsp;</p>';

                                echo "<p style='text-align:center;font-size: 25px;'><b><a title='PersonalDetails' onclick='PersonalDetails()' style='cursor:pointer;'>$name</a></b></p>";
                                echo '<p>&nbsp;</p>';
                               echo '<form method="POST"><a href="GGlogout.php" class="btn btn-important" style="text-align:center;" title="Logout" type="submit" name="logout">Logout</a></form>';
                                }else if (isset($_SESSION['login_id'])) {
                                    echo '<img src="'.$user['profile_image'].'" style="width:100px;height:100px;border-radius:100px;"/>';
                                     echo '<p>&nbsp;</p>';
                                    echo $user['name'];
                                    echo "<form><a href='GGlogout.php' class='btn btn-important' title='Log out' type='submit' style='text-align:left' 'onclick='gglogout()'>Logout</a></form>";
                                }
                        ?>
  <div class="container">
     <header><i class="fa-solid fa-rotate-left" onclick="goBack()" style="color: #0cd1e8; font-size: 25px;"></i><a style="font-family:codelearn-font;  font-weight:700;font-size: 20px;" >BACK TO PAGE</a></header>
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">TP.HCM,Q5</div>
          <div class="text-two">280 An Dương Vương, Phường 3</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+84 349 1865 99</div>
          <div class="text-two">+84 393 9423 98</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">kirigayayuuki165@gmail.com</div>
          <div class="text-two">nguyenxuanhuu12c3@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p style="font-size: 18px;">If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/mgedrkvw"  method="POST">
        <fieldset id="fs-frm-inputs">
        <div class="input-box">
          <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
        </div>
        <div class="input-box">
          <input type="text" name="_replyto" id="email-address" placeholder="Email@domain.tld" required="">
        </div>
          <textarea rows="5" class="field" placeholder="Message" name="message" id="message"></textarea>
         <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
       </fieldset>
          <button class="btn" style="font-size: 18px; font-weight: 700;" type="send" value="Send">Send Now</button>
          <center>
          <a title="Home" href="wennew.php"><b><u style="font-size: 18px;"><i class="fa-solid fa-house-chimney" style="margin-right: 2px;padding-top: 10px; font-size: 25px;"></i>HOME</u></b></a>
          </center>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
