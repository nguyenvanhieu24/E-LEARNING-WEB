
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
    </script>
    <title>Login Form </title> 
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav modal-open" data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="" style="padding-right: 8px;">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body login-modal">
					<div>
						<center>
							<div class="tab-content1">
											<div class="pw-meter1">
								<div class="header-card"><h2>START TOGETHER NOW..!</h2></div>
								<div role="tabpanel" class="tab-pane active" id="login">
								<section class="fullbox-login">
									<article class="login">
										<form id="frmLogin" method="POST">
											<table>
												<div class="form-group">
													<span><i class="fa-solid fa-user" style="float: left; margin-right:400px; margin-top:-2px "></i></span>
                        	<input name="username" type="text" class="form-control" placeholder="User name" autocomplete="username">
                        	<?php 
                        					if (isset($_POST['submit'])) {
													$username = $_POST["username"];
													if($username == ""){
														echo '<label id="username-error" class="error" for="username" style="text-align: left;color: red;font-family:codelearn-font;font-size: 16px;">User name is a required field.</label>';
													}
												}
											?>
                        <a href="/resend-email" title="Resend activation email" class="resend-email hidden">Resend activation email</a>
                      </div>
                         <div class="form-password"  style="margin-bottom: 20px">
                         	<span><i class="fa-solid fa-key" style="float:left;margin-right:400px; margin-top:-2px "></i></span>
													<input name="password" id="password" type="password" class="form-control" placeholder="Please enter password" autocomplete="current-password">
													<span><i class="fa-solid fa-eye" style="margin-right:50px;" id="eye" onclick="show()"></i></span>
													<?php 
                        					if (isset($_POST['submit'])) {
													$password = $_POST["password"];
													if($password ==""){
														echo '<label id="username-error" class="error" for="username" style="text-align: left;color: red;font-family:codelearn-font;font-size: 16px;">Password is a required field.</label>';
													}
												}
											?>
	</div>
		<script type="text/javascript">
			var state = false;
			function show(){
				if(state){
					document.getElementById("password").setAttribute("type", "password");
					state = false;
				}else{
					document.getElementById("password").setAttribute("type", "text");
					state = true;
				}
			}
		</script>
	</div>
	</div>
</table>
												<div class="form-button">
													<button type="submit" class="btn btn-default btn-block btn-blue btn-login" name="submit">Login</button>
												<a title="Home" onclick=" wennew()"><b><u><i class="fa-solid fa-house-chimney" style="margin-right: 2px;"></i>HOME</u></b></a>
												</div>
												<div class="col-md-12 registered-forgot" role="tablist">
													<div class="col-md-6 text-left">
													</div>
													<br>
													<div class="col-md-6 text-center">
														<a href="/forgot-password">I can't rememeber my password</a>
													</div>
													<br>
														<div class="tab-content2">
															<h4 class="header-card">OR</h4>
															<div class="signin-options1">
<button class="btn btn-default btn-block btn--microsoft icon-left" onclick="window.location.replace('https://oauth.codelearn.io/Home/SignIn')" title="Login with your Fsoft account via Microsoft">
<i class="cl-icon-windows" aria-hidden="true"></i>
</button>
<button class="btn btn-default btn-block btn--facebook icon-left" onclick="facebookSignIn()" title="Continue with Facebook account">
<i class="cl-icon-facebook" aria-hidden="true"></i>
</button>
<button class="btn btn-default btn-block btn--google icon-left btn-google-login" name="Google" title="Continue with Google account">
<i class="cl-icon-google-full" aria-hidden="true"></i>
</button>
<?php  
	if (isset($_POST['Google'])){
		header ("location: GGlogin.php");
	}
?>
</div>
															<div class="col-md-12 terms-of-use">
																This site is protected by reCAPTCHA and <a href="/terms" target="_blank">Terms of Use</a> apply.
															</div>
															<?php 
										require 'config.php';

												if (isset($_POST['submit'])) {
													$username = $_POST["username"];
													$password = $_POST["password"];
													if($username == "" || $password ==""){
														echo '<p style="text-align: center;color: red;font-family:codelearn-font;font-size: 16px;">Please fill out the form!!!</p>';
													}else{
														$password = md5($password);
														$sql = "SELECT * FROM `together1` WHERE username ='$username' AND password ='$password' ";
														$result = mysqli_query($db_connection,$sql);									
													if(mysqli_num_rows($result) == 0){
														echo '<script>
					                            	alert("Login unsuccessful!!! Please, try again");					                         
					                            </script>';
													}else{
														$url = $_SERVER['HTTP_REFERER'];

														$fectch = mysqli_fetch_assoc($result);
														$_SESSION['username'] = $fectch['username'];
														
														echo '<script>
					                          	alert("Login successful !!!");
					                          	window.location.href="learning.php";				                         
					                           </script>';

														}
													}

												}
												
											?>

<?php
    //header("Location: ".$_SERVER['HTTP_REFERER']);
?>
															</div>
														</div>
													</div>
												</table>
											</form>
										</article>
									</section>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>