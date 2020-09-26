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

    @include('preloader')

    <!--Start Header-->
    @include('header')
    <!--End Header-->

    <!-- Mobile Menu Start -->
    @include('container')
    <!-- Mobile Menu End -->



    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>the menu</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a class="select">Menu</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img"></div>
    </div>
    <div class="wave"></div>
    <!--End Sub Banner-->



    <!--Start Content-->
    <div class="content">

        <div class="our-menu">
            <div class="container">


                <div class="menu-sec">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <span>Starter</span>
                                <h1>what in the beginning</h1>
                            </div>
                        </div>
                    </div>

                    <div class="menu-detail">

                        <div class="row">

                            <div class="col-md-4">
                                <img src="images/menu/dish-img1.jpg" alt="">
                            </div>

                            <div class="col-md-8">
                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$26</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                <div class="menu-sec">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <span>Main Course</span>
                                <h1>HOT DISHES</h1>
                            </div>
                        </div>
                    </div>

                    <div class="menu-detail">

                        <div class="row">


                            <div class="col-md-8">
                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$115</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$115</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$115</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$115</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <img src="images/menu/dish-img2.jpg" alt="">
                                <img src="images/menu/dish-img3.jpg" alt="">
                                <img src="images/menu/dish-img4.jpg" alt="">
                            </div>


                        </div>

                    </div>

                </div>



                <div class="menu-sec">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <span>Soups & Salads</span>
                                <h1>SIDE DISHES</h1>
                            </div>
                        </div>
                    </div>

                    <div class="menu-detail">

                        <div class="row">

                            <div class="col-md-4">
                                <img src="images/menu/dish-img5.jpg" alt="">
                            </div>

                            <div class="col-md-8">
                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$26</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                <div class="menu-sec last">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <span>Drinks & Desserts</span>
                                <h1>MOST DELICIOUS</h1>
                            </div>
                        </div>
                    </div>

                    <div class="menu-detail">

                        <div class="row">


                            <div class="col-md-8">
                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$26</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$26</span></span>
                                    <span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
                                </div>

                                <div class="food-detail">
                                    <span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
                                    <span class="tags">Italian Sausage Soup with Tortellini</span>
                                </div>


                            </div>

                            <div class="col-md-4">
                                <img src="images/menu/dish-img6.jpg" alt="">
                                <img src="images/menu/dish-img7.jpg" alt="">
                            </div>


                        </div>

                    </div>

                </div>


            </div>
        </div>

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
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img1.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img2.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img3.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img4.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img5.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img6.jpg" alt=""></a></div>
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



@include('scripts')
</body>

