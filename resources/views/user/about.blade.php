@extends('layouts.header_footer')

@section('body')






<!--breadcrumb section-->
<div class="row breadcrumb" style="background-image: url('{{asset('/images/all-img/breadcrumb-bg.jpg')}}')"; >
    <div class="container page-title content-center">
        <div class="section-heading white animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span> ABOUT OUR COMPANY </span></h1>
            <p class="title-desc">The arrival and departure times of flights are highly reliable, as airlines tend to be very on top of their schedules. </p>
        </div>
    </div>
</div>

<div class="row breadcrumb-manu">
    <div class="container">
        <ul class="title-bredcum">
            <li><a href="index.html">Home</a></li>
            <li> /</li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<!--About section-->
<section class="faq-section about-us space" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="title-section t-border pb-60">
                    <h2>ABOUT US</h2>
                    <p class="title-desc"> The arrival and departure times of flights are highly reliable, as airlines tend to be very on top of their schedules.</p>
                </div>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                               aria-expanded="true"
                               aria-controls="collapseOne1">
                                <h5 class="mb-0"> ABOUT US </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                <p>The arrival and departure times of flights are highly reliable, as airlines tend to be very on top of their schedules. Even missing a flight wouldn’t cause much delay as there are usually flights departing every hour.

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                               aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0">
                                    OUR MISSION </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                At Cargo  track, our mission is to transform possibilities into realities. With a steadfast commitment to innovation, quality, and customer satisfaction, we strive to push the boundaries of what's achievable.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                               href="#collapseThree3"
                               aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    WAREHOUSEING SOLUTION </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                             data-parent="#accordionEx">
                            <div class="card-body">
                                Our commitment to seamless logistics. At Cargo track, we specialize in providing top-tier warehousing solutions that redefine efficiency and reliability in the supply chain.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 faq-img">
                <div class="img-thumbnail">
                    <img class="img-fluid" src="{{asset('images/all-img/about.png')}}" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>
<!--faq section-->

<!--who-we-are-->
<section class="who-section space" id="who">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class=" t-border ">
                    <h2>{{$about_banner->heading}}</h2><br>
                </div>
                <p>{{$about_banner->content_1}}</p>
                <p>{{$about_banner->content_2}}</p>
            </div>
        </div>
    </div>
</section>
<!--who we are-->

<!--service section-->
<section class="service-section service-provide space" id="service">
    <div class="container">
        <div class="title-section center pb-60">
            <h2><span>EXCELLENCE AT ITS BEST</span></h2>
            <p class="title-desc">Elevate your logistics experience with our cutting-edge solutions. We're dedicated to providing top-notch services that redefine the industry.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="col-md-12 service-desc">
                    <img class="img-fluid" src="images/home-service/1.png" alt="service"/>
                    <h3><a href="#">GLOBAL SHIPPING</a></h3>
                    <p>Your Trusted Partner for Efficient, Timely, and Comprehensive Global Freight Solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-md-12 service-desc">
                    <img class="img-fluid" src="images/home-service/2.png" alt="service"/>
                    <h3><a href="#">LOGISTICS SOLUTIONS</a></h3>
                    <p>Experience logistics like never before. Our services are designed to meet your every need.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-md-12 service-desc">
                    <img class="img-fluid" src="images/home-service/3.png" alt="service"/>
                    <h3><a href="#">EFFICIENT DELIVERY</a></h3>
                    <p>On-time deliveries are our hallmark. Count on us for reliable and efficient transportation.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-md-12 service-desc">
                    <img class="img-fluid" src="images/home-service/3.png" alt="service"/>
                    <h3><a href="#">SUPPLY CHAIN PARTNERS</a></h3>
                    <p>We're not just a service provider; we're your partners in optimizing your supply chain.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-md-12 service-desc">
                    <img class="img-fluid" src="images/home-service/2.png" alt="service"/>
                    <h3><a href="#">RELIABLE SHIPPING</a></h3>
                    <p>Reliability is our mantra. Your cargo is safe and secure with our advanced shipping solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-md-12 service-desc">
                    <img class="img-fluid" src="images/home-service/1.png" alt="service"/>
                    <h3><a href="#">CUSTOMER SATISFACTION</a></h3>
                    <p>We prioritize your satisfaction. Our dedicated team ensures your needs are met with precision.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--service section-->
<!--choose section-->
<section class="row choose-section space" id="choose">
    <div class="container">
        <div class="title-section center pb-60">
            <h2><span>WHY CHOOSE US</span></h2>
            <p class="title-desc"> Choose Us for Seamless Cargo Solutions. Discover the Difference in Efficiency and Reliability. </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-4 choose-desc">
                <ul>
                    <li class="pb-30"><h4> GOODS TRACKING SYSTEM </h4>
                        <p>Effortless Goods Tracking and Stay Informed Every Step of the Way.</p>
                    </li>
                    <li class="pb-30"><h4> WORLDWIDE LOCATION </h4>
                        <p>Global Presence, Local Excellence.</p>
                    </li>
                    <li class="pb-30"><h4> HUGE STORAGE</h4>
                        <p>Ample Storage Solutions to Meet Your Needs.</p>
                    </li>
                    <li><h4>DELIVERY IN TIME </h4>
                        <p>On-Time Deliveries, Every Time.</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 choose-desc second-div">

            </div>
            <div class="col-lg-4 col-md-6 choose-desc">
                <ul>
                    <li class="pb-30"><h4> GOODS TRACKING SYSTEM </h4>
                        <p>Effortless Goods Tracking for Peace of Mind</p>
                    </li>
                    <li class="pb-30"><h4> WORLDWIDE LOCATION </h4>
                        <p>Our Worldwide Locations Serve You Anywhere.</p>
                    </li>
                    <li class="pb-30"><h4> HUGE STORAGE</h4>
                        <p>Vast Storage Solutions for Your Needs</p>
                    </li>
                    <li><h4>DELIVERY IN TIME </h4>
                        <p>Timely Deliveries, Every Time, Guaranteed.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--choose section-->







@endsection