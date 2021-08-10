<?php
session_start();
//DB Connection
$db = mysqli_connect("localhost", "root", "", "freetimetutoring");


if (isset($_POST['login'])) {
    $userid = mysqli_real_escape_string($db, $_POST['userid']);
    $userpass = mysqli_real_escape_string($db, $_POST['pass']);
    $pass = $userpass;
    $sql = "SELECT * FROM person WHERE Person_ID='$userid' AND password='$pass'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
            $username = $row["First_Name"];
            $email = $row["Email"];
            $userid = $row["Person_ID"];
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $userid;
            $_SESSION['useremail'] = $email;
        }
        header("Location: homepage.php");
    } else {
        echo "Invalid";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Free Time Tutoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://webthemez.com" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/jcarousel.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-signup.css" rel="stylesheet">
    <link href="fonts/fonts signup/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper" class="">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="homepagedemo.php"><img src="img/logo.png" alt="logo" /></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="signup.php">Sign up</a></li>
                            <li><a href="login.php">Log in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <section id="call-to-action-21">
        </section>

        <div class="section-padding gray-bg" style="background-color: #FFF;">
            <div class="container">
                <div class="wrapper">
                    <div class="inner" style="background-color: #FAD7A0;">
                        <div class="image-holder">
                            <img src="img/l.png" alt="">
                        </div>
                        <form action="#" method="post">
                            <h3>Log in</h3>
                            <div class="form-wrapper">
                                <input type="text" name="userid" placeholder="userid" class="form-control">
                            </div>
                            <div class="form-wrapper">
                                <input type="password" name="pass" placeholder="Password" class="form-control">
                                <i class="zmdi zmdi-lock"></i>
                            </div>
                            <button type="submit" name="login">LOG IN
                                <i class="zmdi zmdi-arrow-right"></i>
                            </button>
                            <br>
                            <div class="flex-col-c p-t-170 p-b-40">
                                <span class="txt1 p-b-9">
                                    Don’t have an account?
                                </span>

                                <a href="signup.php" class="txt3">
                                    Sign up Now
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- end header -->
        <section id="call-to-action-21">
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Free Time Tutoring</h5>
                            <address>
                                <strong>United International University</strong><br>
                                100 feet road , Madani evenue<br>
                                Vatara thana , Dhaka 1212
                            </address>
                            <p>
                                <i class="icon-phone"></i> Phone : +880175-7921768<br>
                                <i class="icon-envelope-alt"></i> email: fttutor@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Quick Links</h5>
                            <ul class="link-list">
                                <li><a href="http://www.uiu.ac.bd/?post_type=event">Latest Events</a></li>
                                <li><a href="http://www.uiu.ac.bd/contact-us/">Terms and conditions</a></li>
                                <li><a href="http://www.uiu.ac.bd/contact-us/">Privacy policy</a></li>
                                <li><a href="http://www.uiu.ac.bd/offices/career-counseling-center/">Career</a></li>
                                <li><a href="http://www.uiu.ac.bd/">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">About UIU</h5>
                            <ul class="link-list">
                                <li><a href="http://www.uiu.ac.bd/about-uiu/">Know about United International University</a></li>
                                <li><a href="http://www.uiu.ac.bd/authorities/">Authoritires</a></li>
                                <li><a href="http://www.uiu.ac.bd/academic/">Academics</a></li>
                                <li><a href="http://www.uiu.ac.bd/research/">Research</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5 class="widgetheading">Recent News</h5>
                            <ul class="link-list">
                                <li><a href="http://www.uiu.ac.bd/notices/">Latest Notice of UIU</a></li>
                                <li><a href="http://www.uiu.ac.bd/why-uiu/">Why UIU</a></li>
                                <li><a href="https://www.facebook.com/groups/www.UNB/">UIU News Box</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>
                                    <span>&copy; United International University Copyright © 2019-2021 All right reserverd <br /></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="social-network">
                                <li><a href="https://www.facebook.com/uiuinfo" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/uiuedu" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/school/united-international-university/" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/+unitedinternationaluniversityuiudhaka" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
</body>

</html>