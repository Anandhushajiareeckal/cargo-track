@extends('layouts.header_footer')

@section('body')
<!--breadcrumb section-->
<div class="row breadcrumb" style="background-image: url('{{asset('/images/all-img/breadcrumb-bg.jpg')}}')">
    <div class="container page-title content-center">
        <div class="section-heading white animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span> CONTACT</span></h1>
            <p class="title-desc">Get in touch with us for seamless communication. Whether you have inquiries, feedback, or require assistance, our dedicated team is here to help.  </p>
        </div>
    </div>
</div>
<div class="row breadcrumb-manu">
    <div class="container">
        <ul class="title-bredcum">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Contact</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<!--contact-section-->
<div class="section-contact space1">
    <div class="container contact space2">
        <div class="row">
            <div class="col-lg-12 col-md-12 cont-desc">
                <div class="title-section t-border">
                    <h2>Get In Touch With Our Experts</h2>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 cont-desc">
                <p>If you have any questions or need assistance, please don't hesitate to contact us. We value your inquiries and are here to provide the information you're looking for. Feel free to reach out through the contact form here.</p>
                <div class="row other-cont-area bg-color">
                    <div class="icon_col">
                        <span><i class="fas fa-mobile-alt icon"></i></span>
                    </div>
                    <div class="col">
                        <h4> Phone </h4>
                        <p> {{ $admin_contact->phone }} </p>
                    </div>
                </div>
                <div class="row other-cont-area bg-color">
                    <div class="icon_col">
                        <span><i class="fas fa-envelope icon"></i></span>
                    </div>
                    <div class="col">
                        <h4> Email </h4>
                        <p> {{ $admin_contact->email }} </p>
                    </div>
                </div>
                <div class="row other-cont-area bg-color">
                    <div class="icon_col">
                        <span><i class="fas fa-location-arrow icon"></i></span>
                    </div>
                    <div class="col">
                        <h4> Address </h4>
                        <p> {{ $admin_contact->addres }} </p>
                        
                    </div>
                </div>

                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-12 cont-form">
                <div class="col-lg-12 col-md-12 form-desc">
                    <h3>CONTACT US</h3>
                    <h4>We Will Be Glad To Help You</h4>
                    <form action="/message-store" method="POST">
                        @csrf
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required >
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group col-md-12">
                                <textarea required name="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mini_subscribe-btn pt-4">
                            <button type="submit" class="btn btn-dark button4" style="width: 200px ">Send</button>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact-section-->
@endsection