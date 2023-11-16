<!Doctype html>
<html lang="en">

<head>
    <style>
        html,body
        {
            width:100%;
            height:100%;
            margin:0px;
            padding: 0px;
            overflow-x:hidden;
        }
       
    </style>
    <title>Home</title>
    <link rel="icon" href="{{asset('admin/assets/images/logo-sm.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap-v4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/css/index-3.css')}}">
    <link rel="stylesheet" href="{{asset('css/css/reponsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/css/template.css')}}">
    <link rel="stylesheet" href="{{asset('css/css/main.css')}}">
    
</head>
<body>

    <div class="topnav">
        <header class="bg-color">
            <div class="container top-bar">
                <ul class="top-content">
                    <li><i class="fas fa-envelope icon"></i>cargotrack786@gmail.com</li>
                    <li><i class="fas fa-phone-volume icon"></i>98466 49797</li>
                </ul>
                <ul class="top-content float-right">
                    <li><a href="/tracking">Track</a></li>
                </ul>
            </div>
    
            <div class="modal fade" id="login">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 login-img">
                                    <img src="images/all-img/login-side.png" alt="img">
                                </div>
                                <div class="col-lg-6">
                                    <div class="well">
                                        <form id="loginForm">
                                            <h3>Login</h3>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="username" name="username"
                                                       placeholder="Enter Name Or Email"/>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                               <input placeholder="Password" name="password" id="password" class="form-control input-field" type="password"/> 
                                                <span class="fas fa-eye code field-icon"></span>
                                            </div>
                                            <div class="col-lg-12 login-btn">
                                                <a href="#" class="btn btn-default btn-block">Login</a>
                                            </div>
                                            <p class="help-block">Forget You Password | <a href="#" class="sign-up">Sign
                                                up</a></p>
                                            <div class="title-section center">
                                                <h2><span>OR</span></h2>
                                            </div>
                                            <p class="text-center">Login With Your Social Media Account</p>
                                            <ul>
                                                <li><a href="#" class="btn-block google"><i
                                                        class="fab fa-google-plus-g icon"></i> GOOGLE</a></li>
                                                <li><a href="#" class="btn-block facebook"><i
                                                        class="fab fa-facebook-f icon"></i> FACEBOOK</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
                <!-- mobile-sidemenu -->
                <div class="row nav-menu">
                    <div class="container mob-sidebar">
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="crbnMenu">
                                <ul class="menu">
                                    <li><a class="nav-link" href="/"><span>Home</span> <span ></a>
                                                            
                                    </li>
                                    <li><a class="nav-link" href="/about"><span>About</span> </a></li>
                                    <li>
                                        <a class="nav-link" href="/service"><span>Services</span> </a>
                                        <ul class="drop-link">
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="/news"><span>News</span> </span></a>
                                        <ul class="drop-link">
                                           
                                        </ul>
                                    </li>
                                    <li><a class="nav-link" href="/contact"><span>Contact</span> </a></li>
                                    <li><a class="nav-link" href="/tracking"><span>Tracking</span> </a></li>
                                    <li><a class="nav-link" href="/locaction"><span>Location</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="side-btn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        <a class="navbar-brand pb-2" href="/"> <img src="{{asset('images/ctclogo-white.png')}}" alt="logo_img"> </a>
                    </div>
                </div>
                <!-- mobile-sidemenu -->
                <!-- desktop-menu -->
                <div class="row first-menu navbar-dark bg-dark " style="position: sticky; top: 0; z-index: 100 ;" >
                    <div class="container">
                        <nav class="navbar navbar-expand-sm offcanvas-desktop" >
                            <div class="col-md-3 ">
                                <a class="navbar-brand pb-1" href="" > <img src="{{asset('images/ctclogo-white.png')}}" alt="logo_img" style="width: 150px; height:80px;"> </a>
                            </div>
                            <div class="col-md-9 collapse navbar-collapse" >
                                <ul class="navbar-nav"  >
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}" >Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/about')}}">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/service')}}">Service</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/news')}}">News</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/contact')}}">Contact</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/tracking')}}">Tracking</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/locaction')}}">Location</a></li>
                                    
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
                <!-- desktop-menu -->
            <div class="fixed-nav-placeholder"></div>
    







@yield("body")









    <footer>
        <div class="container">
            <!--footer-widgets-->
            <div class="footer-widgets container animate fadeInDownLarge" data-anim-type="fadeInDownLarge"
                 data-anim-delay="400">
                <div class="row">
                    <div class="widgets-col col-4">
                        <a class="navbar-brand pb-2 " href="/"> <img src="{{asset('images/ctclogo-white.png')}}" alt="logo_img"
                                                                             class="img-fluid"> </a>
                        <p> Cargo Track offer air cargo services to and from all countries on the globe. Utilising cargo space on passenger aircraft plus air freighters, and charted flights give us the flexibility to provide a very comprehensive service for customers. </p>
    
                        
                    </div>
                  
                    <div class="widgets-col ">
                        <h3> Links </h3>
                        <ul class="widget_links ">
                            <li>
                                <a href="{{asset('/')}}"> Home </a>
                            </li>
                            <li>
                                <a href="{{asset('/about')}}"> About Us </a>
                            </li>
                            <li>
                                <a href="{{asset('/blogs')}}"> Blogs </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}"> Services </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}">News </a>
                            </li>
                            <li>
                                <a href="{{asset('/contact')}}">Contact </a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="widgets-col">
                        <h3> Services </h3>
                        <ul class="widget_links">
                            <li>
                                <a href="{{asset('/service')}}"> CARGO TRANSPORTS </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}"> AIR TRANSPORTS </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}"> STORAGE </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}"> WARE HOUSING </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}">CARGO SHIP </a>
                            </li>
                            <li>
                                <a href="{{asset('/service')}}">FORWARDING </a>
                            </li>
                        </ul>
                    </div>
                  
                    <div class="widgets-col">
                        <h3> Contacts </h3>
                        <p>
                            <i class="fas fa-map"></i> <span>2019 Avenue New York, NY 2019 US</span>
                        </p>
                        <p>
                            <i class="fas fa-phone-square"></i> <span>Free Call: 111 428 5581</span>
                        </p>
                        <p>
                            <i class="far fa-envelope"></i> <span> Drop us a message: info@ciazz.com </span>
                        </p>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//footer-widgets-->
    <div class="row coppy-right">
        <div class="container">
            <div class="col-md-4">
                <p> CARGO TARACK</p>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest icon"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus icon"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="footer-menu">
                    <li><a href="#">terms & conditions |</a></li>
                    <li><a href="#">Privacy Policy |</a></li>
                    <li><a href="#">Site Map </a></li>
                </ul>
            </div>
            <!--./coppy-right-->
        </div>
    </div>
    <!--./footer-->
    <!-- Return to Top -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-alt-circle-up h4"></i></a>
    <!-- Return to Top -->
     <!--page-loader-->
            <div id="page-anim-preloader">
                <div class="page_preloader-inner  content-center">
                    <div class="loading-window">
                        <div class="car">
                            <div class="strike">                             <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                           <div class="strike ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                           </div>
                            <div class="strike ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="strike ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="strike ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="car-detail ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="car-detail ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="car-detail ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="car-detail ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="car-detail ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                            <div class="car-detail ">                            <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="">
                            </div>
                        </div>
                        <div class="text">
                            <span>Loading</span><span class = "dots">...</span>
                        </div>
                    </div>
                </div>
            </div>
    <!--JS bootstrap-->
    <script src="{{asset('js/jquery-v3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-v4.1.3.min.js')}}"></script>
    <script src="{{asset('js/animations.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="{{asset('js/crbnMenu.js')}}"></script>
    <script src="{{asset('js/custom-script.js')}}"></script>
    <script src="{{asset('js/js/script.js')}}"></script>
    <script src="{{asset('js/js/slick.min.js')}}"></script>
   
    </body>
    
    </html>