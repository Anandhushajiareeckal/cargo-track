@extends('layouts.header_footer')

@section('body')


<!-- home-slider -->
@if(isset($home_banner))

<section id="mainSlider">
    <div id="owl-main" class="owl-carousel">
        @foreach ($home_banner as $home_banner)
        <div class="item">
            <img src="{{ $home_banner->baner_img }}" alt="logo_img" class="img-fluid">
            <div class="container">
                <div class="carousel-caption vertical-top text-left">
                    <h4 class="animate" data-anim-type="fadeInDown" data-anim-delay="600">{{ $home_banner->heading_1 }}</h4>
                    <h1 class="animate" data-anim-type="fadeInDown" data-anim-delay="600">{{ $home_banner->heading_2 }}<br><span>{{ $home_banner->content }}</span>
                    </h1>
                </div><!-- /.caption -->
            </div><!-- /.container -->
        </div><!-- /.item -->
        @endforeach
    </div><!-- /.owl-carousel -->
</section>
@else
<section id="mainSlider">
    <div id="owl-main" class="owl-carousel">
        <div class="item">
            <img src="{{asset('images/img/slider1.jpg')}}" alt="logo_img" class="img-fluid">
            <div class="container">
                <div class="carousel-caption vertical-top text-left">
                    <h4 class="animate" data-anim-type="fadeInDown" data-anim-delay="600">One stap solution for</h4>
                    <h1 class="animate" data-anim-type="fadeInDown" data-anim-delay="600">World’s Best<br><span>Transportation</span>
                    </h1>
                </div><!-- /.caption -->
            </div><!-- /.container -->
        </div><!-- /.item -->
      
    </div><!-- /.owl-carousel -->
</section>
@endif
 <!-- Track begin -->
 <section class="subscribe-section bg-1 pt-30 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mini_subscribe-btn pt-4" >
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter invoice or phonne number" id="tracking">
                </div>
            </div>
            <div class="col-md-4 mini_subscribe-btn pt-4">
                <a href="#" class="submit-btn " id="storeButton1">Submit</a>
            </div>
        </div>
    </div>
</section>
<!-- Track close -->

<!-- features-area-start -->
<section class="blog-area gray-bg1 pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-image">
                        <img src="{{asset('images/img/f1.jpg')}}" alt="">
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="#"><i class="fas fa-ship"></i></a></div>
                        <h3>Sea Freight </h3>
                        <p>Sea Freight is a method of transporting large amounts of goods using carrier ships. Goods are packed into containers . A typical cargo ship can carry around 18,000 containers, which means that sea freight is a cost-efficient way to transport high quantities over large distances.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-image">
                        <img src="{{asset('images/img/f2.jpg')}}" alt="">
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="#"><i class="fas fa-plane"></i></a></div>
                        <h3>Air Freight</h3>
                        <p>Discover the advantages of air freight, the fastest and most efficient way to move your cargo across the globe. Our air freight services are designed to deliver your goods swiftly and securely to their destination, ensuring timely deliveries and peace of mind. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-image">
                        <img src="{{asset('images/img/f3.jpg')}}" alt="">
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="#"><i class="fas fa-shipping-fast"></i></a></div>
                        <h3><a href="#">Road Freight</a></h3>
                        <p>Cargo track company organizes shipments for individuals or corporations to get goods from the manufacturer or producer to a market, customer or final point of distribution. Forwarders contract with a carrier or often multiple carriers to move the goods. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-area-end -->

<!--Start-About-info-box-->
<section class="about-info-box pt-100 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 hidden-md hidden-sm hidden-xs">
				<div class="img-cap-effect">
					<div class="img-box">
						<img src="{{asset('images/img/cc.png')}}" alt="Awesome Image"/>
						<div class="img-caption">
							<div class="box-holder"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-12">
				<div class="sec-title">
					<h2><span>Who We Are</span></h2>
					<p>Cargo Track offer air cargo services to and from all countries on the globe. Utilising cargo space on passenger aircraft plus air freighters, and charted flights give us the flexibility to provide a very comprehensive service for customers.Cargo Track offer air cargo services to and from all countries on the globe.Utilising cargo space on passenger aircraft plus air freighters, and charted flights give us the flexibility to provide a very comprehensive service for customers.Cargo Track offer air cargo services to and from all countries on the globe. Utilising cargo space on passenger aircraft plus air freighters, and charted flights give us the flexibility to provide a very comprehensive service for customers.</p>
					<ul class="bulleted-list">
						<li><i class="fas fa-arrow-alt-circle-right"></i> Deliver Environmentally Responsible Client Services</li>
						<li><i class="fas fa-arrow-alt-circle-right"></i> Provide Employees with an Attractive Working Environment</li>
						<li><i class="fas fa-arrow-alt-circle-right"></i> Be an Active Community Partner</li>
						<li><i class="fas fa-arrow-alt-circle-right"></i> Maintain High Ethical Standards</li>
						<li><i class="fas fa-arrow-alt-circle-right"></i> Drive Continuous Improvement</li>
                    </ul>
                    
                    <div class="about-button">
                        <a class="btn-1" href="/service">view our services <i class="far fa-paper-plane"></i></a>
                    </div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-info-box-->
 <!--SERVICE AREA-->
    <section class="service-area pt-75 pb-75">
        <div class="service-top-area">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="service-content wow fadeIn">
                            <h2>WE HAVE 25 YEARS EXPERIENCE IN THIS PASSION</h2>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you.</p>
                            <a href="/about" class="read-more">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                        <div class="service-catalouge-content-area wow fadeIn">
                            <div class="service-catalouge-bg"></div>
                            <div class="catalouge-content">
                                        <h3>Carries Transportation </h3>
                                        <p>Carries Transportation is your trusted partner in the world of cargo shipping. With a commitment to excellence and a track record of reliability, we offer a comprehensive range of transportation solutions tailored to meet the unique needs of your cargo ship</p>
                                        <ul>
                                            <li><i class="far fa-check-square"></i>  Carries Transportation delivers dependable cargo shipping services.</li>
                                            <li><i class="far fa-check-square"></i> e tailor our transportation services to your cargo's unique needs.</li>
                                            <li><i class="far fa-check-square"></i> We use cutting-edge logistics tech for transparency and efficiency.</li>
                                            <li><i class="far fa-check-square"></i> Our team focuses on exceptional clear customer support.</li>
                                        </ul>   
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!--SERVICE AREA END-->
        <!--Start How it Work-->
        <div class="site-section bg-image overlay pt-75 pb-75" style="background-image: url('images/img/work.png');">
            <div class="container">
              <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <div class="title-section1 center pb-60 animate" data-anim-type="fadeInLeft" data-anim-delay="900">
                        <h2><span>HOW IT WORKS</span></h2>
                        
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                  <div class="how-it-work-item">
                    <span class="number">1</span>
                    <div class="how-it-work-body">
                      <h2>Make An Order</h2>
                      <p class="mb-5">Streamline your cargo shipping process by placing an order with Carries Transportation. With our commitment to reliability and efficiency. We prioritize timely deliveries, and provide dedicated customer support throughout your shipping journey. </p>
                      <ul class="ul-check list-unstyled success">
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Count on us for on-time cargo shipments</li>
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Your cargo's safety is our top concern</li>
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;We're here to assist you every step.</li>
                      </ul>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                  <div class="how-it-work-item">
                    <span class="number">2</span>
                    <div class="how-it-work-body">
                      <h2>Make A Payment</h2>
                      <p class="mb-5">Conveniently make your payment with Carries Transportation. Our secure and user-friendly payment options ensure a hassle-free process. Take the next step in managing your cargo shipment by completing your payment today.</p>
                      <ul class="ul-check list-unstyled success">
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Your peace of mind, our priority.</li>
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Easy and efficient payment process.</li>
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Swiftly advance your cargo shipment.</li>
                      </ul>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                  <div class="how-it-work-item">
                    <span class="number">3</span>
                    <div class="how-it-work-body">
                      <h2>Track Your Order</h2>
                      <p class="mb-5">Keep tabs on your shipment effortlessly with Carries Transportation's tracking services. Our user-friendly platform provides real-time updates, ensuring you have full visibility into your cargo's journey. Stay informed and in control by tracking your order today.</p>
                      <ul class="ul-check list-unstyled success">
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp; Stay updated on your shipment.</li>
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Easy tracking access.</li>
                        <li class="text-white"><i class="far fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;Know your cargo's journey</li>
                      </ul>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
          </div>
          <!--How it Work End-->
<!-- features-area-start -->
<div class="features-area pt-75 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="features-wrapper mb-30 pb-30">
                    <div class="features-icon-img">
                       <img src="{{asset('images/img/s1.png')}}" alt="">
                    </div>
                    <div class="features-text">
                        <h3>Ocean <span>Freight</span></h3>
                        <p>Ocean Freight: Our reliable and efficient ocean shipping services connect your cargo to the world. Count on us for seamless global transport solutions.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="features-wrapper mb-30 pb-30">
                    <div class="features-icon-img">
                        <img src="{{asset('images/img/s2.png')}}" alt="">
                    </div>
                    <div class="features-text">
                        <h3>Air<span> Freight</span></h3>
                        <p> Count on our seamless solution for speedy, reliable, and globally-reaching cargo services to meet your time-sensitive shipping requirements with trust. </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="features-wrapper mb-30 pb-30">
                    <div class="features-icon-img">
                        <img src="{{asset('images/img/s3.png')}}" alt="">
                    </div>
                    <div class="features-text">
                        <h3>Contract <span>Logistic</span></h3>
                        <p>Step into the future of logistics with Contract Logistics, revolutionizing supply chains for efficiency, cost-effectiveness, and sustainable business growth</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="features-wrapper mb-30 pb-30">
                    <div class="features-icon-img">
                        <img src="{{asset('images/img/s4.png')}}" alt="">
                    </div>
                    <div class="features-text">
                        <h3>Cargo<span> Express</span></h3>
                        <p>Cargo Express delivers timely and secure shipping solutions, guaranteeing your cargo's safe arrival, cementing our role as your reliable logistics partner.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features-area-end -->
 <!-- about-us-area-start -->
 <div class="about-us-area pt-75 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about-us-img mb-30">
                    <img src="{{asset('images/img/about.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-us-wrapper mb-30">
                    <div class="section-title pos-rel mb-35">
                        <span class="border-left-1"></span>
                    <span>Logistics & Transportation</span>
                    <span class="border-right-1"></span>
                       
                        <h2>Modern & Trusted Logistics Company</h2>
                    </div>
                    <div class="about-us-text pos-rel">
                        <span>Because those who do not know how to pursue pleasu rationally encounter consequences that are extremelye painful. Nor again is there anyone who loves</span>
                        <p>As a modern and trusted logistics company, we are dedicated to exceeding your transportation and supply chain needs. With cutting-edge technology and a commitment to reliability, we provide efficient solutions to streamline your operations. Whether it's global freight forwarding, warehousing, or distribution, our experienced team ensures your cargo is handled with precision and care. Choose us as your logistics partner, and experience the future of efficient, secure, and seamless cargo management.</p>
                        <div class="about-button">
                            <a class="btn-1" href="/about">Learn more <i class="far fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us-area-end -->

<!--shiping section-->
<section class="shiping-section pt-75 pb-60" id="shiping">
    <div class="container">
        <div class="title-section1 center pb-60">
            <h2><span>More Features</span></h2>
            <p class="title-desc title-desc1"> Explore an array of additional benefits and enhancing your cargo experience with added convenience and efficiency. </p>
        </div>
    </div>
    <div class="swiper-container shipping-bg">
        <div class="swiper-container shiping-datas">
            <div class="swiper-container container swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="col-md-12 shiping-desc">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="{{asset('images/img/service1.jpg')}}" alt="shiping">
                            </div>
                            <figcaption class="shiping-detail">
                                <div class="shiping-data">
                                    <h3><a href="#">CARGO TRANSPORTS</a></h3>
                                    <p>Your Trusted Partner for Efficient, Timely, and Comprehensive Global Freight Solutions. </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="col-md-12 shiping-desc">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="{{asset('images/img/service2.jpg')}}" alt="shiping">
                            </div>
                            <figcaption class="shiping-detail">
                                <div class="shiping-data">
                                    <h3><a href="#">AIR TRANSPORTS</a></h3>
                                    <p>Elevate Your Cargo with Swift and Reliable Air Freight for Seamless, Global Shipping Solutions </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="col-md-12 shiping-desc">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="{{asset('images/img/service3.jpg')}}" alt="shiping">
                            </div>
                            <figcaption class="shiping-detail">
                                <div class="shiping-data">
                                    <h3><a href="#">STORAGE</a></h3>
                                    <p> Secure, Convenient, and Flexible Storage Services for Peace of Mind, Short-term or Long-term.</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="col-md-12 shiping-desc">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="{{asset('images/img/service5.jpg')}}" alt="shiping">
                            </div>
                            <figcaption class="shiping-detail">
                                <div class="shiping-data">
                                    <h3><a href="#">WARE HOUSING</a></h3>
                                    <p>Your Secure, Efficient Partner for Seamless Inventory and Supply Chain Management. </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="col-md-12 shiping-desc">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="{{asset('images/img/service4.jpg')}}" alt="shiping">
                            </div>
                            <figcaption class="shiping-detail">
                                <div class="shiping-data">
                                    <h3><a href="#">CARGO SHIP</a></h3>
                                    <p>Cargo ships play a vital role in global trade, transporting goods across oceans and connecting economies.  </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="swiper-slide">
                        <figure class="col-md-12 shiping-desc">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="{{asset('images/img/service6.jpg')}}" alt="shiping">
                            </div>
                            <figcaption class="shiping-detail">
                                <div class="shiping-data">
                                    <h3><a href="#">GROUND SHIPPING</a></h3>
                                    <p>Ground shipping is a dependable and versatile mode of transportation, essential for moving goods by road. </p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-prev swiper-button-prev6"><i class="fas fa-angle-double-left"></i></div>
            <div class="swiper-button-next swiper-button-next6"><i class="fas fa-angle-double-right"></i></div>
        </div>
    </div>
</section>
<!--shiping section-->
<!-- services-area-start -->
<div class="services-area grey-bg pt-75 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title section-2 text-center pos-rel mb-30">
                    <div class="title-section center pb-60">
                        <h2><span>What We Offer To Highest Quality Services</span></h2>
                        <p class="title-desc"> We provide unparalleled excellence in cargo services, delivering the highest quality solutions tailored to meet your shipping needs. </p>
                    </div>
                   
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{asset('images/img/1.png')}}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Road Freight</h3>
                        <p>Immerse yourself in a world of top-tier Road Freight services when you select us as your logistics partner. Our unwavering commitment to excellence shines through in every aspect of our operations.</p>
                        <div class="b-button1 black-b-button1">
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{asset('images/img/4.png')}}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Sea Freight</h3>
                        <p>Experience excellence with Cargo Track's Sea Freight services. We're your trusted partner for maritime shipping needs, providing premium solutions that prioritize reliability, and safety </p>
                        <div class="b-button1 black-b-button1">
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{asset('images/img/2.png')}}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Cargo Transport</h3>
                        <p>We are your trusted partner for Cargo Transport. With a steadfast commitment to excellence, we provide seamless and efficient transport solutions for all your cargo needs.</p>
                        <div class="b-button1 black-b-button1">
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{asset('images/img/5.png')}}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Packaging</h3>
                        <p>Experience superior Packaging services with cargo track. We understand that the right packaging is crucial for the safe and secure transport of your valuable goods</p>
                        <div class="b-button1 black-b-button1">
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{asset('images/img/1.png')}}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Home Delivery</h3>
                        <p>At cargo track, we redefine convenience with our Home Delivery services. We understand that your time is precious, and we're here to make your life easier.</p>
                        <div class="b-button1 black-b-button1">
                         </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-02-wrapper mb-30">
                    <div class="services-02-icon">
                        <img src="{{asset('images/img/6.png')}}" alt="">
                    </div>
                    <div class="services-02-text">
                        <h3>Supply Chain</h3>
                        <p>At cargo track, we optimize your supply chain for success. From sourcing to distribution, our expertise ensures efficiency and cost savings throughout the process.</p>
                        <div class="b-button1 black-b-button1">
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End services-area-start -->
<!--offer section-->
<section class="service-section bg_anim_1 bg-color1 pt-75 pb-60" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="title-section t-border">
                    <h2>WE OFFER QUICK &
                        POWERFUL SOLUTION
                        FOR TRANSPORT</h2>
                    
                </div>
               <img src="{{asset('images/img/part1.png')}}">
               <h3 style="margin-top:37px;">You Want To Track your shipment</h3>
               <form name="myForm" method="get">
                <input class="id" name="id" placeholder="Enter your invoice number" id="tracking2">
                <input type="button" value="Track" id="storeButton2">
            </form>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="col-md-6">
                    <div class="col-md-12 service-desc1">
                        <img class="" src="{{asset('images/img/offer1.jpg')}}" alt="service">
                        <h3><a href="#">Tailored to your needs</a></h3>
                        <p> We provide tailored solutions to meet your unique needs. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 service-desc1">
                        <img class="" src="{{asset('images/img/offer2.jpg')}}" alt="service">
                        <h3><a href="#">Award winning quality</a></h3>
                        <p>Discover Excellence Through Our Award-Winning Quality. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 service-desc1">
                        <img class="" src="{{asset('images/img/offer3.jpg')}}" alt="service">
                        <h3><a href="#">The best prices</a></h3>
                        <p>Unlock Exclusive Deals and the Best Prices in Town. </p> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 service-desc1">
                        <img class="" src="{{asset('images/img/offer4.jpg')}}" alt="service">
                        <h3><a href="#">Passenger Transport</a></h3>
                        <p> Comfortable, and Reliable Passenger Transport Services. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--offer section-->
<!--service-gallery-->
<div class="service-gallery pt-60 pb-60">
    <div class="container">
        <div class="title-section center pb-60">
            <h2><span>WE HAVE BEST GALLERY</span></h2>
           
        </div>
    </div>
    <div class="row">
        <div class="col-xl col-md-12">
        <div class="gallery">
            <div class="box">
              <img src="{{asset('images/img/gallery1.jpg')}}">
              <span>Air Transports</span>
            </div>
            <div class="box">
              <img src="{{asset('images/img/gallery2.jpg')}}">
              <span>Cargo Transports</span>
            </div>
            <div class="box">
              <img src="{{asset('images/img/gallery3.jpg')}}">
              <span>Cargo Ship</span>
            </div>
            <div class="box">
              <img src="{{asset('images/img/gallery4.jpg')}}">
              <span>Ware Housing</span>
            </div>
        </div>
       </div>
    </div>
</div>
<!--service-gallery-->
<!--Our Price Table Area-->
<section class="call-to-action pt-45 pb-45">
	<div class="thm-container">
		<div class="row">
			<div class="col-xl-6 col-lg-6">
				<div class="right-full-image">
					<img src="{{asset('images/img/callnow.png')}}" alt="Awesome Image"/>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6">
				<div class="call-to-action-text">
					<h3>WE TRY TO PROVIDE THE FASTEST DELIVERY SERVICE 100% sure and safe</h3>
					<p>
                        At our company, we take pride in our commitment to providing the fastest delivery service, and we guarantee both speed and safety. Our team works tirelessly to ensure that your items reach their destination promptly and securely. With a proven track record of reliability and a commitment to excellence, you can trust us to handle your deliveries with care and precision. We understand the importance of timely and secure deliveries, and our dedicated staff is always ready to go the extra mile to meet and exceed your expectations. Choose us for a delivery experience that is not only fast but also 100% sure and safe</p>
					<div class="about-button">
                        <a class="btn-1" href="/service">View Service <i class="far fa-paper-plane"></i></a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--choose section-->
<section class="row choose-section space pt-100 pb-60" id="choose">
    <div class="container">
        <div class="title-section center pb-60">
            <h2><span>WHY CHOOSE US</span></h2>
            <p class="title-desc">Choose Us for Seamless Cargo Solutions. Discover the Difference in Efficiency and Reliability. </p>
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
 <!-- cta-area-start -->
 <div class="cta-area pt-120 pb-130" style="background-image:url(images/img/bg6.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="cta-wrapper text-center">
                    <div class="cta-text">
                        <span>24/7 Active Suport Team</span>
                        <h1>Need Immediate Support Or Any Help?</h1>
                        <p>Need Immediate Support or Assistance? We're Here to Assist You!</p>
                        <a class="btn-1" href="/contact">Contact with us <i class="far fa-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta-area-end -->
<!--testimonial section-->
<section class="spacer pt-100 pb-60">
    <div class="title-section center pb-60">
        <h2><span>WHAT OUR CLIENT SAY</span></h2>
        <p class="title-desc">What our clients say speaks volumes about our commitment to excellence and their satisfaction. </p>
    </div>
   </div>
<div class="container">
    <div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="testimonial-section">
         <div class="testi-user-img">
              <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                      <div class="swiper-slide">
                            <img class="u3" src="{{asset('images/img/client1.jpg')}}" alt="">
                        </div>
                <div class="swiper-slide">
                  <img class="u1" src="{{asset('images/img/client2.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
               <img class="u2" src="{{asset('images/img/client3.jpg')}}" alt="">
                </div>
          
              <div class="swiper-slide">
              <img class="u4" src="{{asset('images/img/client4.jpg')}}" alt="">
              </div>
              <div class="swiper-slide">
                <img class="u2" src="{{asset('images/img/client1.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="u1" src="{{asset('images/img/client2.jpg')}}" alt="">
                    </div>
              </div>
          </div>
        </div>
    <div class="user-saying">
              <div class="swiper-container testimonial">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper ">
                          <!-- Slides -->
                          <div class="swiper-slide">
                              <div class="quote">
                                      <img class="quote-icon" src="{{asset('images/img/quote.png')}}" alt="">
                                  <p>
                                    "Their tracking services have helped us stay ahead of the competition. The global partnership ensures that we're at the forefront of logistics technology."                                  </p>
                                  <div class="name">-Michel Wague-</div>
                                  <div class="designation">Company Co. In.</div>
                                  
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="quote">
                                    <img class="quote-icon" src="{{asset('images/img/quote.png')}}" alt="">
                                
                                  <p>
                                    "Thanks to their services, we can offer better customer experiences. Real-time tracking information means we can provide updates to our clients accurately and promptly."                                  </p>
                                  <div class="name">-George Hilson-</div>
                                  <div class="designation">Manager</div>
                                  
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="quote">
                                    <img class="quote-icon" src="{{asset('images/img/quote.png')}}" alt="">
                                      
                                  <p>
                                    "The improved tracking accuracy has reduced our losses significantly. It's reassuring to know that our cargo is always accounted for."                                  </p>
                                  <div class="name">-Chries Hemsworth-</div>
                                  <div class="designation">Assistent Manager</div>
                                  
                              </div>
                          </div>
                          <div class="swiper-slide">
                                  <div class="quote">
                                        <img class="quote-icon" src="{{asset('images/img/quote.png')}}" alt="">
                                     
                                      <p>
                                        "Their branch network is impressive. No matter where our shipments are, we can count on their tracking services to keep us informed and in control."                                      </p>
                                      <div class="name">-Ramkishor Verma-</div>
                                      <div class="designation">Manager</div>
                                      
                                  </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="quote">
                                      <img class="quote-icon" src="{{asset('images/img/quote.png')}}" alt="">
                                   
                                    <p>
                                        "Partnering with a global shipping giant has made a world of difference. We now have real-time visibility into our cargo, allowing us to make informed decisions and streamline our operations."                                    </p>
                                    <div class="name">-Chris Evans-</div>
                                    <div class="designation">Manager</div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="quote">
                                      <img class="quote-icon" src="{{asset('images/img/quote.png')}}" alt="">
                                   
                                    <p>

                                        "We've been using their tracking services for years, and the recent technology upgrade is a game-changer. Our cargo monitoring has never been so precise and reliable."                                    </p>
                                    <div class="name">-Ramkishor Verma-</div>
                                    <div class="designation">Manager</div>
                                    
                                </div>
                            </div>
                      </div>
                      <!-- If we need pagination -->
                      <div class="swiper-pagination swiper-pagination-white"></div>
                  
                  </div>
        </div>
        </div>
    </div>
</div>
  </div>
</section>

<!--tstimonial section-->
<!--Start Our Partners-->
<section class="row Partner-section space pt-100 pb-60">
    <div class="container">
    <div class="row">
    <div class="col-sm col-md-12">
    <div class="title-section center pb-60">
        <h2><span>Our  Partners</span></h2>
        <p class="title-desc">Our partners are the backbone of our success. We collaborate closely with industry leaders, innovators, and trusted organizations to deliver exceptional solutions </p>
    </div>
<div class="customer-logos slider">
    <div class="slide"><img src="{{asset('images/img/logo1.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo2.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo3.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo4.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo5.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo6.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo7.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo8.jpg')}}"></div>
    <div class="slide"><img src="{{asset('images/img/logo9.jpg')}}"></div>
</div>
</div>
</div>
</div>
</section>
<!--End Our Partners-->

<script>
    document.getElementById('storeButton1').addEventListener('click', function () {
        // Get the input value
        var inputValue = document.getElementById('tracking').value;

        // Check if the input value is not empty
        if (inputValue) {
            // Store the input value in localStorage
            localStorage.setItem('myData', inputValue);
            console.log('Data stored in localStorage:', inputValue);
            window.location.href = '/tracking';
        } else {
            console.log('Input value is empty; nothing to store.');
        }
    });

    document.getElementById('storeButton2').addEventListener('click', function () {
        // Get the input value
        var inputValue = document.getElementById('tracking2').value;

        // Check if the input value is not empty
        if (inputValue) {
            // Store the input value in localStorage
            localStorage.setItem('myData', inputValue);
            console.log('Data stored in localStorage:', inputValue);
            window.location.href = '/tracking';
        } else {
            console.log('Input value is empty; nothing to store.');
        }
    });
</script>

@endsection