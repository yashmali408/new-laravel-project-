<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="/" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to {{$appData['app_name']}}</a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                            </li>
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="/shop/track-your-order" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                            </li>
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                <div class="d-flex align-items-center">
                                    <!-- Language -->
                                    <div class="position-relative">
                                        <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
                                            aria-controls="languageDropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-event="hover"
                                            data-unfold-target="#languageDropdown"
                                            data-unfold-type="css-animation"
                                            data-unfold-duration="300"
                                            data-unfold-delay="300"
                                            data-unfold-hide-on-scroll="true"
                                            data-unfold-animation-in="slideInUp"
                                            data-unfold-animation-out="fadeOut">
                                            <span class="d-inline-block d-sm-none">US</span>
                                            <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i> Dollar (US)</span>
                                        </a>

                                        <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                            <a class="dropdown-item active" href="#">English</a>
                                            <a class="dropdown-item" href="#">Deutsch</a>
                                            <a class="dropdown-item" href="#">Español‎</a>
                                        </div>
                                    </div>
                                    <!-- End Language -->
                                </div>
                            </li>
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <!-- Account Sidebar Toggle Button -->
                                @php
                                    if(session('firstname')){
                                        @endphp
                                        Welcome {{ session('firstname') }} {{ session('lastname') }}
                                        <div>
                                        
                                        </div>
                                        <a href="/customer/logout">Logout</a>
                                        @php
                                    }else{
                                        @endphp
                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                            aria-controls="sidebarContent"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-event="click"
                                            data-unfold-hide-on-scroll="false"
                                            data-unfold-target="#sidebarContent"
                                            data-unfold-type="css-animation"
                                            data-unfold-animation-in="fadeInRight"
                                            data-unfold-animation-out="fadeOutRight"
                                            data-unfold-duration="500">
                                            <i class="ec ec-user mr-1"></i>  Register <span class="text-gray-50">or</span> Sign in
                                        </a>

                                        @php

                                    }
                                @endphp
                                
                                
                                <!-- End Account Sidebar Toggle Button -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <!-- Logo and Menu -->
        <div class="py-2 py-xl-4 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <!-- Logo-offcanvas-menu -->
                    <div class="col-auto">
                        <!-- Nav -->
                        <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <!-- Logo -->
                            <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/" aria-label="Electro">
                                <img src="{{$appData['app_logo']}}" />
                            </a>
                            <!-- End Logo -->

                            <!-- Fullscreen Toggle Button -->
                            <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                aria-controls="sidebarHeader"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarHeader1"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft"
                                data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                    <span class="u-hamburger__inner"></span>
                                </span>
                            </button>
                            <!-- End Fullscreen Toggle Button -->
                        </nav>
                        <!-- End Nav -->

                        <!-- ========== HEADER SIDEBAR ========== -->
                        <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                            <div class="u-sidebar__scroller">
                                <div class="u-sidebar__container">
                                    <div class="u-header-sidebar__footer-offset pb-0">
                                        <!-- Toggle Button -->
                                        <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                            <button type="button" class="close ml-auto"
                                                aria-controls="sidebarHeader"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="click"
                                                data-unfold-hide-on-scroll="false"
                                                data-unfold-target="#sidebarHeader1"
                                                data-unfold-type="css-animation"
                                                data-unfold-animation-in="fadeInLeft"
                                                data-unfold-animation-out="fadeOutLeft"
                                                data-unfold-duration="500">
                                                <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                            </button>
                                        </div>
                                        <!-- End Toggle Button -->

                                        <!-- Content -->
                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                <!-- Logo -->
                                                <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="../home/index" aria-label="Electro">
                                                    <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                        <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <!-- End Logo -->

                                                <!-- List -->
                                                <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                    <!-- Home Section -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                                                            Home & Static Pages
                                                        </a>

                                                        <div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
                                                                <!-- Home - v1 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/index">Home v1</a></li>
                                                                <!-- End Home - v1 -->
                                                                <!-- Home - v2 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v2">Home v2</a></li>
                                                                <!-- End Home - v2 -->
                                                                <!-- Home - v3 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3">Home v3</a></li>
                                                                <!-- End Home - v3 -->
                                                                <!-- Home - v3-full-color-bg -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3-full-color-bg">Home v3.1</a></li>
                                                                <!-- End Home - v3-full-color-bg -->
                                                                <!-- Home - v4 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v4">Home v4</a></li>
                                                                <!-- End Home - v4 -->
                                                                <!-- Home - v5 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v5">Home v5</a></li>
                                                                <!-- End Home - v5 -->
                                                                <!-- Home - v6 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v6">Home v6</a></li>
                                                                <!-- End Home - v6 -->
                                                                <!-- Home - v7 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v7">Home v7</a></li>
                                                                <!-- End Home - v7 -->
                                                                <!-- About -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/about">About</a></li>
                                                                <!-- End About -->
                                                                <!-- Contact v1 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v1">Contact v1</a></li>
                                                                <!-- End Contact v1 -->
                                                                <!-- Contact v2 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v2">Contact v2</a></li>
                                                                <!-- End Contact v2 -->
                                                                <!-- FAQ -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/faq">FAQ</a></li>
                                                                <!-- End FAQ -->
                                                                <!-- Store Directory -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/store-directory">Store Directory</a></li>
                                                                <!-- End Store Directory -->
                                                                <!-- Terms and Conditions -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/terms-and-conditions">Terms and Conditions</a></li>
                                                                <!-- End Terms and Conditions -->
                                                                <!-- 404 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../home/404">404</a></li>
                                                                <!-- End 404 -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Home Section -->

                                                    <!-- Shop Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                            Shop Pages
                                                        </a>

                                                        <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                                                                <!-- Shop Grid -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-grid">Shop Grid</a></li>
                                                                <!-- End Shop Grid -->

                                                                <!-- Shop Grid Extended -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-grid-extended">Shop Grid Extended</a></li>
                                                                <!-- End Shop Grid Extended -->

                                                                <!-- Shop List View -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-list-view">Shop List View</a></li>
                                                                <!-- End Shop List View -->

                                                                <!-- Shop List View Small -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-list-view-small">Shop List View Small</a></li>
                                                                <!-- End Shop List View Small -->

                                                                <!-- Shop Left Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-left-sidebar">Shop Left Sidebar</a></li>
                                                                <!-- End Shop Left Sidebar -->

                                                                <!-- Shop Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-full-width">Shop Full width</a></li>
                                                                <!-- End Shop Full width -->

                                                                <!-- Shop Right Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-right-sidebar">Shop Right Sidebar</a></li>
                                                                <!-- End Shop Right Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Shop Pages -->

                                                    <!-- Product Categories -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                            Product Categories
                                                        </a>

                                                        <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                <!-- 4 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/product-categories-4-column-sidebar">4 Column Sidebar</a></li>
                                                                <!-- End 4 Column Sidebar -->

                                                                <!-- 5 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/product-categories-5-column-sidebar">5 Column Sidebar</a></li>
                                                                <!-- End 5 Column Sidebar -->

                                                                <!-- 6 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/product-categories-6-column-full-width">6 Column Full width</a></li>
                                                                <!-- End 6 Column Full width -->

                                                                <!-- 7 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/product-categories-7-column-full-width">7 Column Full width</a></li>
                                                                <!-- End 7 Column Full width -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Product Categories -->

                                                    <!-- Single Product Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                            Single Product Pages
                                                        </a>

                                                        <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
                                                                <!-- Single Product Extended -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/single-product-extended">Single Product Extended</a></li>
                                                                <!-- End Single Product Extended -->

                                                                <!-- Single Product Fullwidth -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/single-product-fullwidth">Single Product Fullwidth</a></li>
                                                                <!-- End Single Product Fullwidth -->

                                                                <!-- Single Product Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/single-product-sidebar">Single Product Sidebar</a></li>
                                                                <!-- End Single Product Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Single Product Pages -->

                                                    <!-- Ecommerce Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                            Ecommerce Pages
                                                        </a>

                                                        <div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list">
                                                                <!-- Shop -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop">Shop</a></li>
                                                                <!-- End Shop -->

                                                                <!-- Cart -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/cart">Cart</a></li>
                                                                <!-- End Cart -->

                                                                <!-- Checkout -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/checkout">Checkout</a></li>
                                                                <!-- End Checkout -->

                                                                <!-- My Account -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/my-account">My Account</a></li>
                                                                <!-- End My Account -->

                                                                <!-- Track your Order -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/track-your-order">Track your Order</a></li>
                                                                <!-- End Track your Order -->

                                                                <!-- Compare -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/compare">Compare</a></li>
                                                                <!-- End Compare -->

                                                                <!-- wishlist -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/wishlist">wishlist</a></li>
                                                                <!-- End wishlist -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Ecommerce Pages -->

                                                    <!-- Shop Columns -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                            Shop Columns
                                                        </a>

                                                        <div id="headerSidebardocsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebardocsMenu" class="u-header-collapse__nav-list">
                                                                <!-- 7 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-7-columns-full-width">7 Column Full width</a></li>
                                                                <!-- End 7 Column Full width -->

                                                                <!-- 6 Column Full width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-6-columns-full-width">6 Column Full width</a></li>
                                                                <!-- End 6 Column Full width -->

                                                                <!-- 5 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-5-columns-sidebar">5 Column Sidebar</a></li>
                                                                <!-- End 5 Column Sidebar -->

                                                                <!-- 4 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-4-columns-sidebar">4 Column Sidebar</a></li>
                                                                <!-- End 4 Column Sidebar -->

                                                                <!-- 3 Column Sidebar -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="/shop/shop-3-columns-sidebar">3 Column Sidebar</a></li>
                                                                <!-- End 3 Column Sidebar -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Shop Columns -->

                                                    <!-- Blog Pages -->
                                                    <li class="u-has-submenu u-header-collapse__submenu">
                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarblogsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
                                                            Blog Pages
                                                        </a>

                                                        <div id="headerSidebarblogsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                            <ul id="headerSidebarblogsMenu" class="u-header-collapse__nav-list">
                                                                <!-- Blog v1 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v1">Blog v1</a></li>
                                                                <!-- End Blog v1 -->

                                                                <!-- Blog v2 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v2">Blog v2</a></li>
                                                                <!-- End Blog v2 -->

                                                                <!-- Blog v3 -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v3">Blog v3</a></li>
                                                                <!-- End Blog v3 -->

                                                                <!-- Blog Full Width -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-full-width">Blog Full Width</a></li>
                                                                <!-- End Blog Full Width -->

                                                                <!-- Single Blog Post -->
                                                                <li><a class="u-header-collapse__submenu-nav-link" href="../blog/single-blog-post">Single Blog Post</a></li>
                                                                <!-- End Single Blog Post -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!-- End Blog Pages -->
                                                </ul>
                                                <!-- End List -->
                                            </div>
                                        </div>
                                        <!-- End Content -->
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- ========== END HEADER SIDEBAR ========== -->
                    </div>
                    <!-- End Logo-offcanvas-menu -->
                    <!-- Primary Menu -->
                    <div class="col d-none d-xl-block">
                        <!-- Nav -->
                        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                            <!-- Navigation -->
                            <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                <ul class="navbar-nav u-header__navbar-nav">
                                    <!-- Home -->
                                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                        data-event="hover"
                                        data-animation-in="slideInUp"
                                        data-animation-out="fadeOut">
                                        <a id="HomeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="HomeSubMenu">Home</a>

                                        <!-- Home - Submenu -->
                                        <ul id="HomeSubMenu" class="hs-sub-menu u-header__sub-menu animated fadeOut" aria-labelledby="HomeMegaMenu" style="min-width: 230px; display: none;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/index">Home v1</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v2">Home v2</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v3">Home v3</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v3-full-color-bg">Home v3.1</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v4">Home v4</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v5">Home v5</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v6">Home v6</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v7">Home v7</a></li>
                                        </ul>
                                        <!-- End Home - Submenu -->
                                    </li>
                                    <!-- End Home -->

                                    <!-- Pages -->
                                    <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                        data-event="hover"
                                        data-animation-in="slideInUp"
                                        data-animation-out="fadeOut">
                                        <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>

                                        <!-- Home - Mega Menu -->
                                        <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="pagesMegaMenu">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="../home/index" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
                                                        <li><a href="../home/home-v2" class="nav-link u-header__sub-menu-nav-link">Home v2</a></li>
                                                        <li><a href="../home/home-v3" class="nav-link u-header__sub-menu-nav-link">Home v3</a></li>
                                                        <li><a href="../home/home-v3-full-color-bg" class="nav-link u-header__sub-menu-nav-link">Home v3.1</a></li>
                                                        <li><a href="../home/home-v4" class="nav-link u-header__sub-menu-nav-link">Home v4</a></li>
                                                        <li><a href="../home/home-v5" class="nav-link u-header__sub-menu-nav-link">Home v5</a></li>
                                                        <li><a href="../home/home-v6" class="nav-link u-header__sub-menu-nav-link">Home v6</a></li>
                                                        <li><a href="../home/home-v7" class="nav-link u-header__sub-menu-nav-link">Home v7</a></li>
                                                        <li><a href="../home/about" class="nav-link u-header__sub-menu-nav-link">About</a></li>
                                                        <li><a href="../home/contact-v1" class="nav-link u-header__sub-menu-nav-link">Contact v1</a></li>
                                                        <li><a href="../home/contact-v2" class="nav-link u-header__sub-menu-nav-link">Contact v2</a></li>
                                                        <li><a href="../home/faq" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
                                                        <li><a href="../home/store-directory" class="nav-link u-header__sub-menu-nav-link">Store Directory</a></li>
                                                        <li><a href="../home/terms-and-conditions" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
                                                        <li><a href="../home/404" class="nav-link u-header__sub-menu-nav-link">404</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Shop Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="/shop/shop-grid" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
                                                        <li><a href="/shop/shop-grid-extended" class="nav-link u-header__sub-menu-nav-link">Shop Grid Extended</a></li>
                                                        <li><a href="/shop/shop-list-view" class="nav-link u-header__sub-menu-nav-link">Shop List View</a></li>
                                                        <li><a href="/shop/shop-list-view-small" class="nav-link u-header__sub-menu-nav-link">Shop List View Small</a></li>
                                                        <li><a href="/shop/shop-left-sidebar" class="nav-link u-header__sub-menu-nav-link">Shop Left Sidebar</a></li>
                                                        <li><a href="/shop/shop-full-width" class="nav-link u-header__sub-menu-nav-link">Shop Full width</a></li>
                                                        <li><a href="/shop/shop-right-sidebar" class="nav-link u-header__sub-menu-nav-link">Shop Right Sidebar</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title">Product Categories</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="/shop/product-categories-4-column-sidebar" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                        <li><a href="/shop/product-categories-5-column-sidebar" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                        <li><a href="/shop/product-categories-6-column-full-width" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                        <li><a href="/shop/product-categories-7-column-full-width" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Single Product Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="/shop/single-product-extended" class="nav-link u-header__sub-menu-nav-link">Single Product Extended</a></li>
                                                        <li><a href="/shop/single-product-fullwidth" class="nav-link u-header__sub-menu-nav-link">Single Product Fullwidth</a></li>
                                                        <li><a href="/shop/single-product-sidebar" class="nav-link u-header__sub-menu-nav-link">Single Product Sidebar</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title">Ecommerce Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="/shop/shop" class="nav-link u-header__sub-menu-nav-link">Shop</a></li>
                                                        <li><a href="/shop/cart" class="nav-link u-header__sub-menu-nav-link">Cart</a></li>
                                                        <li><a href="/shop/checkout" class="nav-link u-header__sub-menu-nav-link">Checkout</a></li>
                                                        <li><a href="/shop/my-account" class="nav-link u-header__sub-menu-nav-link">My Account</a></li>
                                                        <li><a href="/shop/track-your-order" class="nav-link u-header__sub-menu-nav-link">Track your Order</a></li>
                                                        <li><a href="/shop/compare" class="nav-link u-header__sub-menu-nav-link">Compare</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="u-header__sub-menu-title">Blog Pages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a href="../blog/blog-v1" class="nav-link u-header__sub-menu-nav-link">Blog v1</a></li>
                                                        <li><a href="../blog/blog-v2" class="nav-link u-header__sub-menu-nav-link">Blog v2</a></li>
                                                        <li><a href="../blog/blog-v3" class="nav-link u-header__sub-menu-nav-link">Blog v3</a></li>
                                                        <li><a href="../blog/blog-full-width" class="nav-link u-header__sub-menu-nav-link">Blog Full Width</a></li>
                                                        <li><a href="../blog/single-blog-post" class="nav-link u-header__sub-menu-nav-link">Single Blog Post</a></li>
                                                    </ul>
                                                    <span class="u-header__sub-menu-title">Shop Columns</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a href="/shop/shop-7-columns-full-width" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                        <li><a href="/shop/shop-6-columns-full-width" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                        <li><a href="/shop/shop-5-columns-sidebar" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                        <li><a href="/shop/shop-4-columns-sidebar" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                        <li><a href="/shop/shop-3-columns-sidebar" class="nav-link u-header__sub-menu-nav-link">3 Column Sidebar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Home - Mega Menu -->
                                    </li>
                                    <!-- End Pages -->

                                    <!-- Blog -->
                                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                        data-event="hover"
                                        data-animation-in="slideInUp"
                                        data-animation-out="fadeOut">
                                        <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                                        <!-- Blog - Submenu -->
                                        <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-v1">Blog v1</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-v2">Blog v2</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-v3">Blog v3</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-full-width">Blog Full Width</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-blog-post">Single Blog Post</a></li>
                                        </ul>
                                        <!-- End Submenu -->
                                    </li>
                                    <!-- End Blog -->

                                    <!-- About us -->
                                    <li class="nav-item u-header__nav-item">
                                        <a class="nav-link u-header__nav-link" href="../home/about">About us</a>
                                    </li>
                                    <!-- End About us -->

                                    <!-- FAQs -->
                                    <li class="nav-item u-header__nav-item">
                                        <a class="nav-link u-header__nav-link" href="../home/faq">FAQs</a>
                                    </li>
                                    <!-- End FAQs -->

                                    <!-- Contact Us -->
                                    <li class="nav-item u-header__nav-item">
                                        <a class="nav-link u-header__nav-link" href="../home/contact-v1">Contact Us</a>
                                    </li>
                                    <li class="nav-item u-header__nav-item">
                                        <a class="nav-link u-header__nav-link" href="/chat/chat">Chat with CustomerCare</a>
                                    </li>
                                    <!-- End Contact Us -->
                                </ul>
                            </div>
                            <!-- End Navigation -->
                        </nav>
                        <!-- End Nav -->
                    </div>
                    <!-- End Primary Menu -->
                    <!-- Customer Care -->
                    <div class="d-none d-xl-block col-md-auto">
                        <div class="d-flex">
                            <i class="ec ec-support font-size-50 text-primary"></i>
                            <div class="ml-2">
                                <div class="phone">
                                    <strong>Support</strong> <a href="tel:{{$appData['customer_care_no1']}}" class="text-gray-90">{{$appData['customer_care_no1']}}</a>
                                </div>
                                <div class="email">
                                    E-mail: <a href="mailto:{{$appData['support_email_addr']}}?subject=Help Need" class="text-gray-90">{{$appData['support_email_addr']}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Customer Care -->
                    <!-- Header Icons -->
                    <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <!-- Search -->
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Search"
                                        aria-controls="searchClassic"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-target="#searchClassic"
                                        data-unfold-type="css-animation"
                                        data-unfold-duration="300"
                                        data-unfold-delay="300"
                                        data-unfold-hide-on-scroll="true"
                                        data-unfold-animation-in="slideInUp"
                                        data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <!-- Input -->
                                    <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Input -->
                                </li>
                                <!-- End Search -->
                                <li class="col d-none d-xl-block"><a href="/shop/compare" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                <li class="col d-none d-xl-block"><a href="/shop/wishlist" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                <li class="col d-xl-none px-2 px-sm-3"><a href="/shop/my-account" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                <li class="col pr-xl-0 px-2 px-sm-3">
                                    <a href="/shop/cart" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">2</span>
                                        <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1000.00</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Logo and Menu -->

        <!-- Vertical-and-Search-Bar -->
        <div class="d-none d-xl-block bg-primary">
            <div class="container">
                <div class="row align-items-stretch min-height-50">
                    <!-- Vertical Menu -->
                    <div class="col-md-auto d-none d-xl-flex align-items-end">
                        <div class="max-width-270 min-width-270">
                            <!-- Basics Accordion -->
                            <div id="basicsAccordion">
                                <!-- Card -->
                                <div class="card border-0 rounded-0">
                                    <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne">
                                        <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                            data-toggle="collapse"
                                            data-target="#basicsCollapseOne"
                                            aria-expanded="true"
                                            aria-controls="basicsCollapseOne">
                                            <span class="pl-1 text-gray-90">Shop By Department</span>
                                            <span class="text-gray-90 ml-3">
                                                <span class="ec ec-arrow-down-search"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                                        aria-labelledby="basicsHeadingOne"
                                        data-parent="#basicsAccordion">
                                        <div class="card-body p-0">
                                            <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                    <ul class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                                                        <li class="nav-item u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a href="#" class="nav-link u-header__nav-link font-weight-bold">Value of the Day</a>
                                                        </li>
                                                        <li class="nav-item u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a href="#" class="nav-link u-header__nav-link font-weight-bold">Top 100 Offers</a>
                                                        </li>
                                                        <li class="nav-item u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a href="#" class="nav-link u-header__nav-link font-weight-bold">New Arrivals</a>
                                                        </li>
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut"
                                                            data-position="left">
                                                            <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Computers & Accessories</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img1.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Computers & Accessories</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Computers & Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Laptops, Desktops & Monitors</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Printers & Ink</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Networking & Internet Devices</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Computer Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Office & Stationery</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu1" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Cameras, Audio & Video</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu1">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img4.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Cameras & Photography</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Lenses</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Camera Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Security & Surveillance</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Binoculars & Telescopes</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Camcorders</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Audio & Video</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Audio & Video</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Headphones & Speakers</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu2" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Mobiles & Tablets</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu vmm-bg-extended" aria-labelledby="basicMegaMenu2">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img3.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Mobiles & Tablets</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Mobile Phones</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Smartphones</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Refurbished Mobiles</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-top pt-2" href="#">All Mobile Accessories</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Cases & Covers</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">All Electronics</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Tablets</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Tablet Accessories</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu3" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Movies, Music & Video</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu3">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img2.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Movies & TV Shows</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Movies & TV Shows</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All English</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="#">All Hindi</a></li>
                                                                        </ul>
                                                                        <span class="u-header__sub-menu-title">Video Games</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">PC Games</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Consoles</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Accessories</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Music</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Music</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Indian Classical</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Musical Instruments</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu4" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">TV & Audio</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu4">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img5.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Audio & Video</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Audio & Video</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Televisions</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Headphones</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Speakers</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Audio & Video Accessories</a></li>
                                                                            <li>
                                                                                <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                                                                    <div class="">Electro Home Appliances</div>
                                                                                    <div class="u-nav-subtext font-size-11 text-gray-30">Available in select cities</div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Music</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Televisions</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Headphones</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu5" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Watches & Eyewear</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu5">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img6.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Watches</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Men's Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Women's Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Premium Watches</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Deals on Watches</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Eyewear</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Men's Sunglasses</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item MegaMenu -->
                                                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                            data-event="hover"
                                                            data-position="left">
                                                            <a id="basicMegaMenu3" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Car, Motorbike & Industrial</a>

                                                            <!-- Nav Item - Mega Menu -->
                                                            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu3">
                                                                <div class="vmm-bg">
                                                                    <img class="img-fluid" src="/assets/img/500X400/img7.png" alt="Image Description">
                                                                </div>
                                                                <div class="row u-header__mega-menu-wrapper">
                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Car & Motorbike</span>
                                                                        <ul class="u-header__sub-menu-nav-group mb-3">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Cars & Bikes</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Car & Bike Care</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link border-bottom pb-3" href="#">Lubricants</a></li>
                                                                        </ul>
                                                                        <span class="u-header__sub-menu-title">Shop for Bike</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Helmets & Gloves</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Bike Parts</a></li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col mb-3 mb-sm-0">
                                                                        <span class="u-header__sub-menu-title">Industrial Supplies</span>
                                                                        <ul class="u-header__sub-menu-nav-group">
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Industrial Supplies</a></li>
                                                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Lab & Scientific</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Nav Item - Mega Menu -->
                                                        </li>
                                                        <!-- End Nav Item MegaMenu-->
                                                        <!-- Nav Item -->
                                                        <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                            data-event="click"
                                                            data-animation-in="slideInUp"
                                                            data-animation-out="fadeOut"
                                                            data-position="left">
                                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">Accessories</a>

                                                            <!-- Home - Submenu -->
                                                            <ul id="homeSubMenu" class="hs-sub-menu u-header__sub-menu animated hs-position-left fadeOut" aria-labelledby="homeMegaMenu" style="min-width: 230px; display: none;">
                                                                <!-- Home-v1 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="index">Home-v1</a>
                                                                </li>
                                                                <!-- End Home-v1 -->

                                                                <!-- Home-v2 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="home-v2">Home-v2</a>
                                                                </li>
                                                                <!-- End Home-v2 -->

                                                                <!-- Home-v3 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="home-v3">Home-v3</a>
                                                                </li>
                                                                <!-- End Home-v3 -->

                                                                <!-- Home-v4 -->
                                                                <li class="hs-has-sub-menu">
                                                                    <a class="nav-link u-header__sub-menu-nav-link " href="home-v4">Home-v4</a>
                                                                </li>
                                                                <!-- End Home-v4 -->
                                                            </ul>
                                                            <!-- End Home - Submenu -->
                                                        </li>
                                                        <!-- End Nav Item -->
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Basics Accordion -->
                        </div>
                    </div>
                    <!-- End Vertical Menu -->
                    <!-- Search bar -->
                    <div class="col align-self-center">
                        <!-- Search-Form -->
                        <form class="js-focus-state" method="GET" action="/shop/shop-grid">
                            <label class="sr-only" for="searchProduct">Search</label>
                            <div class="input-group">
                                <input type="text" class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill" name="q" id="searchProduct" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                        data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                                        <option value="one" selected>All Categories</option>
                                        <option value="two">Two</option>
                                        <option value="three">Three</option>
                                        <option value="four">Four</option>
                                    </select>
                                    <!-- End Select -->
                                    <button type="submit" class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- End Search-Form -->
                    </div>
                    <!-- End Search bar -->
                    <!-- Header Icons -->
                    <div class="col-md-auto align-self-center">
                        <div class="d-flex">
                            <ul class="d-flex list-unstyled mb-0">
                                <li class="col"><a href="/shop/compare" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                <li class="col"><a href="/shop/wishlist" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                <li class="col pr-0">
                                    <a href="/shop/cart" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">{{$cart_info['cart_count']}}</span>
                                        <span class="font-weight-bold font-size-16 text-gray-90 ml-3">{{$cart_info['cart_total']}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Header Icons -->
                </div>
            </div>
        </div>
        <!-- End Vertical-and-secondary-menu -->
    </div>
</header>
<!-- ========== END HEADER ========== -->