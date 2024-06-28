@extends('layouts.app')
@section('title','Akino Foundation | ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
@stop
@section('content')

@include('common.navigation')

<main class="my-2">
<div class="container activity-detail">
    <div class="activity-detail-header">
      <h2 class="mt-5">{{$blog->title}}</h2>
     
        <p>Published on <span class="fw-bold text-yellow">{{$blog->blog_date}}</span></p>
        <ul class="d-flex flex-wrap">
            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook"></i>Share</a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i>Share</a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i>Share</a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i>Share</a></li>
            <li><a href="#" target="_blank"><i class="fa-regular fa-envelope"></i>Share</a></li>
        </ul>
    </div>

    <p></p>
  <div class="activity-banner my-5">
    <img src="{{url($blog->main_images)}}" alt="{{$blog->id}}" srcset="">
  </div>
  <div class="container" id="DisplayElement">
     {!!$blog->content!!} 
  </div>
  <div class="activity-banner my-5">
    <a href="https://www.youtube.com/watch?v=_UjJylKbRWQ" class="d-block"> <img src="{{url('/assets/img/ngo.gif')}}" alt="{{$activity->Main_image}}" srcset="" class="m-auto"></a>
   </div>
  
<section>
 
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
var decodedHTML = unescape(retrievedData);

document.getElementById("DisplayElement").innerHTML = decodedHTML;
</script>
@stop
@stop