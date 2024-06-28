@extends('layouts.app')
@section('title','Akino Foundation | Gallery ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/work.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/gallery.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery.min.css" rel="stylesheet">

@stop
@section('content')
@include('common.navigation')

<div class="text-center position-relative lazyMonday mt-5 d-flex justify-content-center">
    <div class="col-lg-4 col-md-7 col-10">
        <span class="position-relative fs-1 ">
            GALLERY
            <img src="{{url('/assets/img/hrt.png')}}" alt="" height="30" class="position-absolute gh1">
            <img src="{{url('/assets/img/e1.png')}}" alt="" height="24" class="position-absolute gh2">
        </span>
    </div>
</div>


<div class="container my-5 ">
    <div class=" d-md-flex flex-wrap justify-content-between">
        
        @if ($albums)
            @foreach ($albums as $item)
                <div class="col-lg-4 col-md-6 mt-2 rounded-4">
                    <a href="{{url('/gallery/'.encrypt($item->id))}} " class="nav-link m-1 bg-light-gray rounded-4 p-2">
                        <div class="image-container">
                            @foreach ($item->gallery as $gallery)
                            <img class="hover-image rounded-4 img-cover" src="{{url($gallery->image)}}" alt="akino 1">
                            @endforeach
                        </div>
                        <div class="row mx-0 mt-2 px-0" id="fade">
                            @foreach ($item->gallery as $gallery)
                            <div class="col-3 h-53 px-1 none" id="fade1">
                                <img src="{{url($gallery->image)}}" alt=""
                                    class="img-cover rounded-3 img-grayscale">
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="d-flex justify-content-between align-items-center px-2 pt-4 pb-2">
                            <div class="lh-1">
                                <p class="fs-18 m-0 p-0">{{$item->name}}</p>
                                <p class="fs-12 text-dark-gray m-1">{{\Carbon\Carbon::parse($item->date)->format("d M Y")}}</p>
                            </div>
                            <button class="bg-yellow rounded-pill px-3 border-0 py-1"><i
                                    class="fa-regular pe-1 fa-image"></i>{{$item->count}}+</button>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
       
    </div>


</div>


@include('common.footer')
@section('script')

@stop
@stop