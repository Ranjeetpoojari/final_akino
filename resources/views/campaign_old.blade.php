@extends('layouts.app')
@section('title','Akino Foundation | index ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/campaign.css')}}">
@stop
@section('content')
@include('common.navigation')
<div class="hero position-relative" style="background:radial-gradient(336.38% 75.42% at 75.76% 67.80%, rgba(0, 0, 0, 0.00) 0%, #000 100%), url({{$campaign->main_image}}), lightgray 100%;">
    <div class="container">
    <div class="d-flex justify-content-lg-around flex-lg-row flex-column-reverse">
        <div class="col-lg-6 pt-15">
            <div class="col-xl-10 col-lg-11 col-12 my-md-5 mt-5 pt-lg-0 pb-5 d-lg-block d-none">
                <p class="title-txt text-uppercase">
                    <span class=" text-start">{{$campaign->title}}</span>
                </p>
                <p class="extra-txt text-uppercase">
                    {{$campaign->short_description}}
                </p>
            </div>

  <p class="fs-15 pb-5 pt-lg-5 pt-4 mt-lg-5 mb-3">{!!$campaign->description!!}
            </p>
             @if ($campaign->is_direct == 0) 
            <div>
                <img src="{{url($campaign->documents[0]->attachment)}}" class=" border" id="main">
            </div>
            <div class="owl-carousel owl-theme my-3" id="thumbnails">
                @foreach ($campaign->documents as $item)
                    
                <div class="item">
                    <img class="img-contain" src="{{url($item->attachment)}}">
                </div>

                @endforeach

            </div>
              @endif
        </div>
        <div class="col-lg-6 pt-lg-1 pt-5 mt-8">
            <div class="col-md-10 col-12 my-md-5 mt-5 pt-lg-5 pb-5 d-lg-none d-block">
                <p class="fs-50 lh-1 fw-700 text-uppercase text-white">
                    <span class=" text-start">{{$campaign->title}}</span>
                </p>
                <p class="extra-txt text-uppercase text-white  d-none d-md-block">
                    {{$campaign->short_description}}
                </p>
            </div>
            <div id="" class="my-2 px-0 border rounded-3 bg-white position-sticky top-0 ">
                <div class="" id="donate_parent">
                    <div class="d-flex flex-column gap-2 justify-content-center mt-2 p-md-4 p-2">
                        <div class="d-flex justify-content-center align-items-center flex-column gap-2">
                            <div class="t-txt text-center text-capitaliz">SuPPORT THE CAUSE</div>
                            <p
                                class="bg-yellow lazyMonday  col-lg-8 col-md-10 col-12  rounded text-center p-2 text-capitalize">
                                MAKE A DIFFERENCE</p>
                        </div>
                        <ul class="d-flex payment-tab p-0 m-auto">
                            <li class="bg-yellow mx-1 rounded-1"><button type="button" class="text-center w-100 d-inline-block p-2 " id="onetime">One time</button></li>
                                <li class="bg-yellow mx-1 rounded-1"><button type="button" class="text-center w-100 d-inline-block p-2 " id="monthly">Monthly</button></li>
                                <li class="bg-yellow mx-1 rounded-1"><button type="button" class="text-center w-100 d-inline-block p-2" id="fullpayment">Full payment</button></li>
                          </ul>
                            <div class="col-12 ">
                                <div class="mt-3 d-flex justify-content-between">
                                    <p class="amt m-0 col d-flex  justify-content-start" id="givenAmountDiv">₹{{$campaign->raise_fund}}</p>
                                    <p class="des m-0 col-md-auto d-flex align-items-end" id="totalAmountDiv">Raised of: ₹{{$campaign->fund_amount}}  goal
                                    </p>
                                    <p class="ranjeet"></p>
                                </div>
                            </div>
                            <div class=" col-12">
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{$campaign->fund_percentage}}% ;border-radius: 1.5625rem; background: var(--primary-primary, #F9CA3E);"
                                            aria-valuenow="{{$campaign->fund_percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div  >
                                    <div class="col"><img src="emoji sparkling heart.svg" width="25"
                                            alt=""><span>
                                            <img src="/img/hurt.png" height="21" alt="" class=" pe-2">{{$campaign->count_total}}
                                            supporter's</span></div>
                                </div>
                            </div>
                        {{-- <form action="#" id="donationForm" onsubmit="return validateForm()"> --}}
                            <div class="position-relative rounded">
                                <div class="input-group mt-2 mb-1 bg-light-gray rounded d-flex d-none donate-search-div" id="donate-search-div">
                                    <span
                                        class="input-group-text bg-light-gray border-0 py-2 fw-600 fs-18 bg-light-gray">RS.</span>
                                    <input type="number" class="form-control border-0 rounded bg-light-gray"
                                        placeholder="Customer Amount " id="donationAmount" name="donationAmount"  onkeyup="selectAmountFromOther(this.value)">
                                    <p class="m-0 p-0 fs-12 text-danger" id="donateError"></p>
                                </div>
                                <div class="position-absolute rounded end-0 top-0 h-100 text-center bg-light-gray bg-box-hide">
                                </div>
                            </div>
                            <div class="donation-amount-div px-2 my-3">
                                <div>
                                    <input type="radio" id="thousand" value="1000" onclick="setInputValue(1000)"
                                        name="donation-amount" class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="thousand">₹1000</label>
                                </div>
                                <div>
                                    <input type="radio" id="two-thousand" value="2000"
                                        onclick="setInputValue(2000)" name="donation-amount"
                                        class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="two-thousand">₹2000</label>
                                </div>
                                <div>
                                    <input type="radio" id="five-thousand" value="5000"
                                        onclick="setInputValue(5000)" name="donation-amount"
                                        class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="five-thousand">₹5000</label>
                                </div>

                                <div  >
                                    <input type="radio" id="eight-thousand" value="8000"
                                        onclick="setInputValue(8000)" name="donation-amount"
                                        class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="eight-thousand">₹8000</label>
                                </div>
                                <div  >
                                    <input type="radio" id="ten-thousand" value="10000"
                                        onclick="setInputValue(10000)" name="donation-amount"
                                        class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="ten-thousand">₹10000</label>
                                </div>
                                <div >
                                    <input type="radio" id="twelve-thousand" value="12000"
                                        onclick="setInputValue(12000)" name="donation-amount"
                                        class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="twelve-thousand">₹12000</label>
                                </div>
                                <div>
                                    <input type="radio" id="fivteen-thousand" value="15000"
                                        onclick="setInputValue(15000)" name="donation-amount"
                                        class="donation-amount pamount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="fivteen-thousand">₹15000</label>
                                </div>
                                <div>
                                    <input type="radio" id="others-button" name="donation-amount"
                                        class="donation-amount">
                                    <label class="donation-amount-label display-font bg-light-gray"
                                        for="others-button">Others</label>
                                </div>
                            </div>
                         
                            <p class="fs-15 py-md-3 text-justify text-uppercase">"YOUR CONTRIBUTIONS ARE
                                ELIGIBLE
                                FOR UPTO 50% TAX
                                BENEFIT UNDER SECTION 80G AS AKINO FOUNDATION IS REGISTERED AS NON PROFIT
                                ORGANIZATION"PAN: AACTS7973G | 80G NUMBER: AACTS7973GF20210</p>
                            <button type="button" class="bg-yellow w-100 py-3 border-0 rounded px-4" id="donate_button" {{($fundcomplete==true)?'disabled':''}}><span
                                    class="float-start fw-600 fs-20">Donate Now</span><i
                                    class="fa-solid fa-arrow-right float-end fs-4"></i>
                            </button>

                      {{-- </form> --}}
                    </div>
                </div>
                <div>
                    
                    <form class="gradient-custom p-4 d-none" id="donor_detail" >
                        <input type="hidden" name="campaign_id" id="campaign_id" value="{{$campaign->id}}">
                        <input type="hidden" name="donation_id" id="donation_id" >
                        <input type="hidden" name="donationAmount" id="donationAmount1" >
                        <input type="hidden" name="order_id" id="order_id" >
                            <i class="fa fa-arrow-circle-left fs-2 text-warning" aria-hidden="true" id="backbuttom"></i>
                        <div class="row">
                            <div class="col-md-12 mb-2">

                                <div class="form-outline">
                                    <label class="font-sm" for="donor_pancard">Indian Pan Card</label>
                                    <input type="text" id="donor_pancard"
                                      name="donor_pancard"  class="input-height input-background-color  form-control" />
                                      <span id="pan-error" class="error-message"></span>
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">

                                <div class="form-outline">
                                    <label class="font-sm" for="donor_name">Full Name</label>
                                    <input type="text" id="donor_name"
                                      name="donor_name"  class="input-height input-background-color form-control" />
                                      <span id="name-error" class="error-message"></span>
                                </div>
                            </div>
                            <div class=" col-md-12 mb-2">
                                <div class="form-outline">
                                    <label class="font-sm" for="donor_address">Address</label>
                                    <textarea class="textarea-height form-control input-background-color w-100" name=""
                                        id="donor_address" rows="3" name="donor_address"></textarea>
                                        <span id="address-error" class="error-message"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">

                                <div class="form-outline">
                                    <label class="font-sm" for="donor_city">City</label>
                                    <input type="text" id="donor_city"
                                        class="input-height input-background-color form-control" name="donor_city" />
                                        <span id="city-error" class="error-message"></span>
                                </div>

                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="font-sm" for="donor_state">State</label>
                                    <input type="text" id="donor_state"
                                        class="input-background-color input-height form-control" name="donor_state" />
                                    <span id="state-error" class="error-message"></span>
                                    </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="font-sm" for="country">Country</label>
                               <Select id="country" class="w-100 p-2 border-1 rounded-1" >
                                   <option value="India" class="w-100 text-capitalize" selected>India</option>
                               </Select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="font-sm" for="donor_phone">Phone</label>
                                    <input type="text" id="donor_phone"
                                        class="input-background-color input-height form-control" name="donor_phone" />
                                    <span id="phone-error" class="error-message"></span>
                                    </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="font-sm" for="donor_email">Email</label>
                                    <input type="email" id="donor_email"
                                        class="input-background-color input-height form-control" name="donor_email" />
                               <span id="email-error" class="error-message"></span>
                                    </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="font-sm" for="donor_birth">Date of Birth</label>
                                    <input type="date" id="donor_birth"
                                        class="input-background-color input-height form-control" name="donor_birth" />
                               <span id="dof-error" class="error-message"></span>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" mb-4">
                                <div class="form-check donor-check">
                                    
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="agree" value="option2" />
                                    <label class="form-check-label fs-12" for="agree">
                                        I have read and understood the <a href="" class="text-decoration-none">Terms and Conditions</a>  and <a href=""  class="text-decoration-none">Privacy Policy</a> and agree to make a donation.
                                    </label>
                                    <span id="checkbox-error" class="error-message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="bg-yellow w-100 py-3 border-0 rounded px-4" id="donate-conform"><span
                                class="float-center fw-600 fs-20">Transaction Procedure</span>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('common.footer')
</div>


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