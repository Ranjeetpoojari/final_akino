@extends('layouts.app')
@section('title','Akino Foundation | Our Volunteers ')
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
<div class="container-fluid ps-0 pr-0">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <!--<div class="carousal-over"></div>-->
            <img src="{{url('/assets/img/volenter3.webp')}}" class="d-block w-100 carousel-img image-aspect" alt="..." >
            <!--<div class="carousel-caption d-none d-md-block ">-->
            <!--    <h2 class="w-50 m-auto text-center">Unsung Heroes: <br><span class="text-yellow">The Power of Volunteerism in Our Communities</span></h2>-->
            
            <!--</div>-->
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
<div class="container-fluid  position-relative my-3 volenter-cont d-flex align-content-center justify-content-center">
    <div class="line align-self-center position-absolute z-0"></div>
    <div class="container d-flex align-items-center">
      <div class="owl-carousel owl-theme" id="volentercarousal">
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/alisha.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Alisha Wasim Shaikh</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/anita-patel.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Anita Patel</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/babita-omprakash.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Babita Omprakash Sahani</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/gorakh_chavan.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Gorakh Chavan</p>
            </div>
          </div>
        </div>
    
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/meera-bhave.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Meera Bhave</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/pinky.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Pinky Joshwa Khatun</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/pratikyadav.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Pratik Yadav</p>
            </div>
          </div>

        </div>
   
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/reena_patak.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Reena Pathak</p>
            </div>
          </div>

        </div>
        {{--  <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/roshan_bhave.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Nirmala Sing</p>
            </div>
          </div>

        </div>  --}}
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/sajaan-walmik.webp')}}" alt="" srcset="" class="vol-img">
         
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Sajan Walmiki</p>
            </div>
          </div>

        </div>
        
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/tridevdas.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Tridev Das</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/roshan_bhave.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Roshan Bhave</p>
            </div>
          </div>

        </div>

        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/yukta_nisar.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Yukta  
                Nisar</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/aarti_gautam_chakrnarayan.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Aarti ChakraNarayanr</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/kanchan_negi.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Kanchan negi</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/maithili_shedge.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Maithili Shedge</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/sakshi_salunkhe.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Sakshi Salunkhe</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/suresh_patel.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Suresh patel</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/dhanashree_gaikwad.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Dhanashree Gaikwad</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/megha_shinde.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Megha Shinde</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/roshni_singh.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Roshni Singh</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/shaikh_rafat.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Shaikh Rafat</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/aarti_chakranarayan.webp
                ')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Aarti ChakraNarayanr</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/ujwala_barve.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Ujwala barve</p>
            </div>
          </div>

        </div>
    
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/poonam_raju_wadtele.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Poonam Raju Wadtele</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/poonam_raju_wadtele.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Poonam Raju Wadtele</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/renuka_anjara.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Renuka Anjara</p>
            </div>
          </div>

        </div>
        </div>
    </div>
    </div>
</div>
{{--  <div class="container mt-5 video-container">
  <h2 class="lazyMonday text-yellow text-center fw-bold mb-2">Why Volunteer With AkinoFoundation</h2>
  <div class="youtube-con position-relative d-flex justify-content-center">
      <div class="youtube-card">
          <div class="icon-button justify-content-center align-content-center">
              <i class="fa-solid fa-play d-block m-auto fa-play-btn"></i>
          </div>
          <img src="{{url('/assets/img/akino_child_education5.jpg')}}" alt="" class="position-absolute rounded-2 youtube-poster">
          <iframe class="youtubevideo" src="https://www.youtube.com/embed/VuXC-d5IouM?si=IUm45o4Apyyx3i3s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-2 d-none"></iframe>
      </div>
      {{--  <iframe src="{{url('/assets/img/akino_child_education5.jpg')}}"></iframe>  --}}
      
      <!-- Add more youtube-card elements as needed -->

  {{--  </div>
 
</div>  --}} 
</div>
<div class="container my-5">
  <h2 class="fw-bold mb-4 text-capitalize">What our Donar  <span class="text-yellow">have to say</span></h2>
  <div class="owl-carousel owl-theme" id="volentercarousal3">
    
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/donar.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Krupangi</h5>
        <div>
          <p class="px-3 text-center">Supporting Akino Foundation has been a transformative experience. Witnessing the impact of my contribution on the lives of students and the community has been incredibly rewarding. The foundation's commitment to education and skill development is truly making a difference.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/manoj_sawan.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3"> Manoj sawan</h5>
        <div>
          <p class="px-3 text-center">I chose to donate to Akino Foundation because of their transparent approach and dedication to empowering individuals through education. The 80G certificate process was seamless, and knowing that my contribution is making a positive impact on the future of these students brings me immense satisfaction.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/Sanju_jagadankar.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Sanju Jagadankar</h5>
        <div>
          <p class="px-3 text-center"> Being a part of Akino Foundation's mission has been an inspiring journey. The foundation's commitment to providing quality education and fostering skill development aligns with my values. I've seen firsthand the positive changes my support has brought to the community, and I am proud to be associated with such a impactful organization.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/Sushobh_chavan.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Sushobh chavan</h5>
        <div>
          <p class="px-3 text-center"> The Akino Foundation exemplifies compassion, dedication, and resilience. Their holistic approach to social welfare, encompassing both animals and humans, makes them a beacon of hope in times of need. Also been focusing on a girl education and empowering them.</p>
        </div>
      </div>
      </div>

    </div>
  
</div>


<div class="container my-5">
  <h2 class="fw-bold mb-4 text-capitalize">Meet Our Visionaries:  <span class="text-yellow">Akino Foundation Board of Directors</span></h2>
  <div class="owl-carousel owl-theme" id="volentercarousal4">
    
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/pritash.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Pritesh Dilip Kamble </h5>
        <h6 class="text-capitalize fs- text-center mt-0 mb-1">Founder</h6>
        <div>
          <p class="px-3 text-center">
            After years of engaging closely with communities, witnessing the profound challenges faced by the underserved areas in education, women's issues, healthcare, and skill development, I was compelled to drive change. This led to the creation of our NGO, with a mission to collaborate extensively and foster societal transformation. Our endeavor is to bridge gaps, uplift communities, and ignite hope, empowering individuals to unlock their full potential. Join us in our journey towards making a lasting impact.After years of engaging closely with communities, witnessing the profound challenges faced by the underserved areas in education, women's issues, healthcare, and skill development, I was compelled to drive change. This led to the creation of our NGO, with a mission to collaborate extensively and foster societal transformation. Our endeavor is to bridge gaps, uplift communities, and ignite hope, empowering individuals to unlock their full potential. Join us in our journey towards making a lasting impact.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/pratikyadav.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Pratik Yadav</h5>
        <h6 class="text-capitalize text-center mt-0 mb-1">CSR Director</h6>
        <div>
          <p class="px-3 text-center">Embrace a life-changing chapter by aligning with Akin Foundation. Joining Akin isn't just a choice; it's a transformative commitment to making a real impact. Your journey with us is a fusion of purpose, passion, and the power to effect positive change. Elevate your life, join Akin Foundation, and become part of a community that believes in shaping a better world together.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/manta-omprakesh.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Mamta omprakash sahan</h5>
        <h6 class="text-capitalize  text-center mt-0 mb-1">Co Founder</h6>
        <div>
          <p class="px-3 text-center">Driven by firsthand experiences with the stark realities of marginalized communities, I felt a powerful urge to contribute to meaningful change. This journey of close community engagement laid the foundation for our NGO, born out of a commitment to address the critical issues of education, gender equality, healthcare, and vocational training. Our mission is rooted in the belief that through collective effort and strategic partnerships, we can catalyze societal transformation. We are dedicated to closing the gaps that divide us, elevating the spirit of communities, and kindling a flame of hope and empowerment. By enabling individuals to realize their inherent potential, we are not just dreaming of a better future; we are actively constructing it. Join our movement to make a profound difference.</p>
        </div>
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