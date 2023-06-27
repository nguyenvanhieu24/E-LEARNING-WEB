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
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/note.css">
  <link rel="stylesheet" href="star-rating.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="css/csslist.css">
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
    function CforBeginners(){
        location.href="C for Beginners.php";
    }
    function Learning(){
        location.href="Learning.php";
    }
    function PersonalDetails(){
        location.href="PersonalDetails.php";
    }
    function goBack() {
        window.history.back()
    }
    function contact(){
        alert("Please Login For Continue! Thanks <3")
    }
  </script>
  <script type="text/javascript">
      function plslogin(){
        alert("Please login for continue!!!");
      }
  </script>
    <title>C/C++ For Beginners</title>
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav learning " data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="">

        <div class="zone zone-content">
            <article class="widget-navigation widget-menu-widget widget" style="height: 77px;">
          <header class="navbar site-header container">
                            <div class="wrap-site-logo">
                                    <a title="Together" onclick="wennew()">
                                        <img alt="Together" class="site-logo" src="images/LOGO1.png" style="width: 250px;cursor:pointer;">
                                    </a>

                                </div>
                                <br>
                                <center>
                                <div class="wrap-right-headers">
                                    <input type="checkbox" id="mobile-menu-cb" name="mobile-menu-cb">
                                       <label class="hamburger-button" for="mobile-menu-cb">
                                           <span class="hamburger-icon"></span>
                                       </label>
                                       <label class="hamburger-menu-mask" for="mobile-menu-cb">
                                           
                                       </label>
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
                                echo '<p style="text-align:center;"><i class="fa-solid fa-user"></i>&nbsp;</p>';

                                echo "<p style='text-align:center;font-size: 16px;'><b><a title='PersonalDetails' onclick='PersonalDetails()' style='cursor:pointer;'>$name</a></b></p>";
                                echo '<p>&nbsp;</p>';
                                echo '<form method="POST"><button class="btn btn-important" title="Log out" type="submit" name="logout">Log out</button></form>';
                                }else if (isset($_SESSION['login_id'])) {
                                    echo '<img src="'.$user['profile_image'].'" style="width:100px;height:100px;border-radius:100px; padding:15px;"/>';
                                    echo $user['name']; 
                                    echo '<p>&nbsp;&nbsp;</p>';
                                    echo "<form><a href='GGlogout.php' class='btn btn-important' onclick='gglogout()'>Logout</a></form>";
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
                                    </div>
                                </center>
                            </header>
                        </article>
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
    <main id="layout-main" class="group">
<div id="layout-content" class="group">
<div id="content" class="group">
<div class="zone zone-content">
<div class="course-head">
<div class="overlay"></div>
<div class="container">
<div class="course-head-content">
<div class="head">
<h1 class="title">
C/ C++ for Beginners
</h1>
<div class="actions">
</div>
</div>
<div class="main-content">
<div class="title-wrap">
<div class="title-wrap__rate-and-author">
<div class="author">
<img src="/CodeCamp/CodeCamp/Upload/Avatar/a76638850ecc4722b76d255e9cdd462f.jpg" alt="Name">
<a href="/profile/3488" title="Name">Name</a>
</div>
<div class="enroll-students">
<i style="font-size: 13px" class="cl-icon-users-alt"></i>
68320 students </div>
<div class="container1">
        <div class="rating-wrap">
            <h4>Star Rating</h4>
            <div class="center">
                <fieldset class="rating" style="width:200.0%">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5" class="full" title="Awesome"></label>
                    <input type="radio" id="star4.5" name="rating" value="4.5"><label for="star4.5" class="half"></label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4" class="full"></label>
                    <input type="radio" id="star3.5" name="rating" value="3.5"><label for="star3.5" class="half"></label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3" class="full"></label>
                    <input type="radio" id="star2.5" name="rating" value="2.5"><label for="star2.5" class="half"></label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2" class="full"></label>
                    <input type="radio" id="star1.5" name="rating" value="1.5"><label for="star1.5" class="half"></label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1" class="full"></label>
                    <input type="radio" id="star0.5" name="rating" value="0.5"><label for="star0.5" class="half"></label>
                </fieldset>
            </div>
            <h4 id="rating-value"></h4>
<span class="text-rate">
(646 votes)
</span>
        </div>
    </div>
<script src="./js/star-ratings.js"></script>
</div>
</div>
<div id="container-rate" class="rate view-only">
<p class="title-wrap__desc" title="The complete C/C++ Programing Course for Beginners, this course teaches you the fundamentals of a programing language. After completed, you will be able to move from the basics to more advanced course."><li>The complete C/C++ Programing Course for Beginners, this course teaches you the fundamentals of a programing language. After completed, you will be able to move from the basics to more advanced course.</li></p>
<div class="infor-wrap">
<div class="infor-wrap__item">
<span class="left">
<span class="icon-wrap"><i class="cl-icon-clock"></i></span>
Time
</span>
<span class="right">
20 hours
</span>
</div>
<div class="infor-wrap__item">
<span class="left">
<span class="icon-wrap"><i class="cl-icon-layer-group"></i></span>
Number of tasks
</span>
<span class="right">
84
</span>
</div>
<div class="infor-wrap__item">
<span class="left">
<span class="icon-wrap"><i class="cl-icon-graduation-cap"></i></span>
Reward
</span>
<span class="right">
Certificate
</span>
</div>
</div>
<div class="actions-wrap">
<hr>
<span class="text-price free">Free</span>
<div class="register" id="button-register">
<a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal" onclick="login()" id="not-auth">Please login to continue</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
  <div class="sum">
  <div id="home" class="content">
    <h3><strong>What will students get in the course ?</strong></h3>
<ul>
<li>Understand the usage of C/C++ language:</li><br>

<ul style="list-style-image: url('images/tick5.ico');">
<li>Know how to add libraries.</li>
<li>Know how to declare variables.</li>
<li>Know how to import and export data.</li>
</ul>
</li>
<br>
<li>Understand how iteration works (In C as well as other languages):
<ul style="list-style-image: url('images/tick5.ico');padding-top: 10px;">
<li>For loop.</li>
<li>While loop, do-while.</li>
</ul>
</li>
<br>
<li>Understand the basic structure of a programming language:
<ul style="list-style-image: url('images/tick5.ico');padding-top: 10px; ">
<li>Array structure.</li>
<li>String structure.</li>
</ul>
</li>
<br>
<li>Familiarize yourself with some basic algorithms,
<ul style="list-style-image: url('images/tick5.ico');padding-top: 10px;">
<li>Know how to write functions.</li>
<li>Familiarize yourself with recursive algorithms.</li>
</ul>
</li>
</ul>
<h3><strong>Ask students to prepare ?</strong></h3>
<ul>
<ul style="list-style-image: url('images/tick5.ico');padding-top: 10px;">
<li>Thinking logical.</li>
<li>Math ability.</li>
<li>Self-study, responsible spirit.</li>
<li>Patient and industrious.</li>
<li>Install software Visual Studio Community or DevC++.</li>
</ul>
</ul>
  </div>

  
  <div id="samples" class="panel1">
    <div class="content">
        <div class="review1">
      <h3><strong>&nbsp;Overview of C/C++ language:</strong></h3>
      <p><ul>
        <div class="video-review1" style="text-align:center;padding-bottom: 10px;">
            <iframe width="700" height="360" src="https://www.youtube.com/embed/WUNWhIjUF2Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
<li>The C language is a language that has existed for a long time, the imperative language was born in the early 70s.</li>
<li>The C language is a structured language and is classified as a third-level language (a higher-level language than the machine language and lower than the object-oriented language - level 4).</li>
<li>The C language is not only popular in writing applications. It is also a very effective language for writing system software.</li>
<li>Originally developed by Dennis Ritchie to develop the UNIX programming system at Bell Labs.</li>
<li>Large operating systems Windows, Linux, ... are influenced by the C language.</li>
<p>
<li>The C ++ language was developed by <strong>Bjarne Stroustrup</strong> in the late 1970s.</li>
<li>C++ is considered a middle-level language, combining the characteristics and features of high-level and low-level languages.</li>
<li>C++ can be used for embedded programming, system programming, or applications, games ...</li>
<li>C++ is a "omnidirectional" language. That is, it has a C-like structure and has an extremely important feature that is object-oriented.</li>
<li>C++ is one of the most popular programming languages in the world.</li></p>
</ul></p>
<h3><strong>Application of C/C++ language:</strong></h3>
<p><ul>
<li>Develop new languages.</li>
<li>Calculation platform.</li>
<li>Embedded System.</li>
<li>Graphics and games.</li>
</ul></p>
</div>
    </div>
  </div>
  <div id="offers" class="panel1">
    <div class="content" style="margin-top: 55px;">
      <p><div class="dropdown">
        <button onclick="hamDropdown()" class="nut_dropdown" style="background: linear-gradient(to right,#0cd1e8,#ff78f8);box-shadow: 0px 8px 16px 0px red;"><h3>List Lesson - C/C++ Language</h3></button></div>
        <div class="noidung_dropdown">
            <div class="noidung_dropdown1">
            <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
                <li><a href="http://localhost:8080/Together2/course_C_language.php#home">Lesson 1 - Introduction to programming<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:09:31</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_C_language.php#samples">Lesson 2 - Introduction to C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:08:22</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_C_language.php#offers">Lesson 3 - Learn about expressions and casting in C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:08:47</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_C_language.php#product">Lesson 4 - Learn about data types in C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:08:53</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_C_language.php#contact">Lesson 5 - Learn about variables, scopes, and the const keyword in C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:13:53</h5></a></li>
                <li><a href="#">Lesson 6 - Learn about constants, strings... in C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:05:08</h5></a></li>
                <li><a href="#">Lesson 7 - Learn about operators in C/C++<<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:07:40</h5></a></li>
                <li><a href="#">Lesson 8 - Learn about control structures in C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:04:23</h5></a></li>
                <li><a href="#">Lesson 9 - Learn about the if else control structure in C/C++ programming<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:07:35</h5></a></li>
                <li><a href="#">Lesson 10 - Learn about nested if else control structure in C/C++<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:06:37</h5></a></li>
            </ul>
        </div>
    </div></p>
</div>
</div>
  <div id="contact" class="panel1">
<div class="col-xs-12 col-sm-7 col-md-6 aos-init aos-animate">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="images/monitoring.png">
                                <p class="key-des"><h1>Please complete the C/C++ Language Quiz below</h1></p>
                            </div></li>
                        </ul></div>

<p><iframe src="https://together.h5p.com/content/1291615740528631009/embed" aria-label="Sketchnotes Lesson" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://together.h5p.com/js/h5p-resizer.js" charset="UTF-8" ></script></p>
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
  <div class="wrapper aos-init aos-animate" style="float:left" data-aos="fade-up" data-aos-duration="1000">
    <br>
    <br>
    <br>
    <br>
      <li class="add-box">
        <div class="icon"><i class="uil uil-plus"></i></div>
        <p>Add new note</p>
      </li>
  </div>
          <div class="col-xs-12 col-sm-7 col-md-6 aos-init aos-animate">
                        <ul class="list-key-features">
                            <li>
                               <div class="heading-key" style="float:center" data-aos="fade-up" data-aos-duration="1000">
                                    <img src="images/coding2.png">
                                <p class="key-des"><h1>Students take notes here</h1></p>
                            </div></li>
                        </ul></div>
</div>
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
  <div id="header">
    <ul id="navigation" style="float:right;">
        <br>
      <li><a id="link-home" href="#home" class="button-1"><p style="text-align:center;"><b>Achieved & Requests</b></p></a></li>
      <li><a id="link-samples" href="#samples" class="button-1"><p style="text-align:center;"><b>Introduction</b></p></a></li>
      <?php  
        if ( isset($_SESSION['username']) || isset($_SESSION['login_id']) ){
            echo "<li><a id='link-offers' href='#offers' class='button-1'><p style='text-align:center;''><b>Lesson content</b></p></a></li>";
        }else{
            echo "<li title='please login for continue' onclick='plslogin()'><a id='link-offers' href='#' class='button-1'><p style='text-align:center;cursor:not-allowed;'><b>Lesson content</b></p></a></li>";
        }
      ?>
              </ul>
</div>
      <?php  
        if (isset($_SESSION['username']) || isset($_SESSION['login_id'])){
            echo "<li><a id='link-contact' href='#contact' class='button-1' style='margin-top: 420px; float: left;margin-left:70px'><p style='text-align:center;'><b>Multiple-Choice</b></p></a></li>";
        }else{
            echo "<li onclick='plslogin()'><a id='link-contact' href='#' class='button-1' style='margin-top: 400px; float: left;margin-left:70px'><p style='text-align:center;cursor:not-allowed;' title=><b>Multiple-choice</b></p></a></li>";
        }
      ?>
</div>
</main>
    <main class="member">
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
</main>
</div>
<script src="./js/note.js"></script>
<script src="https://codelearn.io/Themes/TheCodeCampPro/Resources/Lib/slick/slick.min.js?fileHash=g5vMajDezqU32iaWKxPsqg%3d%3d"></script>
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