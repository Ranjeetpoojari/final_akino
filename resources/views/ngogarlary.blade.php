@extends('layouts.app')
@section('title','Akino Foundation | Gallery ')

@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/work.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/gallery.css')}}">


@stop
@section('content')
@include('common.navigation')

<h1 class="text-center position-relative lazyMonday mt-5">
    <span class="position-relative fw-600">
        {{$album->name}}
        <img src="{{url('/assets/img/hrt.png')}}" alt="" height="30" class="position-absolute gh1">
        <img src="{{url('/assets/img/e1.png')}}" alt="" height="24" class="position-absolute gh2">

    </span>
</h1>

<div class="container my-5 ">
    <div class="row">
        @php
        $counter = 1; // Initialize a counter variable
    @endphp
        @foreach ($album->gallery as $item)
            <div class="col-md-4 mt-4">
                <a data-fslightbox href="#{{ $album->name }}{{ $counter }}" class="">
                    <div class="swiper-slide h-auto">
                        <img id="{{ $album->name }}{{ $counter }}" src="{{url($item->image)}}" alt="{{$album->name}}" class="img-cover rounded-4">
                    </div>
                </a>
            </div>
            @php
            $counter++; 
        @endphp
        @endforeach
      
     
    </div>
</div>


@include('common.footer')
@section('script')

@stop
@stop