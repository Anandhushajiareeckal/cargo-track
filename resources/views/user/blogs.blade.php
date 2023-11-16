@extends('layouts.header_footer')

@section('body')

<!--breadcrumb section-->
<div class="row breadcrumb" style="background-image: url('{{asset('/images/all-img/breadcrumb-bg.jpg')}}')">
    <div class="container page-title content-center">
        <div class="section-heading white animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span> BLOGS</span></h1>
            <p class="title-desc">Discover a wealth of knowledge, industry updates, and expert perspectives in our informative blogs, providing valuable insights into the dynamic world of cargo and logistics. </p>
        </div>
    </div>
</div>
<div class="row breadcrumb-manu">
    <div class="container">
        <ul class="title-bredcum">
            <li><a href="/">Home</a></li>
            <li>/</li>
            <li>Blogs</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<!--blog section-->
<section class="row blog_post space clearfix">
    <div class="container">
        <div class="title-section center pb-60">
            <h2><span>LATEST NEWS</span></h2>
            <p class="title-desc"> We're excited to share our latest updates and accomplishments with you.</p>
        </div>
        @if(isset($admin_news))
        <div class="swiper-container blog-slider">
            <div class="swiper-wrapper">
                @foreach ($admin_news as $admin_news)

                <div class="swiper-slide blog-post">
                    <figure>
                        <div class="post-img">
                            <img src="{{ $admin_news->image }}" alt="img-blog">
                        </div>
                        <figcaption class="blog_post-catipon-inner text-left bg-color">
                            <h4><a href="#">{{ $admin_news->heading }}</a></h4>
                            {{-- <p class="post_date"><span>Transport /</span><span>14 Dec </span></p> --}}
                            <p>{{ $admin_news->content }}</p>
                        </figcaption>
                    </figure>
                </div>
                @endforeach

            </div>
            @else
            <div class="swiper-wrapper">
                <div class="swiper-slide blog-post">
                    <figure>
                        <div class="post-img">
                            <img src="images/home-blog/post-1.jpg" alt="img-blog">
                        </div>
                        <figcaption class="blog_post-catipon-inner text-left bg-color">
                            <h4><a href="#">Lorem ipsum dolor</a></h4>
                            {{-- <p class="post_date"><span>Transport /</span><span>14 Dec </span></p> --}}
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            @endif
            <div class="swiper-btn-center">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>
        </div>
    </div>
</section><!--blog section-->






@endsection