<head id="head">
<title>Welcome to Pearl</title>

<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" type="image/png"  href="{{asset('images/favicon-pearl.png')}}">

<!--main file-->
<link  href="{{asset('css/pearl-restaurant.css')}}"  rel="stylesheet" type="text/css">

<!--Medical Guide Icons-->
<link  href="{{asset('fonts/pearl-icons.css')}}"  rel="stylesheet" type="text/css">

<!-- Default Color-->
<link href="{{asset('css/default-color.css')}}"  rel="stylesheet" id="color"  type="text/css">

<!--bootstrap-->
<link href="{{asset('css/bootstrap.css')}}"  rel="stylesheet" type="text/css">

<!--Dropmenu-->
<link href="{{asset('css/dropmenu.css')}}" rel="stylesheet" type="text/css">

<!--Sticky Header-->
<link href="{{asset('css/sticky-header.css')}}" rel="stylesheet" type="text/css">

<!--Sticky Countdown-->
<link href="{{asset('css/countdown.css')}}" rel="stylesheet" type="text/css">

<!--revolution-->
<link href="{{asset('css/settings.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/extralayers.css')}}" rel="stylesheet" type="text/css">

<!--Owl Carousel-->
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css">

<!--Date Picker-->
<link href="{{asset('css/date-pick.css')}}" rel="stylesheet" type="text/css">

<!--Form Dropdown-->
<link href="{{asset('css/form-dropdown.css')}}" rel="stylesheet" type="text/css">

<!-- Mobile Menu -->
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mmenu.all.css')}}" />
<!--PreLoader-->
<link href="{{asset('css/loader.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrap">

    <!--Start PreLoader-->
    <div id="preloader">
        <div id="status">&nbsp;</div>
        <div class="loader">
            <h1>Loading...</h1>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--End PreLoader-->

    <!--Start Header-->

    <header class="header-two" id="header">
        <div class="container">
            <a href="main.blade.php"><img class="logo2" src="{{asset('images/logo2.png')}}" alt=""></a>
            <a href="main.blade.php"><img class="logo-dark" src="{{asset('images/logo-dark.png')}}"  alt=""></a>

            <div class="cont-right">

                <nav class="menu-5 nav">
                    <ul class="wtf-menu">
                        <li class="select-item"><a href="#.">Home</a>
                            <ul class="submenu">
                                <li> <a href="index.html" class="select">Home 1</a> </li>
                                <li> <a href="index2.html">Home 2</a> </li>
                            </ul>
                        </li>

                        <li><a href="#.">Menu</a>
                            <ul class="submenu">
                                <li> <a href="{{route('menu')}}">menu 1</a> </li>
                                <li> <a href="menu2.html">menu 2</a> </li>
                                <li> <a href="menu3.html">menu 3</a> </li>
                            </ul>
                        </li>

                        <li><a href="our-story.html">our story</a></li>


                        <li class="parent"><a href="#.">Blog</a>

                            <ul class="submenu">
                                <li><a href="blog.html">blog 1</a></li>
                                <li><a href="blog2.html">blog 2</a></li>
                            </ul>

                        </li>


                        <li><a href="#.">contact us</a>

                            <ul class="submenu">
                                <li><a href="{{route('contact')}}">contact-us 1</a></li>
                                <li><a href="contact-us2.html">contact-us 2</a></li>
                            </ul>

                        </li>

                        <li><a href="{{route('shop_page')}}">online order</a></li>
                    </ul>
                </nav>

                <ul class="social-icons">
                    <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                    <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                    <li><a href="#."><i class="icon-google"></i></a></li>
                </ul>

                <ul class="shop-bag">
                    <li class="close-bag"><a class="cart-button"><i class="icon-icons163"></i> <span class="num">2</span></a></li>
                    <li class="open-bag">

                        <div class="cart-food">
                            <div class="detail">
                                <img src="{{asset('images/cart-food1.jpg')}}" alt="">
                                <div class="text">
                                    <a href="#.">Blanched Garlic</a>
                                    <p>1 x $35.00</p>
                                </div>
                            </div>
                            <a href="#." class="cross"><i class="icon-cancel2"></i></a>
                        </div>

                        <div class="cart-food">
                            <div class="detail">
                                <img src="{{asset('images/cart-food2.jpg')}}"  alt="">
                                <div class="text">
                                    <a href="#.">GREEN CHILE </a>
                                    <p>2 x $40.00</p>
                                </div>
                            </div>
                            <a href="#." class="cross"><i class="icon-cancel2"></i></a>
                        </div>

                        <div class="sub-total">
                            <span>SUBTOTAL: <strong>$115.00</strong></span>
                            <div class="buttons">
                                <a href="#." class="view-cart">view cart</a>
                                <a href="#." class="check-out">Check Out</a>
                            </div>
                        </div>


                    </li>
                </ul>

                <ul class="get-touch">
                    <li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+123 55 33 444</span></a></li>
                </ul>

            </div>
        </div>

    </header>


    <!--End Header-->




    <!-- Mobile Menu Start -->
    <div class="container" id="container">
        <div id="page">
            <header class="header">
                <a href="#menu"></a>

            </header>

            <nav id="menu">
                <ul>
                    <li class="select"><a href="#.">Home</a>
                        <ul>
                            <li class="select"> <a href="index.html">Home Page 1</a> </li>
                            <li> <a href="index2.html">Home Page 2</a> </li>
                        </ul>
                    </li>
                    <li><a href="#.">Fresh Menu</a>
                        <ul>
                            <li> <a href="menu.html">Menu 1</a> </li>
                            <li> <a href="menu2.html">Menu 2</a> </li>
                            <li> <a href="menu3.html">Menu 3</a> </li>
                        </ul>
                    </li>

                    <li><a href="our-story.html">Our Story</a></li>


                    <li><a href="#.">Blog</a>
                        <ul>
                            <li> <a href="blog.html">Blog 1</a> </li>
                            <li> <a href="blog2.html">Blog 2</a> </li>
                        </ul>
                    </li>

                    <li><a href="#.">Contact Us</a>
                        <ul>
                            <li> <a href="contact-us.html">Contact-us 1</a> </li>
                            <li> <a href="contact-us2.html">Contact-us 2</a> </li>
                        </ul>
                    </li>

                    <li><a href="shop.html">Order Online</a></li>
                    <li><a href="#book-table">Book a Table</a></li>


                </ul>


            </nav>
        </div>
    </div>
    <!-- Mobile Menu End -->




    <!--Start Banner-->

    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <!-- SLIDE  -->


                <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

                    <img src="{{asset('images/slides/banenr-img1.jpg')}}"   alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



                    <div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
                         data-x="center"
                         data-y="380"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="850"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style=""><img src="{{asset('images/slides/flower.png')}}" alt="" >
                    </div>


                    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
                         data-x="center"
                         data-y="456"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="850"
                         data-start="2500"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style="font-size:72px; z-index: 5; white-space: nowrap;">Art of Cooking
                    </div>


                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="center"
                         data-y="538"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="3500"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.1"
                         style="font-size:28px; z-index: 9;  white-space: nowrap;"><div style="text-align:left;">The Best restaurant in town</div>
                    </div>

                </li>


                <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

                    <img src="{{asset('images/slides/banenr-img2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



                    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
                         data-x="0"
                         data-y="376"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="850"
                         data-start="2500"
                         data-easing="Power3.easeInOut"
                         data-splitin="chars"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="font-size:72px; z-index: 5; white-space: nowrap;">quality food
                    </div>


                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="0"
                         data-y="468"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="3500"
                         data-easing="Power3.easeInOut"
                         data-splitin="chars"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="font-size:28px; z-index: 9;  white-space: nowrap;"><div style="text-align:left;">fine food & dining since 1880</div>
                    </div>


                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="0"
                         data-y="560"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="5900"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.1"
                         style="z-index: 9;  white-space: nowrap;"><div style="text-align:left;">
                            <a href="our-story.html" class="read-more" style=" line-height: initial; color: #fff;  border:solid 2px #fff; text-transform: uppercase; font-weight: 500; letter-spacing: 0px; padding: 16px 36px; display: inline-block; font-size: 18px;">explore more</a>
                        </div>
                    </div>



                </li>


                <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

                    <img src="{{asset('images/slides/banenr-img3.jpg')}}"   alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



                    <div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
                         data-x="center"
                         data-y="330"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="850"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style=""><img  src="{{asset('images/slides/flower.png')}}" alt="" >
                    </div>


                    <div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
                         data-x="center"
                         data-y="406"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="850"
                         data-start="2500"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         style="font-size:72px; z-index: 5;  white-space: nowrap;">real taste real food
                    </div>


                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="center"
                         data-y="498"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="3500"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.1"
                         style="font-size:28px; z-index: 9;  white-space: nowrap;"><div style="text-align:left;">the passion for the perfect taste</div>
                    </div>


                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
                         data-x="center"
                         data-y="580"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="4200"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.05"
                         data-endelementdelay="0.1"
                         style="z-index: 9;  white-space: nowrap;"><div style="text-align:left; ">
                            <a href="shop.html" class="read-more" style=" line-height: initial; color: #fff; border:solid 2px #fff; text-transform: uppercase; font-weight: 500; letter-spacing: 0px; padding: 16px 36px; display: inline-block; font-size: 18px;">online order</a>
                        </div>
                    </div>


                </li>


            </ul>
            <div class="tp-bannertimer"></div>	</div>
        <div class="wave"></div>
    </div>

    <!--End Banner-->



    <!--Start Content-->
    <div class="content">



        <!--Start Services-->
        <div class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <span>Introduction</span>
                            <h1>Our Services</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="serv-main-sec">
                            <div class="service-sec-top-bg"></div>
                            <div class="service-sec">
                                <i class="icon-restaurant14"></i>
                                <h6>Special Menu</h6>
                                <p>in this theme we are included many more restaurant font icons.</p>
                                <a href="menu3.html">read more</a>
                            </div>
                            <div class="service-sec-bottom-bg"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="serv-main-sec serv-main-sec2">
                            <div class="service-sec-top-bg"></div>
                            <div class="service-sec">
                                <i class="icon-cups7"></i>
                                <h6>Elegant interior</h6>
                                <p>in this theme we are included many more restaurant font icons.</p>
                                <a href="our-story.html">read more</a>
                            </div>
                            <div class="service-sec-bottom-bg"></div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="serv-main-sec">
                            <div class="service-sec-top-bg"></div>
                            <div class="service-sec">
                                <i class="icon-barbecue9"></i>
                                <h6>Fresh & Hot Food</h6>
                                <p>in this theme we are included many more restaurant font icons.</p>
                                <a href="menu.html">read more</a>
                            </div>
                            <div class="service-sec-bottom-bg"></div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <!--End Services-->




        <!--Start Master of Town-->
        <div class="master-town">

            <div class="parallax">
                <div class="detail">
                    <h1><span>&ldquo;</span>Fresh and healthy master of town<span>&rdquo;</span></h1>
                    <a href="#." class="white-btn">Buy Now</a>
                </div>
            </div>

        </div>
        <!--End Master of Town-->




        <!--Start Our Stiry-->
        <div class="our-story">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="story-detail">
                            <div class="main-title">
                                <span>Discover</span>
                                <h1>our story</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
                            <a href="our-story.html" class="full-story">view full story</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="{{asset('images/our-story.jpg')}}" alt="">
                    </div>

                </div>
            </div>
        </div>
        <!--End Our Stiry-->




        <!--Start Upcoming Event-->
        @if($eventData['exist'])
        <div class="upcoming-event">


            <div class="parallax parallax-event">

                <div class="detail">

                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-title-white">
                                    <span>Don’t Miss</span>
                                    <h1>UPCOMING EVENTS</h1>
                                </div>
                            </div>
                        </div>


                        <ul id="example">
                            <li><span class="days">{{$eventData['untilDays']}}</span><p class="days_text">Days</p></li>
                            <li class="seperator">:</li>
                            <li><span class="hours">{{$eventData['untilHours']}}</span><p class="hours_text">Hours</p></li>
                            <li class="seperator">:</li>
                            <li><span class="minutes">{{$eventData['untilMinutes']}}</span><p class="minutes_text">Minutes</p></li>
                            <li class="seperator">:</li>
                            <li><span class="seconds">{{$eventData['untilSeconds']}}</span><p class="seconds_text">Seconds</p></li>
                        </ul>

                        <div class="event-detail">
                            <div class="row">

                                <div class="col-md-4">
                                    <img src="{{asset('images/event-img.jpg')}}" alt="">
                                </div>

                                <div class="col-md-8">
                                    <div class="event-text">
                                        <h6>{{$eventData['title']}}</h6>
                                        <span><i class="icon-clock"></i>
                                            {{$eventData['date']}} / {{$eventData['time_start']}} - {{$eventData['time_end']}}
                                        </span>
                                        <p>{{$eventData['description']}}<a href="event-detail.html">Read More</a></p>
                                        <a href="events.html" class="view-event">view all events</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        @endif
        <!--End Upcoming Event-->




        @if($specialDish)
        <!--Start Today Food-->
        <div class="today-food">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <img src="{{asset('images/today-special.jpg')}}" alt="">
                    </div>

                    <div class="col-md-6">
                        <div class="special-food">
                            <div class="main-title">
                                <span>Today’s</span>
                                <h1>SPECIALS food</h1>
                            </div>

                            <div class="food-detail">
                                <span class="title">{{$specialDish['dish']}} <span class="price">{{$specialDish['price']}}$</span></span>
                                <span class="tags">
                                    @foreach($specialDish['sections'] as $section)
                                        {{$section}}  @if (!$loop->last) / @endif
                                    @endforeach
                                </span>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--End Today Food-->
        @endif


        <!--Start Book Table-->
        <div id="book-table"></div>
        <div class="height35"></div>
        <div class="book-table">

            <div class="parallax parallax-book-table">
                <div class="detail">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-8">

                                <div class="main-title">
                                    <span>Book a Table</span>
                                    <h1>Reservation</h1>
                                </div>


                               @include('includes.table_reservation_form')



                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End Book Table-->





        <!--Start Latest News-->
        <div class="latest-news">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <div class="main-title">
                            <span>Latest Posts</span>
                            <h1>From the Blog</h1>
                        </div>

                    </div>
                </div>




                <div id="latest-news">
                    <div class="container">
                        <div class="row">
                            <div class="span12">

                                <div id="owl-demo" class="owl-carousel">

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('images/news-img1.jpg')}}"  alt="">
                                        <div class="detail">
                                            <img src="{{asset('images/news-cheff1.jpg')}}" alt="">
                                            <h5><a href="blog-detail.html">Spicy Food</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                            <span><i class="icon-clock"></i> Apr 22, 2016</span>
                                            <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 5 Comments</a></span>
                                        </div>
                                    </div>
                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('images/news-img2.jpg')}}"  alt="">
                                        <div class="detail">
                                            <img src="{{asset('images/news-cheff2.jpg')}}" alt="">
                                            <h5><a href="blog-detail.html">Hot Cake</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                            <span><i class="icon-clock"></i> Apr 09, 2016</span>
                                            <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 3 Comments</a></span>
                                        </div>
                                    </div>

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('images/news-img3.jpg')}}"  alt="">
                                        <div class="detail">
                                            <img src="{{asset('images/news-cheff3.jpg')}}" alt="">
                                            <h5><a href="blog-detail.html">Fresh Salad</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                            <span><i class="icon-clock"></i> Mar 28, 2016</span>
                                            <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                                        </div>
                                    </div>

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('images/news-img4.jpg')}}"  alt="">
                                        <div class="detail">
                                            <img src="{{asset('images/news-cheff2.jpg')}}"  alt="">
                                            <h5><a href="blog-detail.html">Couple Area</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                            <span><i class="icon-clock"></i> Mar 15, 2016</span>
                                            <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                                        </div>
                                    </div>

                                    <div class="post item">
                                        <img class="lazyOwl" src="{{asset('images/news-img5.jpg')}}"  alt="">
                                        <div class="detail">
                                            <img src="{{asset('images/news-cheff1.jpg')}}" alt="">
                                            <h5><a href="blog-detail.html">Hand Picked Ingredients</a></h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                                            <span><i class="icon-clock"></i> Mar 04, 2016</span>
                                            <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 11 Comments</a></span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
        <!--End Latest News-->






        <!--Start Customer Words-->
        <div class="customer-words">

            <div class="parallax parallax-customer-words">
                <div class="detail">

                    <div class="main-title-white">
                        <span>Some Words</span>
                        <h1>FROM CUSTOMERS</h1>
                    </div>

                    <div id="testimonials">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="span12">

                                        <div id="owl-demo2" class="owl-carousel">


                                            @foreach($comments as $comment) <div class="testi-sec">
                                                <img src="{{asset('images/testimonial-img1.jpg')}}" alt="">
                                                <div class="height35"></div>
                                                <span class="name">{{$comment->name}}</span>
                                                <span class="work">{{$comment->profession}}</span>
                                                <div class="height20"></div>
                                                <p> {{$comment->comment}}</p>
                                                <div class="height20"></div>
                                                <div class="rating">
                                                    @if  ($comment->rating == 1)
                                                        <i class="icon-star3"></i>
                                                    @endif
                                                    @if  ($comment->rating == 2)
                                                        <i class="icon-star3"></i><i class="icon-star3"></i>
                                                    @endif
                                                    @if  ($comment->rating == 3)
                                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                                    @endif
                                                    @if  ($comment->rating == 4)
                                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                                    @endif
                                                    @if  ($comment->rating == 5)
                                                        <i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i>
                                                    @endif
                                                </div>
                                            </div>  @endforeach



                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--End Customer Words-->



    </div>
    <!--End Content-->







    <!--Start Footer-->
    <footer class="footer">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <span>Short Info</span>
                        <h1>Get in touch</h1>
                    </div>
                </div>
            </div>

            <div class="get-touch">
                <div class="row">

                    <div class="col-md-4">
                        <div class="contact-us">
                            <h4>Contact Us</h4>
                            <div class="detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aenean ac.</p>
                                <ul>
                                    <li class="phone"><i class="icon-telephone"></i> <span>+123 55 33 444 888</span></li>
                                    <li class="email"><i class="icon-email-1"></i> <span>Help@pearl.com</span></li>
                                    <li class="location"><i class="icon-home"></i> <span>329 Queensberry Street, North Me bourne, Australia.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="open-hours">
                            <h4>Opening Hour</h4>
                            <div class="detail">
                                <ul>
                                    <li><span class="day">Monday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Tuesday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Wednesday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Thursday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Friday</span> <span class="time">11 am - 08 pm</span></li>
                                    <li><span class="day">Saturday</span> <span class="time">10 am - 11 pm</span></li>
                                    <li><span class="day">Sunday</span> <span class="time">Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="instagram">
                            <h4>Instagram</h4>
                            <div class="detail">
                                <div class="col-md-4"><a href="#."><img src="{{asset('images/instagram-img1.jpg')}}" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="{{asset('images/instagram-img2.jpg')}}"  alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="{{asset('images/instagram-img3.jpg')}}" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="{{asset('images/instagram-img4.jpg')}}"  alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="{{asset('images/instagram-img5.jpg')}}"  alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="{{asset('images/instagram-img6.jpg')}}"  alt=""></a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <div class="about-pearl">

                <div class="row">

                    <div class="col-md-12">
                        <div class="about-detail">
                            <h5>About Pearl</h5>
                            <p>PEARL is an Lorem ipsum porta placerat rutrum aliquet platea accumsan, molestie eros aliquet adipiscing egestas ultrices, leo convallis dolor nisl integer potenti fringilla aenean condimentum ipsum maecenas aliquet consectetur.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="follow-us">
                            <h5>Follow Along</h5>
                            <ul>
                                <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                                <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                                <li><a href="#."><i class="icon-google"></i></a></li>
                                <li><a href="#."><i class="icon-pinterest-p"></i></a></li>
                                <li><a href="#."><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="newsletter">
                            <h5>Newsletter</h5>

                            <div class="field">
                                <p id="nws_success_msg" class="success_msg" style="display:none">Thank You for subscribing.</p>
                                <form name="newsletter_form" id="newsletter_form" method="post" onSubmit="return false">
                                    <input name="nws_email_address" id="nws_email_address" type="text" onKeyPress="remove_newsletter_errors();" onblur="if(this.value == '') { this.value='Enter your e-mail address'}" onfocus="if (this.value == 'Enter your e-mail address') {this.value=''}" value="Enter your e-mail address">
                                    <a href="#." onClick="validateNewsletter();"><i class="icon-icons208"></i></a>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>



        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2016 Pearl Hotel. All rights reserved. by <a href="#.">Brighthemes</a></span>
                        <ul>
                            <li><a href="#.">Permissions and Copyrights</a></li>
                            <li><span class="divid">-</span></li>
                            <li><a href="#.">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <!--End Footer-->








    <a href="#0" class="cd-top"></a>
</div>



<div id="scripts">
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="{{asset('js/scroll-desktop.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/scroll-desktop-smooth.js')}}" ></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}" ></script>

<!-- Paralllax background -->
<script type="text/javascript" src="{{asset('js/parallax.js')}}"></script>

<!-- Countdown -->
<script type="text/javascript"  src="{{asset('js/countdown.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/cart-detail.js')}}" ></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{asset('js/jquery.mmenu.min.all.js')}}" ></script>

<!-- Form Drop Dow -->
<script type="text/javascript" src="{{asset('js/form-dropdown.js')}}" ></script>

<!-- Date Picker and input hover -->
<script type="text/javascript" src="{{asset('js/classie.js')}}" ></script>
<script type="text/javascript" src="{{asset('js/jquery-ui-1.10.3.custom.js')}}" ></script>


<!-- All Scripts -->
<script type="text/javascript" src="{{asset('js/custom.js')}}" ></script>
</div>



<!-- Date Picker -->
<script type="text/javascript">
    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
        inputEl.addEventListener( 'focus', onInputFocus );
        inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
        classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
        if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
        }
    }

    //date picker
    jQuery("#datepicker").datepicker({
        inline: true
    });

    <!-- Form Drop Down -->
    $(document).ready(function() {

        $(".basic-example").heapbox();

    });

</script>


<!-- Revolution Slider -->
<script type="text/javascript">
    jQuery('.tp-banner').show().revolution(
        {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:900,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,

            navigationType:"nexttobullets",
            navigationArrows:"solo",
            navigationStyle:"preview",

            touchenabled:"on",
            onHoverStop:"on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner4",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",



            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            videoJsPath:"rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });
</script>


</body>
