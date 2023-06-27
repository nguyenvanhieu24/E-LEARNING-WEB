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
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="blossk" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icon.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="landing.min.css">
  <link rel="stylesheet" href="css/Site.min.css">
  <link rel="stylesheet" href="css/detail.min.css">
  <link rel="stylesheet" href= "css/menu.css">
  <link rel="stylesheet" href= "css/menu1.css">
   <link rel="stylesheet" href="css/note.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" type="text/css" href="css.csslist.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/1.1.1/marked.min.js"></script>
  <script src="https://codelearn.io/Themes/TheCodeCampPro/Resources/Lib/jquery/jquery.min.js?fileHash=ejlXWurjHXHGOnyj1CERxA%3d%3d" type="text/javascript"></script>
  <script type="text/javascript" src="js/jsss.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script type="text/javascript">
    function wennew(){
        location.href="wennew.php";
    }
    function register(){  
        location.href="Register.php";
      }
    function login(){
        location.href="Login.php";
    }
    function course_C_language(){
        location.href="course_C_language.php";
    }
    function Learning(){
        location.href="Learning.php";
    }
    function CforBeginners(){
        location.href="C for Beginners.php";
    }
    function PersonalDetails(){
        location.href="PersonalDetails.php";
    }
    function GGlogout(){
        location.href="GGlogout.php";
    }
    function goBack() {
        window.history.back()
    }
    function contact(){
        alert("Please Login For Continue! Thanks <3")
    }
  </script>
	<title>Course C/C++ Language</title>
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav learning " data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="">
        <div class="zone zone-content">
            <article class="widget-navigation widget-menu-widget widget" style="height: 77px;">
          <header class="navbar site-header container">
                                <div class="wrap-site-logo">
                                    <a title="Together" onclick=" wennew()">
                                        <img alt="Together" class="site-logo" src="images/LOGO1.png" style="width: 250px;">
                                    </a>
                                </div>
                                <br>
                               <center>
                                <div class="wrap-right-headers">
                                       <nav class="site-menu">
                                        <ul class="menu menu-main-menu">
                                            <li>
                                            <i class="fa-solid fa-rotate-left" onclick="goBack()" style="color: #0cd1e8; font-size: 25px;"></i>
                                            </li>
                                            <li class="current">
                                                <a title="Learning" onclick="Learning()" style="cursor:pointer;">Learning</a>
                                            </li>
                                            <li>
                                                <a href="/training">Training</a>
                                            </li>
                                            <li>
                                                <a href="/fights">Fights</a>
                                            </li>
                                            <li>
                                                <?php  
                                                    if ( isset($_SESSION['username'])) {
                                                        echo "<a href='Responsive.php' title='Contact'>Contact</a>";
                                                    }else if (isset($_SESSION['login_id'])) {
                                                        echo "<a href='Responsive.php' title='Contact'>Contact</a>";
                                                    }else{
                                                         echo "<a href='#' title='Please login for continue!!! THANKS !' onclick='contact()'>Contact</a>";
                                                    }
                                                    ?>
                                            </li>
                                            <li>
                                                <a href="/evaluating">Evaluating</a>
                                            </li>
                                            <li>
                                                <a href="/discussion">Discussion</a>
                                            </li>
                                            <li>
                                                <a href="/game">Game</a>
                                            </li>
                                        </ul>

                                        </nav> 
                                        <?php  
                            if ( isset($_SESSION['username'])) {
                                $name = $_SESSION['username'];
                                }else if (isset($_SESSION['login_id'])) {
                                }else{
                                    echo '<ul class="site-user-menu" style="text-align:center;">
                                <li>
                                    <button class="btn btn-login" title="Login" onclick="login()">Login</button>
                                    <button class="btn btn-important" title="Register" onclick="register()" action="Register.php">Register</button>
                                </li>
                            </ul>';
                                }
                        ?>  
                                    </div>
                                </center>
                                    </header>
                                </article>
                            </div>
                            <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <main id="layout-main" class="group">
<section class="sidebar close">
    <div class="logo-details">
      <i><a title="C/C++ Programming" onclick="CforBeginners()" style="cursor:pointer;"><img alt="SQl" class="bx bxl-c-plus-plus" src="images/c-.png" style="cursor: pointer;"></a></i>
      <span class="logo_name">C/C++ Programming</a></span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">PHP & MySQL</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Posts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Posts</a></li>
          <li><a id="link-contact" href="http://localhost:8080/Together2/C%20for%20Beginners.php#contact">Multiple-Choice</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
        <?php  
                            if ( isset($_SESSION['username'])) {
                                $name = $_SESSION['username'];
                                echo '<p>&nbsp;</p>';
                                echo '<p style="text-align:center;"><i class="fa-solid fa-user"></i>&nbsp;</p>';

                                echo "<p><b><a title='PersonalDetails' onclick='PersonalDetails()' style=' text-align:left; margin-left:85px; font-size: 20px;cursor:pointer;'>$name</a></b></p>";
                                echo "<p style='text-align:center;font-size: 20px;'class='job'>Web Developer</p>";
                                echo '<form method="POST"><span class="btn btn-important" onclick ="Learning()" style="text-align:center; margin-left: 80px;" title="Logout" type="submit" name="logout">Logout</span></form>';
                                }else if (isset($_SESSION['login_id'])) {
                                    echo '<img src='.$user['profile_image'].' "class="profile-details profile-content" style="width:100px;height:100px;border-radius:100px; padding:20px;"/>';
                                    echo $user['name'];
                                    echo "<p style='text-align:center;font-size: 20px;'class='job'>Web Developer</p>";
                                    echo "<form method='POST'><span style='text-align:center; margin-left: 80px;' title='Log out' type='submit' name='logout' class='btn btn-important' onclick='GGlogout()'>Logout</span></form>";
                                }
                        ?>  
    </li>
</ul>
</section>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Option</span>
    </div>
    <div class="sum">
  <div id="home" class="content">
    <h3 style="font-family: codelearn-font;">
        <strong>Lesson 1 - Introduction to programming</strong>
    </h3>
    <center>
    <section class="course1_C">
        <iframe width="850" height="482" src="https://www.youtube.com/embed/FS0lgfb9KTw?list=PLq3KxntIWWrJkDaPEVmoaYW3PcZpkCzV2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section></center>
    <hr>
      <div class="col-xs-12 col-sm-7 col-md-6" style="float:right; margin-right: -380px; margin-top: -540px;" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key">
                                    <img src="images/programmer.png">
                                <p class="key-des">Please watch the video of the first lesson on the left before continuing to the next lesson.</p>
                            </li>
                        </div>
                    </li>
                </ul>
                                <div class="popup-box">
      <div class="popup">
        <div class="note-content">
          <header>
            <p></p>
            <i class="uil uil-times"></i>
          </header>
          <form action="#">
            <div class="row title">
              <label>Title</label>
              <input type="text" spellcheck="false">
            </div>
            <div class="row description">
              <label>Description</label>
              <textarea spellcheck="false"></textarea>
            </div>
            <button></button>
          </form>
        </div>
      </div>
    </div>
    <div class="wrapper" style="float:right; margin-right: -370px; margin-top: -350px;" data-aos="fade-up" data-aos-duration="1000">
      <li class="add-box">
        <div class="icon"><i class="uil uil-plus"></i></div>
        <p>Add new note</p>
      </li>
    </div>
    <section class="list-lesson" style="float:right;">
        <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
            <h3 style="text-align: center;color: #c53f3a;">Lesson list</h3>
            <li><a href="#home">Lesson 1 - Introduction to programming</a></li>
            <li><a href="#samples">Lesson 2 - Introduction to C/C++</a></li>
            <li><a href="#offers">Lesson 3 - Learn about expressions and casting in C/C++</a></li>
            <li><a href="#product">Lesson 4 - Learn about data types in C/C++</a></li>
            <li><a href="#contact">Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++</a></li>
            <li><a href="#">Lesson 6 - Learn about constants, strings... in C/C++</a></li>
            <li><a href="#">Lesson 7 - Learn about operators in C/C++</a></li>
            <li><a href="#">Lesson 8 - Learn about control structures in C/C++</a></li>
            <li><a href="#">Lesson 9 - Learn about the if else control structure in C/C++ programming</a></li>
            <li><a href="#">Lesson 10 - Learn about nested if else control structure in C/C++</a></li>
        </ul>
    </section>
    <br>
    <br>
    <br>
 
    <section class="button-NB" style="margin-top: 300px;margin-left: 550px;">
        
        <button class="snip1582" style="margin: 0px;box-shadow: 0px 8px 16px 0px red;"><a href="http://localhost:8080/Together2/course_C_language.php#home"><i class="fa-solid fa-list"></i></a></button>
        <button class="snip1582" style="box-shadow: 0px 8px 16px 0px red;"><a href="#samples">NEXT <i class="fa-solid fa-arrow-right"></i></a></button>
    </section>
</div>
    <div id="samples" class="panel">
    <div class="content">
        <h3><strong>Lesson 2 - Introduction to C/C++</strong></h3>
        <section class="course1_C2">
        <iframe width="800" height="482" src="https://www.youtube.com/embed/WUNWhIjUF2Y?list=PLq3KxntIWWrJkDaPEVmoaYW3PcZpkCzV2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <hr>
      <div class="col-xs-12 col-sm-7 col-md-6" style="float:right; margin-right: -300px; margin-top: -540px;" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key">
                                    <img src="images/programmer.png">
                                <p class="key-des">Please continue to watch the video of lesson 2 and then move on to the next post.</p>
                            </li>
                        </div>
                    </li>
                </ul>
    <section class="list-lesson" style="float:right;">
            <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
                <h3 style="text-align: center;color: #c53f3a;">Lesson list</h3>
                <li><a href="#home">Lesson 1 - Introduction to programming</a></li>
                <li><a href="#samples">Lesson 2 - Introduction to C/C++</a></li>
                <li><a href="#offers">Lesson 3 - Learn about expressions and casting in C/C++</a></li>
                <li><a href="#product">Lesson 4 - Learn about data types in C/C++</a></li>
                <li><a href="#contact">Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++</a></li>
                <li><a href="#">Lesson 6 - Learn about constants, strings... in C/C++</a></li>
                <li><a href="#">Lesson 7 - Learn about operators in C/C++</a></li>
                <li><a href="#">Lesson 8 - Learn about control structures in C/C++</a></li>
                <li><a href="#">Lesson 9 - Learn about the if else control structure in C/C++ programming</a></li>
                <li><a href="#">Lesson 10 - Learn about nested if else control structure in C/C++</a></li>
        </ul>
    </section>
    <section class="button-NB" style="margin-top: 300px;margin-left: 340px;">
        <button class="snip1582" ><a href="#home"><i class="fa-solid fa-arrow-left"></i> BACK</i></a></button>
        <button class="snip1582" style="margin: 0px;"><a href="http://localhost:8080/Together2/course_C_language.php#home"><i class="fa-solid fa-list"></i></a></button>
        <button class="snip1582" ><a href="#offers">NEXT <i class="fa-solid fa-arrow-right"></i></a></button>
    </section>
</div>
</div>
<div id="offers" class="panel">
    <div class="content">
      <h3>Lesson 3 - Learn about expressions and casting in C/C++</h3>
      <section class="course1_C2">
          <iframe width="800" height="482" src="https://www.youtube.com/embed/1lwYy_88cyg?list=PLq3KxntIWWrJkDaPEVmoaYW3PcZpkCzV2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </section>
      <hr>
      <div class="col-xs-12 col-sm-7 col-md-6" style="float:right; margin-right: -300px; margin-top: -540px;" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key">
                                    <img src="images/programmer.png">
                                <p class="key-des">Please continue to watch the video of lesson 3 and then move on to the next post.</p>
                            </li>
                        </div>
                    </li>
                </ul>
<section class="list-lesson" style="float:right;">
        <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
                <h3 style="text-align: center;color: #c53f3a;">Lesson list</h3>
                <li><a href="#home">Lesson 1 - Introduction to programming</a></li>
                <li><a href="#samples">Lesson 2 - Introduction to C/C++</a></li>
                <li><a href="#offers">Lesson 3 - Learn about expressions and casting in C/C++</a></li>
                <li><a href="#product">Lesson 4 - Learn about data types in C/C++</a></li>
                <li><a href="#contact">Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++</a></li>
                <li><a href="#">Lesson 6 - Learn about constants, strings... in C/C++</a></li>
                <li><a href="#">Lesson 7 - Learn about operators in C/C++</a></li>
                <li><a href="#">Lesson 8 - Learn about control structures in C/C++</a></li>
                <li><a href="#">Lesson 9 - Learn about the if else control structure in C/C++ programming</a></li>
                <li><a href="#">Lesson 10 - Learn about nested if else control structure in C/C++</a></li>
        </ul>
    </section>
    <section class="button-NB" style="margin-top: 300px;margin-left: 340px;">
        <button class="snip1582" ><a href="#samples"><i class="fa-solid fa-arrow-left"></i> BACK</i></a></button>
        <button class="snip1582" style="margin: 0px;"><a href="http://localhost:8080/Together2/course_C_language.php#home"><i class="fa-solid fa-list"></i></a></button>
        <button class="snip1582" ><a href="#product">NEXT <i class="fa-solid fa-arrow-right"></i></a></button>
    </section>
    </div>
</div>
  <div id="product" class="panel">
    <div class="content">
      <h3>Lesson 4 - Learn about data types in C/C++</h3>
      <section class="course1_C2">
          <iframe width="800" height="482" src="https://www.youtube.com/embed/K-Emqg7hhkQ?list=PLq3KxntIWWrJkDaPEVmoaYW3PcZpkCzV2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </section>
       <hr>
      <div class="col-xs-12 col-sm-7 col-md-6" style="float:right; margin-right: -300px; margin-top: -540px;" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key">
                                    <img src="images/programmer.png">
                                <p class="key-des">Please continue to watch the video of lesson 4 and then move on to the next post.</p>
                            </li>
                        </div>
                    </li>
                </ul>
        <section class="list-lesson" style="float:right;">
            <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
            <h3 style="text-align: center;color: #c53f3a;">Lesson list</h3>
                <li><a href="#home">Lesson 1 - Introduction to programming</a></li>
                <li><a href="#samples">Lesson 2 - Introduction to C/C++</a></li>
                <li><a href="#offers">Lesson 3 - Learn about expressions and casting in C/C++</a></li>
                <li><a href="#product">Lesson 4 - Learn about data types in C/C++</a></li>
                <li><a href="#contact">Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++</a></li>
                <li><a href="#">Lesson 6 - Learn about constants, strings... in C/C++</a></li>
                <li><a href="#">Lesson 7 - Learn about operators in C/C++</a></li>
                <li><a href="#">Lesson 8 - Learn about control structures in C/C++</a></li>
                <li><a href="#">Lesson 9 - Learn about the if else control structure in C/C++ programming</a></li>
                <li><a href="#">Lesson 10 - Learn about nested if else control structure in C/C++</a></li>
        </ul>
    </section>
    <section class="button-NB" style="margin-top: 300px;margin-left: 340px;">
        <button class="snip1582" ><a href="#offers"><i class="fa-solid fa-arrow-left"></i> BACK</i></a></button>
        <button class="snip1582" style="margin: 0px;"><a href="http://localhost:8080/Together2/course_C_language.php#home"><i class="fa-solid fa-list"></i></a></button>
        <button class="snip1582" ><a href="#contact">NEXT <i class="fa-solid fa-arrow-right"></i></a></button>
    </section>
    </div>
</div>
  <div id="contact" class="panel">
    <div class="content">
        <h3>Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++</h3>
        <section class="course1_C2">
            <iframe width="800" height="482" src="https://www.youtube.com/embed/KrUAvv8l5mA?list=PLq3KxntIWWrJkDaPEVmoaYW3PcZpkCzV2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <hr>
      <div class="col-xs-12 col-sm-7 col-md-6" style="float:right; margin-right: -300px; margin-top: -540px;" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key">
                                    <img src="images/programmer.png">
                                <p class="key-des">Please continue to watch the video of lesson 5 and then move on to the next post.</p>
                            </li>
                        </div>
                    </li>
                </ul>
            <section class="list-lesson" style="float:right;">
            <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
            <h3 style="text-align: center;color: #c53f3a;">Lesson list</h3>
                <li><a href="#home">Lesson 1 - Introduction to programming</a></li>
                <li><a href="#samples">Lesson 2 - Introduction to C/C++</a></li>
                <li><a href="#offers">Lesson 3 - Learn about expressions and casting in C/C++</a></li>
                <li><a href="#product">Lesson 4 - Learn about data types in C/C++</a></li>
                <li><a href="#contact">Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++</a></li>
                <li><a href="#">Lesson 6 - Learn about constants, strings... in C/C++</a></li>
                <li><a href="#">Lesson 7 - Learn about operators in C/C++</a></li>
                <li><a href="#">Lesson 8 - Learn about control structures in C/C++</a></li>
                <li><a href="#">Lesson 9 - Learn about the if else control structure in C/C++ programming</a></li>
                <li><a href="#">Lesson 10 - Learn about nested if else control structure in C/C++</a></li>
        </ul>
    </section>
    <section class="button-NB" style="margin-top: 300px;margin-left: 340px;">
        <button class="snip1582" ><a href="#product"><i class="fa-solid fa-arrow-left"></i> BACK</i></a></button>
        <button class="snip1582" style="margin: 0px;"><a href="http://localhost:8080/Together2/course_C_language.php#home"><i class="fa-solid fa-list"></i></a></button>
        <button class="snip1582" ><a href="#">NEXT <i class="fa-solid fa-arrow-right"></i></a></button>
    </section>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</main>
<footer id="footer" class="codecamp-footer">
    <div id="backtop">
        <i class="fa-solid fa-chevron-up"></i>
  </div>
    <div class=" main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 introduction footer-column">
                    <div class="logo-together">
                        <img src="images/LOGO1.png" alt="TOGETHER">
                    </div>
                    <p><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                        TOGETHER is an online platform that helps users to learn, practice coding skills and join the online coding contests.
                    </font>
                </font>
            </p>
                    <a href="https://www.facebook.com/" title="Facebook" target="_blank" class="social-button">
                        <i class="cl-icon-facebook-f">
                            
                        </i>
                    </a>
                    <a href="https://www.youtube.com/" title="Youtube" target="_blank" class="social-button">
                        <i class="cl-icon-youtube">
                            
                        </i>
                    </a>
                    <a href="https://twitter.com/" title="Twitter" target="_blank" class="social-button">
                        <i class="cl-icon-twitter-full">
                            
                        </i>
                    </a>
                    <a href="https://www.instagram.com/" title="Instagram" target="_blank" class="social-button">
                        <i class="cl-icon-instagram">
                            
                        </i>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 links footer-column">
                    <h4>Links</h4>
                    <p>
                        <a href="/learning" class="link-menu" title="Learning">Learning</a>
                    </p>
                    <p>
                        <a href="/training" class="link-menu" title="Training">Training</a>
                    </p>
                    <p>
                        <a href="/fights" class="link-menu" title="Fights">Fights</a>
                    </p>
                    <p>
                        <a href="/game/index" class="link-menu" title="Game">Game</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 about footer-column">
                    <h4>Information</h4>
                    <p>
                        <a href="/aboutus" title="About Us">About Us</a>
                    </p>
                    <p>
                        <a href="/terms" title="Terms of Use">Terms of Use</a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 help footer-column">
                    <h4>Help</h4>
                    <p>
                        <a href="/help" title="Help">Help</a>
                    </p>
                    <p>
                        <a href="/discussion" title="Discussion">Discussion</a>
                    </p>
                    <p>
                        <a href="mailto:support@codelearn.io" title="Contact us">Contact us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 right-reserved">
        <img src="images/Logo ĐH Sư Phạm TPHCM - HCMUE.png" alt="ĐHSPTPHCM" class="ĐHSPTPHCM-logo"  style="max-width: 5%;">
        <span class="powerby">
        Powered by 
        <a href="/">TOGETHER</a>
    </span>
    <span class="copyright">© 2022.
    </span>
    <span>All Rights Reserved. rev 3/23/2022 07:09:12 PM
    </span>
    </div>
</footer>
  <script>
   let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});
</script>
<script src="./js/note.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#backtop').fadeIn();
            }else{
                $('#backtop').fadeOut();
            }
        });
        $("#backtop").click(function(){
            $('html, body').animate({
                scrollTop: 0
            }, 150);
        });
        $('.btn[href="#frmSignup"]').click(function (e) {
            e.preventDefault();
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#top-head .wrap-form-head-register").offset().top - 100
            }, 1000);
        });  
    });
</script>
</body>
<script>
 AOS.init();
</script>
</html>