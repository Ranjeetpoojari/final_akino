@extends('layouts.app')
@section('title','Donation Confirmation | Akino Foundation')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
@stop
@section('content')

@include('common.navigation')


  <main class="my-2">

<div class="container">
    <div class="row">
        <div class="w-80 m-auto my-3">
            <h1 class="text-center text-capitalize fw-bold">Your Donation Has Been Successfully Processed</h1>
            <hr class="text-warning border-3">
            <div class="my-3 shadow bg-white rounded-3 px-md-3 py-md-2 my-4">
                <div class="d-flex justify-content-between  ">
                    <p class="fw-medium px-2 my-2">Name</p> <p class="px-2">{{$donation->full_name}}</p>
                </div>
                <div class="d-flex justify-content-between  ">
                    <p class="fw-medium px-2 my-2">Mobile</p> <p class="px-2">{{$donation->mobile}}</p>
                </div>
                <div class="d-flex justify-content-between  ">
                    <p class="fw-medium px-2 my-2">Email</p> <p class="px-2">{{$donation->email}}</p>
                </div>
                <div class="d-flex justify-content-between  ">
                    <p class="fw-medium px-2 my-2">Transtion ID</p> <p class="px-2">{{$donation->transaction_id}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="fw-medium px-2 my-2">Transaction status</p> <p class="px-2">{{$donation->transaction_status}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="fw-medium px-2 my-2">Donation Amount</p> <p class="px-2">&#8377;&nbsp;{{$donation->donation_amount}}</p>
                </div>
            </div>
            <p class="text-center">The certificate will be sent to your registered email. To download your certificate, please <a href="/pdf/80g/certificate/{{encrypt($donation->id)}}">click</a> here.</p>
            <div class="d-flex justify-content-center">
                <a href="/" class="bg-yellow px-4 py-2 text-decoration-none rounded-pill text-white">Donate Again</a>
            </div>
        </div>
    </div>
</div>

 
</main>
    





@include('common.footer')


@section('script')
<script>
    const scroll = document.getElementById('scrollTop');

window.addEventListener('scroll', () => {
    // Get the scroll position
    const scrollPosition = window.scrollY || window.pageYOffset;

    if (scrollPosition > 800) {
        // When scrolled down enough, add the 'added-class' class to the box element
        scroll.classList.add('d-block');
    } else {
        // Otherwise, remove the 'added-class' class
        scroll.classList.remove('d-block');
    }
});

</script>
@stop
@stop
