@extends('layouts.app')
@section('title','Akino Foundation | ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
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
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('/assets/img/index-banner.png')}}" class="d-none d-sm-block w-100 aspect-ratio"
                    alt="...">
                <img src="{{url('/gallery/akino-logo.png')}}" alt="Akino-image"
                    class="d-block d-md-none w-100 aspect-ratio">
                <div class="position-absolute walpaper-text col-lg-4 col-md-6 col-sm-8 col-9">
                    <span class="bg-text">"Igniting Hope, <span class="lazyMonday text-yellow">Transforming <span
                                class="position-relative lazyMonday">
                                Lives:
                                <img src="{{url('/assets/img/e1.png')}}" height="35" alt="Akino-image"
                                    class="position-absolute icon-img1 d-none"></span></span>
                        Empowering India's Children for Tomorrow's <span
                            class="lazyMonday position-relative text-yellow">
                            Success! <img src="{{url('/assets/img/e2.png')}}" alt="Akino-image" height="35"
                                class="position-absolute icon-img2 d-none"></span></span>
                    <div class="">
                        <p class="d-none d-lg-block">NGO Description on Child Education, Handicapped, Women Empowerment,
                            Skill Development, Disaster – Flood, Accidents, Underprivileged, Animal Rescue.</p>
                        <button
                            class="bg-yellow rounded-pill px-4 fs-12 fw-500 border-0 py-sm-2 py-1 text-dark-gray mt-5"><a
                                href="{{url('/donate')}}" class="nav-link h-100 w-100">
                                <img src="{{url('/assets/img/heart.png')}}" alt="Akino-image"
                                    class="text-dark-gray mb-1 hurt-img"> Yes! I Want
                                To
                                Donate!</a></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/assets/img/index-banner.png')}}" class="d-none d-sm-block w-100 aspect-ratio"
                    alt="...">
                <img src="{{url('/gallery/akino-logo.png')}}" alt="Akino-image"
                    class="d-block d-md-none w-100 aspect-ratio">
                <div class="position-absolute walpaper-text col-lg-4 col-md-6 col-sm-8 col-9">
                    <span class="bg-text">"Igniting Hope, <span class="lazyMonday text-yellow">Transforming <span
                                class="position-relative lazyMonday">
                                Lives:
                                <img src="{{url('/assets/img/e1.png')}}" height="35" alt="Akino-image"
                                    class="position-absolute icon-img1 d-none"></span></span>
                        Empowering India's Children for Tomorrow's <span
                            class="lazyMonday position-relative text-yellow">
                            Success! <img src="{{url('/assets/img/e2.png')}}" alt="Akino-image" height="35"
                                class="position-absolute icon-img2 d-none"></span></span>
                    <div class="">
                        <p class="d-none d-lg-block">NGO Description on Child Education, Handicapped, Women Empowerment,
                            Skill Development, Disaster – Flood, Accidents, Underprivileged, Animal Rescue.</p>
                        <button
                            class="bg-yellow rounded-pill px-4 fs-12 fw-500 border-0 py-sm-2 py-1 text-dark-gray mt-5"><a
                                href="{{url('/donate')}}" class="nav-link h-100 w-100">
                                <img src="{{url('/assets/img/heart.png')}}" alt="Akino-image"
                                    class="text-dark-gray mb-1 hurt-img"> Yes! I Want
                                To
                                Donate!</a></button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/assets/img/index-banner.png')}}" class="d-none d-sm-block w-100 aspect-ratio"
                    alt="...">
                <img src="{{url('/gallery/akino-logo.png')}}" alt="Akino-image"
                    class="d-block d-md-none w-100 aspect-ratio">
                <div class="position-absolute walpaper-text col-lg-4 col-md-6 col-sm-8 col-9">
                    <span class="bg-text">"Igniting Hope, <span class="lazyMonday text-yellow">Transforming <span
                                class="position-relative lazyMonday">
                                Lives:
                                <img src="{{url('/assets/img/e1.png')}}" height="35" alt="Akino-image"
                                    class="position-absolute icon-img1 d-none"></span></span>
                        Empowering India's Children for Tomorrow's <span
                            class="lazyMonday position-relative text-yellow">
                            Success! <img src="{{url('/assets/img/e2.png')}}" alt="Akino-image" height="35"
                                class="position-absolute icon-img2 d-none"></span></span>
                    <div class="">
                        <p class="d-none d-lg-block">NGO Description on Child Education, Handicapped, Women Empowerment,
                            Skill Development, Disaster – Flood, Accidents, Underprivileged, Animal Rescue.</p>
                        <button
                            class="bg-yellow rounded-pill px-4 fs-12 fw-500 border-0 py-sm-2 py-1 text-dark-gray mt-5"><a
                                href="{{url('/donate')}}" class="nav-link h-100 w-100">
                                <img src="{{url('/assets/img/heart.png')}}" alt="Akino-image"
                                    class="text-dark-gray mb-1 hurt-img"> Yes! I Want
                                To
                                Donate!</a></button>
                    </div>
                </div>
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
    <div
        class="bg-dark-gray gray-div d-flex justify-content-center flex-lg-row flex-column gap-xl-5 gap-3 align-items-center position-static">
        <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
            data-aos-duration="500">
            <img src="{{url('/assets/img/s1.png')}}" alt="Akino-image" height="36" class="me-2">
            <p class=" text-white fs-12 text-capitalize">Give Hope, Create Impact. Support Our Mission with Your
                Donation</p>
        </div>

        <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
            data-aos-duration="500">
            <img src="{{url('/assets/img/s2.png')}}" alt="Akino-image" height="36" class="me-2">
            <p class=" text-white fs-12 text-capitalize">Your Donation Makes a Difference! Plus, Enjoy Tax Benefits by
                Giving.</p>
        </div>
        <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
            data-aos-duration="500">
            <img src="{{url('/assets/img/s3.png')}}" alt="Akino-image" height="36" class="me-2">
            <p class=" text-white fs-12 text-capitalize">Support Our Cause, Get Tax Benefits, and Change Lives Through
                Your Donation!
            </p>
        </div>
    </div>


    <div class="">
        <div class="px-xl-5 px-md-3 px-2 mt-5" data-aos="fade-up" data-aos-duration="500">
            <div class="d-flex align-items-center">
                <p class="line-before px-3 m-0"></p>
                <i class="px-3 fw-600 text-uppercase">fundraising for extreme needs, save tax upto 50% under section
                    8G</i>
            </div>
            <p class="fs-30 col-xl-7 col-md-9 col-12 ps-10 pt-2 ms-lg-5 fw-600">Join Our Campaign: Empowering Education,
                Transformation for Underprivileged Communities</p>
        </div>
        <div class=" px-xl-5 px-3 mt-5 pt-md-3 pt-5 ">
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
                            <h4 class="card-title fs-22 m-0 p-0"><a href="{{url('/campaign/'.encrypt($item->id))}}"
                                    style="text-decoration: none;
                                color: black;">{{$item->title}}</a></h4>
                            <p class="text-justify card-text fs-15 py-3 lh-1  m-0 text-dark-gray truncate">
                                {{$item->short_description}}</p>
                            <p class="pt-4"> <span class="fw-bold fs-20 text-dark">₹{{$item->raise_fund}} </span><span
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
                                <button class="btn btn-outline-dark rounded-pill py-1 px-3" style="width: 157px;
                                height: 34px;
                                overflow: hidden;">{{$item->category_detail->name}}</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif

            </div>
        </div>
    </div>

    <main class="mt-lg-5 pt-md-5">
        <div class="pl-10 d-flex justify-content-lg-between flex-lg-row flex-column align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-8 col-11 position-relative " data-aos="fade-up">
                <h2 class="text-capitalize fs-30 d-flex flex-wrap">
                    How do we help <span class="lazyMonday text-yellow position-relative d-none d-sm-block"> our Bharat
                        <img src="{{url('/assets/img/Line.png')}}" alt="Akino-image"
                            class="position-absolute  line-bottom start-0 end-0 d-none">
                    </span>
                    <span class="">today?</span>
                </h2>

                <p class="text-capitalize fs-14 mt-4">AKINO, representing the rising sun, actively uplifts
                    Bharat. Through child education and empowering women, it cultivates future leaders. With a
                    caring focus on the vulnerable, both young and animal, AKINO demonstrates compassion.
                    During crises, it extends crucial aid, aiding swift recovery. Skill development enhances
                    employability, strengthening Bharat's workforce. Education awareness fosters literacy and
                    informed citizenship. AKINO embodies the optimism of the rising sun, illuminating Bharat's
                    journey towards progress and hope.
                </p>
                <div class="position-absolute end-0 d-lg-block d-none">
                    <img src="{{url('/assets/img/aro.png')}}" width="123" alt="Akino-image" class="">
                </div>
            </div>
            <div class="col-lg-8 col-12 mt-lg-0 mt-5 px-2">
                <div class="owl-carousel owl-theme position-relative" id="card-carousel" data-aos="fade-up"
                    data-aos-duration="500">
                    @if($directCamp)
                    @foreach ($directCamp as $item)

                    <div class="item ms-1">
                        <div class="card card-item border-0 box-shadow border-bottom-yellow mobile-transition h-100"
                            style="width:320px;">
                            <div class="education-div">
                                <div class="education-img">
                                    <img src="{{url(\App\Models\Subcategory::find($item->campiagn_type)->banner)}}"
                                        class="card-img-top mt-4 img-contain"
                                        alt="{{\App\Models\Subcategory::find($item->campiagn_type)->name}}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-md-4 mt-1 mb-1 text-capitalize">
                                        {{\App\Models\Subcategory::find($item->campiagn_type)->name}}</h5>
                                    <a href="{{url('/campaign/'.encrypt($item->id))}}"
                                        class="mt-4 px-3 bg-yellow w-100 text-white card-btn d-flex align-items-center justify-content-between"><span
                                            class="float-start"><i class="fa-sharp fa-solid fa-heart pe-2"></i>Donate
                                        </span><i class="fa-solid fa-chevron-right text-white float-end"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>


        </div>
        <div class="text-center d-flex m-auto justify-content-center px-md-5 px-2 pt-lg-5  pb-lg-5" data-aos="fade-up"
            data-aos-duration="500">
            <div class="col-lg-8 col-md-10 col-12 fs-20 py-5">
                <p>At Akino, our mission is to cradle the forgotten dreams, transforming them into vibrant realities.
                    With
                    unwavering compassion, we embrace the underprivileged, nurturing their aspirations through
                    education,
                    empowerment, and unwavering support.
                </p>
                <p>Our hands reach out to lift those struck by disaster, weaving
                    threads of hope into shattered lives. Together, we paint stories of courage, resilience, and
                    triumph,
                    rekindling faith and igniting the spark of transformation.</p>
                <p class="text-capitalize fs-20">You too have a stake in this collective responsibility. Click <span
                        class="fw-bold"><a href="/donate" class="text-dark">here</a> </span> to contribute.</p>
            </div>

        </div>

        <div class="px-lg-5 px-3" data-aos="fade-up" data-aos-duration="500">
            <div class="d-flex align-items-center">
                <p class="line-before px-3 m-0"></p>
                <i class="px-3 fw-600 text-uppercase">OUR IMPACT</i>
            </div>
            <p class="fs-30 col-xl-7 col-md-10 col-12 ps-10 pt-2 ms-lg-5 fw-600 ">Creating lasting impact, one step at a
                time. Empowering lives,
                building a brighter future.</p>
        </div>


        <div class="container m-lg-auto pt-5 container-width">
            <div class="owl-carousel owl-theme m-auto d-lg-block d-none" id="owl-carousel">
                @if ($impact)
                @foreach ($impact as $item)
                <div class="item m-auto owl-items " data-aos="fade-up" data-aos-duration="500">
                    <a href="#" class="text-dark">
                        <div class="position-relative">
                            <div class="card-img">
                                <img src="{{url($item->image)}}" alt="Akino-image"
                                    class="w-100 h-100 img-shadow img-rounded img-cover">
                            </div>
                            <div class="position-absolute img-rounded bottom-0 w-100 h-100 img-shadow">
                                <div class="position-absolute bottom-0 px-4 mb-3 hover-hide">
                                    <p class="text-white m-0 fs-4">{{$item->name}}</p>
                                </div>
                                <div class="position-absolute mb-3 px-4 img-hover w-100 h-100">
                                    <div class="position-relative w-100 h-100 relative">
                                        <div class="text-center position-absolute h-100 w-100 top-12">
                                            <p class="fs-10 text-white w-100">{{$item->top_head}}</p>
                                            <div class="counter-container h-100 w-100 position-relative"
                                                data-ceil="{{$item->total_number}}">
                                                <span class="text-white mb-5 fw-bold fs-75 fw-600 counter"
                                                    data-ceil="{{$item->total_number}}">0</span>
                                            </div>
                                        </div>
                                        <div class="transition-top position-absolute w-100">
                                            <p class="text-white m-0 fs-4">{{$item->name}}</p>
                                            <!-- <p class="fs-10 text-white lh-1"></p> -->
                                            <div class="d-flex justify-content-between d-none">
                                                {{-- <button class="border-0 bg-transparent text-white">Read
                                                    More</button> --}}
                                                <button class="border-0 bg-transparent text-white"><i
                                                        class="fa-solid fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif



            </div>
            <div class="d-lg-none d-block" data-aos="fade-up" data-aos-duration="500">
                <div class="row">
                    @if ($impact)
                    @foreach ($impact as $item)
                    <div class="col-6 text-center">
                        <h1 class="text-yellow fs-50 fw-700">{{$item->total_number}}</h1>
                        <p class="fs-18 m-0 p-0">{{$item->name}}</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

        </div>
    </main>

    @if($activity)
    <section class="mt-5">


        <!-- stories & update -->
        <div class="bg-gray-height position-relative">
            <div class=" px-md-5 px-3 d-lg-flex align-items-center pt-md-5 pt-4">
                <div class="d-flex align-items-center">
                    <p class="line-before bg-white px-3 m-0"></p>
                    <i class="px-3 fw-600 text-white">STORIIES & UPDATE</i>
                </div>
            </div>


            <!-- carousel  -->
            <div class="mt-5 pt-md-5 pt-4">
            </div>

            <div class=" m-auto ">

                <ul class="px-md-0 px-3 owl-carousel owl-theme faculty-carousel" id="owl-carousel2">

                    @foreach ($activity->take(5) as $item)

                    <div class="mobile-review-client">
                        <a href="{{ url('/activitydetail', ['encryptedId' => encrypt($item->id)]) }}"
                            class="text-decoration-none">
                            <div class="mobile-img-client1 position-relative">
                                <div class="box">

                                    <img src="{{$item->Main_image}}" alt="{{$item->Main_image}}" srcset=""
                                        class="w-100 h-100 img-rounded img-cover">
                                </div>
                                <div class="text-btn">
                                    <div
                                        class="position-absolute bottom-0  d-lg-block d-flex justify-content-between align-items-center w-100">


                                        <div class="d-flex align-items-center  mt-2 justify-content-between mb-sm-3">
                                            <div
                                                class="position-absolute bottom-0 px-3  d-flex justify-content-between align-items-center card-overlay pt-3 position-absolute z-0">
                                            </div>
                                            <div class="index-activity-content position-relative">
                                                <p
                                                    class="fs-21 text-white lh-1 m-0 col-lg-12 col-8  ps-3 position-absolute d-block mb-5 z-5 truncate">
                                                    {{$item->title}}</p>
                                                <p
                                                    class="line-clamp-3 text-white fs-12 lh-1 col-9 d-lg-block d-none z-5 position-absolute mt-4 mb-3 ps-3">
                                                    {{$item->description}} </p>
                                            </div>
                                            <button
                                                class="btn btn-outline-light rounded-pill float-end btn-pill position-absolute z-5 end-0  fs-sm-12  d-block"
                                                style="margin-right: 10px;">Read
                                                more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach


                </ul>

            </div>
        </div>
    </section>
    @endif


    <!-- blog -->
    <section class="faq">


        <div class="px-lg-5 px-3 pt-md-5 pt-2 mt-20 my-5 container" id="faqAccordionExample">
            <div class="container-rounded mt-5 bg-light-yellow px-10 pb-5">
                <div class="position-relative d-flex justify-content-center align-items-center pt-5">
                    <div class="position-absolute ques d-flex justify-content-center align-items-center">
                        <img src="{url('/assets/img/ques.png')}}" alt="Akino-image" height="72" class="">
                    </div>
                </div>
                <div class="text-center pt-5">
                    <h3 class="mb-0">Frequently Ask Question</h3>
                    <p class="fs-15">Have another question ? Email us at <span class=""><a
                                href="mailto:info@akinofoundation.org"
                                class="text-dark ">info@akinofoundation.org</a></span> </p>
                </div>
                <div class="px-lg-5  py-5">

                    @foreach ($faqs as $faq)
                    <div class="accordion-item bg-light-yellow">
                        <button
                            class="accordion px-0 fs-4 fw-500 d-flex justify-content-between align-items-center lh-2"
                            type="button" data-bs-toggle="collapse" data-bs-target="#{{$faq->position}}"
                            aria-expanded="false" aria-controls="collapseOne">
                            {{$faq->question}}</button>
                        <div class="px-0 pt-2 border-bottom border-1 border-secondary accordion-collapse collapse"
                            id="{{$faq->position}}" data-bs-parent="#faqAccordionExample">
                            <div class="accordion-body">
                                <p>{{$faq->answer}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="text-center d-flex justify-content-center align-items-center flex-column mt-lg-5 pt-md-5 pt-2">
            <div class=" col-xl-6 col-lg-8 col-12 pt-5" data-aos="fade-up" data-aos-duration="500">
                <h2>"Elevating Women, Nurturing Young Minds, Caring for Animals: Rebuilding Lives with
                    Hope, Disaster Relief, and Empowerment for the Underprivileged and Orphaned Children"</h4>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-9 col-11 pt-4" data-aos="fade-up" data-aos-duration="500">
                <p class="fs-15">
                    Akino adopts a comprehensive approach, championing womens empowerment, child
                    education (with a special focus on underprivileged and orphaned children), animal care and
                    rescue, disaster relief, and skill development. We interweave threads of compassion, nurturing
                    young minds and fostering gender equality. In times of crises, we stand as a beacon of hope,
                    supporting individuals to rebuild their lives with dignity and resilience. Our commitment extends
                    to caring for animals, ensuring a brighter, more resilient future for all.</p>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-9 col-11 mt-5 pt-3" data-aos="fade-up" data-aos-duration="500">
                <img src="{{url('/assets/img/Frame.png')}}" alt="Akino-image" class="img-fluid">
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