@extends('layouts.app')
@section('title','Akino Foundation | Terms and Conditions ')

@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/about.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">


@stop
@section('content')
@include('common.navigation')
<div class="herosection walpaper-img blur-img">
    <img src="{{url('/assets/img/aboutAsimg.png')}}" alt="akino" class="img-cover img-of-blur">
    <h1>Terms and Conditions</h1>
</div>

<div class="container">
<div class="my-5">
    <h2 class="text-center my-3" >Terms of Use</h2>
    <h3>Your acceptance of this agreement</h3>
    <p class="fs-15">In the course of registering for and availing various services we provide from time to time through our website www.akinofoundation.org you may be required to give your name, residence address, workplace address, email address, date of birth, educational qualifications and similar Personal Information. The Personal Information is used for three general purposes: to customize the content you see, to fulfil your requests for certain services, and to contact you about our services. Unless otherwise stated explicitly, this Policy applies to Personal Information as disclosed on any of the Media.</p>
    <p class="fs-15">We are committed to protect the privacy and confidentiality of all Personal Information that you may share as a user of site. In furtherance thereof, we have this policy to demonstrate our good faith.</p>
    <p class="fs-15">This policy does not apply to the practices of organizations that we do not own or to people that we do not employ or manage.</p>
    <p class="fs-15">Personal Information will be kept confidential and will be used for our causes, analysis, marketing, fund raising, strategic client analysis objectives and other internal business purposes only. We do not share, sell or rent Personal Information, your Personal Information shall be shared with our subscribers/advertisers and you shall be deemed to have given consent to the same.</p>
    <p class="fs-15"> We will share Personal Information only under one or more of the following circumstances: If we have your consent or deemed consent to do so - If we are compelled by law (including court orders) to do so.</p>
    <p class="fs-15">You acknowledge that you are disclosing Personal Information voluntarily. Prior to the completion of any registration process on our website or prior to availing of any services offered on our website if you wish not to disclose any Personal Information you may refrain from doing so; however if you don’t provide information that is requested it is possible that the registration process would be incomplete and/or you would not be able to avail of the our services.</p>
    <p class="fs-15">If you are our corporate customer or donor, it is possible that we have entered into a contract with you for non-disclosure of confidential information. This Policy shall not affect such a contract in any manner.</p>
    <p class="fs-15">If you have questions or concerns about these privacy policies; please send us an email at info@akinofoundation.org</p>
</div>
</div>








@include('common.footer')
@section('script')

@stop
@stop