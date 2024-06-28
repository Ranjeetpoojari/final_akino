@extends('layouts.app')
@section('title','Akino Foundation | Activity Detail ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
@stop
@section('content')

@include('common.navigation')
<div class="position-sticky top-0 taxbenifits bg-yellow tax-hide" onscroll="scrollTop()" id="scrollTop">
    <h1 class="text-center text-white p-2">Save tax upto 50%</h1>
</div>
<main class="my-2">
    <div class="container-fluid p-0">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
  
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
               
                <img src="{{url('/assets/img/indexbanner/activity (2).webp')}}" class="d-block w-100 carousel-img image-aspect" alt="..." >
           
              </div>
            
             
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
    
    </div>
    
    <section class="m-0 p-0">
        <div class="container mx-auto mb-5 pb-5">
        
            <h3 class="text-center pt-5 py-3">Recent Activity</h3>
            <div class="row">
                <div class="col-12 col-sm-7 mb-1 custom-select">

                    <form action="" method="get" class="d-flex border rounded-pill border-1 ps-2 ">
                      @csrf
                      <input type="text" name="search" id="search" placeholder="Search..." required class="form-control border-0">
                         
                      <button type="submit" class="border-0 px-3 rounded-pill bg-yellow shadow-none  text-light">Filter</button>
                  </form>
                </div>
             </div>
            </section>
            
   
             <section>
              <div class="container">
                <div class="row activites">
                  @if($activity)
                    <ul class="d-flex  flex-wrap justify-content-center">
                      @foreach ($activity as $item)
                        <li class="m-3">
                          <a href="{{ url('/activitydetail', ['encryptedId' => encrypt($item->id)]) }}"  target="_blank">
                          <div class="activity-card shadow-sm rounded-2">
                            <div class="activity-img">
                              <img src="{{$item->Main_image}}" alt="{{$item->Main_image}}" srcset="">
                            </div>
                            <div class="activity-contain">
                              <div class="activity-herader my-2">
                                <h5 class="ps-2 text-capitalize"> {{$item->title}}</h5>
                              </div>
                              <p class="text-capitalize ps-3 mb-1">Published on <span class="text-yellow fw-600">{{$item->activity_date}}</span></p>
                              <div class="activity-para">
                                <p class="ps-2 text-capitalize">{{$item->description}}</p>
                              </div>
                            </div>
                            <button class="border-0 px-4 py-1 rounded-pill bg-yellow text-white ms-3 mt-2">Read more</button>
                          </div>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>
            </section>

    
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