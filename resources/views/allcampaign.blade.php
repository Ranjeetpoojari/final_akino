@extends('layouts.app')
@section('title','Akino Foundation | index ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/campaign.css')}}">
@stop
@section('content')
@include('common.navigation')
 <main>
    <div class="position-relative">
        <div class="work-wallpaper position-relative">
          
            <img src="{{url($camp->main_image)}}" alt="{{url($camp->title)}}" class="img-cover ">
        
        </div>
     
    </div>
    
    <div class="container-fluid px-xl-5 px-3 my-5 pt-md-3 pt-5 ">
        <p class="fs-12 px-4 mb-2">Fundraising for Extreme needs</p>
        <div class="col-lg-8 px-4 mb-4">
          <h3 class="">Creating lasting impact, one step at a time. Empowering lives, building a brighter future.</h3>
        </div>
       <div class="row">

    @if ($campaigns)
    @foreach ($campaigns as $item)
    @if($item->camp_name == $camp->title)
    <div class="col-12 col-md-6 col-lg-4">
    <div class="item" data-aos="fade-up" data-aos-duration="500">
        <div class="card p-3 img-rounded campaign-card">
            <div class="h-10">
                <a href="{{url('/campaign/'.encrypt($item->id))}}"><img src="{{url($item->main_image)}}"
                        class="card-img-top img-cover img-rounded" alt="{{$item->title}}"></a>
            </div>
            <div class="card-body px-0">
                <h4 class="card-title fs-22 m-0 p-0 heading-content"><a href="{{url('/campaign/'.encrypt($item->id))}}"
                        class="text-decoration-none text-dark text-dark" >{{$item->title}}</a></h4>
                {{-- <p class="text-justify card-text fs-15 py-3 lh-1  m-0 text-dark-gray truncate">
                    {{$item->short_description}}</p> --}}
                <p class="pt-4"> <span class="fw-bold fs-18  text-dark">₹{{$item->raise_fund}} </span><span
                        class="text-dark-gray ps-2">Raised of ₹
                        {{$item->fund_amount}} goal</span></p>
                <div class="range my-3">
                    <div class="range-width" style="width:{{$item->fund_percentage}}%"></div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{url('/assets/img/hurt.png')}}" alt="Akino-image" class="hurt me-2">
                        <p class="span text-dark-gray fs-18"></p>{{$item->count_total}} supporter's</p>
                    </div>
                    <button class="btn bg-warning-subtle text-warning-emphasis fw-medium rounded-pill py-1 px-3" style="width: 157px;
                    height: 34px;
                    overflow: hidden;">Donate Now</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endif
    @endforeach
    @endif

 </div>
    </div>
 </main> 
  
  @include('common.footer')
@section('script')

<script>

    var options = {
        "key": "rzp_test_rolAn4CM2R6XmI",//"rzp_live_ZP1l0j340zMqia",
        "amount": $('#donationAmount').val()+"00",
        "currency": "INR",
        "name": $('#client_name').val(),
        "description": "PrintAllResult",
        "image": $('#client_logo').val(),
        "order_id": $("#order_id").val(), 
        
        "handler": function (response){
            // $.get('https://mh.printallresults.com/api/v1/payment/razorpay/'+response.razorpay_payment_id+'/'+$("#form_id").val()+'/success', function(res){
            //     alert("Payment Successfully Completed")
            //     location.href="/my-payment-history/lJUR361TeuYaa7qNJPwudGHMKcq9YneXB8cCUCm4";
            // });
        },
        "prefill": {
            "name": $('#student_name').val(),
            "email": $('#student_email').val(),
            "contact": $('#student_mobile').val(),
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#01FFF1"
        }
    };
    var rzp1 = new Razorpay(options);
    // rzp1.on('payment.failed', function (response){
    //     $.get('https://mh.printallresults.com/api/v1/payment/razorpay/'+response.error.metadata.payment_id+'/'+$("#form_id").val()+'/pending', function(res){
    //         alert("Payment Failed")
    //     });
    // });
    document.getElementById('rzp-button1').onclick = function(e){
        options.amount = $('#donationAmount').val()+"00"
        // console.info(options)
        rzp1.open();
        e.preventDefault();
    }
    </script> 

@stop
@stop