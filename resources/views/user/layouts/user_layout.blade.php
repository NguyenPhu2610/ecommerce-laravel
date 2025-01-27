<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/fonts/fontawesome/css/all.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css?t=[timestamp]') }}" type="text/css">

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <nav class="header__menu mobile-menu">
        <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./shop.html">Shop</a></li>
            <!-- <li><a href="#">Pages<i class="arrow_carrot-down" style="
                vertical-align: middle;"></i></a>
                <ul class="dropdown">
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li> -->
            <li><a href="./about.html">About</a></li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contacts</a></li>
        </ul>
    </nav>
    <!--END-->

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">sign in</a>
                <a href="#">Help</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>
                    @switch(session()->get('locale'))
                        @case('vi')
                            {{ __('Vi') }}
                        @break

                        @default
                            {{ __('En') }}
                    @endswitch
                    <i class="arrow_carrot-down"></i>
                </span>
                <ul>
                    <li><a href="lang/en">{{ __('En') }}</a></li>
                    <li><a href="lang/vi">{{ __('Vi') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
            <!-- <a href="#"><img src="img/icon/heart.png" alt=""></a> -->
            <a href="#"><img src="{{ asset('resources/images/icon/cart.png') }}" alt="">
                <span>0</span></a>
            <div class="price">$33.05</div>
        </div>
        <!-- <div class="offcanvas__search__box">
            <input class="" placeholder="what you looking for..."></input>
            <button class=""><i class="fa fa-search"></i></button>
        </div> -->
        <div class="offcanvas__sidebar__search">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button type="submit"><span class="icon_search"></span></button>
            </form>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header>
        <div class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="header__top__left">
                                <p>Free shipping, 30-day return or refund guarantee.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="header__top__right">
                                <div class="header__top__links">
                                    <a href="#">Sign in</a>
                                    <a href="#">Help</a>
                                </div>
                                <div class="header__top__hover">
                                    <span>
                                        @switch(session()->get('locale'))
                                            @case('vi')
                                                {{ __('Vi') }}
                                            @break

                                            @default
                                                {{ __('En') }}
                                        @endswitch
                                        <i class="arrow_carrot-down"></i>
                                    </span>
                                    <ul>
                                        <li><a href="lang/en">{{ __('En') }}</a></li>
                                        <li><a href="lang/vi">{{ __('Vi') }}</a></li>
                                        <!-- <li>USD</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header__bottom">
                    <div class="col-lg-2 col-md-2">
                        <div class="header__logo">
                            <a href="./index.html"><img src="{{ asset('resources/images/logo.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">

                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="header__search__box">
                            <input class="header__search" placeholder="Search what you looking for..."></input>
                            <button class=""><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <div class="col-lg-1 col-md-1">
                        <div class="header__nav__option">
                            <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
                            <!-- <a href="#"><img src="img/icon/heart.png" alt=""></a> -->
                            <a href="#"><img src="{{ asset('resources/images/icon/cart.png') }}"
                                    alt=""> <span id="cart-number"></span></a>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- MAIN CONTENT **************************************************************** MAIN CONTENT -->
    <main>
        @yield('content')
    </main>
    <!-- MAIN CONTENT **************************************************************** MAIN CONTENT -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('resources/images/footer-logo.png') }}"
                                    alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="{{ asset('resources/images/payment.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved by <a href="#" target="_blank">Phu Nguyen <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> </a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



    <!-- Scripts -->
    <script src="{{ asset('resources/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('resources/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('resources/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('resources/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('resources/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('resources/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('resources/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('resources/js/main.js?t=[timestamp]') }}"></script> --}}
    <script>
        (function($) {

            /*------------------
                Preloader
            --------------------*/
            $(window).on('load', function() {
                $(".loader").fadeOut(100);
                $("#preloder").delay(100).fadeOut("slow");

                /*------------------
                    Gallery filter  
                --------------------*/
                $('.filter__controls li').on('click', function() {
                    $('.filter__controls li').removeClass('active');
                    $(this).addClass('active');
                });
                if ($('.product__filter').length > 0) {
                    var containerEl = document.querySelector('.product__filter');
                    var mixer = mixitup(containerEl);
                }
            });

            /*------------------
                Background Set
            --------------------*/
            $('.set-bg').each(function() {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });

            /*------------------
                Navigation
            --------------------*/
            $(".mobile-menu").slicknav({
                prependTo: '#mobile-menu-wrap',
                allowParentLinks: true
            });

            /*------------------
                Accordin Active
            --------------------*/
            $('.collapse').on('show.bs.collapse', function() {
                $(this).prev().addClass('active');
            });

            $('.collapse').on('hidden.bs.collapse', function() {
                $(this).prev().removeClass('active');
            });

            //Canvas Menu
            $(".canvas__open").on('click', function() {
                $(".offcanvas-menu-wrapper").addClass("active");
                $(".offcanvas-menu-overlay").addClass("active");
            });

            $(".offcanvas-menu-overlay").on('click', function() {
                $(".offcanvas-menu-wrapper").removeClass("active");
                $(".offcanvas-menu-overlay").removeClass("active");
            });

            /*-----------------------
                Hero Slider
            ------------------------*/
            $(".hero__slider").owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                dots: false,
                nav: true,
                navText: ["<span class='arrow_left'><span/>", "<span class='arrow_right'><span/>"],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                smartSpeed: 1200,
                autoHeight: false,
                autoplay: false
            });

            /*--------------------------
                Select
            ----------------------------*/
            $("select").niceSelect();

            /*-------------------
                Radio Btn
            --------------------- */
            $(".product__details__option__color label").on("click", function() {
                $(".product__details__option__color label").removeClass("active");
                $(this).addClass("active");
            });

            $(".shop__sidebar__size label").on("click", function() {
                $(".shop__sidebar__size label,").removeClass("active");
                $(this).addClass("active");
            });

            $(".product__details__option__size label").on("click", function() {
                $(".product__details__option__size label").removeClass("active");
                $(this).addClass("active");
            });


            // $(".product__details__option__color label, .shop__sidebar__size label, .product__details__option__size label").on('click', function () {
            //     $(".product__details__option__color label, .shop__sidebar__size label, .product__details__option__size label").removeClass('active');
            //     $(this).addClass('active');
            // });

            /*-------------------
                Scroll
            --------------------- */
            $(".nice-scroll").niceScroll({
                cursorcolor: "#0d0d0d",
                cursorwidth: "5px",
                background: "#e5e5e5",
                cursorborder: "",
                autohidemode: true,
                horizrailenabled: false
            });

            /*------------------
                CountDown
            --------------------*/
            // For demo preview start
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            if (mm == 12) {
                mm = '01';
                yyyy = yyyy + 1;
            } else {
                mm = parseInt(mm) + 1;
                mm = String(mm).padStart(2, '0');
            }
            var timerdate = mm + '/' + dd + '/' + yyyy;
            // For demo preview end


            // Uncomment below and use your date //

            /* var timerdate = "2020/12/30" */

            $("#countdown").countdown(timerdate, function(event) {
                $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" +
                    "<div class='cd-item'><span>%H</span> <p>Hours</p> </div>" +
                    "<div class='cd-item'><span>%M</span> <p>Minutes</p> </div>" +
                    "<div class='cd-item'><span>%S</span> <p>Seconds</p> </div>"));
            });

            /*------------------
                Magnific
            --------------------*/
            $('.video-popup').magnificPopup({
                type: 'iframe'
            });

            /*-------------------
                Quantity change
            --------------------- */
            var proQty = $('.pro-qty');
            proQty.prepend('<span class="fa fa-angle-up dec qtybtn"></span>');
            proQty.append('<span class="fa fa-angle-down inc qtybtn"></span>');
            proQty.on('click', '.qtybtn', function() {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });

            var proQty = $('.pro-qty-2');
            proQty.prepend('<span class="fa fa-angle-left dec qtybtn"></span>');
            proQty.append('<span class="fa fa-angle-right inc qtybtn"></span>');
            proQty.on('click', '.qtybtn', function() {
                var $button = $(this);
                var oldValue = $button.parent().find('input').val();
                if ($button.hasClass('inc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find('input').val(newVal);
            });

            /*------------------
                Achieve Counter
            --------------------*/
            $('.cn_num').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //    /* When click show user */
            //     $('.shopping-cart').ready( function () {
            //       $.get('/test', function (data) {

            //       })
            //    });
            //Search Focus
            var searchBox = document.querySelector('.header__search__box');
            var searchInput = document.querySelector('.header__search');
            // searchInput.onfocus = function() { searchBox.style.border = '2px solid red'; }

            document.querySelector('.header__search').addEventListener('focus', function(e) {
                searchBox.style.border = '2px solid #bebebe'; // Change to desired color
            });

            document.querySelector('.header__search').addEventListener('blur', function(e) {
                searchBox.style.border = '2px solid transparent'; // Change to desired color
            });

            function loadCart() {
                document.getElementById("cart-number").innerHTML = localStorage.getItem("data") != null ?  parseInt(JSON.parse(localStorage.getItem("data"))
                    .length, 10) : 0;
                console.log('load cart');    
            }

            loadCart();

        })(jQuery);
    </script>
    @yield('js')

</body>

</html>
