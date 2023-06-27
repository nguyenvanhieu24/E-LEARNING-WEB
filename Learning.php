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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title data-title="learning">Learning</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icon.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="landing.min.css">
  <link rel="stylesheet" href="css/Site.min.css">
  <link rel="stylesheet" href="list.min.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://codelearn.io/Themes/TheCodeCampPro/Resources/Lib/slick/slick.min.css?fileHash=AiMSqBZKrQs71Lw1XnWiNw%3d%3d" rel="stylesheet" type="text/css">
  <script src="https://codelearn.io/Themes/TheCodeCampPro/Resources/Lib/jquery/jquery.min.js?fileHash=ejlXWurjHXHGOnyj1CERxA%3d%3d" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script type="text/javascript">
    function wennew(){
        location.href="wennew.php";
    }
    function Learning(){
        location.href="Learning.php";
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
    function IntroductiontoSQL(){
        location.href="Introduction to SQL.php";
    }
    function JavaProgramming(){
        location.href="Java Programming.php";
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
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav learning " data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="">

        <div class="zone zone-content">

    <article class="widget-navigation widget-menu-widget widget" style="height: 77px;">
          <header class="navbar site-header container">
                                <div class="wrap-site-logo">
                                    <a title="Together" onclick=" wennew()">
                                        <img alt="Together" class="site-logo" src="images/LOGO1.png" style="width: 250px;cursor: pointer;">
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
                            </header>
                                <br>
                                <div class="wrapper" style="margin-left: 320px;">
         <div class="search">
        <div class="search-input" style="float:right;">
             <a href="" target="_blank" hidden></a>
          <input type="text" placeholder="Type To Search..">
          <div class="autocom-box">
          
          </div>
          <div class="icon"><i class="fas fa-search"></i></div>
        </div>
      </div>
      <script src="js/suggestions.js"></script>
        </div>
        </div>
        <script>
            const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = "http://localhost:8080/together2/" + userData;
            linkTag.setAttribute("href", webLink);
            console.log(webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase()); 
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = '<li>'+ data +'</li>';
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = "http://localhost:8080/together2/" + selectData;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>'+ userValue +'</li>';
    }else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

let suggestions = [
    "C for Beginners.php",
    "C++ for Beginners",
    "Learning.php",
    "Introduction to SQL.php",
    "Java Programming.php",
];

        </script>
        <br>
                                        <div class="head-course">
                                            <div class="container" data-aos="fade-up" data-aos-duration="3000">
                                                <h1> TOGETHER's coding courses page.</h1> 
                                                <h3>Let's start your first course below!</h3>
                                            </div>
                                        </div>
                                    <main id="layout-main" class="group">
                                        <div id="layout-content" class="group">
                                            <div id="content" class="group">
                                                <div class="zone zone-content">
                                                    
                                                </div>
                                                <div class="container">
                                                    <div id="list">
                                                        <section class="list-courses">
                                                            <h2 class="title-block" data-aos="zoom-out-up"data-aos-duration="1000"
                                                                data-aos-once="false">Basic programming</h2>
                                                            <br>
                                                            <div class="row">
                                                            <article class="course-item col-12 col-md-4 col-lg-3" tabindex="-1" role="tabpanel" id="slick-slide711" aria-describedby="slick-slide-control711" data-aos="zoom-out-up"data-aos-duration="1000" data-aos-once="false">
                                                                    <div class="wrap-course-item">
                                                                        <div class="course-thumb">
                                                                            <a title="C for Beginners" onclick="CforBeginners()()">
                                                                                <img src="images/cover-0325-LearnCandC__Languages_Dan_Newsletter-743100f051077054fa1cc613ff4523a2.png" alt="C/C++ for Beginners">
                                                                            </a>
                                                                            <div class="cl-badge hot">
                                                                                <span>Hot</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="view-content">
                                                                            <div class="view-content-header">
                                                                                <img class="view-content-header__img-top" src="/Themes/TheCodeCampPro/Resources/Images/home-v2/bg-course-top.png" alt="course top img">
                                                                                <span class="star-rating">
                                                                                    <span style="width:94.0%"></span>
                                                                                </span>
                                                                                <span class="course-type online">
                                                                                Online
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="course-title">
                                                                            <a title="C for Beginners" onclick="CforBeginners()">C/C++ for Beginners</a>
                                                                        </h3>
                                                                        <a href="/profile/3488" title="Name" class="course-author">Name</a>
                                                                        <p class="course-description">The complete C/C++ Programing Course for Beginners, this course teaches you the fundamentals of a programing language. After completed, you will be able to move from the basics to more advanced course.</p>
                                                                        <div class="view-content-footer">
                                                                            <div class="course-footer-left">
                                                                                <span class="free-text">Free</span>
                                                                            </div>
                                                                            <div class="course-footer-right">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="popover-course arrow-right" style="right: calc(100% + 20px); right: unset;">
                                                                        <a title="C for Beginners"onclick="CforBeginners()" style="cursor:pointerF;"><h3 class="popover-course__title">C/C++ for Beginners</h3>
                                                                        </a>
                                                                        <div class="popover-course__sum">
                                                                            <div class="author">
                                                                                <img src="/CodeCamp/CodeCamp/Upload/Avatar/a76638850ecc4722b76d255e9cdd462f.jpg" alt="Name">
                                                                                <a href="/profile/3488" class="user-name" title="Name">Name</a>
                                                                            </div>
                                                                            <span class="rate-wrap">
                                                                                <span class="star-rating">
                                                                                    <span style="width:94.0%"></span>
                                                                                </span>
                                                                                <span class="avg-rate">4.7</span>
                                                                                <span class="total-rate">(638)</span>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="popover-course__detail-infor">
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-dribbble">
                                                                                    </i> Online 
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-users-alt">
                                                                                        
                                                                                    </i> 68010 students
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-star" avg-rate="4.7">
                                                                                        
                                                                                    </i> Great reviews from students
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-clock">
                                                                                        
                                                                                    </i> Time to complete: 
                                                                                    <strong>20 hours</strong>
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-award">
                                                                                        
                                                                                    </i> Certificate of Course Completion
                                                                                </p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                         <article class="course-item col-12 col-md-4 col-lg-3" tabindex="-1" role="tabpanel" id="slick-slide711" aria-describedby="slick-slide-control711" data-aos="zoom-out-up"data-aos-duration="1000" data-aos-once="false">

                                                            <!-- sql -->
                                                            <div class="wrap-course-item ">
                                                                <div class="course-thumb">
                                                                    <a title="Introduction to SQL" onclick="IntroductiontoSQL()()">
                                                                         <img src="images/sql.jpg">
                                                                        </a>
                                                                    
                
                                                                    <div class="cl-badge hot">
                                                                        <span>Hot</span>
                                                                    </div>
                                                                </div>
                                                                <div class="view-content">
                                                                    <div class="view-content-header">
                                                                        <img class="view-content-header__img-top" src="/Themes/TheCodeCampPro/Resources/Images/home-v2/bg-course-top.png" alt="course top img">
                                                                        <span class="star-rating">
                                                                            <span style="width:94.0%">
                                                                                
                                                                            </span>
                                                                        </span>
                                                                        <span class="course-type online">
                                                                        Online
                                                                    </span>
                                                                </div>
                                                                <h3 class="course-title">
                                                                            <a title="Introduction to SQL" onclick="IntroductiontoSQL()">Introduction to SQL</a>
                                                                </h3>
                                                                
                                                                <a href="/profile/3488" title="Name" class="course-author" tabindex="0">Name</a>
                                                                <p class="course-description">This course will help programmers to understand the principles, syntax and how SQL (Structured Query Language) works.</p>
                                                                <div class="view-content-footer">
                                                                    <div class="course-footer-left">
                                                                        <span class="free-text">Free</span>
                                                                    </div>
                                                                    <div class="course-footer-right">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="popover-course arrow-left" style="left: calc(100% + 20px); right: unset;">
                                                                <a title="Introduction to SQL"onclick="IntroductiontoSQL()" style="cursor:pointerF;"><h3 class="popover-course__title">Introduction to SQL</h3></a>
                                                                
                                                                <div class="popover-course__sum">
                                                                    <div class="author">
                                                                        <img src="/CodeCamp/CodeCamp/Upload/Avatar/a76638850ecc4722b76d255e9cdd462f.jpg" alt="Name">
                                                                        <a href="/profile/3488" class="user-name" title="Name" tabindex="0">Name</a>
                                                                    </div>
                                                                    <span class="rate-wrap">
                                                                        <span class="star-rating"><span style="width:94.0%"></span></span>
                                                                        <span class="avg-rate">4.7</span>
                                                                        <span class="total-rate">(927)</span>
                                                                    </span>
                                                                </div>
                                                                <ul class="popover-course__detail-infor">
                                                                    <li>
                                                                        <p>
                                                                            <i class="cl-icon-dribbble">
                                                                                
                                                                            </i> Online 
                                                                        </p>
                                                                    </li>

                                                                    <li>
                                                                        <p>
                                                                            <i class="cl-icon-users-alt">
                                                                                
                                                                            </i> 92947 students
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <i class="cl-icon-star" avg-rate="4.7">
                                                                                
                                                                            </i> Great reviews from students
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <i class="cl-icon-clock">
                                                                                
                                                                            </i> Time to complete: 
                                                                            <strong>20 hours</strong>
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <i class="cl-icon-award">
                                                                                
                                                                            </i> Certificate of Course Completion</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </section>
                                                <section class="list-courses">
                                                    <h2 class="title-block" data-aos="zoom-out-up"data-aos-duration="1000"
                                                                data-aos-once="false">Advanced programming</h2>
                                                    <br>
                                                    <div class="row">
                                          <article class="course-item col-12 col-md-4 col-lg-3" tabindex="-1" role="tabpanel" id="slick-slide711" aria-describedby="slick-slide-control711" data-aos="zoom-out-up"data-aos-duration="1000" data-aos-once="false">
                                                                    <div class="wrap-course-item">
                                                                        <div class="course-thumb">
                                                                            <a title="Java-Programming" onclick="JavaProgramming()()">
                                                                                <img src="images/Java-Programming.png" alt="Java-Programming">
                                                                            </a>
                                                                            <div class="cl-badge hot">
                                                                                <span>Hot</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="view-content">
                                                                            <div class="view-content-header">
                                                                                <img class="view-content-header__img-top" src="/Themes/TheCodeCampPro/Resources/Images/home-v2/bg-course-top.png" alt="course top img">
                                                                                <span class="star-rating">
                                                                                    <span style="width:94.0%"></span>
                                                                                </span>
                                                                                <span class="course-type online">
                                                                                Online
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="course-title">
                                                                            <a title="C for Beginners" onclick="JavaProgramming()">Java Programming</a>
                                                                        </h3>
                                                                        <a href="/profile/3488" title="Name" class="course-author">Name</a>
                                                                        <p class="course-description">Tutorial to help you self-study Java programming from basic to advanced (Designed specifically for beginners). After completed, help you prepare for web programming and android programming.</p>
                                                                        <div class="view-content-footer">
                                                                            <div class="course-footer-left">
                                                                                <span class="free-text">Free</span>
                                                                            </div>
                                                                            <div class="course-footer-right">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="popover-course arrow-left" style="left: calc(100% + 20px); right: unset;">
                                                                        <a title="C for Beginners"onclick="JavaProgramming()" style="cursor:pointerF;"><h3 class="popover-course__title">Java Programming</h3>
                                                                        </a>
                                                                        <div class="popover-course__sum">
                                                                            <div class="author">
                                                                                <img src="/CodeCamp/CodeCamp/Upload/Avatar/a76638850ecc4722b76d255e9cdd462f.jpg" alt="Name">
                                                                                <a href="/profile/3488" class="user-name" title="Name">Name</a>
                                                                            </div>
                                                                            <span class="rate-wrap">
                                                                                <span class="star-rating">
                                                                                    <span style="width:94.0%"></span>
                                                                                </span>
                                                                                <span class="avg-rate">4.7</span>
                                                                                <span class="total-rate">(638)</span>
                                                                            </span>
                                                                        </div>
                                                                        <ul class="popover-course__detail-infor">
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-dribbble">
                                                                                    </i> Online 
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-users-alt">
                                                                                        
                                                                                    </i> 68010 students
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-star" avg-rate="4.7">
                                                                                        
                                                                                    </i> Great reviews from students
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-clock">
                                                                                        
                                                                                    </i> Time to complete: 
                                                                                    <strong>20 hours</strong>
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <p>
                                                                                    <i class="cl-icon-award">
                                                                                        
                                                                                    </i> Certificate of Course Completion
                                                                                </p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
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
        <img src="images/Logo ĐH Sư Phạm TPHCM - HCMUE.png" alt="ĐHSPTPHCM" class="ĐHSPTPHCM-logo" style="max-width: 5%;">
        <span class="powerby">
        Powered by 
        <a href="/">TOGETHER</a>
    </span>
    <span class="copyright">© 2022.
    </span>
    <span>All Rights Reserved. rev 3/23/2022 07:09:12 PM
    </span>
</div></footer>
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
</article>
</div>
</body>
<script>
 AOS.init();
</script>
</html>