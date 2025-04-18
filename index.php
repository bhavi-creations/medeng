<?php include 'navbar.php';  ?>

    <!-- Background Area Start -->

    <!-- <section id="slider-container" class="slider-area three"> 
            <video id="video-background" autoplay muted loop>
              <source src="img/medng video.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>

        <div class="slider-owl owl-theme owl-carousel"> 
        

          <div class="slider-content-area">  
                    <div class="container">
                    <div class="row">
                        <div class="col-lg-7"> 
                        <div class="slide-content-wrapper">
                            <div class="slide-content">
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-5">
                        <div class="slider-img">
                            <img src="img/Medeng Home page image 2.jpg" alt="slider">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>  


        


         <div class="slider-content-area">   
                    <div class="container">
                    <div class="row">
                        <div class="col-lg-7"> 
                        <div class="slide-content-wrapper">
                            <div class="slide-content">

                            </div> 
                        </div>
                        </div>
                        <div class="col-lg-5">
                        <div class="slider-img">
                            <img src="img/Medeng Home page image 1.jpg" alt="slider">
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 


       
        </div>
    </section> -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000, // Adjust the timeout as needed
                autoplayHoverPause: true
            });
        });
    </script>


    <!-- Background Area End -->



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/medeng 1.png" class="d-block w-100" alt="...">
          </div>
          <!-- <div class="carousel-item">
            <img src="img/medeng 2.png" class="d-block w-100" alt="...">
          </div> -->
          <div class="carousel-item">
            <img src="img/medeng 3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/home_banner.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slider2.jpg" class="d-block w-100" alt="...">
          </div>
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

  

    <!-- Courses Area Start -->

    <div class="courses-area pt-50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <img src="img/icon/section.png" alt="section-title">
                        <h2>COURSES WE OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.php"><img src="img/Course-2.png" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.php">INTER Bi.P.C</a></h3>
                            <h3><a href="course-details.php">NEET/ZIPMER/AIIMS</a></h3>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6>2 years</h6>
                                    <h6>Course</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6>Classes</h6>
                                    <h6>11th and 12th</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6>2024-2025</h6>
                                    <h6>ADMISSIONS</h6>
                                </div>
                            </div>
                            <br>
                            <a class="default-btn" href="course-details.php">read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="course-details.php"><img src="img/Course-1.png" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.php">INTER M.P.C</a></h3>
                            <h3><a href="course-details.php">JEE MAINS/JEE ADVANCE/EAMCET</a></h3>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <h6>2 years</h6>
                                    <h6>Course</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6>Classes</h6>
                                    <h6>10th and 12th</h6>
                                </div>
                                <div class="col-lg-4">
                                    <h6>2024-2025</h6>
                                    <h6>ADMISSIONS</h6>
                                </div>
                            </div>
                            <br>
                            <a class="default-btn" href="course-details.php">read more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Courses Area End -->

    <!-- About Start -->

    <div class="about-area pb-55">
        <div class="container">
            <div class="row">
                <div class="col-md-6 me-30 pt-195 ">
                    <div class="aboutcollege">
                        <img src="img/About-college.png" alt="about">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>ABOUT <br> MEDENG: Your First Step to a Bright Future</h2>
                        <h3 id="transforminglives"> Transforming Lives through Education </h3>
                        <p>Education should empower, not intimidate. Our approach took shape on these values and paved
                            path to achieving brilliance in top-edge academics nationally through our comprehensive
                            preparation for exams such as IIT, JEE, EAMCET, NEET, AIIMS, and ZIPMER.</p>
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                    <polygon fill="#ed0049"
                                        points="14.479,24.184 6.998,15.456 10.035,12.852 14.553,18.124 22.03,9.816 25.002,12.492" />
                                    <path fill="#0f518c"
                                        d="M16,5c5.728,0,10.442,4.402,10.949,10h4C30.433,7.184,23.947,1,16,1S1.567,7.184,1.05,15h4 C5.558,9.402,10.272,5,16,5z" />
                                    <path fill="#0f518c"
                                        d="M16,27c-5.728,0-10.442-4.402-10.949-10h-4C1.567,24.816,8.053,31,16,31s14.433-6.184,14.95-14h-4 C26.442,22.598,21.728,27,16,27z" />
                                </svg> &nbsp; Innovative 3D learning approach using Augmented Reality (AR)</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                    <polygon fill="#ed0049"
                                        points="14.479,24.184 6.998,15.456 10.035,12.852 14.553,18.124 22.03,9.816 25.002,12.492" />
                                    <path fill="#0f518c"
                                        d="M16,5c5.728,0,10.442,4.402,10.949,10h4C30.433,7.184,23.947,1,16,1S1.567,7.184,1.05,15h4 C5.558,9.402,10.272,5,16,5z" />
                                    <path fill="#0f518c"
                                        d="M16,27c-5.728,0-10.442-4.402-10.949-10h-4C1.567,24.816,8.053,31,16,31s14.433-6.184,14.95-14h-4 C26.442,22.598,21.728,27,16,27z" />
                                </svg> &nbsp; Hybrid learning approach combining traditional and digital methods
                            </li>
                            <!-- <li> <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="32px" height="32px"><polygon fill="#ed0049" points="14.479,24.184 6.998,15.456 10.035,12.852 14.553,18.124 22.03,9.816 25.002,12.492"/><path fill="#0f518c" d="M16,5c5.728,0,10.442,4.402,10.949,10h4C30.433,7.184,23.947,1,16,1S1.567,7.184,1.05,15h4 C5.558,9.402,10.272,5,16,5z"/><path fill="#0f518c" d="M16,27c-5.728,0-10.442-4.402-10.949-10h-4C1.567,24.816,8.053,31,16,31s14.433-6.184,14.95-14h-4 C26.442,22.598,21.728,27,16,27z"/></svg> &nbsp; Experienced and highly qualified teaching staff</li> -->
                            <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                    <polygon fill="#ed0049"
                                        points="14.479,24.184 6.998,15.456 10.035,12.852 14.553,18.124 22.03,9.816 25.002,12.492" />
                                    <path fill="#0f518c"
                                        d="M16,5c5.728,0,10.442,4.402,10.949,10h4C30.433,7.184,23.947,1,16,1S1.567,7.184,1.05,15h4 C5.558,9.402,10.272,5,16,5z" />
                                    <path fill="#0f518c"
                                        d="M16,27c-5.728,0-10.442-4.402-10.949-10h-4C1.567,24.816,8.053,31,16,31s14.433-6.184,14.95-14h-4 C26.442,22.598,21.728,27,16,27z" />
                                </svg> &nbsp; Experienced and highly qualified teaching staff</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                    <polygon fill="#ed0049"
                                        points="14.479,24.184 6.998,15.456 10.035,12.852 14.553,18.124 22.03,9.816 25.002,12.492" />
                                    <path fill="#0f518c"
                                        d="M16,5c5.728,0,10.442,4.402,10.949,10h4C30.433,7.184,23.947,1,16,1S1.567,7.184,1.05,15h4 C5.558,9.402,10.272,5,16,5z" />
                                    <path fill="#0f518c"
                                        d="M16,27c-5.728,0-10.442-4.402-10.949-10h-4C1.567,24.816,8.053,31,16,31s14.433-6.184,14.95-14h-4 C26.442,22.598,21.728,27,16,27z" />
                                </svg> &nbsp; Personalized attention and support for each student</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px">
                                    <polygon fill="#ed0049"
                                        points="14.479,24.184 6.998,15.456 10.035,12.852 14.553,18.124 22.03,9.816 25.002,12.492" />
                                    <path fill="#0f518c"
                                        d="M16,5c5.728,0,10.442,4.402,10.949,10h4C30.433,7.184,23.947,1,16,1S1.567,7.184,1.05,15h4 C5.558,9.402,10.272,5,16,5z" />
                                    <path fill="#0f518c"
                                        d="M16,27c-5.728,0-10.442-4.402-10.949-10h-4C1.567,24.816,8.053,31,16,31s14.433-6.184,14.95-14h-4 C26.442,22.598,21.728,27,16,27z" />
                                </svg> &nbsp; Tailored to meet the needs of 21st-century students</li>
                        </ul>
                        <a class="default-btn" href="about.php">READ MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
     <!-- About Start -->


    <!-- Results Section -->
    <div class="courses-area  text-center">
            <div class="container-fluid"></div>
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>"Innovating Education, Shaping Destinies: Medeng College - Where Greatness Begins."</h2>
                </div>
                <img src="img/new_paper_final_image.jpg" alt="Results" class="img-fluid"  style="margin-top: -5%;"/>
            </div>
    </div>
    <!-- Results Section -->

    


    <!-- Starting  Results  -->
    <div class="courses-area pt-50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <img src="img/icon/section.png" alt="section-title">
                        <h2>Achievements</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="bipc_results.php"><img src="img/results/BIPC_small_image.png" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.php">B.I.P.c Results</a></h3>
                            <!-- <h3><a href="course-details.php">NEET/ZIPMER/AIIMS</a></h3> -->
                            <br>
                            <!-- <div class="row">
                                    <div class="col-lg-4">
                                        <h6>2 years</h6>
                                        <h6>Course</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6>Classes</h6>
                                        <h6>11th and 12th</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6>2024-2025</h6>
                                        <h6>ADMISSIONS</h6>
                                    </div>
                                 </div> -->
                            <br>
                            <a class="default-btn" href="bipc_results.php">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="mpc_results.php"><img src="img/results/MPC_small_image.png" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="course-details.php"> M.P.C Results</a></h3>
                            <!-- <h3><a href="course-details.php">JEE MAINS/JEE ADVANCE/EAMCET</a></h3> -->
                            <br>
                            <!-- <div class="row">
                                    <div class="col-lg-4">
                                        <h6>2 years</h6>
                                        <h6>Course</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6>Classes</h6>
                                        <h6>10th and 12th</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6>2024-2025</h6>
                                        <h6>ADMISSIONS</h6>
                                    </div>
                                 </div> -->
                            <br>
                            <a class="default-btn" href="mpc_results.php">View All</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Starting  Results -->



    <!-- Notice Start -->
    <section class="notice-area two mb-5 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <!-- <div class="notice-right-wrapper mb-25 pb-25">
                            <h1><strong>Watch us</strong> </h1>
                            <h3>Start Growing With Community</h3>
                            <div class="notice-video">
                                <div class="video-icon video-hover">
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=Mz7ZShxoow4">
                                        <i class="zmdi zmdi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>  -->
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-xs-12"> -->
                            <h1 id="transforminglives" class="text-center">Watch us</h1>
                            <h1 id="transforminglives" class="text-center text-danger mb-30">Start Growing With
                                Community</h1>
                                


                                <div class="video-embed embed-responsive embed-responsive-16by9">
                                    <iframe  class="embed-responsive-item" width="100%" height="500" 
                                     src="https://www.youtube.com/embed/aaS8FNRqy6s?si=pA1EPxxrnmPgH0uY"   frameborder="0"    allowfullscreen></iframe>
                                </div>
                                <div class="video-embed mt-5 embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" width="100%" height="500"
                                        src="https://www.youtube.com/embed/DMwhXu9V0Rs?si=HNdxbe1xg921_HDD" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="video-embed mt-5 embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" width="100%" height="500"
                                        src="https://www.youtube.com/embed/Mz7ZShxoow4" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Notice End -->




    <div class="teacher-details-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-2 d-flex flex-column justify-content-center">
                    <div class="teacher-details-img">
                        <!-- <h5 style="color: orange; font-size: x-large;">Services</h5> -->
                        <h5 style="color: orange; font-size: x-large;">Our Promises </h5>
                        <h1 style="color: black;  font-size: xx-large;">What We Provide To Students</h1>
                        <p style="color: black;">unlock your potential and make a difference with <span
                                style="font-weight: bold;">MEDENG</span> </p>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="teacher-details-content ml-50 row">
                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 m-1  mb-5  shadow"
                            style="width: 300px; border-width: 0px;">
                            <img class="mt-3 mb-4" src="img/skilled lat.png" style="width: 60px;" alt="Card Image">

                            <div class="card-content">
                                <h2 class="card-title">Skilled Lecturers</h2>
                                <p>Our institution boasts of the best Lecturers And Teaching Team dedicated to student
                                    success.</p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 m-1  mb-5  shadow"
                            style="width: 300px;border-width: 0px;">
                            <img class="mt-3 mb-4" src="img/hostel.png" style="width: 60px;" alt="Card Image">


                            <div class="card-content">
                                <h2 class="card-title mb-2">Hostel Facility</h2>
                                <p>
                                    Our Hostel Facility offers comfortable and safe accommodation for students.
                                </p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 m-1  mb-5  shadow"
                            style="width: 300px;border-width: 0px;">
                            <img class="mt-3 mb-4" src="img/staff.png" style="width: 60px;" alt="Card Image">

                            <div class="card-content">
                                <h2 class="card-title mb-2">Best Staff</h2>
                                <p>
                                    Our institution boasts of the best staff, supportive and always willing. best
                                    education to students.
                                </p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 m-1   mb-5  shadow"
                            style="width: 300px;border-width: 0px;">
                            <img class="mt-3 mb-4" src="img/acadimic.png" style="width: 60px;" alt="Card Image">

                            <div class="card-content">
                                <h2 class="card-title">Academic Strategy</h2>
                                <p>Our academic strategy is designed to provide students with a comprehensive and
                                    well-rounded education, with a focus on critical thinking, problem-solving and
                                    learning.</p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 m-1   mb-5  shadow"
                            style="width: 300px;border-width: 0px;">
                            <img class="mt-3 mb-4" src="img/managment.png" style="width: 60px;" alt="Card Image">

                            <div class="card-content">
                                <h2 class="card-title">Management</h2>
                                <p>Our management team is composed of experienced educators and administrators who are
                                    committed to providing the best possible education for our students.</p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 m-1   mb-5  shadow"
                            style="width: 300px;border-width: 0px;">
                            <img class="mt-3 mb-4" src="img/spalities.png" style="width: 60px;" alt="Card Image">

                            <div class="card-content">
                                <h2 class="card-title">Specialties of MEDENG</h2>
                                <li>Innovative 3D learning</li>
                                <li>Hybrid learning</li>
                                <li> highly qualified staff</li>
                                <li>support for each student</li>
                                <li>Tailored to meet the needs of 21st-century students</li>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->

    <div class="about-area pb-35 pt-30 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <h2><span>Medeng</span> the best education </h2>
                        <!-- <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system, and expound the actual teachings  the master-builder of humanit happiness</p>
                            <p>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system</p> -->
                        <p> At MEDENG, we pride ourselves on providing exceptional education that goes above and beyond.
                            We believe that education is the key to unlocking your full potential and achieving success
                            in your chosen field.
                        </p>
                        <a class="default-btn" href="about.php">learn more</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="img/Best-Education.png" alt="about" height="1200" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->

    <!-- Event Area Start -->



    <!-- our UPCOMMING EVENTS -->

    <!-- 
        <div class="event-area three text-center pt-50">
            <div class="container">
                <div class="row">
                     <div class="col-12">
                        <div class="section-title">
                            <img src="img/icon/section.png" alt="section-title">
                            <h2>UPCOMMING EVENTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="img/event/event5.jpg" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>20 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-start">
                                <h4><a href="event-details.html">ADVANCE PHP WORKSHOP</a></h4>
                                <ul>
                                    <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                    <li><span>venue</span> New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event mb-35">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="img/event/event6.jpg" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>18 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-start">
                                <h4><a href="event-details.html">learning english history</a></h4>
                                <ul>
                                    <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                    <li><span>venue</span> New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-event">
                            <div class="event-img">
                                <a href="event-details.html">
                                    <img src="img/event/event7.jpg" alt="event">
                                    <div class="course-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </a>
                                <div class="event-date">
                                    <h3>16 <span>jun</span></h3>  
                                </div>
                            </div>
                            <div class="event-content text-start">
                                <h4><a href="event-details.html">UI &amp; UX DESIGNER MEETUP</a></h4>
                                <ul>
                                    <li><span>time:</span> 9.00 AM - 4.45 PM</li>
                                    <li><span>venue</span> New Yourk City</li>
                                </ul>
                                <div class="event-content-right">
                                    <a class="default-btn" href="event-details.html">join now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


    <!-- Event Area End -->






    <!-- <div class="contaner" style="padding: -50px;">

                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <h4>Services</h4>
                        <h1>What We Provide To Students</h1>
                        <p>unlock your potential and make a difference with MEDENG</p>
                    </div>

                    <div class="row col-xl-8 col-lg-8 col-md-6 col-sm-12 col-xs-12">

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="your-image-url.jpg" alt="Card Image"> 
                        
                            <div class="card-content">
                                <h2 class="card-title">Skilled Lecturers</h2>
                                <p>Our institution boasts of the best Lecturers And Teaching Team dedicated to student success.</p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="your-image-url.jpg" alt="Card Image"> 
                        
                            <div class="card-content">
                                <h2 class="card-title">Hostel Facility</h2>
                                <p>
                                    Our Hostel Facility offers comfortable and safe accommodation for students.
                                </p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="your-image-url.jpg" alt="Card Image"> 
                        
                            <div class="card-content">
                                <h2 class="card-title">Best Staff</h2>
                                <p>
                                    Our institution boasts of the best staff, supportive and always willing. best education to students.
                                </p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="your-image-url.jpg" alt="Card Image"> 
                        
                            <div class="card-content">
                                <h2 class="card-title">Acadamic Strategy</h2>
                                <p>Our academic strategy is designed to provide students with a comprehensive and well-rounded education, with a focus on critical thinking, problem-solving and learning.</p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="your-image-url.jpg" alt="Card Image"> 
                        
                            <div class="card-content">
                                <h2 class="card-title">Management</h2>
                                <p>Our management team is composed of experienced educators and administrators who are committed to providing the best possible education for our students.</p>
                            </div>
                        </div>

                        <div class="card col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <img src="your-image-url.jpg" alt="Card Image"> 
                        
                            <div class="card-content">
                                <h2 class="card-title">Specialties of MEDENG</h2>
                                <li>Innovative 3D learning</li>
                                <li>Hybrid learning</li>
                                <li> highly qualified staff</li>
                                <li>support for each student</li>
                                <li>Tailored to meet the needs of 21st-century students</li>
                            </div>
                        </div>

                    </div>


                </div>
                
            </div> -->
    <!-- Testimonial Area Start -->


    <!-- <div class="testimonial-area three  pb-105 text-center">
        <div class="container">
            <div class="row">
                <div class="testimonial-owl owl-theme owl-carousel">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                   
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </div>
                                <div class="testimonial-content">
                                    <p>Exceptional service and delightful food! The experience at Medeng College
                                        surpassed my expectations. The service was top-notch, and the food was truly
                                        excellent. The attention to detail and the overall atmosphere were very nice. A
                                        commendable place that I would highly recommend!</p>
                                    <h4>Geethika Swity</h4>
                                    <h5>Student, MPC</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 offset-lg-2">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </div>
                                <div class="testimonial-content">
                                    <p>Undoubtedly the best college ever! Medeng College sets the bar high with its
                                        exceptional standards. The academic environment, coupled with outstanding
                                        facilities, makes it stand out. From my experience, it's clear that Medeng
                                        College is dedicated to excellence. Proud to be part of such an incredible
                                        institution!</p>
                                    <h4>jonnadala bhuvanesh</h4>
                                    <h5>Student, BiPC</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 offset-lg-2">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </div>
                                <div class="testimonial-content">
                                    <p>Medeng College is truly heaven on earth! The campus exudes an atmosphere of
                                        serenity and excellence. From top-notch facilities to a nurturing academic
                                        environment, it's a place where learning feels like a heavenly experience.
                                        Grateful to be part of such an extraordinary institution!</p>
                                    <h4>Jasmi Joel</h4>
                                    <h5>Student,MPC</h5>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div> -->

    <!-- Testimonial Area End -->


    
    <!-- Testimonial Area Start -->
    <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" data-mdb-carousel-init class="carousel slide carousel-dark text-center mb-5" data-mdb-ride="carousel">
            <!-- Controls -->
            <div class="d-flex justify-content-center mb-4 mt-3">
            <button data-mdb-button-init class="carousel-control-prev position-relative" type="button"
                data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button data-mdb-button-init class="carousel-control-next position-relative" type="button"
                data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            <!-- Inner -->
            <div class="carousel-inner py-4">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3" style="border: 2px solid #87297F;">
                    <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/4.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Himaja</h5>
                    <p>M.P.C</p>
                    <p  > 
                        Studying at Medeng Jr. College has been an enriching experience. The faculty's dedication to excellence in teaching and the supportive environment here have truly helped me excel in my MPC course.
                    </p>
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3"  style="border: 2px solid #87297F;">
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/1.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Swetha</h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                        I am grateful for the guidance and support I've received from the faculty at Medeng Jr. College. Their expertise in the biological sciences has inspired me to pursue my academic and career goals with confidence.
                    </p>
                     
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3" style="border: 2px solid #87297F;" >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/1.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Sai Srinath</h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        I am grateful for the opportunities provided by Medeng Jr. College. The practical approach to learning in the MPC stream has prepared me well for future endeavors
                    </p>
                     
                    </div>
                </div>
                </div>
            </div>
        
            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3 " style="border: 2px solid #87297F;" >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/6.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Charitha  
                    </h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                        Studying at Medeng Jr. College as a BIPC student has been a transformative experience. The emphasis on practical learning in the biological sciences has deepened my understanding and passion for the subject.

                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;" >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/1.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Sri lakshmi 
                    </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                         
                        The infrastructure and resources available at Medeng Jr. College are commendable. As an MPC student, I've had access to well-equipped labs and libraries that have enhanced my learning.
                    </p>
                     
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;">
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/5.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Tejaswini  
                    </h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                        The career guidance services at Medeng Jr. College have been instrumental in helping me chart my path after graduation. I feel well-prepared for a future in the biological sciences, thanks to the support I've received here.
                    </p>
                     
                    </div>
                </div>
                </div>
            </div>
        
            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3"  style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/5.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Trishul  
                    </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        As an MPC student at Medeng Jr. College, I've had the opportunity to collaborate with peers on projects and assignments, fostering teamwork and communication skills that will serve me well in the future.
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/7.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Mahesh  
                    </h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                         
                        I chose Medeng Jr. College for its reputation for academic excellence in the biological sciences, and it has exceeded my expectations. The rigorous curriculum has challenged me to think critically and creatively.
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3" style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/2.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Kinineswara Reddy  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        I chose Medeng Jr. College for its reputation for academic excellence, and it has certainly lived up to its name. The MPC curriculum is rigorous yet fulfilling, and I feel confident in my abilities as a result.
                    </p>
                   
                    </div>
                </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3 " style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/8.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Nishanth</h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                         
                        The extracurricular opportunities at Medeng Jr. College have complemented my BIPC studies, allowing me to develop leadership skills and pursue my interests outside the classroom.
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 "  style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/15.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Likhitadhitya  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        The career guidance and counseling services offered at Medeng Jr. College have been invaluable to me as an MPC student. I feel well-prepared for my future thanks to the support I've received
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/9.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Gagan   </h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                     
                        Medeng Jr. College provides a nurturing environment for BIPC students to thrive. The supportive community and collaborative spirit here have made my college experience fulfilling and enjoyable.
                    </p>
                    
                    </div>
                </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3 " style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/10.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Rajya lakshmi  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                       
                        Medeng Jr. College provides a conducive learning environment for MPC students. The interactive classrooms and engaging lectures have made my learning journey here both enjoyable and rewarding.
                    </p>
                   
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/7.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">A.Mahesh  </h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                         
                        I appreciate the interdisciplinary approach to learning at Medeng Jr. College. In addition to my BIPC courses, I've had the opportunity to explore diverse subjects that have broadened my perspective.
                    </p>
                   
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3" style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/11.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Usha Rani  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        I appreciate the holistic approach to education at Medeng Jr. College. Alongside my MPC studies, I've had the opportunity to participate in extracurricular activities that have enriched my college experience.
                    </p>
                         
                    </div>
                </div>
                </div>
            </div>


            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3" style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/12.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Amulya  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        Medeng Jr. College fosters a culture of academic excellence and innovation. I've been challenged to think critically and analytically in my MPC courses, which has been instrumental in my growth.

                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3" style="border: 2px solid #87297F;" >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/7.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Madhvija  
                    </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        The faculty members at Medeng Jr. College are not only knowledgeable but also incredibly supportive. They go above and beyond to ensure that MPC students like me receive the guidance needed to succeed.

                    </p>
                     
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;"  >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/1.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Shanawaz</h5>
                    <p>BI.P.C</p>
                    <p class="text-muted">
                        
                        Medeng Jr. College places a strong emphasis on research and innovation in the biological sciences. As a BIPC student, I've had the opportunity to engage in meaningful research projects that have expanded my horizons.
                    </p>
                     
                    </div>
                </div>
                </div>
            </div>


            <!-- Single item -->
             <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3" style="border: 2px solid #87297F;" >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/16.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Ishwak 
                    </h5>
                    <p> BI.P.C</p>
                    <p class="text-muted">
                         
                        The faculty members at Medeng Jr. College are not only passionate educators but also mentors who genuinely care about the success of their students. I've received personalized guidance that has been invaluable to my academic journey.
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3" style="border: 2px solid #87297F;">
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/1.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Srikar </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        Medeng Jr. College provided an excellent MPC curriculum that prepared me well for my future studies in mathematics and physics. The faculty members were supportive and knowledgeable, and the resources available on campus were top-notch
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3" style="border: 2px solid #87297F;">
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/1.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Sai vivek </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                       
                        As an MPC student at Medeng Jr. College, I appreciated the hands-on approach to learning. The practical labs and interactive lectures helped me grasp complex concepts easily. The college environment fostered a spirit of collaboration among students
                    </p>
                     
                    </div>
                </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-3 " style="border: 2px solid #87297F;">
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/3.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3"> Daniel </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        Medeng Jr. College provided me with a nurturing environment to pursue my interests in biology and related fields. The practical sessions and field trips helped me understand complex biological concepts in a practical context.
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;">
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/13.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Bhuwanesh  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                       
                        "I'm grateful for my time at Medeng Jr. College as an MPC student. The college not only focused on academics but also emphasized the importance of critical thinking and problem-solving skills, which are essential for success in any field
                    </p>
                    
                    </div>
        
                    <div class="col-lg-4 d-none d-lg-block p-3 " style="border: 2px solid #87297F;" >
                        <img class="rounded-circle shadow-1-strong mb-4  Reviewimage"
                        src="img/Reviews/14.png" alt="avatar"
                        style="width: 150px;" />
                    <h5 class="mb-3">Poojitha  </h5>
                    <p>M.P.C</p>
                    <p class="text-muted">
                        
                        Medeng Jr. College provided me with a solid foundation in mathematics, physics, and chemistry. The small class sizes allowed for personalized attention, and the regular assessments ensured that I stayed on track with my studies.
                    </p>
                     
                    </div>
                </div>
                </div>
            </div>
            
           

           



             
            </div>
            <!-- Inner -->
        </div>
    <!-- Carousel wrapper -->

      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

      <!-- MDB -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
      
      <script>
          // Initialize carousel
          var carouselEl = document.getElementById('carouselMultiItemExample');
          var carousel = new mdb.Carousel(carouselEl);
      </script>
  
    <!-- Testimonial Area End -->




    <!-- Blog Area Start -->
    <!-- <div class="blog-area pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <img src="img/icon/section.png" alt="section-title">
                            <h2>LATEST FROM BLOG</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="img/blog/blog1.jpg" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By Alex  /  June 20, 2022  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="blog-details.html">I must explain to you how all this a mistaken idea </a></h2>
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="img/blog/blog2.jpg" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By Alex  /  June 20, 2022  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="blog-details.html">I must explain to you how all this a mistaken idea </a></h2>
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog mb-0">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="img/blog/blog3.jpg" alt="blog"></a>
                                <div class="blog-hover">
                                    <a href="blog-details.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-top">
                                    <p>By Alex  /  June 20, 2022  /  <i class="fa fa-comments-o"></i> 4</p>
                                </div>
                                <div class="blog-bottom">
                                    <h2><a href="blog-details.html">I must explain to you how all this a mistaken idea </a></h2>
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Blog Area End -->



    <!-- <button  id="open-pdf">

        <div class="loader">

            <div>
                <ul>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                    <li>
                        <svg fill="currentColor" viewBox="0 0 90 120">
                            <path
                                d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                            </path>
                        </svg>
                    </li>
                </ul>
            </div><span class="neet_paper" ><strong style="color:red">Neet Physics Paper</strong> </span>
      
        </div>

    </button> -->

    <script>
        document.getElementById('open-pdf').addEventListener('click', function() {
            var pdfUrl = 'img/NEET PHYSICS PAPER WITH SOLUTIONS.pdf'; // Path to your PDF file
            window.open(pdfUrl, '_blank'); // Open PDF in new tab
    
            // Optional: If you want to embed the PDF in the current page as well
            var pdfContainer = document.getElementById('pdf-container');
            pdfContainer.innerHTML = ''; // Clear any previous PDF content
    
            // Create a <embed> element to display the PDF
            var embed = document.createElement('embed');
            embed.src = pdfUrl;
            embed.type = 'application/pdf';
            embed.width = '100%';
            embed.height = '100%';
    
            // Append the <embed> element to the container
            pdfContainer.appendChild(embed);
        });
    </script>


        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header popup-div">
                    <button type="button" class="close popup-div-close" data-dismiss="modal" aria-label="Close"
                        onclick="hideModal()" style="border:none;  margin-left: auto;">
                        <span aria-hidden="true" style="color: red;"> <svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                            </svg></span>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <img src="img/pop_video.gif" class="img-fluid" alt="Full Size Image">
                </div>
                
            </div>
        </div>
        </div>

        <!-- Modal -->


        <!-- Modal Scripits -->
        <script>
        $(document).ready(function() {
        $('#imageModal').modal('show');
        });

        function hideModal() {
        $('#imageModal').modal('hide');
        }
        </script>

<?php include 'footer.php';  ?>
