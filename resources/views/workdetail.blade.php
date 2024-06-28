@extends('layouts.app')
@section('title','Akino Foundation | Our Programs  ')

@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/work.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/gallery.css')}}">


@stop
@section('content')
@include('common.navigation')
<div class="position-relative">
    <div class="work-wallpaper position-relative">
       
        <img src="{{$work->main_image}}" alt="{{$work->main_image}}" class="img-cover ">
    </div>
 
</div>
<div class=" position-sticky top-0" style="z-index: 100;">
    <div class="d-flex p-0 m-0">
        <div class="bg-gray d-flex align-items-center p-0 m-0 w-100 px-lg-5 px-md-2 px-2 h-93">
            <marquee>
                <p class="fs-20 text-white m-0">{{$work->slogan}}</p>
            </marquee>
        </div>
        <div class="bg-yellow m-0 btn-width">
            <a href="{{url('/donate')}}">
                <button class="bg-yellow h-100 w-100 border-0 fw-600">
                    <img src="{{url('/assets/img/heart.png')}}" alt="" width="30" class="">DONATE NOW
                </button></a>
        </div>
    </div>
</div>

<main class=" pt-md-5 pt-3">
    <div class="d-flex align-items-center px-lg-5 px-3 flex-lg-wrap flex-wrap-reverse">
        <div class="col-lg-8 col-12 pb-lg-5 pb-3 pe-md-3 ">
      {!!$work->description!!}
        </div>
        <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="500">
            <div class="text-center">
                <p class=" fs-20 fw-600">TOTAL</p>
                <p class="fw-700 fs-70"> {{$work->total}} +</p>
                <p class="text-yellow fs-25 fw-600 text-uppercase"> {{$work->title}}</p>
            </div>
        </div>
    </div>
   
    {{-- <div class="px-lg-5 px-3 pt-lg-5 pt-lg-3">
        <div class="col-xl-8 col-lg-10 col-12">
            <div class="d-flex align-items-center mt-lg-5 mt-3" data-aos="fade-up" data-aos-duration="500">
                <p class="line-before px-3 m-0"></p>
                <i class="px-3 fw-600 text-uppercase">OUR PROGRAM</i>

            </div>
            <p class="fs-30 ps-10 pt-3 ms-lg-5 fw-600 " data-aos="fade-up" data-aos-duration="500">AKINO's
                Integrated Initiatives: Strengthening Communities,
                Inspiring Progress, and Forging a Flood-Resistant Tomorrow."
            </p>


            <div class="d-flex align-items-center justify-content-center flex-md-row flex-column ps-10 ms-lg-4 mt-5"
                data-aos="fade-up" data-aos-duration="500">
                <div class="card border-0 program-card mx-2">
                    <div class="program-img">
                        <img src="{{url('/assets/img/gallery/akino_child_education5 (2).jpg')}}" class="card-img-top img-cover img-rounded" alt="akino">
                    </div>
                    <div class="card-body px-1">
                        <!-- <p class="text-dark fs-20 text-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p> -->
                        {{-- <a href="#" class="nav-link">Read-More <i class="fa-solid fa-arrow-right float-end"></i></a> --}}
                    {{-- </div>
                </div>
                <div class="card border-0 program-card mx-2">
                    <div class="program-img">
                        <img src="{{url('/assets/img/gallery/akino_child_education9.jpg')}}"
                            class="card-img-top img-cover img-rounded" alt="akino">
                    </div>
                    <div class="card-body px-1">
                        <!-- <p class="text-dark fs-20 text-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        </p> -->
                        {{-- <a href="#" class="nav-link">Read-More <i class="fa-solid fa-arrow-right float-end"></i></a> --}}
                    {{-- </div>
                </div>
            </div>
        </div>
    </div> --}} 
    @if($gallery)
    <div class="container my-5 ">
        <div class="row">
            @php
            $counter = 1; // Initialize a counter variable
        @endphp
             @foreach ($gallery as $item)
             <div class=" col-md-6 col-lg-4 mt-4 galler-swiper">
                 <a data-fslightbox href="#{{$work->title}}{{ $counter }}" class="">
                     <div class="swiper-slide ">
                         <img id="{{$work->title}}{{ $counter }}" src="{{url($item->image)}}" alt="{{$work->title}}" class="img-cover rounded-4">
                     </div>
                 </a>
             </div>
             @php
             $counter++; 
         @endphp
         @endforeach
          
         
        </div>
    </div>
    @endif
</main>

{{-- <section class="mt-5 pt-lg-5 pt-3">
    <div class="d-lg-flex justify-content-between px-lg-4 px-3">
        <div class="col-xl-5 col-lg-4 col-12 d-flex flex-column mt-lg-5 pt-lg-5 align-items-center">
            <div class="col-xl-9 col-lg-11 col-12 position-sticky top-50">
                <h1 class="fs-30 fw-600">STORIES OF CHANGE</h1>
                <p class="fs-15"> AKINO's impact reverberates through countless stories of change. We've seen
                    flood-prone communities transform into resilient havens, equipped with knowledge and tools to
                    safeguard
                    their homes. Families once devastated by floods now stand empowered, thanks to our disaster
                    preparedness programs. Our relief efforts have saved lives and brought hope to the displaced.
                    The
                    flood-resistant infrastructure we've built safeguards against future disasters. Children,
                    through our
                    education initiatives, dream of brighter futures. These stories reflect the enduring change
                    AKINO
                    fosters, turning adversity into opportunity, one community at a time.</p>
            </div>
        </div>
        <div class="col-xl-7 col-lg-8 col-12 d-flex flex-column justify-content-center align-items-center">

            @if ($testimonial)
                @foreach ($testimonial as $item)
                    <div class="border-bottom-yellow d-flex flex-md-row flex-column bg-light-blue justify-content-center flex-md-row flex-column align-items-center col-lg-10 p-3 mt-md-5 card-relative"
                    data-aos="fade-up" data-aos-duration="500">
                        <div class="col-md-5 pe-xxl-4 pe-2 img-absolute">
                            <img src="{{url($item->image)}}" class="img-cover rounded-4 " alt="{{$item->name}} ">
                        </div>

                        <div class="col-md-7 px-xl-2 px-1 py-1 card-titles">
                            <h5 class="fs-3 mt-0 pt-0 lh-1">{{$item->name}} </h5>
                            <p class="fs-15 m-0 testimonal-content">{{$item->message}}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif

        

        </div>
    </div>
    </div>

</section> --}}
<section>
    <div class="bg-yellow d-flex justify-content-between h-230 align-items-center mt-5 ps-xxl-5 pt-md-1 pt-4 p"
        data-aos="fade-up" data-aos-duration="500">
        <div class=" d-flex ps-xxl-5 align-items-center flex-md-nowrap flex-wrap-reverse px-md-0 px-3">
            <div class="col-md-3 col-12 d-flex justify-content-center ">
                <img src="{{url('assets/img/right_to_education.png')}}" alt="" height="" class="child-img ps-xl-5 ms-xxl-5">
            </div>
            <div class="col-md-9 col-12 d-flex align-items-center flex-md-nowrap flex-wrap px-md-1 px-3">
                <div class="col-md-8 col-12">
                    <h5 class="">Unlocking Potential:</h5>
                    <p class="fs-30 fw-600">
                      {{$work->slogan}}
                    </p>
                </div>
                <div class="text-center pe-xl-5 px-lg-3 px-1 fw-600 col-md-4 col-12">
                    <a href="{{url('/donate')}}" class="nav-link"> <button
                            class="bg-yellow rounded-pill border-4 border-dark border py-lg-3 py-2 fs-20 fw-600 w-100 ">DONATE</button></a>
                </div>
            </div>
        </div>

    </div>

</section>

@include('common.footer')
@section('script')

@stop
@stop