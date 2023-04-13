<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduwave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script>
        function suj(){
            alert("oops sorry this function in on progress");
        }
        function ion(){
          window.location.replace("http://localhost/edification-main/theme/index2.html");
          alert("Thankyou");
        }
        function admin(){
          window.location.replace("http://localhost/edification-main/theme/admin.html");
        }
    </script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->
    
    <!-- header area start -->
    <header id="header">
        <!-- header two area start -->
        <div class="header-two" style="background-image: linear-gradient(rgb(222, 222, 230),green); color: aliceblue;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-6 d-block d-lg-none">
                        <div class="logo">
                            <a href="index.html"><h3 style="color: crimson;">EDUWAVE</h3></a>
                        </div></pre>
                    </div>
                    <div class="col-lg-9 offset-lg-1 d-none d-lg-block">
                        <div class="main-menu menu-style2">
                          
                            <nav>
                                <ul id="m_menu_active">
                                
                                    <li class="active"><a href="javascript:void(0);">Home</a>
                                        <ul class="submenu">
                                            <li class="active"><a href="index.html">EDUWAVE</a></li>
                                            <li><a href="index2.html">MOCKTEST</a></li>
                                            <li><a href="cbse.html">CBSE</a></li>
                                            <!-- <li><a href="admin.html">CBSE</a></li> -->
                                            <li><a href="Alarm Clock in JavaScript/alram.html">set alarm</a>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="javascript:void(0);">class 10 SQP</a>
                                        <ul class="submenu">
                                            <li><a href="sqp.html">2022-2023</a></li>
                                            <li><a href="course-details.html">2020-2021</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">class 12 SQP</a>
                                        <ul class="submenu">
                                            <li><a href="teachers.html">2022-2023</a></li>
                                            <li><a href="teacher-details.html">2020-2021</a></li>
                                        </ul>
                                    </li>
                                    <li class="middle-logo">
                                        <a href="index.html">
                                            <img src="assets/images/icon/logo-middle.png" alt="logo">
                                            <img class="hb-bottom-shape" src="assets/images/icon/hb-bottom-shape.png" alt="logo">
                                        </a>
                                    </li>
                                    <li><a href="javascript:void(0);">CBSE</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">guide:1</a></li>
                                            <li><a href="blog-details.html">guide:2</a></li>
                                            <li><a href="translator/translartor.html">Language Translator</a></li>
                                        </ul>
                                    <li><a href="index2.html">MOCKTEST</a>
                                
                                    </li>
                                
                                    <li><a href="contact.html">Contact</a></li>
               
                                </ul>
                            
                            </nav>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-sm-5">
                        <div class="header-bottom-right-style-2">
                            <ul>
                                <li><a data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-round" href="">Log in</a></li>
                                <li><a data-toggle="modal" data-target="#exampleModal2"  class="btn btn-primary btn-round" class="active" href="#">Sign Up</a></li><br>
                                <hr>
                                <li><a data-toggle="modal" class="btn btn-primary btn-round" class="active" href="admin.html" onclick="admin()">Admin-login</a></li>
                                <div class="col-lg-2 col-sm-5">
                                  <div class="header-bottom-right-style-2">
                                      <ul>
                                          
                            </ul>

                          </div>
                        <!-- Button trigger modal -->  
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content p-5">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="contact.php" method="post"> 
                                    <input type="email" placeholder="Enter Your Email.." required="" name="ema" id="email">
                                    <input type="password" placeholder="Enter Your Password" name="psw" id="password">
                                    <input type="text" placeholder="Enter Your feedback" name="fed" id="feedback">
                                    <label class="checkbox-inline mr-5"><input type="checkbox" value="">Remember Me</label> 
                                    <a class="primary-color" href="#"><u>Forgot password</u></a>
                                   <input class="btn btn-primary btn-sm" type="submit" value="Login" name="sub" onclick="ion()">
                                
                                </form> 
                                
                              </div> 
                            </div>
                          </div>
                        </div> 

                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content p-5">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Please Sign Up Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body"> 
                                <form class="signup-form text-center">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <input type="email" placeholder="Enter Your Email.." required="">
                                    <input type="password" placeholder="Enter Your Password">
                                    <label class="checkbox-inline"><input type="checkbox" value="">I Agree</label> 
                                    <input class="btn btn-primary btn-sm" type="submit" value="Register Now">
                                </form> 
                              </div> 
                            </div>
                          </div>
                        </div>
                    </div><!-- col-lg-2 -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header two area end -->
    </header>

    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search" style="border-end-end-radius:12%; padding-right: 12%;">
        <form action="#" style="border-radius:12%">
            <input type="text" name="search" placeholder="Sarch here..." style="padding-left:22%">
            <button onclick="suj()" style="color:red; border-radius:12px; padding-right: 12px; width: fit-content;" >submit</button>
        </form>
    </div>

    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- hero area start -->
    <div class="hero-area has-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="hero-content">
                        <h3>Best For Cbse Students</h3>
                        <h1 class="mb-5"><span class="primary-color">Best LMS For CBSE Student </span><b class="line-break"></b>Future with Eduwave</h1>
                        <p class="text-white-50">All The Important Assets For CBSE Students</p>
                        <form action="#">
                            <div class="form-input mt-5">
                                <input type="text" name="search" required placeholder="Enter your keyword...">
                                <button onclick="suj()" class="btn btn-primary btn-round" type="submit" style="border-radius:12px">Seacrh</button>
                                <i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->

    <!-- about area start -->
    <!-- <div class="about-area-style2 ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="about-content-style2 text-center has-color">
                        <div class="section-title-style mb-4">
                            <h2>Welcome to <b class="line-break"></b><span class="text-color">Edification</span> University</h2>
                        </div>
                        <p class="text-white-70">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn btn-light btn-round mt-3" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- about area end -->

    <!-- course area start -->
    <div class="course-area  ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 black-title title-tb text-center">
                        <span>BUILD YOUR KNOWLEDGE</span>
                        <h2 class="primary-color">Best CBSE guide/COURSE</h2>
                    </div>
                </div>
            </div>
  
            <div class="commn-carousel owl-carousel card-deck"> 
                <div class="card mb-5">
                    <div class="course-thumb">
                       <h2  style="color: rgba(13, 36, 241, 0.952);"> Eduwave course & CBSE Assets<marquee><p style="color: brown;"> Eduwave</p></marquee></h2>
                        <span class="cs-price primary-bg">FREE</span>
                    </div>
                    <div class="card-body  p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href="course-details.html" style="color: green;">BEST COURSE(CBSE)</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>5<i class="fa fa-comment"></i></li>
                                    <li>8 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div> 
                            <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="assets/images/nice.png" alt="image"> </a>
                        </div>
                        <p>cbse LMS learning management system for vlass 10 ,12 and others</p> 
                        <ul class="course-meta-details list-inline  w-100">
                            <li> 
                             <p>Course</p>
                             <span>FREE</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li> 
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>      
                        </ul>  
                  </div><!-- card-body -->
                </div><!-- card -->
 
                <div class="card mb-5">
                    <div class="course-thumb">
                        <H2 class="qw" style="color: rgba(13, 36, 241, 0.952); padding-top: 3%;"> CLASS 10 COURSE CBSE <marquee><p style="color: rgb(218, 7, 7);"> Eduwave</p></marquee></H2>
                        <span class="cs-price primary-bg">FREE</span>
                    </div>
                    <div class="card-body  p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href="course-details.html" style="color: green;">class 10 best course/guide.</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>6 <i class="fa fa-comment"></i></li>
                                    <li>5 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div> 
                            <a href="course-details.html"><img class="course-meta-thumbnail rounded-circle" src="assets/images/nice.png" alt="image"> </a>
                        </div>
                        <p>cbse guide for class 10 </p> 
                        <ul class="course-meta-details list-inline  w-100">
                            <li> 
                             <p>Course</p>
                             <span>FREE</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li> 
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>      
                        </ul>  
                  </div><!-- card-body -->
                </div><!-- card -->
  
                <div class="card mb-5">
                    <div class="course-thumb">
                        <h2  style="color: rgba(13, 36, 241, 0.952);"> class 12 CBSE course<p><marquee><p style="color: rgb(218, 7, 7);"> Eduwave</p></marquee></p></h2>
                        <span class="cs-price primary-bg">FREE</span>
                    </div>
                    <div class="card-body  p-25"> 
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <a href="course-details.html">
                                <h4><a href="course-details.html" style="color:green;">class 12 cbse course</a></h4>
                                
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>3 <i class="fa fa-comment"></i></li>
                                    <li>5 <i class="fa fa-heart"></i></li>
                                    
                                </ul>
                            </div> <div>
                                <img class="course-meta-thumbnail rounded-circle" src="assets/images/nice.png" alt="image"> </a>
                            </div>
                            
                        </div>
                        <p>CBSE Course for class 12 Join with Eduwave</p> 
                        <ul class="course-meta-details list-inline  w-100">
                            <li> 
                             <p>Course</p>
                             <span>FREE</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li> 
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>      
                        </ul>  
                  </div><!-- card-body -->
                </div><!-- card --> 
            </div> 
        </div>
    </div>
    <!-- course area end -->

    <!-- take toure area start -->
    <div class="take-toure-area ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 white-title text-center">
                        <span>Take A Look</span>
                        <h2> video provided by EDUWAVE  best diploma engineering colloge</video></h2>
                    </div>
                </div>
            </div>
           
                <iframe width="900" height="550" align="center" style="padding-left:23%"  src="https://www.youtube-nocookie.com/embed/m3a1IUMl4Lc?controls=0&amp;start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- take toure area end -->
    

    <!-- course area start -->
    <div class="teacher-area pb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="section-title-style2 black-title title-tb text-center">
                        <span>Learn from the best</span>
                        <h2 class="primary-color">sources</h2>
                    </div>
                </div>
            </div>
            <div class="commn-carousel owl-carousel card-deck">   
              <div class="card mb-5" style="color: black"> 
                <img src="assets/images/dear.jfif" alt="image" style="width: 120%; height: 1200%; background-color: rgb(203, 204, 206);"> 
                <div class="card-body teacher-content p-25" style="background-image: linear-gradient(rgb(255, 255, 255),rgb(195, 209, 208)); color: black;">  
                  <h4 class="card-title mb-4"><a href="https://www.youtube.com/channel/UC9dyrsYEmD4iGJ8Oz1G5dpw">dear sir</a></h4>
                  <span style="color: red;">all cbse guide</span>
                  <p class="card-text">planning for bords follow us <hr>for more information about cbse visit official website<a href="" style="color: blue;">cbse.nic.in</a> <hr> follow us for more information</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/khansir.jpg" alt="image" style="height: 270px; font-weight: 100;"> 
                <div class="card-body teacher-content p-25" style="background-image: linear-gradient(rgba(255, 255, 255, 0.479),rgb(246, 254, 255)); color: azure;"> 
                  <h4 class="card-title mb-4"><a href="https://www.youtube.com/@KhanSirPatnaKhanGs">khan sir</a></h4>
                  <span  style="color: red;"> programming with Cbse free coures available here </span><hr>
                  <p class="card-text">Eduwave provides you the special KNOWLEDGE</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->    

              <div class="card mb-5"> 
                <img src="assets/images/physics.jfif" alt="image" style="height: 250px; width: 1500px;"> 
                <div class="card-body teacher-content p-25" style="background-image: linear-gradient(rgba(235, 212, 212, 0.788),rgba(247, 229, 229, 0.658)); color: rgb(58, 89, 116);">  
                  <h4 class="card-title mb-4"><a href="https://www.youtube.com/channel/UCiGyWN6DEbnj2alu7iapuKQ/featured" style="color:rgb(0, 0, 0)">physics walla</a></h4>
                  <span style="color: rgb(236, 229, 228);">physics walla provides Important assets for cbse students</span><hr>
                  <p class="card-text">hello every one this lms is for cbse student.learn best coursec from here <br> learn physics from Here</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->  
              <div class="card mb-5"> 
                <img src="assets/images/commerce.jfif" alt="image" style="width: 250%;"> 
                <div class="card-body teacher-content p-25" style="color: aliceblue; background-image: linear-gradient(rgb(254, 255, 255),rgb(245, 245, 245)); height: 120%;">  
                  <h4 class="card-title mb-4"><a href="https://www.youtube.com/channel/UCnfp8dHhZiX_paZjdJExibQ" style="color:black">commerce baba </a></h4>
                  <span class="primary-color d-block mb-4" style="padding: 34px;">This course is for commerce students</span><hr><hr>
                  <p class="card-text">Best learning platform for cbse students</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card --> 
              <div class="card mb-5"> 
                <img src="assets/images/RAJAT.jfif" alt="image" style="height: 250px; width: 1500px;"> 
                <div class="card-body teacher-content p-25" style="background-image: linear-gradient(rgba(255, 255, 255, 0.788),rgba(245, 245, 245, 0.658)); color: rgb(12, 130, 233);">  
                  <h4 class="card-title mb-4"><a href="https://www.youtube.com/channel/UCiGyWN6DEbnj2alu7iapuKQ/featured">Rajat Arora</a></h4>
                  <span style="color: rgb(231, 34, 8);">Learn BISSUNESS AND ACCOUNTANCY FROM Here</span><hr>
                  <p class="card-text"> <br> ALL information TECHNOLOGY Students and commerce student (business,accountancy economic etc)</p> 
                  <ul class="list-inline ">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-deviantart"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->        
            </div>
        </div>
    </div>
    <!-- course area end -->

    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

 
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title">
                  <h4>Calendar</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3">
                      <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-lg btn-success btn-block waves-effect waves-light">
                        <i class="fa fa-plus"></i> Create New
                      </a>
                      <div id="external-events" class="m-t-20">
                        <br>
                        <p>Drag and drop your event or click in the calendar</p>
                        <div class="external-event bg-primary" data-class="bg-primary">
                          <i class="fa fa-move"></i>New Theme Release
                        </div>
                        <div class="external-event bg-pink" data-class="bg-pink">
                          <i class="fa fa-move"></i>My Event
                        </div>
                        <div class="external-event bg-warning" data-class="bg-warning">
                          <i class="fa fa-move"></i>Meet manager
                        </div>
                        <div class="external-event bg-dark" data-class="bg-dark">
                          <i class="fa fa-move"></i>Create New theme
                        </div>
                      </div>

                      <!-- checkbox -->
                      <div class="checkbox m-t-40">
                        <input id="drop-remove" type="checkbox">
                        <label for="drop-remove">
                          Remove after drop
                        </label>
                      </div>

                    </div>
                    <div class="col-md-9">
                      <div class="card-box">
                        <div id="calendar"></div>
                      </div>
                    </div>
                    <!-- end col -->
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">
                              <strong>Add New Event</strong>
                            </h4>
                          </div>
                          <div class="modal-body"></div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">
                              <strong>Add a category </strong>
                            </h4>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="row">
                                <div class="col-md-6">
                                  <label class="control-label">Category Name</label>
                                  <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                                </div>
                                <div class="col-md-6">
                                  <label class="control-label">Choose Category Color</label>
                                  <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="info">Info</option>
                                    <option value="pink">Pink</option>
                                    <option value="primary">Primary</option>
                                    <option value="warning">Warning</option>
                                  </select>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END MODAL -->
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                <p>EDUWAVE.edu.in
                  <a href="index.html">kashayablms1234@gmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>


  <!-- jquery vendor -->
  <script src="js/lib/jquery.min.js"></script>
  <script src="js/lib/jquery.nanoscroller.min.js"></script>
  <script src="js/lib/menubar/sidebar.js"></script>
  <script src="js/lib/preloader/pace.min.js"></script>
  <script src="js/lib/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

  <script src="js/lib/jquery-ui/jquery-ui.min.js"></script>
  <script src="js/lib/moment/moment.js"></script>
  <script src="js/lib/calendar/fullcalendar.min.js"></script>
  <script src="js/lib/calendar/fullcalendar-init.js"></script>
  <!-- scripit init-->
    <!-- cta area end -->

    <!-- footer area start -->
    <footer>
        <div class="footer-top  has-color pt--120 pb--30" style="background-image:linear-gradient(rgb(87, 65, 83),rgb(0, 0, 0))">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget-company">
                            <a href="index.html"><img src="assets/images/nice.png" alt="image" width="20%" height="20%"> <I style="color:rgb(179, 25, 199)">EDUWAVE</I></a>
                            <div class="address">
                                <h6>Office Address</h6>
                                <p>SAMDONG KAMBAL EAST SIKKIM(DIKCHU ROAD)</p>
                            </div>
                            <div class="address">
                                <h6>PERSONAL PHONE</h6>
                                <p>+91 8167683491</p>
                            </div>
                            <div class="address">
                                <h6>Email</h6>
                                <p>ADHIKARISUJ1234@GMAIL.COM</p>
                            </div>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget footer-link">
                            <h4 class="fwidget-title mb-5 pb-3 primary-color">Footer Menu</h4> 
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Case Studies</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>About Us</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Our Story</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Blog Post</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Work with Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget widget-opening">
                            <h4 class="fwidget-title mb-5 pb-3 primary-color">Working Day & time</h4>
                            <p>WE ARE AVAILABLE FOR YOU ANY TIME GIVE A FEEBBACK THANKYOU </p>
                            <ul>
                                <li><span>Mon - Tus :</span>6.00 am - 10.00 pm</li>
                                <li><span>Wed - Tur :</span>8.00 am - 6.00 pm</li>
                                <li><span>Friday :</span>3.00 pm - 8.00 pm</li>
                                <li><span>Sunday :</span>Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>Copyright © 2023 <span><a class="primary-color" href="https://themeforest.net/user/pixelthemez/portfolio" target="_blank">EDUWAVE</a> </span> - All Rights Reserved. Made by <span><a class="primary-color" href="https://furioustheme.com/" target="_blank">KASHAYAP</a></span></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
 
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>