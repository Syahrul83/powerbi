<!DOCTYPE html>
<html>


<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Power Bi</title>

    <meta name="keywords" content="Power Bi" />
    <meta name="description" content="Bandara Juwat">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/_favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/img/_apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/theme-elements.css">
    <link rel="stylesheet" href="/css/theme-blog.css">
    <link rel="stylesheet" href="/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="/vendor/circle-flip-slideshow/css/component.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">


    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="/css/skins/default.css">
    <script src="/master/style-switcher/style.switcher.localstorage.js"></script>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Head Libs -->
    <script src="/vendor/modernizr/modernizr.min.js"></script>

</head>

<body>
    <div class="body">
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/"> <?php $logo = 'logo'; ?>
                                        <img alt="Juwata" height="48" data-sticky-width="48" data-sticky-height="48" src="{{ asset('storage/' . setting('site.logo')) }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row pt-3">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        {{ menu('topmenu', 'topmenu') }}

                                        <?php
																																								$lang = app()->getLocale();

																																								switch ($lang) {
																																								    case 'id':
																																								        $bhs = 'id';
																																								        $bhs1 = 'Indonesia';
																																								        break;
																																								    case 'pt':
																																								        $bhs = 'us';
																																								        $bhs1 = 'English';
																																								        break;

																																								    default:
																																								        $bhs = 'id';
																																								        $bhs1 = 'Indonesia';
																																								}
																																								?>
                                        <li class="nav-item dropdown nav-item-left-border d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                            <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/img/blank.gif" class="flag flag-{{ $bhs }}" alt="Indonesia" /> {{ $bhs1 }}
                                                <i class="fas fa-angle-down"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                                <a class="dropdown-item" href="{{ url('locale/id') }}"><img src="/img/blank.gif" class="flag flag-id" alt="Indonesia" />
                                                    Indonesia</a>
                                                <a class="dropdown-item" href="{{ url('locale/pt') }}"><img src="/img/blank.gif" class="flag flag-us" alt="English" />
                                                    English</a>


                                            </div>
                                        </li>

                                        <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                            <span class="ws-nowrap"><i class="fas fa-phone"></i> (123) 456-789</span>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="header-nav-features">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form role="search" action="/pencarian" method="get">
                                                <div class="simple-search input-group">
                                                    <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                    <span class="input-group-append">
                                                        <button class="btn" type="submit">
                                                            <i class="fa fa-search header-nav-top-icon"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-row">
                                <div class="header-nav pt-1">
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">

                                            {{ menu('web', 'mainmenu') }}

                                        </nav>
                                    </div>
                                    <ul class="header-social-icons social-icons d-none d-sm-block">
                                        <li class="social-icons-facebook"><a href="/{{ setting('site.Facebook') }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="/{{ setting('site.Twitter') }}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="social-icons-linkedin"><a href="/{{ setting('site.Youtube') }}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- content -->

        @yield('main')
        <!-- end content -->

        <footer id="footer">
            <div class="container">

                <div class="row my-4 py-5">
                    <div class="col-md-6 col-lg-4 mb-lg-0 mb-4">
                        <a class="twitter-timeline" data-height="170" data-dnt="true" data-theme="dark" href="{{ setting('site.Twitter') }}">Tweets by Power BI</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


                    </div>
                    <div class="col-md-6 col-lg-3 mb-lg-0 mb-4">


                        <h5 class="text-3 mb-3"> Guides</h5>

                        <div class="contact-details">
                            <ul class="list list-icons list-primary">
                                {{-- <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-map"></i><a href="peta-bandara" class=" text-color-hover-light ">{{ app()->getLocale() == 'id'? 'Peta Bandara' : 'Airport Map' }} </a></li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-store"></i><a href="/toko" class="d-block text-color-hover-light ">{{ app()->getLocale() == 'id'? 'Toko dan Resto' : 'Shops and Restaurants' }} </a></li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-phone"></i><a href="/no-penting" class="d-block text-color-hover-light ">{{ app()->getLocale() == 'id'? 'No Penting' : 'Important Number' }} </a></li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-car"></i><a href="/transport" class="d-block text-color-hover-light ">{{ app()->getLocale() == 'id'? 'Transportasi' : 'Transportation' }} </a></li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-wallet"></i><a href="/transport" class="d-block text-color-hover-light ">{{ app()->getLocale() == 'id'? 'Barang Hilang & Ditemukan' : 'Lost and Find Item' }} </a></li> --}}

                            </ul>

                            <a href="#"><img src="https://s01.flagcounter.com/count2/w8px/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_1/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                        <div class="contact-details">

                            @if (app()->getLocale() == 'id')
                            <h5 class="text-3 mb-3">Hubungi Kami</h5>
                            @else
                            <h5 class="text-3 mb-3">Contact Us</h5>
                            @endif


                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1"><i class="far fa-dot-circle text-color-yel"></i>
                                    <p class="m-0"><a href="#">{{ setting('site.Alamat') }}</a></p>
                                </li>
                                <li class="mb-1"><i class="fas fa-phone text-color-yel"></i>
                                    <p class="m-0"><a href="tel:{{ setting('site.Telepon') }}">{{ setting('site.Telepon') }}</a>
                                    </p>
                                </li>
                                <li class="mb-1"><i class="far fa-envelope text-color-yel"></i>
                                    <p class="m-0">
                                        <a href="mailto:{{ setting('site.Email') }}">{{ setting('site.Email') }}</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <h5 class="text-3 mb-3">FOLLOW US</h5>
                        <ul class="social-icons">

                            <li class="social-icons-facebook"><a href="{{ setting('site.Facebook') }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a href="{{ setting('site.Twitter') }}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-linkedin"><a href="{{ setting('site.Youtube') }}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-lg-0 mb-2">
                            <a href="/index.html" class="logo pr-lg-3 pr-0">
                                <img alt="Porto Website Template" src="storage/{{ setting('site.logo') }}" class="opacity-5" height="30">
                            </a>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-start mb-lg-0 mb-4">
                            <p><a href="#"> © Copyright 2020. All Rights Reserved.</a></p>
                        </div>
                        <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end">
                            <nav id="sub-menu">

                                {{ menu('footermenu', 'footermenu') }}


                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>

    <!-- Vendor -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/jquery.cookie/jquery.cookie.min.js"></script>

    <script src="/vendor/popper/umd/popper.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/common/common.min.js"></script>
    <script src="/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendor/vide/jquery.vide.min.js"></script>
    <script src="/vendor/vivus/vivus.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>



    <!-- Theme Base, Components and Settings -->
    <script src="/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
    <script src="/js/views/view.home.js"></script>


    <!-- Theme Initialization Files -->
    <script src="/js/theme.init.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o)
                , m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42715764-5', 'auto');
        ga('send', 'pageview');

    </script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "scrollX": true
            });
        });

        $(document).ready(function() {
            $('#example1').DataTable({
                "scrollX": true
            });
        });
        $(document).ready(function() {
            $('#example2').DataTable({
                "scrollX": true
            });
        });
        $(document).ready(function() {
            $('#example3').DataTable({
                "scrollX": true
            });
        });

    </script>



</body>


</html>
