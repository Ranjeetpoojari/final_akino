@extends('layouts.app')
@section('title','Akino Foundation | About us')

@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/about.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">


@stop
@section('content')
@include('common.navigation')
<div class="herosection walpaper-img">
      <img src="{{url('/assets/img/indexbanner/about (2).webp')}}" alt="akino" class="img-cover" style="height: auto!important">
</div>
<div class="section2 mt-5 p-1 ">

    <div class="container px-lg-5 px-3">
        <div class="row px-lg-5">
            <div class="col-md-12 px-lg-5">
                <div class="mt-5">
                    <h1 class="fw-600 fs-40">About Us</h1>
                </div>
                <div class="">
                    <p class="fs-20 text-justify">For the past eight to nine years, AKINO has illuminated the path of hope and resilience, much like the rising sun 
                        after a dark night. Our name, borrowed from the Japanese term meaning "rising sun," symbolizes our 
                        unwavering commitment to bringing light and progress to communities in need.</p>
                    <p class="fs-20 text-justify">In this span of time, AKINO has evolved into a beacon of change and empowerment. We have tirelessly strived 
                        to create flood-resilient communities and mitigate the impact of flooding, a challenge that has plagued many 
                        regions around the world. </p>
                    <p class="fs-20 text-justify">Our journey has been marked by innovation, compassion, and unwavering dedication. We have conducted 
                        disaster preparedness training, swiftly responded to emergencies with relief aid, and undertaken sustainable 
                        infrastructure projects to reduce flood risks. Our education initiatives have empowered the younger generation 
                        with knowledge and skills, igniting their potential.</p>
                    <p class="fs-20 text-justify">AKINO's name embodies our mission - to bring the dawn of hope and transformation to communities in need. 
                        With every passing year, we continue to rise like the sun, dispelling darkness and ushering in a brighter, floodresistant future for all. Our journey has only just begun, and we invite you to join us in this ongoing quest for 
                        change, resilience, and progress. Together, we can light up the lives of countless individuals and communities, 
                        ensuring a future that shines as bright as the rising sun.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5 px-lg-5 px-3">
    <div class="container px-lg-5">
        <div class="row PX-5 d-flex justify-content-center">
            <div class="col-md-11 px-lg-5">

                <div class="row bg-yellow rounded-4">
                    <div class="col-md-8 col-12 p-md-5 p-3">
                        <h1 class="fs-30 fw-700">OUR VISION</h1>
                        <p class="fs-15 text-justify">AKINO envisions a world where the radiance of resilience eclipses the shadows of adversity.
                            Our vision is to create communities empowered with knowledge and unity, capable of
                            withstanding floods and other challenges. We see underprivileged people and orphaned
                            children equipped with education as beacons of hope. Empowered women lead communities
                            toward equality, while vulnerable lives, both young and animal, receive care and protection.
                            In times of Flood Crises, communities rise stronger. Through Skill Development and Education
                            Awareness, we foster self-reliance. AKINO's vision is the sunrise of hope, casting rays of
                            opportunity, much like the rising sun, heralding a brighter future for all. Together, we shine.
                        </p>
                    </div>
                    <div class="col-md-4 tex-center col-12 d-flex  justify-content-center pb-3">
                        <img src="{{url('/assets/img/light.png')}}" height="165" alt="akino">
                    </div>
                </div>


                <div class="row bg-light-gray rounded-4 mt-5 d-flex align-items-center">
                    <div class="col-md-8 col-12 p-md-5 p-3">
                        <h1 class=" fs-30 fw-700">OUR MISSION</h1>
                        <p class="fs-15 text-justify">AKINO, symbolizing the rising sun, embodies a mission of empowerment and hope. Our
                            comprehensive initiatives encompass Child Education, nurturing young minds for brighter
                            futures, and Women Empowerment, breaking barriers and fostering leadership. In Kid Care
                            and Animal Rescue, compassion extends to the most vulnerable. During Flood Crises, we
                            provide immediate aid and rebuild resilient communities. Skill Development and Education
                            Awareness empower individuals with practical skills and knowledge, promoting selfsufficiency. AKINO aims to be the dawn of hope, illuminating pathways toward resilience,
                            equality, and prosperity, mirroring the rising suns enduring optimism. Together, we rise.
                        </p>
                    </div>
                    <div class="col-md-4 tex-center col-12 d-flex  justify-content-center pb-3 ">
                        <img src="{{url('/assets/img/mission.png')}}" height="165" alt="akino">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section5 my-5 px-lg-5 d-none">
    <div class="container px-lg-5">
        <div class=" px-lg-5">
            <h1 class="fw-600 fs-40">Our Teams</h1>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="col-md-4 col-sm-6 col-10 p-2 ">
                    <div class="timg d-flex flex-column justify-content-between align-items-center">
                        <img src="{{url('/assets/img/men.png')}}" alt="akino">
                    </div>
                    <div class=" fw-600 fs-25 tname text-center mt-4">Pretesh K</div>
                    <div class="tdes fw-400 fs-15 text-center mt-1">Founder & CEO</div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 p-2">
                    <div class="timg d-flex flex-column justify-content-between align-items-center">
                        <img src="{{url('/assets/img/men.png')}}" alt="akino">
                    </div>
                    <div class=" fw-600 fs-25 tname text-center mt-4">Pretesh K</div>
                    <div class="tdes fw-400 fs-15 text-center mt-1">Founder & CEO</div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 p-2 ">
                    <div class="timg d-flex flex-column justify-content-between align-items-center">
                        <img src="{{url('/assets/img/men.png')}}" alt="akino">
                    </div>
                    <div class=" fw-600 fs-25 tname text-center mt-4">Pretesh K</div>
                    <div class="tdes  fw-400 fs-15 text-center  mt-1">Founder & CEO</div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 p-2">
                    <div class="timg d-flex flex-column justify-content-between align-items-center">
                        <img src="{{url('/assets/img/men.png')}}" alt="akino">
                    </div>
                    <div class=" fw-600 fs-25 tname text-center mt-4">Pretesh K</div>
                    <div class="tdes fw-400 fs-15  text-center mt-1">Founder & CEO</div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 p-2 ">
                    <div class="timg d-flex flex-column justify-content-between align-items-center">
                        <img src="{{url('/assets/img/men.png')}}" alt="akino">
                    </div>
                    <div class=" fw-600 fs-25 tname text-center mt-4">Pretesh K</div>
                    <div class=" fw-400 fs-15 tdes  text-center mt-1">Founder & CEO</div>
                </div>
                <div class="col-md-4 col-sm-6 col-10 p-2">
                    <div class="timg d-flex flex-column justify-content-between align-items-center">
                        <img src="{{url('/assets/img/men.png')}}" alt="akino">
                    </div>
                    <div class=" fw-600 fs-25 tname text-center mt-4">Pretesh K</div>
                    <div class=" fw-400 fs-15 tdes  text-center mt-1">Founder & CEO</div>
                </div>

            </div>


        </div>
    </div>
</div>
<div class="section6 mt-5 d-none">
    <div class="container ">
        <div class="row ">
            <div class="fw-600 fs-40 text-center">Awards & Recognition</div>
            <div class="text-center mt-2">
                <p class="fw-400 fs-15">In over 4 decades, CRY has received many awards in recognition of our
                    <br> work towards enabling better futures for underprivileged children.
                </p>
            </div>
            <div class="mt-5 d-md-flex">
                <div class="col-md-4 text-center">
                    <img src="{{url('/assets/img/award2.png')}}" alt="akino">
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{url('/assets/img/award3.png')}}" alt="akino">
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{url('/assets/img/award1.png')}}" alt="akino">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section7 mt-5">
    <div class="box p-3 mt-5">
        <img src="{{url('/assets/img/duobleinverted.png')}}" alt="akino">
        <div class="d-flex flex-column  align-content-center justify-content-between h-100 ">
            <h1 class="about"> Your generosity is the light that can dispel the darkness of despair and empower communities to rise 
                above flood-related challenges.
            </h1>
            <div class="">
                <div class="name">K Pritesh</div>
                <p class="des">FOUNDER, Akino Foundadtion</p>
            </div>
        </div>
    </div>
</div>









@include('common.footer')
@section('script')

@stop
@stop