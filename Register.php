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
    <link rel="stylesheet" href="icon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function Home(){
            location.href ="wennew.php";
        }
        function login(){  
            location.href="login.php";
        }
        function wennew(){
            location.href="wennew.php";
        } 
        function CforBeginners(){
            location.href="C for Beginners.php";
        }
        function Learning(){
            location.href="Learning.php";
        }
        function Google(){
            location.href="GGlogin.php";
        }      
    </script>
    <title>Register Form </title> 
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav modal-open" data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="" style="padding-right: 8px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body login-modal">
                    <div class="tab-content">
                        <h4 class="header-card">with your social network</h4>
                        <div class="signin-options">
<button class="btn btn-default btn-block btn--microsoft icon-left" onclick="window.location.replace('https://oauth.codelearn.io/Home/SignIn')" title="Login with your Fsoft account via Microsoft">
<i class="cl-icon-windows" aria-hidden="true"></i>
<span>Microsoft</span>
</button>
<button class="btn btn-default btn-block btn--facebook icon-left" onclick="facebookSignIn()" title="Continue with Facebook account">
<i class="cl-icon-facebook" aria-hidden="true"></i>
<span>Facebook</span>
</button>
<button class="btn btn-default btn-block btn--google icon-left btn-google-login" onclick="Google()" name="Google" title="Continue with Google account">
<i class="cl-icon-google-full" aria-hidden="true" onclick="Google()"></i></a>
<span >Google</span>
</button>
<?php  
    if (isset($_POST['Google'])){
        header ("location: GGlogin.php");
    }
?>
</div>
             <p class="label-or text-center">OR</p>
                        <section class="full-box" style="color: #f5f5f5 ;text-align: center;">
                                    <div class="form-head-register">
                                        <form id="frmSignup" method="POST">
                                            <div class="form-group">
                                                    <article class="sign-up">
                                                        <h2>Register as a member TOGETHER</h2>
                                                    </article>
                                                </div>
                                            </form>
                                        </div>
                                                        <form id="frmSignup" method="POST">
                                                            <div class="pw-meter">
                                                            <div class="form-group">
                                                                <p class="fa-solid fa-user" style="float: left; margin-left:5px; margin-bottom:-25.5px; color: black"></p>
                                                                <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="username">
                                                            </div>
                                                            <div class="form-group">
                                                                <p class="fa-solid fa-key" style="float: left; margin-left:5px; margin-bottom:-25.5px; color: black"></p>
                                                                <input name="password" type="password" id="password" class="form-control" placeholder="Password" autocomplete="current-password">
                                                                <div class="pw-display-toggle-btn">
                                                                    <i class="fa fa-eye"></i>
                                                                    <i class="fa fa-eye-slash"></i>              
                                                                     </div> 
                                                                <div class="pw-strength">
                                                                    <span>Weak</span>
                                                                    <span></span>
                                                                </div>
                                                            </div>
<script id="rendered-js">
function getPasswordStrength(password) {
  let s = 0;
  if (password.length > 6) {
    s++;
  }
  if (password.length > 10) {
    s++;
  }
  if (/[A-Z]/.test(password)) {
    s++;
  }
  if (/[0-9]/.test(password)) {
    s++;
  }
  if (/[^A-Za-z0-9]/.test(password)) {
    s++;
  }
  return s;
}
document.querySelector(".pw-meter #password").addEventListener("focus", function () {
  document.querySelector(".pw-meter .pw-strength").style.display = "block";
});
document.querySelector(".pw-meter .pw-display-toggle-btn").addEventListener("click", function () {
  let el = document.querySelector(".pw-meter .pw-display-toggle-btn");
  if (el.classList.contains("active")) {
    document.querySelector(".pw-meter #password").setAttribute("type", "password");
    el.classList.remove("active");
  } else {
    document.querySelector(".pw-meter #password").setAttribute("type", "text");
    el.classList.add("active");
  }
});

document.querySelector(".pw-meter #password").addEventListener("keyup", function (e) {
  let password = e.target.value;
  let strength = getPasswordStrength(password);
  let passwordStrengthSpans = document.querySelectorAll(".pw-meter .pw-strength span");
  strength = Math.max(strength, 1);
  passwordStrengthSpans[1].style.width = strength * 20 + "%";
  if (strength < 2) {
    passwordStrengthSpans[0].innerText = "Weak";
    passwordStrengthSpans[0].style.color = "#111";
    passwordStrengthSpans[1].style.background = "#d13636";
  } else if (strength >= 2 && strength <= 4) {
    passwordStrengthSpans[0].innerText = "Medium";
    passwordStrengthSpans[0].style.color = "#111";
    passwordStrengthSpans[1].style.background = "#e6da44";
  } else {
    passwordStrengthSpans[0].innerText = "Strong";
    passwordStrengthSpans[0].style.color = "#fff";
    passwordStrengthSpans[1].style.background = "#20a820";
  }
});
    </script>
                                                            <p class="fa-solid fa-envelope" style="float: left; margin-left:5px; margin-bottom:-25.5px; color: black"></p>
                                                            <div class="form-group">
                                                                <input name="email" type="text" class="form-control" placeholder="Email" autocomplete="email">
                                                            </div>
                                                            <div class="form-check">
                                                                <div class="checkbox-area">
                                                                    <input id="cbAgree" name="cbAgree" type="checkbox" value="1" class="form-check-input" data-error="#blockcbAgree-error">
                                                                    <label class="form-check-label" for="cbAgree">
                                                                        I agree to TOGETHER
                                                                        <a href="/terms" target="_blank" title="Terms of use">Terms of use</a>
                                                                    </label>
                                                                    <div id="blockcbAgree-error">
                                                                    </div>
                                                                </div>
                                            
                                                                            <button type="submit" name="submit-signup" class="btn btn-default btn-block btn-blue btn-signup">Register now</button>
                                                                         
                                                                            <button type="reset" name="reset" class="btn btn-default btn-block btn-blue btn-signup">Reset</button>
                                                                            <center>
                                                                            <a title="Home" onclick=" wennew()"><b><u><i class="fa-solid fa-house-chimney" style="margin-right: 2px;"></i>HOME</u></b></a></center>
                                                                        </div>
                                                                 <?php
                                                                    require 'config.php';
                                                                    if(isset($_POST['submit-signup']) && $_POST["username"] != "" && $_POST["password"] != "" && $_POST["email"] != ""){
                                                                        $username = $_POST["username"];
                                                                        $password = $_POST["password"];
                                                                        $email = $_POST["email"];
                                                                        $level = 0;
                                                                        $password = md5($password);
                                                                        $sql = "SELECT * FROM together1 WHERE username = '$username' OR email = '$email' ";
                                                                        $result = mysqli_query($db_connection, $sql);
                                                                        if(mysqli_num_rows($result) > 0){
                                                                            echo '<p style="text-align: center;color: red;font-family:codelearn-font;font-size: 16px;">Username or Email already exists !!</p>';
                                                                        }else{
                                                                            $sql = "INSERT INTO together1 (username,password,email,level) VALUE ('$username','$password','$email','$level')";
                                                                            $queryy = mysqli_query($db_connection,$sql);
                                                                            if($queryy != 0){
                                                            
                                                                                echo '<script>
                                                                                alert("Sign Up Success !!! You are already a part of TOGETHER!!!")
                                                                                window.location.href = "Login.php";
                                                                                </script>';
                                                                                
                                                                            }else{
                                                                                echo '<p style="text-align: center;color: red;font-family:codelearn-font;font-size: 16px;">Registration failed. Please try again. Thank you!!!</p>';
                                                                            }
                                                                        }
                                                                    }else{
                                                                        echo '<p style="text-align: center;color: red;font-family:codelearn-font;font-size: 16px;">Please fill out the form!!</p>';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </form>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

</body>
</html>