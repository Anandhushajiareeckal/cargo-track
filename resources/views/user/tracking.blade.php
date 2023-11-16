
@extends('layouts.header_footer')

@section('body')
<link rel="stylesheet" href="{{asset('css/tracking.css')}}">

    <!-- UniIcon CDN Link  -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!--breadcrumb section-->
<div class="row breadcrumb" style="background-image: url('{{asset('/images/all-img/breadcrumb-bg.jpg')}}')">
    <div class="container page-title content-center">
        <div class="section-heading  animate " data-anim-type="zoomIn" data-anim-delay="600">
            <h1><span > TRACKING</span></h1>
            <p class="title-desc">Track your cargo in real-time with our advanced tracking system. Our user-friendly interface provides instant updates on the current location and status of your shipments. </p>
        </div>
    </div>
</div>
<div class="row breadcrumb-manu">
    <div class="container">
        <ul class="title-bredcum">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li>Tracking</li>
        </ul>
    </div>
</div>
<!--breadcrumb section-->

<!--track-section-->
<div class=" space">
    
    <div class="container">
        <div class="row track-data">
                <div class="col-lg-12 col-sm-12 col-md-12 cont-desc">
                    <div class="title-section t-border">
                        <h2 class="">Track Your Shipment</h2>
                        <p class="title-desc ">Please Enter Traking Invoice or Number </p>
                    </div>
                </div>
                
                <div class="col-lg-8 col-md-12 form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tracking ID" name="track" id="res">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 form-group ">
                    <div class="input-group">
                        <input type="submit" class="form-control" value="Track" id="trak" style="background-color: #2b97cb;color:#fff">
                    </div>
                </div>
            
               <!--track-section-->
        </div>
    </div>
    {{-- <div class="container"> --}}
        <div class="row" id="" >
            @for($i=0;$i<50;$i++)
            
            <div class="col-lg-4 col-sm-6 col-xs-12 col-md-6" id="{{'rowww'.$i}}">
               
            </div>
            
            @endfor 
                    {{-- <div class=" col-4">
                        <div class="timeline">
                            <div class="cont left-cont ">
                                <img src="{{asset('/images/amazon.png')}}" alt="">
                                <div class="text-box ">
                                    <h4 class="">Sending date</h4>
                                    <small id="sending_date"></small>
                                    <span class="left-cont-arrow"></span>
                                </div>
                            </div>

                            <div class="cont right-cont">
                                <img src="{{asset('/images/flipkart.png')}}" alt="">
                                <div class="text-box">
                                    <h4>Recived  at calicut</h4>
                                    <small>2018 - 2019</small>
                                    <span class="right-cont-arrow"></span>
                                </div>
                            </div>

                            <div class="cont left-cont">
                                <img src="{{asset('/images/google.png')}}" alt="">
                                <div class="text-box">
                                    <h4>In transit</h4>
                                    <small>2018 - 2019</small>
                                    <span class="left-cont-arrow"></span>
                                </div>
                            </div>

                            <div class="cont right-cont">
                                <img src="{{asset('/images/tesla.png')}}" alt="">
                                <div class="text-box">
                                    <h4>Pending</h4>
                                    <small>2018 - 2019</small>
                                    <span class="right-cont-arrow"></span>
                                </div>
                            </div>

                            
                        </div>
                    </div>   --}}
            <!--track-section-->

    

                    
                </div>
            </div> 
        </div>  
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function track(){
        var res = document.getElementById("res").value;
        const element = document.getElementById("trak");
    
        // Change the background color and text color when the button is clicked
        element.style.backgroundColor = 'lightblue';
        element.style.color = 'black';
        console.log(res);
        const apiUrl = 'https://cargotrackapi.cyenosure.co.in/api/tracking';
        axios.get(apiUrl, {
            params: {
                search: res 
            }
        })
        .then(response => {
            const element = document.getElementById("trak");
    
        // Change the background color and text color when the button is clicked
        element.style.backgroundColor = '#2b97cb';
        element.style.color = 'white';
            // console.log('Data:', response.data);
            var status = response.data;
            const count=status.data.length
            console.log('Data:', status.data);
            var val = status.data;
            for (let i = 0; i < count ; i++) {
                var data = val[i];
                var on_the_way = data.status == 0;
                var out_for_delivery = data.status == 1;
                var transit = data.status == 2;
                var delivered = data.status == 3;
                var Pending = data.status == 4;
                var not_delivered  = data.status == 5;
                var cargo = data.cargo_name;
                var inv = data.invoiceno;
                var pcs = data.pcs;
                var phone = data.phone;
                var place = data.district;
                const divElement = `
                            <div class="head">
                                <div class="responsive-text">
                                    <div class="row">
                                        <div class="col-5"><h6>${cargo}</h6></div>
                                        <div class="col-4"><p>INV:- <b> ${inv}</b> </p></div>
                                        <div class="col-3"><p>PCS:-<b>${pcs} </b> </p></div>
                                    </div>
                                    <div class="row row_2" >
                                        <div class="col-5 col-xs-3 "><p>PHONE:-<b>${phone} </b></p></div>
                                        <div class="col-6 col-xs-3 "><p>PLACE:-<b>${place} </b> </p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="cont left-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <i class="fa-solid fa-circle-check" style="color: #29d199;"></i>
                                    <div class="text-box">
                                        <h4 class="">Sending date</h4>
                                        <small id="sending_date">${data.sendingdate}</small>
                                        <span class="left-cont-arrow"></span>
                                    </div>
                                </div>

                                <div class="cont right-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>At calicut</h4>
                                        <small>${data.recievingdate}</small>
                                        <span class="right-cont-arrow"></span>
                                    </div>
                                </div>
                                ${on_the_way ? `
                                <div class="cont left-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>On the way</h4>
                                        <span class="left-cont-arrow"></span>
                                    </div>
                                </div>
                                ` :''}
                                ${out_for_delivery ? `
                                <div class="cont left-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>Out for delivery</h4>
                                        <span class="left-cont-arrow"></span>
                                    </div>
                                </div>
                                ` :''}
                                ${transit ? `
                                <div class="cont left-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>In transit</h4>
                                        <span class="left-cont-arrow"></span>
                                    </div>
                                </div>
                                ` :''}
                                ${delivered ? `
                                <div class="cont left-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>Out for delivery</h4>
                                        <span class="left-cont-arrow"></span>
                                    </div>
                                </div>

                                <div class="cont right-cont">
                                    <img src="{{asset('/images/checked.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>Delivered</h4>
                                        <span class="right-cont-arrow"></span>
                                    </div>
                                </div>
                                ` :''}
                                ${not_delivered ? `
                                <div class="cont left-cont">
                                    <img src="{{asset('/images/remove.png')}}" alt="">
                                    <div class="text-box">
                                        <h4>Not delivered</h4>
                                        <span class="left-cont-arrow"></span>
                                    </div>
                                </div>
                                ` :''}
                               
                            </div>`;
                        document.getElementById('rowww'+ i).innerHTML = divElement;
                        localStorage.removeItem('myData');
                    
            }
            
        })
        .catch(error => {
            const element = document.getElementById("trak");
    
    // Change the background color and text color when the button is clicked
    element.style.backgroundColor = '#2b97cb';
    element.style.color = 'white';
            console.error('Error:', error);
        });
    }
    document.getElementById("trak").addEventListener("click", track);
    document.getElementById("res").addEventListener("keypress", track);


    var storedValue = localStorage.getItem('myData');
    if(storedValue){
        document.getElementById('res').value = storedValue ;
        track();

    }


    
</script>

@endsection
