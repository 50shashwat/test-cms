<header id="pageHeader" class="pageHeader02">
    <div class="container relativeSm">
        <!-- pageHeaderTopBar -->
        <div class="pageHeaderTopBar">
            <div class="row">
                <div class="col-3 col-lg-6">
                    <!-- topBarContactList -->
                    <ul class="list-unstyled topBarContactList topBarContactList02 align-items-center mb-0 d-none d-md-flex">
                        <li>
                            <a href="tel:18001035795">
                                <i class="fas fa-phone fa-flip-horizontal icn"><span class="sr-only">icon</span></i>
                                <span class="d-none d-lg-inline">1-800-103-5795</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@harrisonlocks.com">
                                <i class="fas fa-envelope icn"><span class="sr-only">icon</span></i>
                                <span class="d-none d-lg-inline">info@harrisonlocks.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-9 col-lg-6 d-flex justify-content-end position-static">
                    <!-- topBarSearchForm -->
                    <form action="javascript:void(0);" class="topBarSearchForm topBarSearchForm02 d-md-none">
                        <!-- searhFormCollpase -->
                        <div class="form-group collapse mb-0" id="searhFormCollpase">
                            <input type="text" class="form-control d-block" placeholder="Search&hellip;">
                            <button type="button" class="ei_icon_search buttonReset"><span class="sr-only">search</span></button>
                        </div>
                    </form>
                    <!-- loginLinksList -->
                    
                    <ul class="list-unstyled loginLinksList loginLinksList02 text-capitalize d-flex mb-0">
                        
                    @guest
                        <li class="hasIcon">
                            <i class="ei_icon_lock icn"><span class="sr-only">icon</span></i>
                            <a class="d-none d-md-block" href="{{ route('login') }}">{{ __('Login') }} </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="d-none d-md-block">
                                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item  ">
                                {{ Auth::user()->name }} 
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="headerFixer">
        <div class="container relativeSm">
            <!-- pageHeaderHolder -->
            <div class="pageHeaderHolder pageHeaderHolder02 rounded text-white clearfix relativeSm relativeMd">
                <!-- logo -->
                <div class="logo alignleft">
                    <a href="/">
                        <img src="images/logo_white.png" alt="Harrison Locks">
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
                                <li class="nav-item @if (\Request::is('/')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/"  aria-haspopup="true" >Home</a>
                                </li>

                                <li class="nav-item @if (\Request::is('products*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/products"  aria-haspopup="true" >Products</a>
                                </li>
                                
                                <li class="nav-item @if (\Request::is('blog*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/blog"  aria-haspopup="true" >Blog / Announcements</a>
                                </li>
                                
                                
                               

                                <li class="nav-item @if (\Request::is('careers*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/careers"  aria-haspopup="true" >Careers</a>
                                </li>
                                
                            </ul>
                            
                            <ul class="navbar-nav pageMainNavigation pageMainNavigation02 justify-content-md-end">            
                                <li class="nav-item @if (\Request::is('video-gallery*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/video-gallery">Video gallery </a>
                                </li>
                                
                                <li class="nav-item @if (\Request::is('carpenter-pathshaala*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/carpenter-pathshaala">Carpenter pathshala</a>
                                </li>
                                
                                <li class="nav-item  @if (\Request::is('display-and-design*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase " href="/display-and-design">Display and desgin </a>
                                </li>
                                
                                <li class="nav-item  @if (\Request::is('channel-partnership*')) active @endif">
                                    <a class="nav-link fwMedium text-uppercase "  href="/channel-partnership">Channel Partnership</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>