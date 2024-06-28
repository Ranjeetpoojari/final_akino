@extends('layouts.app')
@section('title','Akino Foundation | Donate ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/donation.css')}}">
@stop
@section('content')
@include('common.navigation')
<div class="d-flex justify-content-center align-items-center">
    <div class="walpaper-img position-re">
        <img src="{{url('/assets/img/image4.png')}}" alt="" class="img-cover">
    </div>
  
    <div
        class="col-xxl-5 col-xl-6 col-lg-7 col-md-11 col-12 rounded-3 position-absolute top-10">
        {{--  <div class="d-flex justify-content-center">
            <div class="col-md-10 col-12 text-center ">
                <h1 class="fs-25 my-4 "><form action=""></form>
                    SUPPORT THE CAUSE
                </h1>
                <p class="bg-yellow text-center lazyMonday fs-15 py-2 rounded">MAKE A DIFFERENCE</p>
                <h1 class="fs-31 fw-700">Donate to help flood-affected communities</h1>
            </div>
        </div>  --}}
        <div id="" class="my-2 px-3 py-3 rounded-3  position-sticky top-0 ">
            <div class="bg-white rounded-3 px-3 pb-3"id="donate_parent">
                <div class="d-flex flex-column gap-2 justify-content-center mt-2 p-md-4 p-2">
                    <div class="d-flex justify-content-center align-items-center flex-column gap-2">
                        <div class="t-txt text-center text-uppercase fs-3 fw-bold">SuPPORT THE CAUSE</div>
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
                            {{--  <div class="mt-3 d-flex justify-content-between">
                                <p class="amt m-0 col d-flex  justify-content-start" id="givenAmountDiv">₹{{$campaign->raise_fund}}</p>
                                <p class="des m-0 col-md-auto d-flex align-items-end" id="totalAmountDiv">Raised of: ₹{{$campaign->fund_amount}}  goal
                                </p>
                                <p class="ranjeet"></p>
                            </div>  --}}
                            {{--  <div class="mt-3 d-flex justify-content-between">
                                <p class="amt m-0 col d-flex  justify-content-start" id="givenAmountDiv">₹</p>
                                <p class="des m-0 col-md-auto d-flex align-items-end" id="totalAmountDiv">Raised of: ₹  goal
                                </p>
                                <p class="ranjeet"></p>  --}}
                            </div>
                        </div>
                        <div class=" col-12">
                            <div>
                              
                                {{--  <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: {{$campaign->fund_percentage}}% ;border-radius: 1.5625rem; background: var(--primary-primary, #F9CA3E);"
                                        aria-valuenow="{{$campaign->fund_percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>  --}}
                            </div>
                        </div>
                        {{--  <div class="col-12 ">
                            <div  >
                                 
                                  <div class="col"><img src="emoji sparkling heart.svg" width="25"
                                        alt=""><span>
                                        <img src="/img/hurt.png" height="21" alt="" class=" pe-2"> 
                                         supporter's</span></div> 
                            </div>
                        </div>  --}}
                    {{-- <form action="#" id="donationForm" onsubmit="return validateForm()"> --}}
                        <div class="position-relative rounded">
                            <div class="input-group mt-2 mb-1 bg-light-gray rounded d-flex d-none donate-search-div" id="donate-search-div">
                                <span
                                    class="input-group-text bg-light-gray border-0 py-2 fw-600 fs-18 bg-light-gray">RS.</span>
                                <input type="number" class="form-control border-0 rounded bg-light-gray"
                                    placeholder="Customer Amount " id="donationAmount" name="donationAmount" onkeyup="selectAmountFromOther(this.value)">
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
                        {{--  <button type="button" class="bg-yellow w-100 py-3 border-0 rounded px-4" id="donate_button" {{($fundcomplete==true)?'disabled':''}}><span
                                class="float-start fw-600 fs-20">Donate Now</span><i
                                class="fa-solid fa-arrow-right float-end fs-4"></i>
                        </button>  --}}
                        <button type="button" class="bg-yellow w-100 py-3 border-0 rounded px-4" id="donate_button"><span
                                class="float-start fw-600 fs-20">Donate Now</span><i
                                class="fa-solid fa-arrow-right float-end fs-4"></i>
                        </button>

                  {{-- </form> --}}
                </div>
            </div>
            <div class="bg-white rounded-3">
                
                <form class="gradient-custom p-4 d-none" id="donor_detail" >
                    <input type="hidden" name="campaign_id" id="campaign_id" value="">
                    {{--  <input type="hidden" name="campaign_id" id="campaign_id" value="{{$campaign->id}}">  --}}
                    <input type="hidden" name="donation_id" id="donation_id" >
                    <input type="hidden" name="order_id" id="order_id" >
                    <input type="hidden" name="donationAmount" id="donationAmount1" >
                    <input type="hidden" name="button" id="button" >
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
                        <div class="col-md-6 mb-2 ">
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
                        <div class="col-md-12 mb-3">
                            <div class="form-outline">
                                <label class="font-sm" for="donor_email">Email</label>
                                <input type="email" id="donor_email"
                                    class="input-background-color input-height form-control" name="donor_email" />
                           <span id="email-error" class="error-message"></span>
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
   <div class="container">
    <div class="col-12 col-xl-6  my-5">
        <p class="text-center text-sm-start">
            We invite you to make a meaningful impact by contributing to the Akinofoundation. Your generous donation empowers us to drive positive change in areas like education, healthcare, and community development. Every amount, no matter how big or small, helps us support those in need and create a brighter future for underserved communities. Your contribution will be a beacon of hope, fostering progress and opportunity where it's needed most. Together, we can transform lives and make the world a better place. Thank you for choosing to be a part of the Akinofoundation's mission. Donate today and be a catalyst for change.
        </p>
        <p  class="text-center text-sm-start">
            At Akinofoundation, we believe that collective compassion has the power to transform lives and build stronger, more resilient communities. Your donation goes directly towards funding projects that provide education, healthcare services, and essential resources to those facing adversity. Whether you choose to give a one-time gift or become a recurring donor, your support fuels our commitment to making a positive difference. Join us in this journey of impact, where your generosity not only changes lives but also inspires others to lend a helping hand. Together, we can create a world where everyone has the opportunity to thrive. Donate today, and let's write a brighter future together.</p>
    </div>
   </div>



</div>



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