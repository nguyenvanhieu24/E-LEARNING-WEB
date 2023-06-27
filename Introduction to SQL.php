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
    function Learning(){
        location.href="Learning.php";
    }
    function IntroductiontoSQL(){
        location.href="Introduction to SQL.php";
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
<title data-title="Introduction to SQL">Introduction to SQL</title>
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
<div class="course-head1">
<div class="overlay"></div>
<div class="container">
<div class="course-head-content">
<div class="head">
<h1 class="title">
Introduction to SQL
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
<p class="title-wrap__desc" title="This course will help programmers to understand the principles, syntax and how SQL (Structured Query Language) works.This course will help programmers to understand the principles, syntax and how SQL (Structured Query Language) works."><li>This course will help programmers to understand the principles, syntax and how SQL (Structured Query Language) works.This course will help programmers to understand the principles, syntax and how SQL (Structured Query Language) works.</li></p>
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
<li>Understand the usage of SQL:</li><br>

<ul style="list-style-image: url('images/tick5.ico');">
<li>Allows access to data in relational database management systems.</li>
<li>Allows data description.</li>
<li>Allows you to define data in a database and manipulate that data.</li>
<li>Allows embedding in other languages using SQL modules, libraries and precompilers.</li>
<li>Allows creating and dropping databases and tables.</li>
<li>Allows creating views, stored procedures, functions in the database.</li>
<li>Allows setting permissions on tables, procedures and views.</li>
<li>Helps to effectively manage and query information faster, easier to maintain and secure information.</li>
</ul>
</li>
<br>
<br>
<li>Career path for SQL Developer in particular and Database Developer
<ul style="list-style-image: url('images/tick5.ico');padding-top: 10px; ">
<li>Technical direction: can become a Data Architect.</li>
<li>Management direction: the destination will be Business Analyst or Project Manager.</li>
</ul>
</li>
<br>
<li>Understanding SQL statements
<ul style="list-style-image: url('images/tick5.ico');padding-top: 10px;">
<li>DDL - Data Definition Language: CREATE; ALTER; DROP.</li>
<li>DML - Data Manipulation Language: SELECT; INSERT; UPDATE; DELETE.</li>
<li>DCL - Data Control Language: GRANT; REVOKE.</li>
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
<li>Install software SQL_Sever.</li>
</ul>
</ul>
  </div>

  
  <div id="samples" class="panel1">
    <div class="content">
        <div class="review1">
      <h3><strong>&nbsp;Overview of SQL:</strong></h3>
      <p><ul>
        <div class="video-review1" style="text-align:center;padding-bottom: 10px;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FUotBX7zNs8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
<li>SQL is a database computer language designed for the retrieval and management of data in a relational database. SQL stands for Structured Query Language. This tutorial will give you a quick start to SQL. It covers most of the topics required for a basic understanding of SQL and to get a feel of how it works.</li>
<p>
<h2>Why to Learn SQL?</h2>
<li>SQL is Structured Query Language, which is a computer language for storing, manipulating and retrieving data stored in a relational database. SQL is the standard language for Relational Database System. All the Relational Database Management Systems (RDMS) like MySQL, MS Access, Oracle, Sybase, Informix, Postgres and SQL Server use SQL as their standard database language.</li>
</p>
</ul>
<h2>Prerequisites</h2>
<ul>
<li>Before you start practicing with various types of examples given in this tutorial, I am assuming that you are already aware about what a database is, especially the RDBMS and what is a computer programming language.</li>

</ul></p>
</div>
    </div>
  </div>
  <div id="offers" class="panel1">
    <div class="content" style="margin-top: 55px;">
      <p><div class="dropdown">
        <button onclick="hamDropdown()" class="nut_dropdown" style="background: linear-gradient(to right,#0cd1e8,#ff78f8);box-shadow: 0px 8px 16px 0px red;"><h3>List Lesson - SQL(Structured Query Language)</h3></button></div>
        <div class="noidung_dropdown">
            <div class="noidung_dropdown1">
            <ul style="list-style-image: url('images/coding1.png');margin-right: 10px;">
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#home">Lesson 1 - Basic SQL - SELECT FROM WHERE<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:15:38</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#samples">Lesson 2 -  Basic SQL - Learn about SUM COUNT GROUP BY<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:07:13</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#offers">Lesson 3 - Basic SQL - Learn about CASE WHEN<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:07:21</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#product">Lesson 4 - Basic SQL - Handling Complex SQL with WITH (CTE)<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:05:09</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#contact">Lesson 5 - Basic SQL - Handling DateTime Timestamp SQL<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:09:31</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#lesson6">Lesson 6 - Basic SQL - Learn about SQL LEFT JOIN to process multiple tables<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:09:30</h5></a></li>
                <li><a href="http://localhost:8080/Together2/course_SQL_language.php#lesson7">Lesson 7 - Basic SQL - Must-know SQL syntaxes<<h5 style= "float:right; flex-shrink: 0; margin-left: 58px; min-width: 69px;margin-top: 25px ">00:07:19</h5></a></li>
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
                                <p class="key-des"><h1>Please complete the SQL Quiz below</h1></p>
                            </div></li>
                        </ul></div>

<p><iframe src="https://together.h5p.com/content/1291619774560567889/embed" aria-label="SQL Quiz" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://together.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script></p>
<div class="popup-box">
      <div class="popup">
        <div class="note-content">
          <header>
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
            echo "<li><a id='link-contact' href='#contact' class='button-1' style='margin-top: 580px; float: left;margin-left:70px'><p style='text-align:center;'><b>Multiple-Choice</b></p></a></li>";
        }else{
            echo "<li onclick='plslogin()'><a id='link-contact' href='#' class='button-1' style='margin-top: 580px; float: left;margin-left:70px'><p style='text-align:center;cursor:not-allowed;' title=><b>Multiple-choice</b></p></a></li>";
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