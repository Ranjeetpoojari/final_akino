 @extends('layouts.app')
@section('title','Akino Foundation | ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/index.css')}}">
@stop
@section('content')

@include('common.navigation')

<div class="tax-fixed">
    <div class="tax-box w-100 d-flex text-center align-content-center justify-content-center bg-yellow ">
        <h3 class="text-uppercase p-3 text-white fw-600">
            save tax upto 50%
        </h3>
    </div>
</div>
<div class="position-sticky top-0 taxbenifits bg-yellow tax-hide" onscroll="scrollTop()" id="scrollTop">
    <h1 class="text-center text-white p-2">Save tax upto 50%</h1>
</div>
<div class="walpaper-img position-relative" data-aos="fade-up" data-aos-duration="2000">

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner index_banner">
            <div class="carousel-item active ">
             <img src="{{url('/assets/img/indexbanner/indexbanner.webp')}}" alt="" srcset="" class="w-100 img-content">
            </div>
            <div class="carousel-item">
                <img src="{{url('/assets/img/indexbanner/indexbanner.webp')}}" alt="" srcset="" class="w-100 img-content">
             
            </div>
            <div class="carousel-item">
                <img src="{{url('/assets/img/indexbanner/indexbanner.webp')}}" alt="" srcset="" class="w-100 img-fluid">
                
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid ">
        <div class="row " >
            <img src="{{url('/assets/img/indexbanner/sectionpng.webp')}}" alt="" srcset=""  class=" z-5 px-0 w-100">
        </div>
    </div>
 
    
    <div>
        <div class=" px-md-3 px-2 mt-5" data-aos="fade-up" data-aos-duration="500">
            <div class="d-flex align-items-center">
                {{-- <p class="line-before px-3 m-0"></p> --}}
                {{-- <i class="px-3 fw-600 text-uppercase">fundraising for extreme needs, save tax upto 50% under section
                    8G</i> --}}
            </div>
            <p class="fs-30 col-xl-7 col-md-10 col-12 ps-2 pt-2  fw-600 lh-sm">How Do We Help Our Bharat Today?</p>
            <p class="fs-12 ps-2 col-xl-8 mb-70">AKINO, Representing The Rising Sun, Actively Uplifts Bharat. Through Child Education And Empowering Women, It Cultivates Future Leaders. With A Caring Focus On The Vulnerable, Both Young And Animal, AKINO Demonstrates Compassion.</p>
            <div class="owl-carousel owl-theme faculty-carousel" id="campaigninactive">
                @if(isset($directCamp) )
                @foreach ($directCamp as $item)
                    <div class="inactive_campaign position-relative m-auto">
                        @php
                            $subcategory = \App\Models\Subcategory::find($item->campiagn_type);
                        @endphp
                        @if($subcategory)
                            <img src="{{url($subcategory->banner)}}" alt="{{$subcategory->name}}" class="position-absolute z-1">
                            <div class="position-absolute bottom-0 end-0 z-3 rounded-4 h-50 w-100">
                                <h5 class="text-white fw-medium fs-20 mt-5 mb-4 ps-3">{{$subcategory->name}}</h5>
                                <div class="inactive_content mb-2">
                                    <p class="fs-14 text-white ps-3">{{$item->short_description}}{{$item->id}}  </p>
                                </div>
                                <a href="{{url('/campaign/'.encrypt($item->id))}}" class="text-white fs-12 ps-3">Read more</a>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
            
            
            
       
              
           
            
            </div>
        </div>
        <div class="mt-5 mb-3">
            <div
             class=" gray-div d-flex justify-content-center flex-lg-row flex-column gap-xl-5 gap-3 align-items-center position-static">
             <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
                 data-aos-duration="500">
                 <img src="{{url('/assets/img/s1.png')}}" alt="Akino-image" height="36" class="me-2">
                 <p class=" fs-12 text-capitalize">Give Hope, Create Impact. Support Our Mission with Your
                     Donation</p>
             </div>
     
             <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
                 data-aos-duration="500">
                 <img src="{{url('/assets/img/s2.png')}}" alt="Akino-image" height="36" class="me-2">
                 <p class=" fs-12 text-capitalize">Your Donation Makes a Difference! Plus, Enjoy Tax Benefits by
                     Giving.</p>
             </div>
             <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
                 data-aos-duration="500">
                 <img src="{{url('/assets/img/s3.png')}}" alt="Akino-image" height="36" class="me-2">
                 <p class=" fs-12 text-capitalize">Support Our Cause, Get Tax Benefits, and Change Lives Through
                     Your Donation!
                 </p>
             </div>
         </div>
     </div>
    
     <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 ps-5">
                    <p class="mt-5"> <span class="fw-bold">At Akino</span>, our mission is to cradle the forgotten dreams, transforming them into vibrant realities. With unwavering compassion, we embrace the underprivileged, nurturing their aspirations through education, empowerment, and unwavering support.</p>
                    <p>Our hands reach out to lift those struck by disaster, weaving threads of hope into shattered lives. Together, we paint stories of courage, resilience, and triumph, rekindling faith and igniting the spark of transformation.</p>
                    <p> You Too Have A Stake In This Collective Responsibility. Click Here To Contribute.</p>
                </div>
            <div class="col-lg-7 px-0">
                <img src="{{url('/assets/img/indexbanner/akinophoto.webp')}}" alt="" srcset="" class="img-fluid">
            </div>
            </div>
        </div>
     </section>
        <div class="container-fluid px-xl-5 px-3 my-5 pt-md-3 pt-5 ">
            <p class="fs-12 px-4 mb-2">Fundraising for Extreme needs</p>
            <div class="col-lg-8 px-4 mb-4">
              <h3 class="">Creating lasting impact, one step at a time. Empowering lives, building a brighter future.</h3>
            </div>
            <div class="owl-carousel owl-theme" id="card-carousel2" data-aos="fade-up" data-aos-duration="500">
                @if ($campaigns)
                @foreach ($campaigns as $item)

                <div class="item " data-aos="fade-up" data-aos-duration="500">
                    <div class="card p-3 img-rounded campaign-card">
                        <div class="h-10">
                            <a href="{{url('/campaign/'.encrypt($item->id))}}"><img src="{{url($item->main_image)}}"
                                    class="card-img-top img-cover img-rounded" alt="{{$item->title}}"></a>
                        </div>
                        <div class="card-body px-0">
                            <h4 class="card-title fs-22 m-0 p-0 heading-content"><a href="{{url('/campaign/'.encrypt($item->id))}}"
                                    class="text-decoration-none text-dark text-dark" >{{$item->title}}</a></h4>
                            {{-- <p class="text-justify card-text fs-15 py-3 lh-1  m-0 text-dark-gray truncate">
                                {{$item->short_description}}</p> --}}
                            <p class="pt-4"> <span class="fw-bold fs-18  text-dark">₹{{$item->raise_fund}} </span><span
                                    class="text-dark-gray ps-2">Raised of ₹
                                    {{$item->fund_amount}} goal</span></p>
                            <div class="range my-3">
                                <div class="range-width" style="width:{{$item->fund_percentage}}%"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{url('/assets/img/hurt.png')}}" alt="Akino-image" class="hurt me-2">
                                    <p class="span text-dark-gray fs-18"></p>{{$item->count_total}} supporter's</p>
                                </div>
                                <button class="btn bg-warning-subtle text-warning-emphasis fw-medium rounded-pill py-1 px-3" style="width: 157px;
                                height: 34px;
                                overflow: hidden;">Donate Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif

            </div>
        </div>

  
    <section>
        <div class="container-fluid">
          
            <div class="row d-none d-lg-block">
                <div class="aspect-ratio px-0 w-100 position-relative ">
                    <iframe class="w-100 h-100 position-absolute z-1"  src="https://www.youtube.com/embed/qvJNmL735QQ?autoplay=1&loop=1&playlist=qvJNmL735QQ&mute=1" frameborder="0" allowfullscreen  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay ></iframe>
               <div class="w-100 h-100 position-absolute z-3 row">
                {{-- <div class="col border border-white h-100 position-relative px-0 conter-container counter-container "
                data-ceil="789">
                    <div class="position-absolute w-100  align-items-end counter-content">
                        <div class="h-75 w-100 d-flex justify-content-center flex-column">
                            <img src="{{url('/assets/img/indexbanner/counter-img.webp')}}" alt="" srcset="" class=" m-auto">
                            <h4 class="text-center text-white mb-0">Health care</h4>
                            <p class="text-center fs-1 fw-bold text-white mb-0">254K+</p>
                            <p class="para text-center text-white fs-14 px-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed similique ea doloribus at possimus laboriosam autem suscipit incidunt quasi enim veniam tempore veritatis impedit nulla, fuga quibusdam non est. Quibusdam.</p>
                            <a href="#" class="text-decoration-none  py-2 w-75 text-center rounded-pill  m-auto text-white glass-effect fs-16 mt-5 mb-3">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col border border-white h-100 position-relative px-0 conter-container counter-container "
                data-ceil="789">
                    <div class="position-absolute w-100  align-items-end counter-content">
                        <div class="h-75 w-100 d-flex justify-content-center flex-column">
                            <img src="{{url('/assets/img/indexbanner/counter-img.webp')}}" alt="" srcset="" class=" m-auto">
                            <h4 class="text-center text-white mb-0">Health care</h4>
                            <p class="text-center fs-1 fw-bold text-white mb-0">254K+</p>
                            <p class="para text-center text-white fs-14 px-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed similique ea doloribus at possimus laboriosam autem suscipit incidunt quasi enim veniam tempore veritatis impedit nulla, fuga quibusdam non est. Quibusdam.</p>
                            <a href="#" class="text-decoration-none  py-2 w-75 text-center rounded-pill  m-auto text-white glass-effect fs-16 mt-5 mb-3">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col border border-white h-100 position-relative px-0 conter-container counter-container "
                data-ceil="789">
                    <div class="position-absolute w-100  align-items-end counter-content">
                        <div class="h-75 w-100 d-flex justify-content-center flex-column">
                            <img src="{{url('/assets/img/indexbanner/counter-img.webp')}}" alt="" srcset="" class=" m-auto">
                            <h4 class="text-center text-white mb-0">Health care</h4>
                            <p class="text-center fs-1 fw-bold text-white mb-0"> <span class="t counter"
                                data-ceil="90">0</span>K+</p>
                            <p class="para text-center text-white fs-14 px-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed similique ea doloribus at possimus laboriosam autem suscipit incidunt quasi enim veniam tempore veritatis impedit nulla, fuga quibusdam non est. Quibusdam.</p>
                            <a href="#" class="text-decoration-none  py-2 w-75 text-center rounded-pill  m-auto text-white glass-effect fs-16 mt-5 mb-3">Know More</a>
                        </div>
                    </div>
                </div> --}}
                @if ($impact)
                @foreach ($impact as $item)
                <div class="col border border-white h-100 position-relative px-0 conter-container counter-container "
                data-ceil="{{$item->total_number}}">
               <div class="position-absolute w-100 h-100  d-flex justify-content-center  align-items-end z-2"><p class="text-white mb-5 fs-20">{{$item->name}}</p></div>
                    <div class="position-absolute w-100  align-items-end counter-content z-3">
                        <div class="h-75 w-100 d-flex justify-content-center flex-column">
                            <img src="{{url('/assets/img/indexbanner/counter-img.webp')}}" alt="" srcset="" class=" m-auto">
                            <h4 class="text-center text-white mb-0">{{$item->name}}</h4>
                            <p class="text-center fs-1 fw-bold text-white mb-0">
                                <span class="counter"
                                    data-ceil="{{$item->total_number}}">0</span>
                            K+</p>
                            <p class="para text-center text-white fs-14 px-3 mb-5">{{$item->description}}</p>
                            <a href="#" class="text-decoration-none  py-2 w-75 text-center rounded-pill  m-auto text-white glass-effect fs-16 mt-5 mb-3">Know More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
               </div>
             </div>
            </div>
            <div class="d-block d-lg-none" data-aos="fade-up" data-aos-duration="500">
                <div class="row">
                    @if ($impact)
                    @foreach ($impact as $item)
                    <div class="col-6 text-center conter-container counter-container"  data-ceil="{{$item->total_number}}">
                        <h1 class="text-yellow fs-50 counter"
                        data-ceil="{{$item->total_number}}">0</h1>
                        <p class="fs-18 m-0 p-0">{{$item->name}}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        
        </div>
    </section>
    <div class="container my-0 bg-danger">
        <div class="row">
            <div class="col-6 text-center">
              
            </div>
        </div>
    </div>

     @if($activity)
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 position-relative px-0 blog-container">
                    <div class="active-container position-absolute z-1 w-100">

                    </div>
                    <div class="position-absolute z-2 my-5 w-100 overflow-hidden">
                        <p class="fs-12 px-4">Blogs And News</p>
                      <div class="col-lg-8 px-4 mb-4">
                        <h3 class="">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing</h3>
                      </div>
                        <div class="owl-carousel owl-theme" id="blogslider" data-aos="fade-up" data-aos-duration="500">
                            @foreach ($activity as $item)
                            <div class="blog-card" >
                                <div class="row bg-orange">
                                    <div class="col-lg-6 px-0"><img src="{{url('/assets/img/indexbanner/blogimg1.webp')}}" alt="" srcset="" class="img-cover w-100"></div>
                                    <div class="col-lg-6 py-4 px-5 h-320">
                                        <h4 class="text-white fs-20 heading-content">{{$item->title}},</h4>
                                        <p class="fs-14 text-white fw-light mt-3 para2">{{$item->description}}</p>
                                        <div class="d-flex H-75">
    
                                            <a href="{{ url('/activitydetail', ['encryptedId' => encrypt($item->id)]) }}" class="text-white glass-effect text-decoration-none py-2 px-5 rounded-pill align-self-end"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                               </div>
                            @endforeach
                           
                    
                        </div>
                        {{-- <div class="w-100 overflow-hidden"> --}}

                        
                        {{-- <div class="owl-carousel owl-theme faculty-carousel" id="campaigninactive">
                            <div class="inactive_campaign position-relative m-auto">
                              <img src="{{url('/assets/img/indexbanner/childeren.webp')}}" alt="" srcset="" class="position-absolute z-1">
                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Child Education</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/doctor.webp')}}" alt="" srcset="">
                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Health Care</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/skill.webp')}}" alt="" srcset="">
                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Skill Development</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/women.webp')}}" alt="" srcset="">
                                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Women Empowerment</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/women.webp')}}" alt="" srcset="">
                            </div>
                          
                          </div>
                    </div> --}}
                {{-- </div> --}}
                 </div>
            </div>
        </div>
    </section>
 @endif 
    <section class="my-5">
        <div class="container-fluid mt-3">
            <div class="row">
            <div class="col-md-8 col-lg-7 m-auto px-0">
                <img src="{{url('/assets/img/indexbanner/quote-right-solid.webp')}}" alt="" srcset="" class="d-block m-auto img-cover reponsive-img">
               <h5 class="fs-1 balibong text-center">Healing Hands, Open Hearts: Join Akino Foundation in Building a Brighter Tomorrow.</h5>
            </div>
            <img src="{{url('/assets/img/indexbanner/flowergirls.webp')}}" alt="" class="w-100 img-cover">
            </div>
        
        </div>
    </section>
    
   

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