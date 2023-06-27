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
<html lang="en" data-triggered="true">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title data-title="K46 CNTT - Nhóm Together">K46 - CNTT | Nhóm Together</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icon.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="home(css)/home.min.css">
  <link rel="stylesheet" href="landing.min.css">
  <link rel="stylesheet" href="css/Site.min.css">
  <link rel="stylesheet" href="counterup.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/music.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://kit.fontawesome.com/36eb573868.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function register(){  
        location.href="Register.php";
      }
    function login(){
        location.href="Login.php";
    }
    function wennew(){
        location.href="wennew.php";
    }
    function loadinglearningpage(){
        location.href="loadinglearningpage.php";
    }
    function Learning(){
        location.href="Learning.php";
    }
    function PersonalDetails(){
        location.href="PersonalDetails.php";
    }
    function contact(){
        alert("Please Login For Continue! Thanks <3")
    }
    
  </script>
</head>
<body class="hold-transition site-body skin-sku-light layout-top-nav" data-new-gr-c-s-check-loaded="14.1052.0" data-gr-ext-installed="" style="">
    <div class="zone zone-content">
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <div class="menu">
            </div>
                <div id="layout-navigation" class="group landing-header">
                    <div class="zone zone-navigation">
                        <article class="widget-navigation widget-menu-widget widget" style="height: 77px;">
                            <header class="navbar site-header container">
                                <div class="wrap-site-logo">
                                    <a title="Together" onclick=" wennew()">
                                        <img alt="Together" class="site-logo" src="images/LOGO1.png" style="width: 250px;cursor: pointer;">
                                    </a>
                                </div>
                                 <div class="wrap-right-header">
                                    <input type="checkbox" id="mobile-menu-cb" name="mobile-menu-cb">
                                    <label class="hamburger-button" for="mobile-menu-cb">
                                        <span class="hamburger-icon"></span>
                                    </label>
                                    <label class="hamburger-menu-mask" for="mobile-menu-cb"></label>
                                    <nav class="site-menu">
                                        <ul class="menu menu-main-menu">
                                            <li>
                                                <a title="Learning" onclick="loadinglearningpage()" style="cursor:pointer;">Learning</a>
                                            </li>
                                            <li>
                                                <a href="/training" title="Training">Training</a>
                                            </li>
                                            <li>
                                                <a href="/fights" title="Fights">Fights</a>
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
                                                <a href="/evaluating" title="Evaluating">Evaluating</a>
                                            </li>
                                            <li>
                                                <a href="/discussion" title="Discussion">Discussion</a>
                                            </li>
                                            <li class="hide">
                                                <a href="/leaderboard" title="Leaders">Leaders</a>
                                            </li>
                                            <li>
                                                <a href="/game" title="Game">Game</a>
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
                                echo '<form method="POST"><button class="btn btn-important" onclick ="Learning()" title="Log out" type="submit" name="logout">Log out</button></form>';
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
                    </header>
     <li class="right-col">
            <p>Click Here To Music</p>
                <img src="images/Pause.webp" id="icon">
                <audio id="mySong" autoplay loop></audio>
                <script>
                    const audioSources = ["media/TADA KOE HITOTSU 『ただ声一つ - ロクデナシ (Rokudenashi)』Lyrics Video (Kan-Rom-Eng).mp3","media/The-Kid-Laroi-Ft-Justin-Bieber-Stay-(TrendyBeatz.com).mp3", "media/fairy-tale-music.mp3", "media/24kGoldn-Mood-Lyrics-ft-Iann-Dior_nMVFSwfV6wk.mp3", "media/HarehareYa-Sou-5492450.mp3"];
const player = document.getElementById("mySong");
function playAudio() {
    let audioSource = audioSources[Math.floor(Math.random() * audioSources.length)];
    player.src = audioSource;
};
player.addEventListener('ended', playAudio);
playAudio(); // start audio playing immediately
                </script>
    <script src="js/music.js"></script>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
        <div class="content">
            <h1>Library of online courses<br><span>Programming language</span> <br>From zero to hero</h1>
        </div>
        <div class="content1">
            <span class="par"></span>
</article>
</div>
</div>
</div>
</div>
</div>
        <div id="__next">
            <main class="Layout__Wrapper-sc-1yne8f3-0 gnhDQm">
                <div class="Container-sc-341qbk-0 SocialProof__CustomContainer-sc-1w7up9w-0 cudCgT">
                    <div class="SocialProof__Wrapper-sc-1w7up9w-1 jIeODB">
                        <h2 class="Text__Heading3-sc-167aua0-2 SocialProof__Title-sc-1w7up9w-2 dlLMqx fDCish">We support programming languages!</h2>
                        <div type="default" loop="" class="SocialProof__ImagesWrapper-sc-1w7up9w-4 bQdtqj">
                            <marquee behavior="alternate" scrollmount= "100" direction="left" loop= "ìnfinite">
                                <div loop="" class="SocialProof__ImagesWrapperInner-sc-1w7up9w-8 eskZpA">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132221.png" alt="">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132222.png" alt="">
                                    <img src="images/C-language-logo-1269x1401.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968267.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968242.png" alt=>
                                    <img src="https://nishiborisyuzo.com/products-lp/wp-content/uploads/sites/5/2016/03/js-logo.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/226/226777.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968350.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968332.png" alt=>
                                    <img src="images/sql-server4.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132220.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968252.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132219.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968313.png" alt=>
                                <div loop="" class="SocialProof__ImagesWrapperInner-sc-1w7up9w-8 eskZpA">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132221.png" alt="">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132222.png" alt="">
                                    <img src="images/C-language-logo-1269x1401.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968267.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968242.png" alt=>
                                    <img src="https://nishiborisyuzo.com/products-lp/wp-content/uploads/sites/5/2016/03/js-logo.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/226/226777.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968350.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968332.png" alt=>
                                    <img src="images/sql-server4.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132220.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968252.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/6132/6132219.png" alt=>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968313.png" alt=>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
            <main class="orientation">
                <section id="key-for-future" class="landing-section">
                    <div class="container">
                        <h2 class="title-section" data-aos="fade-up" data-aos-duration="3000">
                            Programming
                            <br>
                        is the in-demand skill for the future
                    </h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                        <img src="https://i.pinimg.com/736x/ce/4b/99/ce4b9960270a3156c1dc674642bc55d3.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-6" data-aos="fade-up" data-aos-duration="3000">
                        <ul class="list-key-features">
                            <li>
                                <div class="heading-key">
                                    <img src="images/ai.png">
                                    <h3>Develop creative thinking</h3> 
                                </div>
                                <p class="key-des">Learning to code helps you improve logical thinking and take you to a new level in solving problems.</p>
                            </li>
                            <li>
                                <div class="heading-key">
                                    <img src="images/avatar.png">
                                    <h3>Get to know the technology world</h3>
                                </div>
                                <p class="key-des">Learning to code to step into the world of Information Technology and adapt to the Industry 4.0.</p>
                            </li>
                            <li>
                                <div class="heading-key">
                                    <img src="images/communication.png">
                                    <h3>Get more job opportunities</h3>
                                </div>
                                <p class="key-des">Programming jobs are growing 50% faster than the overall job market with an average salary of 30% higher than that of other jobs.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fas fa-history"></i></div>
        <div class="counter">9</div>
        <div class="text">Working Hours</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-gift"></i></div>
        <div class="counter">99</div>
        <div class="text">Scholarship</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="counter">999</div>
        <div class="text">Registered Students</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-award"></i></div>
        <div class="counter">999</div>
        <div class="text">Awarded Certificates</div>
      </div>
                <div class="col-xs-12" style="text-align:center">
                <a title="Learn to code, now!" class="btn btn-important" onclick="Learning()">Learn to code, now!</a>
        </div>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  });
  </script>
    <main class="orientation">
        <section id="code-step" class="landing-section">
        <div class="container">
            <h2 class="title-section" data-aos="fade-up" data-aos-duration="3000">
                Roadmap to become 
                <br>
            a programmer
        </h2>
        <div class="row" data-aos="fade-left" data-aos-duration="3000">
            <div class="col-xs-12 col-sm-4">
                    <div class="wrap-code-step-img">
                        <span class="label-step">1</span>
                        <img src="https://img.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg?t=st=1648018933~exp=1648019533~hmac=1c5b5cbee7c02d05ec527684cf89eed09742e05d19c63df7dec5dc8175871b94&w=1060" alt="Learn to code">
                    </div>
                    <h3 class="step-title" onclick="Learning()">Learn to code</h3>
                    <p class="step-des">Start learning with a wide range of basic to advanced courses created by top experts.</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <a href="/training" title="Practice coding">
                    <div class="wrap-code-step-img">
                        <span class="label-step">2</span>
                        <img src="https://img.freepik.com/free-photo/close-up-image-programer-working-his-desk-office_1098-18707.jpg?t=st=1648018372~exp=1648018972~hmac=e9ed49591b8bfb525ca64522c319bd390ca4f4fa32489b3536e97ae44ddd2527&w=1060" alt="Practice coding">
                    </div>
                    <h3 class="step-title">Practice coding</h3>
                    <p class="step-des">Level up your programming skills every day with our library of 1000+ challenges.</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <a href="/fights" title="Join coding contest">
                    <div class="wrap-code-step-img">
                        <span class="label-step">3</span>
                        <img src="https://img.freepik.com/free-photo/professional-programmer-working-late-dark-office_1098-18705.jpg?t=st=1648018933~exp=1648019533~hmac=e90c6937282c54510ef73c5fd67a504d2b0f2843484e929a65adbb8c85c99271&w=1060" alt="Coding contest">
                    </div>
                    <h3 class="step-title">Join coding contest</h3>
                    <p class="step-des">Participate in contests to test the geek in you and improve your coding skills.</p>
                </a>
            </div>
        </div>
    </div>
</section>
    <section id="our-rewards" class="landing-section">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-xs-12 col-md-7 wrap-our-reward-content">
                    <div class="our-reward-content">
                        <h2 class="title-section">
                            <a href="/aboutus" title="Our pride">Our pride</a>
                        </h2>
                        <h5>Develops a comprehensive ecosystem of courses, practice exercises and coding contests with multilingual support. We connect people who share the same passion for programming to build a strong programming community together.</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                    <a href="/aboutus" title="Our pride"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c83c004e-1370-4756-88e5-4071de797088/de0dib6-0d584820-45d9-49c8-a54d-a33b98ac8372.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2M4M2MwMDRlLTEzNzAtNDc1Ni04OGU1LTQwNzFkZTc5NzA4OFwvZGUwZGliNi0wZDU4NDgyMC00NWQ5LTQ5YzgtYTU0ZC1hMzNiOThhYzgzNzIuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.oIKwFOK9Aqd8E2YOv8KDWQoSyNhyM_7E6T34Td20ZKE" alt="Our pride"></a>
                </div>
            </div>
        </div>
    </section>
</main>
</main>
  <main class="member">
  <section id="testimonials" class="landing-section">
     <center class="centercover">
  <div class="courseheader">
    <h2> MEMBER </h2>
    <div style="width: 200px;">
      <hr>
    </div>
  </div>
  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="https://satomikoutarou.github.io/Tandat/">
            <img src="images/TanDat.jpg" alt="Nguyễn Tấn Đạt"></a>
           </div>
           <div class="details">
             <div class="name">Nguyễn Tấn Đạt</div>
             <div class="job">46.01.104.023 Powerpoint, Word &amp; Design</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/ntdat255.228"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
             <a href="https://twitter.com/ntdat2208?fbclid=IwAR19nUJYkwhp6EPjb7bHs6tXNWz63rPgzbwR8vusFUF74pxbb1NAytdbzPs"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://www.instagram.com/nt_dat2208/?fbclid=IwAR19nUJYkwhp6EPjb7bHs6tXNWz63rPgzbwR8vusFUF74pxbb1NAytdbzPs"><i class="fab fa-instagram" aria-hidden="true"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="https://nguyenvanhieu24.github.io/CV-NVH/">
            <img src="images/VanHieu.jpg" alt="Nguyễn Văn Hiếu"></a>
           </div>
           <div class="details">
             <div class="name">Nguyễn Văn Hiếu</div>
             <div class="job">46.01.104.054 Coder HTML&amp;CSS</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/nguyenvanhieu24"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
             <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.tiktok.com%2F%40hiumatkhonghi%3Ffbclid%3DIwAR3jC8VpC55TFJyGvAT4Qwg0ppNqFQuj-Ao0xt5rG7_ZddG9hr5szy87xl0&amp;h=AT1thn4pBOhsG4tTgL1G4pqs-C2DcqeN5quV-wbuvlJZon7e7gMFoWdwM4Fmug_aafyrUzOxp0aDbNoUQfOiqSJwtxYLUkrarHNexwfgclRw_sJGH0rLLAF-gQs2ceZxcGkCoqwBjB6InwkjdmkQOQ"><i class="fa-brands fa-tiktok"></i>
</a>
             <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fhiumatkhonghi%2F%3Ffbclid%3DIwAR1XUttIu8T_k7B0Ok0KilSSOwieTBA90KUXyrPwElcNpbqsV2yM4s_3Of8&amp;h=AT1yeEcbsA1IXp1wWCvIc1hqwUWhEtriXhTDcykYvASIFY6JspKpWJ2LCdse01q2HXoSocgcqaUqNqZk04uMF2kcxWWUv3iHILB2FGDW6rTU4AAF_Xl-JQG-TxNZ1yPIT6nncTCYIDn9DpfnltsEbQ"><i class="fab fa-instagram" aria-hidden="true"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="https://saintnguyen.github.io/CVcanhan/">
            <img src="images/XuanHuu.jpg" alt="Nguyễn Xuân Hữu"></a>
           </div>
           <div class="details">
             <div class="name">Nguyễn Xuân Hữu</div>
             <div class="job">46.01.104.064 Coder HTML&amp;CSS</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/saintnguyen1112"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
             <a href="https://www.twitch.tv/saint_nguyen"><i class="fa-brands fa-twitch"></i></a>
             <a href="https://www.instagram.com/xn__huung/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
           </div>
         </div>
        </div>
      </div>
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/NguyenVan.jpg" alt="Nguyễn Hoàng Trúc Vân">
           </div>
           <div class="details">
             <div class="name">Nguyễn Hoàng Trúc Vân</div>
             <div class="job">46.01.104.216 Coder HTML&amp;CSS</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/profile.php?id=100056700453638"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
             <a href="https://twitter.com/slyniarain?fbclid=IwAR2mOQ28i5AffTbsZtApHwkeLuutXZHMfQvbz8qtIAeuaE8hJIaHjW4ogh0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fdiscord.com%2Fchannels%2F%40me%3Ffbclid%3DIwAR38WmiIWBZ-kQSQmHGtI2ihcSTimudpICht8jaVNeyJPPid3ePEA2Z6nnU&amp;h=AT04odeBfhq710WNQP6jDGLqNfj1qKC1DVD5yVK2iUgHAKlEX7IL733cX4TS7YgzQrmbLnJKqXrlv0HL1tlJXD4wCWNUS6A6TKhm5WI3Q1RK_J5GUadNcqHCtXb4QL7XSrTYLMRWlDm-SQqCZW3Qmw"><i class="fa-brands fa-discord"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="https://thanhtu2510.github.io/thanhtu2510/">
             <img src="images/ThanhTu.jpg" alt="Đinh Trần Thanh Tú"></a>
           </div>
           <div class="details">
             <div class="name">Đinh Trần Thanh Tú</div>
             <div class="job">46.01.104.205 Coder HTML&amp;CSS</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/tu.dinh.2510"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
             <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2Ftinanhtinem122%3Ffbclid%3DIwAR29_iAu1hj6fW-Scah8-BYNS1y8qjfgvll0cMuw278s9qSVo1LWb3UCnJA&amp;h=AT0wiHYqiKjfigYOp0fquIAKHYMf19AEiSG4FW_1yVMjgeeBNwsCMa-MQ-8F3rf6hWcaxHRtvV8D5rzu_coSmqijLi5_okdZn1l7fAaMYS_9kK0y3sLusf16rzqaAahK4f3x0T8p_3kJ-jlvg3SeBQ"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_thanhtu_2510%2F%3Ffbclid%3DIwAR2UiqXvwkiN1lDckunxTJqHeCq1BkgVUwV3ltjJffKLoRad9qQFxQ_NOCE&amp;h=AT0wiHYqiKjfigYOp0fquIAKHYMf19AEiSG4FW_1yVMjgeeBNwsCMa-MQ-8F3rf6hWcaxHRtvV8D5rzu_coSmqijLi5_okdZn1l7fAaMYS_9kK0y3sLusf16rzqaAahK4f3x0T8p_3kJ-jlvg3SeBQ"><i class="fab fa-instagram" aria-hidden="true"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="https://satomikoutarou.github.io/infomation/">
            <img src="images/HuuTrong.jpg" alt="Đồng Hữu Trọng"></a>
           </div>
           <div class="details">
             <div class="name">Đồng Hữu Trọng</div>
             <div class="job">46.01.104.201 Coder HTML&amp;CSS</div>
           </div>
           <div class="media-icons">
             <a href="https://www.facebook.com/profile.php?id=100011726735102"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
             <a href="https://twitter.com/KoutarouSatomi"><i class="fab fa-twitter" aria-hidden="true"></i></a>
             <a href="https://www.instagram.com/satomi_koutarou/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
           </div>
         </div>
        </div>
      </div>
    </div>
</div>
    <div class="button">
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
    </div>
  </div>
  </center>
    </div>
  </div>
</section>
</main>
</section>
</main>
  <footer id="footer" class="codecamp-footer">
      <div id="backtop1" style="margin-bottom: 70px;">
         <a href="https://www.facebook.com/messages/t/109870918330906"  data-toggle="sidebar-messenger-toggle"><i class="mes fa-brands fa-facebook-messenger"></i></a>
        </div>
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
                        <?php  
                            if ( isset($_SESSION['username'])) {
                                echo "<a href='Responsive.php' title='Contact us'>Contact us</a>";
                            }else if (isset($_SESSION['login_id'])) {
                                echo "<a href='Responsive.php' title='Contact us'>Contact us</a>";
                            }else{
                                echo "<a href='#' onclick='contact()' title='Contact us'>Contact us</a>";
                            }
                        ?>
                        
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
</div></footer></section></main></marquee></div></div></div></main></div></div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./js/typed.min.js" type="text/javascript"></script>
<script src="./js/script.js" type="text/javascript"></script>
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