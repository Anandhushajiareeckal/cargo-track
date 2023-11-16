@extends('layouts.header_footer')

@section('body')
<!--breadcrumb section-->
<div class="row breadcrumb" style="background-image: url('{{asset('/images/all-img/breadcrumb-bg.jpg')}}')">
    <div class="container page-title content-center">
        <div class="section-heading white animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span> LOCATION</span></h1>
            <p class="title-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porta, dui at suscipit
                aliquam, massa ex accumsan augue, in vehicula nulla justo id lacus. </p>
        </div>
    </div>
</div>
<div class="row breadcrumb-manu">
    <div class="container">
        <ul class="title-bredcum">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Location</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<br><br><br> 
<!--branch-section-->
<div class="section-branch space2">
    <div class="container">
        <div class="col-lg-12 col-md-12 cont-desc">
            <div class="title-section t-border">
                <h2>WE HAVE MANY OFFICIAL BRANCHES</h2>
                <p class="title-desc">ur extensive network comprises numerous branches across diverse locations </p>
            </div>
        </div>
        @if(isset($admin_location))
            
        
        <div class="row office-data">
            @foreach ($admin_location as $admin_location )

            <div class="col-lg-3">
                <div class="branch-data">
                    <span class="b-name">{{$admin_location ->name}}</span>
                    <ul class="office-detail">
                        <li><i class="fas fa-map-marker-alt icon"></i> {{$admin_location ->company_name}}</li>
                        <li><i class="fas fa-phone-volume icon "></i> {{$admin_location ->contact}}</li>
                        <li><i class="fas fa-envelope icon"></i> {{$admin_location ->email}}</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        
        @else
        <div class="row office-data">
            <div class="col-lg-3">
                <div class="branch-data">
                    <span class="b-name">LOSS ANGELS</span>
                    <ul class="office-detail">
                        <li><i class="fas fa-map-marker-alt icon"></i> Your Company Name(2012-35)</li>
                        <li><i class="fas fa-phone-volume icon "></i> 01235-4519-00</li>
                        <li><i class="fas fa-envelope icon"></i> Transportexpress@example.com</li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!--branch-section-->


@endsection