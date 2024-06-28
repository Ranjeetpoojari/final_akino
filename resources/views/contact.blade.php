@extends('layouts.app')
@section('title','Akino Foundation | Contact us ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/contact.css')}}">
@stop
@section('content')
@include('common.navigation')

<section>
    <div>
        <div class="position-relative d-flex align-items-center ">
            <div class="walpaper-img position-absolute top-0">
                <img src="{{url('/assets/img/gallery/women-empower .jpg')}}"  alt="" class="position-absolute img-cover">
                <img src="https://plus.unsplash.com/premium_photo-1674769116099-d70d710ebb30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y3V0ZSUyMGJhYnl8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="" class="img-cover">
            </div>
        </div>
        <div class="position-absolute user-form  w-100 ">
            <div
                class="main-form d-flex flex-column mx-auto p-md-5 p-4 bg-white  col-lg-6  col-md-10 col-12 rounded-4">
                <div class="span" style="color: red">{{Session::get('msg')}}</div>
                <form class="gradient-custom" action="{{url('/akino/contactus/form')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">

                            <div class="form-outline">
                                <label class="font-sm" for="name">Name</label>
                                <input type="text" id="name" name="name"
                                    class="input-height input-background-color  form-control" required/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">

                            <div class="form-outline">
                                <label class="font-sm" for="email">Email</label>
                                <input type="email" id="email" name="email"
                                    class=" input-height input-background-color form-control" required/>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-outline">
                                <label class="font-sm" for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="input-background-color input-height form-control" required/>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-outline">
                                <label class="font-sm" for="location">Location</label>
                                <input type="text" id="location" name="location"
                                    class="input-background-color input-height form-control" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" mb-3">
                            <div class="form-outline">
                                <label class="font-sm" for="subject">Subject</label>
                                <input type="text" id="subject" name="subject"
                                    class="input-background-color input-height form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" mb-5">
                            <div class="form-outline">
                                <label class="font-sm" for="massage">Massage</label>
                                <textarea class="textarea-height form-control input-background-color"
                                    id="massage" name="massage" cols="30" rows="10" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheck"
                                    value="option2">
                                <label class="form-check-label fs-15" for="exampleCheck">
                                    By sharing your details, you agree to receive stories and updates from Akino
                                    via mobile, Whatsapp,
                                    landline, email and post. If you’d like to change this, please send us an
                                    email on
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-md-5 mt-3">
                        <button class="border-0 rounded yellow-back-color input-height w-100 font-md">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class=" map-section pt-xl-5 pt-md-5">

    <div class="d-flex col-lg-8 col-11 position-relative mx-auto  mt-md-5  rounded-4 ">
        <div class="">
            <iframe class="w-100 position-absolute rounded-4" height="360" frameborder="0" scrolling="no"
                marginheight="0" marginwidth="0" id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3770.965396231096!2d72.99979500922628!3d19.065258982062602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1697433654453!5m2!1sen!2sin"></iframe>
        </div>
        <div class="address-block position-absolute  yellow-back-color m-3 rounded-4 p-4 d-none d-sm-block">
            <div class="">
                <h6 class="address-font">Address</h6>
                <p class="font-sm"> Office no - F-31, first floor,  haware Fantasia business park , plot no -47, sector -30/A,Near inorbit mall
                    vashi, navi mumbai -400703</p>


            </div>
            <di class=" d-flex justify-content-end align-items-end pt-2">
                <img class="address-block-img" src="{{url('/assets/img/addressimg.png')}}" alt="" srcset="">
            </di>
        </div>
     
    </div>
  
    <div class="container yellow-back-color  p-4 rounded-3 d-block d-sm-none" style=" position:relative; top:400px; width:320px; margin:auto;">
        <h6 class="address-font">Address</h6>
                <p class="font-sm"> Office no - F-31, first floor,  haware Fantasia business park , plot no -47, sector -30/A,Near inorbit mall
                    vashi, navi mumbai -400703</p>
                    <di class="d-flex justify-content-end align-items-end pt-2">
                        <img class="address-block-img" src="{{url('/assets/img/addressimg.png')}}" alt="" srcset="">
                    </di>
    </div>
   



    <div class="contact-block d-md-flex gap-2 mx-auto col-lg-8 col-11 mb-5 pe-md-2">
        <div
            class="d-flex justify-content-between col-md-6 yellow-back-color p-3 ps-md-4 rounded-3 box-height me-md-2 mb-4 mb-md-0">
            <div class=" ">
                <p class="font-sm m-0 ps-1">Mail Us</p>
                <a href="mailto:info@info@akinofoundation.org" class=" p-0 m-0 font-md nav-link">
                    info@akinofoundation.org</a>
            </div>
            <div>
                <img class="mail-img" src="{{url('/assets/img/massage.png')}}" alt="">
            </div>
        </div>
        <div class=" callus d-flex justify-content-between col-md-6 light-blue p-3 ps-md-4 rounded-3 box-height " >
            <div class="text-body ">
                <p class="font-sm m-0 ps-1">Call Us</p>
                <a href="tel:+91 87795 07814" class="font-md p-0 m-0  nav-link"> +91 87795 07814</a>
            </div>
            <div>
                <img class="call-img" src="{{url('/assets/img/callimg.png')}}" alt="">
            </div>
        </div>

    </div>

</section>



@include('common.footer')
@section('script')

@stop
@stop