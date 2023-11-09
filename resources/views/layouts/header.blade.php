<!-- Header area start -->
<header class="header__area-2">
    <div class="header__inner-5">
        <div class="header__logo-5">
            <a href="{{ route('home') }}" class="logo-dark">
              <img src="{{ asset('assets/logo/' . app('contact')->logo_header) }}" alt="{{ app('contact')->alt_header }}" class="header-logo">
            </a>
        </div>
        <div class="header__nav-icon-5 d-flex gap-5">
            <ul class="d-md-flex d-none gap-4">
                <li><a href="mailto:{{ app('contact')->email }}" class="text-primary border-primary"><img src="{{ asset('assets/logo/' . app('contact')->icon_email) }}" alt="{{ app('contact')->alt_email }}" width="25"></a></li>
                <li><a href="tel:{{ app('contact')->tel1 }}" class="text-primary border-primary"><img src="{{ asset('assets/logo/' . app('contact')->icon_phone) }}" alt="{{ app('contact')->alt_phone }}" width="25"></a></li>
            </ul>
            <button id="open_offcanvas"><span class="menu-text-pp">Menu</span>
                <img src="{{ asset('img/icons/menu-black.png') }}" alt="Menubar Icon">
            </button>
        </div>
    </div>
</header>
<!-- Header area end -->

<!-- Offcanvas area start -->
<div class="offcanvas__area">
    <div class="offcanvas__body">
        <div class="offcanvas__left">
            <div class="offcanvas__logo">
                <a href="{{ route('home') }}">
                  <img src="{{ asset('assets/logo/' . app('contact')->logo_header) }}" alt="{{ app('contact')->alt_header }}" class="header-logo">
                </a>
                <ul class="footer__social mt-4">
                    <li><a href="{{ app('contact')->fb }}" target="_blank"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                    <li><a href="{{ app('contact')->insta }}" target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                    <li><a href="{{ app('contact')->linkedin }}" target="_blank"><span><i class="fa-brands fa-linkedin"></i></span></a></li>
                </ul>
            </div>
            <div class="offcanvas__links">
                <ul>
                    <li><a href="{{ route('footerpages') }}">Politique de Confidentialité</a></li>
                    <li><a href="{{ route('footerpages') }}#politiquedescookies">Politique des cookies</a></li>
                    <li><a href="{{ route('footerpages') }}#faq">FAQ</a></li>
                    <li><a href="{{ route('footerpages') }}#mentionslegales">Mentions légales</a></li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__mid">
            <div class="offcanvas__menu-wrapper">
                <nav class="offcanvas__menu">
                    <ul class="menu-anim">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li><a href="{{ route('about') }}">nous connaitre</a></li>
                        <li><a>services</a>
                            <ul>
                                <li><a href="{{ route('centredefrappe') }}">Centre de frappe</a></li>
                                <li><a href="{{ route('centredappels') }}">Centre d'appels</a></li>
                                <li><a href="{{ route('e-va') }}">e-VA</a></li>
                                <li><a href="{{ route('reputation') }}">e-Réputation</a></li>
                                <li><a href="{{ route('dictasupport') }}">DictaSupport</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('about') }}#contact" class="contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="offcanvas__right">
            <div class="shape-1"></div>
            <div class="shape-2"></div>
        </div>
        <div class="offcanvas__close">
            <button type="button" id="close_offcanvas"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </div>
</div>
