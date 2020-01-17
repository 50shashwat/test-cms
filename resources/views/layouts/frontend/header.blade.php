<header id="pageHeader" class="pageHeader02">
   
    <div class="">
        <div class=" relativeSm">
            
            <div class="relativeSm" style="background:#fff;padding-left:20px;padding-right:20px">
                        <!-- pageHeaderTopBar -->
                        <div class="pageHeaderTopBar">
                            <div class="row">
                                <div class="col-3 col-lg-6">
                                    <!-- topBarContactList -->
                                    <ul class="list-unstyled topBarContactList topBarContactList02 align-items-center mb-0 d-none d-md-flex">
                                        <li>
                                            <div>
                                                <i class="fas fa-phone fa-flip-horizontal icn"><span class="sr-only">icon</span></i>
                                                <span class="d-none d-lg-inline">{{$contact->phone1}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="/helpline-numbers">
                                                <i class="fas fa-address-book icn"><span class="sr-only">icon</span></i>
                                                <span class="d-none d-lg-inline">Helpline Numbers</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-9 col-lg-6 d-flex justify-content-end position-static">
                                    <!-- topBarSearchForm -->
                                    <!-- loginLinksList -->
                                    
                                    <ul class="list-unstyled loginLinksList loginLinksList02 text-capitalize d-flex mb-0">
                                        <form action="/search" method="post" class="topBarSearchForm topBarSearchForm02 ">
                                            <!-- searhFormCollpase -->
                                            @csrf
                                            <div class="form-group collapse mb-0" id="searhFormCollpase">
                                                <input type="text" class="form-control d-block" placeholder="Search&hellip;" style="border: 1px solid #ccc;padding: 5px 20px;margin: 5px;margin-right: 30px;border-radius: 12px;" name="name">
                                                <button type="submit" class="ei_icon_search buttonReset"><span class="sr-only">search</span></button>
                                            </div>
                                        </form>
                                          
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- pageHeaderHolder -->
            <div class="pageHeaderHolder pageHeaderHolder02 rounded text-white clearfix relativeSm relativeMd">
                <!-- logo -->
                <div class="logo alignleft">
                    <a href="/">
                        <img src="{{asset('images/logo.png') }}" alt="Harrison Locks">
                    </a>
                </div>
                <!-- pageNavHolder -->
                <div class="pageNavHolder alignright d-flex justify-content-end align-items-md-start">
                    <!-- topBarSearchFormOpener -->
                    
                    <!-- pageNav navbar -->
                    <nav id="pageNav" class="navbar navbar-expand-lg order-lg-1">
                        <!-- pageMainNavOpener -->
                        <button class="navbar-toggler pageMainNavOpener pageMainNavOpener02" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- mainNavCollapse navbar collapse -->
                        <div class="collapse navbar-collapse mainNavCollapse mainNavCollapse02" id="pageMainNavCollapse">
                            <!-- pageMainNavigation navbar nav -->
                            <ul class="navbar-nav pageMainNavigation pageMainNavigation02 justify-content-md-end">
                                {{-- <li class="nav-item @if (\Request::is('/')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/"  aria-haspopup="true" >Home</a>
                                </li> --}}

                                <li class="nav-item dropdown  @if (\Request::is('about*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                                    <div class="dropdown-menu mainNavDropdown text-uppercase">
                                        <ul class="list-unstyled navDropdownList">
                                            <li>
                                                <a class="dropdown-item" href="/about/company-profile">Company Profile</a>
                                                <a class="dropdown-item" href="/about/mission-and-vision">Mission &amp; Vision</a>
                                                <a class="dropdown-item" href="/about/message-from-ceo">Message From CEO </a>
                                                <a class="dropdown-item" href="/about/connect-from-fb">Connect To Social Media</a>
                                                <a class="dropdown-item" href="/about/our-clients">Our Clients</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item dropdown @if (\Request::is('products*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Products
                                    </a>
                                    <!-- mainNavDropdown dropdown menu -->
                                    <div class="dropdown-menu mainNavDropdown text-uppercase">
                                        <!-- navDropdownList -->
                                        <ul class="list-unstyled navDropdownList">
                                            @foreach ($menus as $menuitem)
                                                @if(sizeof($menuitem['subcategories'])==0 )
                                                    <li class="nav-item"><a class="dropdown-item fwMedium text-uppercase" href="/products/{{$menuitem['id']}}"  aria-haspopup="true" style="padding-left:20px;" >{{$menuitem['name']}}</a></li>
                                                @else
                                                    <li class="dropdown-submenu"><a class="dropdown-item fwMedium text-uppercase dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {!! $menuitem['name'] !!}
                                                    </a>
                                                                    
                                                    <div class="dropdown-menu mainNavDropdown text-uppercase">
                                                        <!-- navDropdownList -->
                                                        <ul class="list-unstyled navDropdownList">
                                                            @foreach ($menuitem['subcategories'] as $menusubitem)
                                                                @if(sizeof($menusubitem['innercategories'])==0 )
                                                                    <li class="nav-item"><a  class="dropdown-item fwMedium text-uppercase" style="padding-left:20px" href="/products/{{$menuitem['id']}}/{{$menusubitem['id']}}"  aria-haspopup="true" >{{$menusubitem['name']}}</a></li>
                                                                @else
                                                                <li class="dropdown-submenu"><a class="dropdown-item fwMedium text-uppercase dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    {{$menusubitem['name']}}
                                                                </a>
                                                                                    
                                                                    <div class="dropdown-menu mainNavDropdown text-uppercase">
                                                                        <!-- navDropdownList -->
                                                                        <ul class="list-unstyled navDropdownList">
                                                                            @foreach ($menusubitem['innercategories'] as $menuinneritem)
                                                                        <li class="nav-item"><a class="dropdown-item fwMedium text-uppercase" href="/products/{{$menuitem['id']}}/{{$menusubitem['id']}}/{{$menuinneritem['id']}}"  aria-haspopup="true" >{{$menuinneritem['name']}}</a></li>
                                                                         
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    </li>
                                                @endif

                                            @endforeach

                                            <li class="dropdown-submenu"><a class="dropdown-item fwMedium text-uppercase dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                E-Brochure
                                                </a>
                                                                
                                                <div class="dropdown-menu mainNavDropdown text-uppercase">
                                                    <!-- navDropdownList -->
                                                    <ul class="list-unstyled navDropdownList">
                                                        <li class="nav-item"><a  class="dropdown-item fwMedium text-uppercase" style="padding-left:20px" href="/products/locks"  aria-haspopup="true" >Locks </a></li>
                                                        <li class="nav-item"><a  class="dropdown-item fwMedium text-uppercase" style="padding-left:20px" href="/products/kitchen-accessories"  aria-haspopup="true" >Kitchen Accessories</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </li> 
                                            <li class="nav-item"><a class="dropdown-item fwMedium text-uppercase" href="/products/new-arrivals"  aria-haspopup="true" style="padding-left:20px;" >New Arrivals</a></li>
                                                  
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item @if (\Request::is('application*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/application-solutions">Applications &amp; Solutions</a>
                                </li>
                                
                                <li class="nav-item @if (\Request::is('achievement*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/achievement"  aria-haspopup="true" >Milestone & Achievements</a>
                                </li>
                                <li class="nav-item @if (\Request::is('careers*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/careers"  aria-haspopup="true" >Careers</a>
                                </li>
                                <li class="nav-item @if (\Request::is('video-gallery*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/video-gallery">Video gallery </a>
                                </li>
                                
                            </ul>
                            
                            <ul class="navbar-nav pageMainNavigation pageMainNavigation02 justify-content-md-end" >            
                                
                                
                                <li class="nav-item  @if (\Request::is('display-and-design*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/display-and-design">Display and Design </a>
                                </li>
                                
                                <li class="nav-item  @if (\Request::is('channel-partnership*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase "  href="/channel-partnership">Channel Partnership</a>
                                </li>
                                <li class="nav-item" style="width:140px">
                                <a href="#">
                                    <img src="{{asset('images/dh_right.png') }}" alt="Dharmendra" style="height:90px; width:auto">
                                </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
