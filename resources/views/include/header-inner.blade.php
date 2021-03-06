<header class="header-area formobile-menu header--transparent black-logo-version header--sticky">
            <div class="header-wrapper" id="header-wrapper">
                <div class="header-left">
                    <div class="logo">
                        <a href="/">
                            <img class="logo-1 logo" src="{{asset('assets/images/logo/HiLinkz-text.png')}}" alt="Logo Images">
                            <img class="logo-2 logo" src="{{asset('assets/images/logo/HLINKZ-Logo-Transperant.png')}}" alt="Logo Images">
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <nav class="mainmenunav d-lg-block navbar-example2">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->is('all-services') ? 'active' : ''}}" href="{{route('all_services')}}">Services</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->is('our-works') ? 'active' : ''}}" href="{{route('our_works')}}">Works</a></li>
                            <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/#testimonial">Testimonial</a></li>
                            <li class="nav-item"><a class="nav-link" href="/#team">Team</a></li>
                            <li class="nav-item"><a class="nav-link {{ request()->is('career') ? 'active' : ''}}" href="{{route('career')}}">Career</a></li>                  
                            <li class="nav-item"><a class="nav-link {{ request()->is('contact-form') ? 'active' : ''}}" href="{{route('contact_form')}}">Contact</a></li>                  
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
 
                    <div class="header-btn">
                        <!-- <a class="rn-btn" href="#"> -->
                            <!-- <span>buy now</span> -->
                        </a>
                    </div>
                    <!-- Start Humberger Menu  -->
                    <div class="humberger-menu d-block d-lg-none pl--20">
                        <span class="menutrigger text-white">
                            <i data-feather="menu"></i>
                        </span>
                    </div>
                    <!-- End Humberger Menu  -->
                    <!-- Start Close Menu  -->
                    <div class="close-menu d-block d-lg-none">
                        <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                    <!-- End Close Menu  -->
                </div>
            </div>
        </header>