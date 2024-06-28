@extends('layouts.app')
@section('title','Akino Foundation | ')
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
            <h1 class="text-center text-capitalize fw-bold">Your Donation Didn't go through. but your goodwill did </h1>
<hr class="text-warning border-3">
<p class="my-2">Thank you for your consideration and generosity to ensure happier childhoods for India's children. However, we regret to inform you that your donation was unsuccessful. Please write to us at writetous@akinofoundationmail.org with the details of the issue along with the payment gateway used. A screenshot of the error will help us resolve the matter sooner. An email is sent to you with the transaction details for your reference.</p>
<div class="my-3 shadow bg-white rounded-3 px-md-3 py-md-2 my-4">
<div class="d-flex justify-content-between  ">
<p class="fw-medium px-2 my-2">Transtion ID</p> <p class="px-2">12344</p>

</div>
<div class="d-flex justify-content-between">
<p class="fw-medium px-2 my-2">Transaction Code</p> <p class="px-2">12344</p>

</div>
<div class="d-flex justify-content-between">
<p class="fw-medium px-2 my-2">Donation Amount</p> <p class="px-2">&#8377;&nbsp;12344</p>

</div>
</div>
<p class="text-center">In the meantime, you can reattempt the transaction by clicking on the link below:</p>

<div class="d-flex justify-content-center">
<a href="#" class="bg-yellow px-4 py-2 text-decoration-none rounded-pill text-white">Retry Again</a>
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