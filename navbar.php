<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Medeng College</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/new fav.png">


    <!-- Your existing stylesheet links -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-icon.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
</head>

<body>
 
    
    <header class="top">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="header-top-left">
                            <!-- <p>HAVE ANY QUESTION ?  +880 5698  598  6587</p> -->
                            <p>HAVE ANY QUESTION ? +91 9492381111</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="header-top-right text-md-end text-center">
                            <ul>
                                <!-- <li><a href="login.html">login</a></li>
		                            <li><a href="signup.html">signup</a></li> -->
                                <li><a href="#">medengcolleges@gmail.com</a> </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 col-6">
                        <div class="logo">
                            <a href="index.php"><img src="img/medengcollege.png" alt="eduhome" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-7 col-6">
                        <div class="content-wrapper text-end">
                            <!-- Main Menu Start -->
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.php" class="text-danger">Home</a></li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="course.php">courses</a>
                                            <ul>
                                                <li><a href="course.php">courses</a></li>
                                                <li><a href="course-details.php">courses details</a></li>
                                            </ul>
                                        </li>

                                        <!-- <li class="custom-nav-link" ><a href="course.php"  style="color: black; "  
                                                 >courses</a>
                                                <ul>
                                                    <li><a href="course.php">courses</a></li>
                                                    <li><a href="course-details.php">courses details</a></li>
                                                </ul>
                                            </li>   -->
                                        <!-- <button class="custom-nav-link">hello</button> -->



                                        <li class="dropdown marg-resp">
                                            <button class="custom-nav-link"
                                                style="color: white; font-weight: bold; border-radius: 50px;  text-decoration: none; font-size: 16px;">Results</button>
                                            <ul>
                                                <li><a href="mpc_results.php">MPC Results</a></li>
                                                <li><a href="bipc_results.php">BIPC Results</a></li>

                                            </ul>
                                        </li>




                                        <script>
                                            document.addEventListener("click", function (e) {
                                                const dropdown = document.querySelector(".dropdown");
                                                if (!dropdown.contains(e.target)) {
                                                    const dropdownMenus = document.querySelectorAll(".dropdown-menu");
                                                    dropdownMenus.forEach(function (menu) {
                                                        menu.style.display = "none";
                                                    });
                                                }
                                            });

                                            // Add an event listener to prevent hiding the dropdown menu when hovering over it
                                            document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
                                                menu.addEventListener("mouseover", function (e) {
                                                    e.stopPropagation(); // Prevent event from bubbling up to the document
                                                });
                                            });
                                        </script>



                                        <!-- <li class="nav-item mt-2 eve  ml-auto" style="margin-top: -30px!important;">
                                                <a style="color: black; font-weight: bold; border-radius: 50px;  text-decoration: none;"
                                                    class="custom-nav-link" href="events.html">Results</a>
                                                <ul>
                                                    <li><a href="course.php">courses</a></li>
                                                    <li><a href="course-details.php">courses details</a></li>
                                                </ul> 
                                            </li> -->

                                        <li class="hidden-sm"><a href="teacher.php">teacher</a>
                                            <ul>
                                                <li><a href="teacher.php">teacher</a></li>
                                                <li><a href="teacher-details.php">teacher details</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a href="blog.html">blog</a>
                                                <ul>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li> -->
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--Search Form Start-->
                            <div class="search-btn">
                                <ul class="header-search search-toggle">
                                    <li class="search-menu">
                                        <i class="fa fa-search"></i>
                                    </li>
                                </ul>
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="#">
                                            <input type="search" placeholder="Search here..." name="search" />
                                            <button type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--End of Search Form-->
                            <!-- Main Menu End -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu hidden-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>