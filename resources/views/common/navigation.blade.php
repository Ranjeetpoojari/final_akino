   <nav>@php
    $ourwork = \App\Models\OurWorkDetail::all();
    $subsubcat =\App\Models\Subsubcategory::all(); 
    $camp =\App\Models\CompaignCategory::all();
@endphp
        <div class="container-fluid d-flex justify-content-between align-items-center nav">
            <div>
                <a href="{{url('/')}}"><img src="{{url('/assets/img/gallery/akino.png')}}" alt="Akino-image" class=" logo-img"></a>
            </div>
            <div class="d-lg-flex d-none align-items-center gap-xxl-4 gap-2">
                <div class="d-flex gap-xxl-3 gap-2">
                    <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('/')) active-link @endif" aria-current="page" href="{{url('/')}}">Home</a>

                    <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('activities')) active-link @endif" href="{{url('/activities')}}">Activity</a>
                    <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('volunteering')) active-link @endif" href="{{url('/volunteering')}}">Volunteer</a>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Projects
                        </a>
                        <ul class="dropdown-menu">
                  
                            @foreach($ourwork as $item)
                            <li>  <a class="dropdown-item text-capitalize" href="{{url('workdetail', ['subcategory_id' => encrypt($item->subcategory_id)])}}"> {{ $item->category}}</a></li>
                          @endforeach
                        </ul>
                      </li> --}}
                    {{-- <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('volunteering')) active-link @endif" href="{{url('/volunteering')}}">Volunteering</a>  --}}
                    <li class="position-relative custom-dropdown"><a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase custom-dropdown @if(Request::is('workdetail')) active-link @endif" href="#">programs&nbsp;&nbsp;<i class="fa-solid fa-caret-down"></i></a>
                        <div class="custom-menu  bg-white position-absolute z-9 rounded-1">
                         <ul class="px-0 my-1">
                            @foreach($ourwork as $item)
                            @if($subsubcat->where('category', $item->category)->count() > 0)
                                <li class="right-dropdown position-relative list-style-none ">
                                    <a href="{{ url('workdetail', ['subcategory_id' => encrypt($item->subcategory_id)]) }}" class="text-decoration-none text-tri d-inline-block text-dark px-3 py-2 text-capitalize d-flex justify-content-between" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $item->category }}<i class="fa-solid fa-arrow-right text-end"></i></i>
                                    </a>
                                    <ul class="right-dropdown-menu px-0 py-2 rounded-2 position-absolute end-320 bg-white">
                                        @php
                                            $ourcategory = \App\Models\Subsubcategory::where('category', $item->category)->get();
                                        @endphp
                                        @foreach($ourcategory as $subcat)
                                            <li class="list-style-none">
                                                <a href="{{ url('worksubcat', ['id' => encrypt($subcat->id)]) }}" class="text-decoration-none text-tri d-inline-block text-dark px-3 py-2 text-capitalize">{{ $subcat->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="list-style-none">
                                    <a href="{{ url('workdetail', ['subcategory_id' => encrypt($item->subcategory_id)]) }}" class="text-decoration-none d-inline-block text-dark px-3 py-2 text-capitalize text-tri">{{ $item->category }}</a>
                                </li>
                            @endif
                        @endforeach
                           
        
                         </ul>
                        </div>
        
                        </li>
            
                    <li class="position-relative custom-dropdown"><a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase  @if(Request::is('campiagn')) active-link @endif" href="#">Campiagn&nbsp;&nbsp;<i class="fa-solid fa-caret-down"></i></a>
                        <div class="custom-menu  bg-white position-absolute z-9 rounded-1">
                            <ul class="custom_list position-absolute px-0 py-2 w-100 rounded-2 bg-white">
                                @foreach($camp as $item)
                                @php
                                    $campdetail = \App\Models\CampaignDetail::where('camp_name', $item->title)->get();
                                @endphp
                                @if($campdetail->count() > 0)
                                @if($campdetail->count() < 2)
                                    <li class="right-dropdown position-relative list-style-none bg-white">
                                        <a href="" class="text-decoration-none text-tri d-inline-block text-dark px-3 py-2 text-capitalize d-flex justify-content-between" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $item->title }}<i class="fa-solid fa-arrow-right text-end"></i>
                                        </a>
                                        <ul class="right-dropdown-menu px-0 py-2 rounded-2 position-absolute end-320 bg-white">
                                            @foreach($campdetail as $subcat)
                                            <li class="list-style-none">
                                                <a href="{{url('/campaign/'.encrypt($subcat->id))}}" class="text-decoration-none text-tri d-inline-block text-dark px-3 py-2 text-capitalize">{{ $subcat->title }}</a>
                                            </li>
                                            @endforeach
                                      
                                        </ul>
                                    </li>
                                    @else
                                    <a href="{{url('/allcamp/'.encrypt($item->id))}}" class="text-decoration-none text-tri bg-white d-inline-block text-dark px-3 py-2 text-capitalize d-flex justify-content-between" >
                                        {{ $item->title }}
                                    </a>
                                    @endif
                                @endif

                            @endforeach
                            </ul>
                        </div>
        
                        </li>
                        <li class="position-relative custom-dropdown"><a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase  @if(Request::is('about')) active-link @endif" href="#">About&nbsp;&nbsp;<i class="fa-solid fa-caret-down"></i></a>
                            <div class="custom-menu  bg-white position-absolute z-9 rounded-1">
                             <ul class="px-0 my-1">
                                <li class="list-style-none"><a href="{{url('about')}}" class="text-dark text-decoration-none fs-14 px-2 py-1 d-inline-block w-100">About Us</a></li>
                                {{-- <li class="list-style-none "><a href="{{url('volunteering')}}" class="text-dark text-decoration-none fs-14 px-2 py-1 d-inline-block w-100">Our Volunteer.</a></li> --}}
                                <li class="list-style-none "><a href="{{url('founder')}}" class="text-dark text-decoration-none fs-14 px-2 py-1 d-inline-block w-100">Founder's Message</a></li>
                    {{-- <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('founder')) active-link @endif" href="{{url('/founder')}}"></a> --}}

                             </ul>
                            </div>
            
                            </li>
                        {{-- <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('about')) active-link @endif" href="{{url('/about')}}">ABOUT US</a> --}}
                    <a class="nav-link px-xl-2 px-2 fs-14 text-dark menu-link text-uppercase @if(Request::is('contact')) active-link @endif" href="{{url('/contact')}}">CONTACT US</a>
                  
                </div>
                <a href="{{url('/donate')}}" class="nav-link">
                    <button class="bg-yellow px-4 py-1 rounded-pill">Donate <img src="{{url('/assets/img/heart.png')}}" height="15.5" alt="Akino-image"></button>
                </a>

            </div>
            <div class="d-lg-none">
                <button class="btn bg-yellow" onClick="showMenu()">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
        <div class="sidebar close position-fixed bg-yellow" id="sidebar">
            <button onclick="hideMenu()" id="closeBtn" class="btn bg-yellow position-absolute end-0 me-4 mt-3"><i
                    class="fa-solid fa-xmark fs-4"></i></button>
            <div class="d-flex flex-column  gap-5 mt-5 pt-5 position-relative">
                <div class="d-flex flex-column">
                    <a class="nav-link ps-4 fs-14 text-dark menu-link mb-3 text-uppercase @if(Request::is('/')) active-link @endif" aria-current="page" href="{{url('/')}}">Home</a>
                    <a class="nav-link ps-4 fs-14 text-dark menu-link mb-3 text-uppercase @if(Request::is('activities')) active-link @endif" href="{{url('/activities')}}">Activity</a>
                    <a class="nav-link ps-4 fs-14 text-dark menu-link mb-2 text-uppercase @if(Request::is('volunteering')) active-link @endif" href="{{url('/volunteering')}}">Volunteering</a>
                    {{-- <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="text-uppercase">our projects</span>
                        </a>
                        <ul class="dropdown-menu">
                            
                            @foreach($ourwork as $item)
                            <li>  <a class="dropdown-item text-capitalize" href="{{url('workdetail', ['subcategory_id' => encrypt($item->subcategory_id)])}}"> {{ $item->category}}</a></li>
                          @endforeach
                        </ul>
                    </div> --}}
                    
                    <div class="accordion " id="accordionExample">
                        <div class="accordion-item border-0 bg-yellow">
                          <h2 class="accordion-header bg-yellow">
                            <button class="accordion-button ps-2 bg-yellow text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Programs
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample2">
                            <div class="accordion-body p-0">
                                <div class="accordion px-0" id="accordionExample2">
                                    @foreach($ourwork as $item)
                                      @if($subsubcat->where('category', $item->category)->count() > 0)
                                    <div class="accordion-item border-0 bg-yellow">
                                      <h2 class="accordion-header bg-yellow">
                                        <button class="accordion-button ps-2 text-dark bg-yellow" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $item->slug }}" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $item->category }}
                                        </button>
                                      </h2>
                                      <div id="{{ $item->slug}}" class="accordion-collapse collapse " data-bs-parent="#accordionExample2">
                                        <div class="accordion-body px-2  py-2">
                                        <ul class="px-0">
                                            @php
                                            $ourcategory = \App\Models\Subsubcategory::where('category', $item->category)->get();
                                        @endphp
                                            @foreach($ourcategory as $subcat)
                                            <li class="list-style-none" ><a href="{{ url('worksubcat', ['id' => encrypt($subcat->id)]) }}"" class=" w-100 text-dark text-decoration-none">{{ $subcat->title }}</a></li>
                                            @endforeach
                                            
                                        </ul>
                                        </div>
                                      </div>
                                    </div>
                                    @else
                                    <li class="list-style-none ps-2 py-1" ><a href="{{ url('workdetail', ['subcategory_id' => encrypt($item->subcategory_id)]) }}" class=" w-100 text-dark text-decoration-none">{{ $item->category }}</a></li>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>

                <div class="accordion" id="accordionabout">
                    <div class="accordion-item border-0 bg-yellow">
                      <h2 class="accordion-header bg-yellow">
                        <button class="accordion-button ps-2 bg-yellow text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseabout" aria-expanded="true" aria-controls="collapseabout">
                          About
                        </button>
                      </h2>
                      <div id="collapseabout" class="accordion-collapse collapse " data-bs-parent="#accordionabout">
                        <div class="accordion-body p-0">

                            <a class="nav-link ps-4 fs-14 text-dark menu-link text-uppercase @if(Request::is('about')) active-link @endif" href="{{url('/about')}}">ABOUT US</a>
                            <a class="nav-link ps-4 fs-14 text-dark menu-link text-uppercase @if(Request::is('about')) active-link @endif" href="{{url('/founder')}}">Founders Messages</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="accordion" id="accordioncamp">
                    <div class="accordion-item border-0 bg-yellow">
                      <h2 class="accordion-header bg-yellow">
                        <button class="accordion-button ps-2 bg-yellow text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsecamp" aria-expanded="true" aria-controls="collapsecamp">
                       Campaign
                        </button>
                      </h2>
                      <div id="collapsecamp" class="accordion-collapse collapse " data-bs-parent="#accordioncamp">
                        <div class="accordion-body p-0">
                            @foreach($camp as $item)
                            @php
                                $campdetail = \App\Models\CampaignDetail::where('camp_name', $item->title)->get();
                            @endphp
                              @if($campdetail->count() > 0)
                              @if($campdetail->count() < 2)
                              <div class="accordion-item border-0 bg-yellow">
                                <h2 class="accordion-header bg-yellow">
                                  <button class="accordion-button ps-2 text-dark bg-yellow" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $item->slug }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $item->title }}
                                    </button>
                                </h2>
                                <div id="{{ $item->slug}}" class="accordion-collapse collapse " data-bs-parent="#accordionExample2">
                                    <div class="accordion-body px-2  py-2">
                                        <ul class="px-0">
                                            @foreach($campdetail as $subcat)
                                            <a class="nav-link ps-4 fs-14 text-dark menu-link text-uppercase @if(Request::is('about')) active-link @endif" href="{{url('/campaign/'.encrypt($subcat->id))}}">{{$subcat->title}}</a>
                                            @endforeach
                                                
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                            @else
                            <a class="nav-link ps-2 fs-16 text-dark menu-link mb-3  " aria-current="page" href="{{url('/allcamp/'.encrypt($item->id))}}">{{$item->title}}</a>
                                    @endif
                              @endif
                            @endforeach

                        </div>
                      </div>
                    </div>
                </div>
                    <a class="nav-link ps-4 fs-14 text-dark mt-3 menu-link text-uppercase @if(Request::is('contact')) active-link @endif" href="{{url('/contact')}}">CONTACT US</a>

                </div>
               
                {{-- <button class="bg-yellow px-5 fs-20 py-1 mx-auto rounded-pill position-fixed bottom-0 mb-5"><a href="{{url('/donate')}}"
                        class="nav-link h-100 w-100"> Donate <img src="{{url('/assets/img/heart.png')}}" height="15.5" alt="Akino-image"
                            class=""></a>
                        </button> --}}
            </div>
        </div>
        <div class=" h-28 d-lg-flex justify-content-lg-between align-items-center bg-yellow px-lg-5 px-4">
            <ul
                class="d-flex pe-3 justify-content-lg-start justify-content-between gap-xl-4 gap-2 m-0 p-0 bg-yellow">
                <li class="nav-link"><a href="#" class="nav-link fs-14 semibold">Follow us</a></li>
                <ul
                    class="d-flex align-items-center justify-content-lg-start justify-content-end float-end gap-xl-4 gap-3 m-0 p-0">
                    <li class="nav-link"><a href="https://www.facebook.com/akinofoundation?mibextid=ZbWKwL" class="nav-link" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-link"><a href="https://www.instagram.com/akino__foundation/" class="nav-link " target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="nav-link"><a href="https://twitter.com/akino_official2" class="nav-link " target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="nav-link"><a href="https://www.linkedin.com/company/akino-foundation" class="nav-link " target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </ul>
            <ul class="d-lg-flex d-none align-items-center gap-3 m-0">
                <li class="nav-link"><a href="#" class="nav-link"><img src="{{url('/assets/img/email.png')}}" alt="Akino-image" height="12"
                        ></a>
                </li>
                <li class="nav-link"><a href="mailto:info@akinofoundation.org" class="nav-link fs-12">
                        info@akinofoundation.org
                    </a></li>
            </ul>
        </div>
        <div onclick="hideMenu()" class="overlay-menu"></div>
    </nav>