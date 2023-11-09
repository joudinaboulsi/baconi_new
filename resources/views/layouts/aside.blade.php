<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('front/logodark.png') }}" alt="" width="150">
              </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        <!-- Home Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Home Page">Home Page </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('homeCms')}}" class="menu-link">
                        <div data-i18n="Home Page">Home Page</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('homeSliderCms')}}" class="menu-link">
                        <div data-i18n="Slider Section">Sliders Section</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- About Pages -->
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Layouts">About</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('aboutCms')}}" class="menu-link">
                        <div data-i18n="About">About</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('principleCms')}}" class="menu-link">
                        <div data-i18n="Principles Section">Principles Section</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('membershipCms')}}" class="menu-link">
                        <div data-i18n="Memberships Sliders">Memberships Sliders </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('teamCms')}}" class="menu-link">
                        <div data-i18n="Team">Team</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{route('aboutSliderCms')}}" class="menu-link">
                        <div data-i18n="About Sliders">About Sliders</div>
                    </a>
                </li>
            </ul>
        </li>


        <!-- Services Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'serviceCms' || Route::currentRouteName() == 'tabOneCms'  ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Services">Services</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::currentRouteName() == 'serviceCms' ? 'active' : '' }}">
                    <a href="{{ Route('serviceCms') }}" class="menu-link">
                        <div data-i18n="Services">Services </div>
                    </a>
                </li>
                <li class="menu-item {{ Route::currentRouteName() == 'tabOneCms' ? 'active' : '' }}">
                    <a href="{{ route('tabOneCms') }}" class="menu-link">
                        <div data-i18n="Service Tab One">Service Tab One</div>
                    </a>
                </li>
                
              
            </ul>
        </li>

        <!-- Companies Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'companyCms' || Route::currentRouteName() == 'companySliderCms'  ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Companies">Companies</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::currentRouteName() == 'companyCms' ? 'active' : '' }}">
                    <a href="{{ Route('companyCms') }}" class="menu-link">
                        <div data-i18n="Companies">Companies </div>
                    </a>
                </li>
                <li class="menu-item {{ Route::currentRouteName() == 'companySliderCms' ? 'active' : '' }}">
                    <a href="{{ route('companySliderCms') }}" class="menu-link">
                        <div data-i18n="Company Sliders">Company Sliders</div>
                    </a>
                </li>
                
              
            </ul>
        </li>

         <!-- Blog -->
         <li class="menu-item {{ Route::currentRouteName() == 'blogCms' ? 'active' : '' }}">
            <a href="{{route('blogCms')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Blog">Blog</div>
            </a>
        </li>

        <!-- Contact -->
        <li class="menu-item {{ Route::currentRouteName() == 'contactCms' ? 'active' : '' }}">
            <a href="{{route('contactCms')}}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Contact">Contact</div>
            </a>
        </li>


        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>

      <!-- Settings -->
      <li class="menu-item {{ Route::currentRouteName() == 'settingsCms' ? 'active' : '' }}">
        <a href="{{ route('settingsCms') }}" class="menu-link">
            <i class="bx bx-cog me-2"></i>
            <div data-i18n="Settings">Settings</div>
        </a>
    </li>


        <!-- SEO -->
        <li class="menu-item {{ Route::currentRouteName() == 'seoCms' || Route::currentRouteName() == 'seoEdit' ? 'active' : '' }}">
            <a href="{{ route('seoCms') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Seo">Seo</div>
            </a>
        </li>

    <!-- Logout -->
    <li class="menu-item">
        <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bx bx-power-off me-2"></i>
            <div data-i18n="Logout">Logout</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
    </ul>
</aside>
