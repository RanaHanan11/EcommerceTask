<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from uiuxom.com/ulina/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 12:10:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock</title>

    <!-- BEGIN: CSS -->
    <link rel="stylesheet" href="{{ asset('front/asset2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/ulina-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/ignore_for_wp.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/preset.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front/asset2/css/responsive.css') }}">
    <!-- END: CSS -->

    <!-- BEGIN: Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('front/asset2/images/favicon.png') }}">
    <!-- END: Favicon -->
</head>

<body>


    <!-- BEGIN: Header 01 Section -->
    <header class="header01 isSticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="headerInner01">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('front/asset2/images/logo.png') }}" alt="Ulina" />
                            </a>
                        </div>
                        <div class="mainMenu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home One</a></li>
                                <li><a href="#">About</a></li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Shop</a>
                                    <div class="megaMenu">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3>Cateogies</h3>
                                                <ul>
                                                    @foreach ($categories as $item)
                                                        <li><a href="{{ route('admin.product.category', $item) }}">{{ $item->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            {{-- <div class="col-lg-4 hideOnMobile">
                                                <div class="lookBook01 lb01M2">
                                                    <div class="lbContent">
                                                        <h3>Be Stylish</h3>
                                                        <h2>Girl’s Latest Fashion</h2>
                                                        <a href="#" class="ulinaLink"><i
                                                                class="fa-solid fa-angle-right"></i>Shop Now</a>
                                                    </div>
                                                    <img src="{{ asset('front/asset2/images/home1/3.png') }}"
                                                        alt="Mans Latest Collection">
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="accessNav">
                            <a href="javascript:void(0);" class="menuToggler"><i class="fa-solid fa-bars"></i>
                                <span>Menu</span></a>
                            <div class="anSocial">
                                <div class="ansWrap">
                                    <a class="fac" href="javascript:void(0);"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a class="twi" href="javascript:void(0);"><i
                                            class="fa-brands fa-twitter"></i></a>
                                    <a class="lin" href="javascript:void(0);"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a class="ins" href="javascript:void(0);"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </div>
                                <a class="tog" href="javascript:void(0);"><i class="fa-solid fa-share-alt"></i></a>
                            </div>

                            <div class="anItems">
                                <div class="anSearch"><a href="javascript:void(0);"><i
                                            class="fa-solid fa-search"></i></a></div>
                                <div class="anUser"><a href="javascript:void(0);"><i class="fa-solid fa-user"></i></a>
                                </div>
                                <div class="anCart">
                                    <a href="javascript:void(0);"><i
                                            class="fa-solid fa-shopping-cart"></i><span>3</span></a>
                                    <div class="cartWidgetArea">
                                        <div class="cartWidgetProduct">
                                            <img src="{{ asset('front/asset2/images/cart/1.jpg') }}"
                                                alt="Marine Design">
                                            <a href="#">Ulina luxurious bag for men women</a>
                                            <div class="cartProductPrice clearfix">
                                                <span class="price"><span><span>$</span>19.00</span></span>
                                            </div>
                                            <a href="javascript:void(0);" class="cartRemoveProducts"><i
                                                    class="fa-solid fa-xmark"></i></a>
                                        </div>
                                        <div class="cartWidgetProduct">
                                            <img src="{{ asset('front/asset2/images/cart/2.jpg') }}"
                                                alt="Draped Neck">
                                            <a href="shop_details2.html">Nasio stainless steel watch</a>
                                            <div class="cartProductPrice clearfix">
                                                <span class="price"><span><span>$</span>41.00</span></span>
                                            </div>
                                            <a href="javascript:void(0);" class="cartRemoveProducts"><i
                                                    class="fa-solid fa-xmark"></i></a>
                                        </div>
                                        <div class="cartWidgetProduct">
                                            <img src="{{ asset('front/asset2/images/cart/3.jpg') }}"
                                                alt="Long Pleated">
                                            <a href="shop_details1.html">Winner men’s comfortable t-shirt</a>
                                            <div class="cartProductPrice clearfix">
                                                <span class="price"><span><span>$</span>52.00</span></span>
                                            </div>
                                            <a href="javascript:void(0);" class="cartRemoveProducts"><i
                                                    class="fa-solid fa-xmark"></i></a>
                                        </div>
                                        <div class="totalPrice">Subtotal: <span
                                                class="price"><span><span>$</span>112.00</span></span></div>
                                        <div class="cartWidgetBTN clearfix">
                                            <a class="cart" href="cart.html">View Cart</a>
                                            <a class="checkout" href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="anSupport">
                                <i class="fa-solid fa-headset"></i>
                                <h3>Helpline</h3>
                                <h3>+123 - 456 - 7890</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END: Header 01 Section -->
    <!-- BEGIN: Slider Section -->
    <section class="sliderSection01">
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-3046" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="{{ asset('front/asset2/images/slider/1.png') }}" alt="Ulina Slider"
                            class="rev-slidebg" />
                        <div class="tp-caption tp-resizeme layer01 shapeImage"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['192','-100','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['71','71','-300','0']"
                            data-width="['auto','auto','60%','auto']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-basealign="slide"><img
                                src="{{ asset('front/asset2/images/slider/s1.png') }}" alt="Slider Shape" /></div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 layer03 personImage"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['300','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-300','0']"
                            data-width="['auto','auto','60%','80%']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-textAlign="['left','left','left','right']"
                            data-basealign="slide"><img src="{{ asset('front/asset2/images/slider/person_1.png') }}"
                                alt="Slider Shape" /></div>
                        <div class="tp-caption jost theSubTitle" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-38','-38','-38','-58']" data-fontsize="['21','21','21','21']"
                            data-fontweight="['500','500','500','500']" data-lineheight="['21','21','21','21']"
                            data-width="['auto','auto','auto','100%']" data-height="none" data-whitespace="nowrap"
                            data-color="['#7b9496','#7b9496','#7b9496','#7b9496']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1100,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','10','10','0']">SUMMER SALE IS
                            ON</div>
                        <div class="tp-caption jost textLayer theTitles" data-x="['left','left','left','center']"
                            data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['68','68','68','28']" data-fontsize="['72','72','52','52']"
                            data-fontweight="['400','400','400','400']" data-lineheight="['84','84','64','64']"
                            data-width="['550','550','450','100%']" data-height="none" data-whitespace="normal"
                            data-color="['#52586d','#52586d','#52586d','#52586d']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">Discover Men’s
                            Latest Fashion</div>
                        <div class="tp-caption ws_nowrap textLayer theBTNS" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['231','231','211','171']" data-fontsize="['16','16','16','16']"
                            data-fontweight="500" data-lineheight="['55','55','55','55']"
                            data-width="['auto','auto','auto','100%']" data-height="auto" data-whitesapce="normal"
                            data-color="#FFFFFF" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']"><a
                                class="ulinaBTN ulinaSliderBTN" href="collections.html"><span>Explore Now</span></a>
                        </div>
                    </li>
                    <li data-index="rs-3047" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="{{ asset('front/asset2/images/slider/1.png') }}" alt="Ulina Slider"
                            class="rev-slidebg" />
                        <div class="tp-caption tp-resizeme layer01 shapeImage"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['192','-100','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['71','71','-300','0']"
                            data-width="['auto','auto','60%','auto']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-basealign="slide"><img
                                src="{{ asset('front/asset2/images/slider/s1.png') }}" alt="Slider Shape" /></div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 layer03 personImage"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['300','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-300','0']"
                            data-width="['auto','auto','60%','80%']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-textAlign="['left','left','left','right']"
                            data-basealign="slide"><img src="{{ asset('front/asset2/images/slider/person_2.png') }}"
                                alt="Slider Shape" /></div>
                        <div class="tp-caption jost theSubTitle" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-38','-38','-38','-58']" data-fontsize="['21','21','21','21']"
                            data-fontweight="['500','500','500','500']" data-lineheight="['21','21','21','21']"
                            data-width="['auto','auto','auto','100%']" data-height="none" data-whitespace="nowrap"
                            data-color="['#7b9496','#7b9496','#7b9496','#7b9496']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1100,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','10','10','0']">SUMMER SALE IS
                            ON</div>
                        <div class="tp-caption jost textLayer theTitles" data-x="['left','left','left','center']"
                            data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['68','68','68','28']" data-fontsize="['72','72','52','52']"
                            data-fontweight="['400','400','400','400']" data-lineheight="['84','84','64','64']"
                            data-width="['550','550','450','100%']" data-height="none" data-whitespace="normal"
                            data-color="['#52586d','#52586d','#52586d','#52586d']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">Discover Women
                            Latest Fashion</div>
                        <div class="tp-caption ws_nowrap textLayer theBTNS" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['231','231','211','171']" data-fontsize="['16','16','16','16']"
                            data-fontweight="500" data-lineheight="['55','55','55','55']"
                            data-width="['auto','auto','auto','100%']" data-height="auto" data-whitesapce="normal"
                            data-color="#FFFFFF" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']"><a
                                class="ulinaBTN ulinaSliderBTN" href="collections.html"><span>Explore Now</span></a>
                        </div>
                    </li>
                    <li data-index="rs-3048" data-transition="random-premium" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="01" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <img src="{{ asset('front/asset2/images/slider/1.png') }}" alt="Ulina Slider"
                            class="rev-slidebg" />
                        <div class="tp-caption tp-resizeme layer01 shapeImage"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['192','-100','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['71','71','-300','0']"
                            data-width="['auto','auto','60%','auto']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-basealign="slide"><img
                                src="{{ asset('front/asset2/images/slider/s1.png') }}" alt="Slider Shape" /></div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 layer03 personImage"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-x="['right','right','right','right']" data-hoffset="['300','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','-300','0']"
                            data-width="['auto','auto','60%','80%']" data-height="auto"
                            data-visibility="['on','on','on','off']" data-textAlign="['left','left','left','right']"
                            data-basealign="slide"><img src="{{ asset('front/asset2/images/slider/person_3.png') }}"
                                alt="Slider Shape" /></div>
                        <div class="tp-caption jost theSubTitle" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-38','-38','-38','-58']" data-fontsize="['21','21','21','21']"
                            data-fontweight="['500','500','500','500']" data-lineheight="['21','21','21','21']"
                            data-width="['auto','auto','auto','100%']" data-height="none" data-whitespace="nowrap"
                            data-color="['#7b9496','#7b9496','#7b9496','#7b9496']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1100,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','10','10','0']">SUMMER SALE IS
                            ON</div>
                        <div class="tp-caption jost textLayer theTitles" data-x="['left','left','left','center']"
                            data-hoffset="['-5','-5','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['68','68','68','28']" data-fontsize="['72','72','52','52']"
                            data-fontweight="['400','400','400','400']" data-lineheight="['84','84','64','64']"
                            data-width="['550','550','450','100%']" data-height="none" data-whitespace="normal"
                            data-color="['#52586d','#52586d','#52586d','#52586d']" data-type="text"
                            data-responsive_offset="off"
                            data-frames='[{"delay":1200,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['left','left','left','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']">Discover Summer
                            Latest Fashion</div>
                        <div class="tp-caption ws_nowrap textLayer theBTNS" data-x="['left','left','left','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['231','231','211','171']" data-fontsize="['16','16','16','16']"
                            data-fontweight="500" data-lineheight="['55','55','55','55']"
                            data-width="['auto','auto','auto','100%']" data-height="auto" data-whitesapce="normal"
                            data-color="#FFFFFF" data-type="text" data-responsive_offset="off"
                            data-frames='[{"delay":1300,"speed":600,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="['0','0','0','0']"
                            data-paddingright="['0','0','0','0']" data-paddingbottom="['0','0','0','0']"
                            data-paddingleft="['0','0','0','0']" data-marginleft="['0','0','0','0']"><a
                                class="ulinaBTN ulinaSliderBTN" href="collections.html"><span>Explore Now</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: Slider Section -->



    <!-- BEGIN: Popular Products Section -->
    <section class="popularProductsSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="secTitle">Popular Products</h2>
                    <p class="secDesc">Showing our latest arrival on this summer</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="productTabs">
                        {{-- <ul class="nav productTabsNav absolutes" id="productTab" role="tablist">
                            <li role="presentation">
                                <button class="active" id="men-tab" data-bs-toggle="tab"
                                    data-bs-target="#men-tab-pane" type="button" role="tab"
                                    aria-controls="men-tab-pane" aria-selected="true">Men</button>
                            </li>
                            <li role="presentation">
                                <button id="women-tab" data-bs-toggle="tab" data-bs-target="#women-tab-pane"
                                    type="button" role="tab" aria-controls="women-tab-pane"
                                    aria-selected="false">Women</button>
                            </li>
                            <li role="presentation">
                                <button id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids-tab-pane"
                                    type="button" role="tab" aria-controls="kids-tab-pane"
                                    aria-selected="false">Kids</button>
                            </li>
                            <li role="presentation">
                                <button id="accessories-tab" data-bs-toggle="tab"
                                    data-bs-target="#accessories-tab-pane" type="button" role="tab"
                                    aria-controls="accessories-tab-pane" aria-selected="false">Accessories</button>
                            </li>
                        </ul> --}}
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="men-tab-pane" role="tabpanel"
                                aria-labelledby="men-tab" tabindex="0">
                                <div class="row">

                                    @foreach($products as $product)
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb" style="width: 300px; height: 300px; overflow: hidden;">
                                                <img src="{{ asset('uploads/feature_product/'.$product->feature_image) }}"
                                                    alt="Ulina Product" style="object-fit: cover; width: 100%; height: 100%;"/>
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i class="fa-solid fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">${{$product->price}}</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                </div>
                                                <h3><a href="shop_details2.html">{{$product->title}}</a></h3>
                                                <div class="pi01Price">
                                                    <ins>${{$product->price}}</ins>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach











                                </div>
                            </div>
                            <div class="tab-pane fade" id="women-tab-pane" role="tabpanel"
                                aria-labelledby="women-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="{{ asset('front/asset2/images/products/9.jpg') }}"
                                                    alt="Ulina Product" />
                                                <img src="{{ asset('front/asset2/images/products/9.1.jpg') }}"
                                                    alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plHot float-end">Hot</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details1.html">Mini sleeve gray t-shirt</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$39</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_5"
                                                                value="Blue" id="color_2_5_1_blue" />
                                                            <label for="color_2_5_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_5" value="Yellow"
                                                                id="color_2_5_2_blue" />
                                                            <label for="color_2_5_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_5" value="Red"
                                                                id="color_2_5_3_blue" />
                                                            <label for="color_2_5_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_5" value="Blue"
                                                                id="size1_2_5_1" />
                                                            <label for="size1_2_5_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_5" value="Yellow"
                                                                id="size1_2_5_2" />
                                                            <label for="size1_2_5_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_5" value="Red"
                                                                id="size1_2_5_3" />
                                                            <label for="size1_2_5_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="{{ asset('front/asset2/images/products/10.jpg') }}"
                                                    alt="Ulina Product" />
                                                <img src="{{ asset('front/asset2/images/products/10.1.jpg') }}"
                                                    alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">18 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Polyester silk blazer suit for
                                                        men</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$499</ins>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_6"
                                                                value="Blue" id="color_2_6_1_blue" />
                                                            <label for="color_2_6_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_6" value="Yellow"
                                                                id="color_2_6_2_blue" />
                                                            <label for="color_2_6_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_6" value="Red"
                                                                id="color_2_6_3_blue" />
                                                            <label for="color_2_6_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_6" value="Blue"
                                                                id="size1_2_6_1" />
                                                            <label for="size1_2_6_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_6" value="Yellow"
                                                                id="size1_2_6_2" />
                                                            <label for="size1_2_6_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_6" value="Red"
                                                                id="size1_2_6_3" />
                                                            <label for="size1_2_6_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/11.jpg" alt="Ulina Product" />
                                                <img src="images/products/11.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plSale float-end">sale</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">10 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details1.html">Women’s long cardigans</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$89</ins>
                                                    <del>$99</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_7"
                                                                value="Blue" id="color_2_7_1_blue" />
                                                            <label for="color_2_7_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_7" value="Yellow"
                                                                id="color_2_7_2_blue" />
                                                            <label for="color_2_7_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_7" value="Red"
                                                                id="color_2_7_3_blue" />
                                                            <label for="color_2_7_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_7" value="Blue"
                                                                id="size1_2_7_1" />
                                                            <label for="size1_2_7_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_7" value="Yellow"
                                                                id="size1_2_7_2" />
                                                            <label for="size1_2_7_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_7" value="Red"
                                                                id="size1_2_7_3" />
                                                            <label for="size1_2_7_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/12.jpg" alt="Ulina Product" />
                                                <img src="images/products/12.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details2.html">Ulina bag for women</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$49</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_8"
                                                                value="Blue" id="color_2_8_1_blue" />
                                                            <label for="color_2_8_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_8" value="Yellow"
                                                                id="color_2_8_2_blue" />
                                                            <label for="color_2_8_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_8" value="Red"
                                                                id="color_2_8_3_blue" />
                                                            <label for="color_2_8_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_8" value="Blue"
                                                                id="size1_2_8_1" />
                                                            <label for="size1_2_8_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_8" value="Yellow"
                                                                id="size1_2_8_2" />
                                                            <label for="size1_2_8_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_8" value="Red"
                                                                id="size1_2_8_3" />
                                                            <label for="size1_2_8_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/5.jpg" alt="Ulina Product" />
                                                <img src="images/products/5.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">- $29</span>
                                                    <span class="plSale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">10 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Stylish white leather bag</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$29</ins>
                                                    <del>$56</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_1"
                                                                value="Blue" id="color_2_1_1_blue" />
                                                            <label for="color_2_1_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_1" value="Yellow"
                                                                id="color_2_1_2_blue" />
                                                            <label for="color_2_1_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_1" value="Red"
                                                                id="color_2_1_3_blue" />
                                                            <label for="color_2_1_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_1" value="Blue"
                                                                id="size1_2_1_1" />
                                                            <label for="size1_2_1_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_1" value="Yellow"
                                                                id="size1_2_1_2" />
                                                            <label for="size1_2_1_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_1" value="Red"
                                                                id="size1_2_1_3" />
                                                            <label for="size1_2_1_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/6.jpg" alt="Ulina Product" />
                                                <img src="images/products/6.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plNew float-end">New</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">19 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details1.html">Luxury maroon sweater</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$49</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_2"
                                                                value="Blue" id="color_2_2_1_blue" />
                                                            <label for="color_2_2_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_2" value="Yellow"
                                                                id="color_2_2_2_blue" />
                                                            <label for="color_2_2_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_2" value="Red"
                                                                id="color_2_2_3_blue" />
                                                            <label for="color_2_2_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_2" value="Blue"
                                                                id="size1_2_2_1" />
                                                            <label for="size1_2_2_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_2" value="Yellow"
                                                                id="size1_2_2_2" />
                                                            <label for="size1_2_2_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_2" value="Red"
                                                                id="size1_2_2_3" />
                                                            <label for="size1_2_2_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/7.jpg" alt="Ulina Product" />
                                                <img src="images/products/7.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">-89</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details2.html">Lineal louse cotton tops</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$89</ins>
                                                    <del>$99</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_3"
                                                                value="Blue" id="color_2_3_1_blue" />
                                                            <label for="color_2_3_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_3" value="Yellow"
                                                                id="color_2_3_2_blue" />
                                                            <label for="color_2_3_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_3" value="Red"
                                                                id="color_2_3_3_blue" />
                                                            <label for="color_2_3_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_3" value="Blue"
                                                                id="size1_2_3_1" />
                                                            <label for="size1_2_3_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_3" value="Yellow"
                                                                id="size1_2_3_2" />
                                                            <label for="size1_2_3_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_3" value="Red"
                                                                id="size1_2_3_3" />
                                                            <label for="size1_2_3_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/8.jpg" alt="Ulina Product" />
                                                <img src="images/products/8.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">13 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Men’s black stylish half shirt</a>
                                                </h3>
                                                <div class="pi01Price">
                                                    <ins>$129</ins>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_2_4"
                                                                value="Blue" id="color_2_4_1_blue" />
                                                            <label for="color_2_4_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_2_4" value="Yellow"
                                                                id="color_2_4_2_blue" />
                                                            <label for="color_2_4_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_2_4" value="Red"
                                                                id="color_2_4_3_blue" />
                                                            <label for="color_2_4_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_4" value="Blue"
                                                                id="size1_2_4_1" />
                                                            <label for="size1_2_4_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_4" value="Yellow"
                                                                id="size1_2_4_2" />
                                                            <label for="size1_2_4_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_2_4" value="Red"
                                                                id="size1_2_4_3" />
                                                            <label for="size1_2_4_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kids-tab-pane" role="tabpanel"
                                aria-labelledby="kids-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/7.jpg" alt="Ulina Product" />
                                                <img src="images/products/7.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">-89</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details1.html">Lineal louse cotton tops</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$89</ins>
                                                    <del>$99</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_3"
                                                                value="Blue" id="color_3_3_1_blue" />
                                                            <label for="color_3_3_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_3" value="Yellow"
                                                                id="color_3_3_2_blue" />
                                                            <label for="color_3_3_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_3" value="Red"
                                                                id="color_3_3_3_blue" />
                                                            <label for="color_3_3_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_3" value="Blue"
                                                                id="size1_3_3_1" />
                                                            <label for="size1_3_3_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_3" value="Yellow"
                                                                id="size1_3_3_2" />
                                                            <label for="size1_3_3_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_3" value="Red"
                                                                id="size1_3_3_3" />
                                                            <label for="size1_3_3_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/8.jpg" alt="Ulina Product" />
                                                <img src="images/products/8.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">13 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Men’s black stylish half shirt</a>
                                                </h3>
                                                <div class="pi01Price">
                                                    <ins>$129</ins>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_4"
                                                                value="Blue" id="color_3_4_1_blue" />
                                                            <label for="color_3_4_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_4" value="Yellow"
                                                                id="color_3_4_2_blue" />
                                                            <label for="color_3_4_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_4" value="Red"
                                                                id="color_3_4_3_blue" />
                                                            <label for="color_3_4_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_4" value="Blue"
                                                                id="size1_3_4_1" />
                                                            <label for="size1_3_4_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_4" value="Yellow"
                                                                id="size1_3_4_2" />
                                                            <label for="size1_3_4_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_4" value="Red"
                                                                id="size1_3_4_3" />
                                                            <label for="size1_3_4_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/5.jpg" alt="Ulina Product" />
                                                <img src="images/products/5.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">- $29</span>
                                                    <span class="plSale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">10 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details1.html">Stylish white leather bag</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$29</ins>
                                                    <del>$56</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_1"
                                                                value="Blue" id="color_3_1_1_blue" />
                                                            <label for="color_3_1_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_1" value="Yellow"
                                                                id="color_3_1_2_blue" />
                                                            <label for="color_3_1_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_1" value="Red"
                                                                id="color_3_1_3_blue" />
                                                            <label for="color_3_1_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_1" value="Blue"
                                                                id="size1_3_1_1" />
                                                            <label for="size1_3_1_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_1" value="Yellow"
                                                                id="size1_3_1_2" />
                                                            <label for="size1_3_1_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_1" value="Red"
                                                                id="size1_3_1_3" />
                                                            <label for="size1_3_1_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/6.jpg" alt="Ulina Product" />
                                                <img src="images/products/6.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plNew float-end">New</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">19 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Luxury maroon sweater</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$49</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_2"
                                                                value="Blue" id="color_3_2_1_blue" />
                                                            <label for="color_3_2_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_2" value="Yellow"
                                                                id="color_3_2_2_blue" />
                                                            <label for="color_3_2_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_2" value="Red"
                                                                id="color_3_2_3_blue" />
                                                            <label for="color_3_2_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_2" value="Blue"
                                                                id="size1_3_2_1" />
                                                            <label for="size1_3_2_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_2" value="Yellow"
                                                                id="size1_3_2_2" />
                                                            <label for="size1_3_2_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_2" value="Red"
                                                                id="size1_3_2_3" />
                                                            <label for="size1_3_2_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/11.jpg" alt="Ulina Product" />
                                                <img src="images/products/11.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plSale float-end">sale</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">10 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details1.html">Women’s long cardigans</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$89</ins>
                                                    <del>$99</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_7"
                                                                value="Blue" id="color_3_7_1_blue" />
                                                            <label for="color_3_7_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_7" value="Yellow"
                                                                id="color_3_7_2_blue" />
                                                            <label for="color_3_7_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_7" value="Red"
                                                                id="color_3_7_3_blue" />
                                                            <label for="color_3_7_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_7" value="Blue"
                                                                id="size1_3_7_1" />
                                                            <label for="size1_3_7_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_7" value="Yellow"
                                                                id="size1_3_7_2" />
                                                            <label for="size1_3_7_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_7" value="Red"
                                                                id="size1_3_7_3" />
                                                            <label for="size1_3_7_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/12.jpg" alt="Ulina Product" />
                                                <img src="images/products/12.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details2.html">Ulina bag for women</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$49</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_8"
                                                                value="Blue" id="color_3_8_1_blue" />
                                                            <label for="color_3_8_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_8" value="Yellow"
                                                                id="color_3_8_2_blue" />
                                                            <label for="color_3_8_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_8" value="Red"
                                                                id="color_3_8_3_blue" />
                                                            <label for="color_3_8_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_8" value="Blue"
                                                                id="size1_3_8_1" />
                                                            <label for="size1_3_8_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_8" value="Yellow"
                                                                id="size1_3_8_2" />
                                                            <label for="size1_3_8_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_8" value="Red"
                                                                id="size1_3_8_3" />
                                                            <label for="size1_3_8_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/9.jpg" alt="Ulina Product" />
                                                <img src="images/products/9.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plHot float-end">Hot</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details1.html">Mini sleeve gray t-shirt</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$39</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_5"
                                                                value="Blue" id="color_3_5_1_blue" />
                                                            <label for="color_3_5_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_5" value="Yellow"
                                                                id="color_3_5_2_blue" />
                                                            <label for="color_3_5_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_5" value="Red"
                                                                id="color_3_5_3_blue" />
                                                            <label for="color_3_5_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_5" value="Blue"
                                                                id="size1_3_5_1" />
                                                            <label for="size1_3_5_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_5" value="Yellow"
                                                                id="size1_3_5_2" />
                                                            <label for="size1_3_5_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_5" value="Red"
                                                                id="size1_3_5_3" />
                                                            <label for="size1_3_5_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/10.jpg" alt="Ulina Product" />
                                                <img src="images/products/10.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">18 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Polyester silk blazer suit for
                                                        men</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$499</ins>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_3_6"
                                                                value="Blue" id="color_3_6_1_blue" />
                                                            <label for="color_3_6_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_3_6" value="Yellow"
                                                                id="color_3_6_2_blue" />
                                                            <label for="color_3_6_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_3_6" value="Red"
                                                                id="color_3_6_3_blue" />
                                                            <label for="color_3_6_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_6" value="Blue"
                                                                id="size1_3_6_1" />
                                                            <label for="size1_3_6_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_6" value="Yellow"
                                                                id="size1_3_6_2" />
                                                            <label for="size1_3_6_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_3_6" value="Red"
                                                                id="size1_3_6_3" />
                                                            <label for="size1_3_6_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="accessories-tab-pane" role="tabpanel"
                                aria-labelledby="accessories-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/7.jpg" alt="Ulina Product" />
                                                <img src="images/products/7.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">-89</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details1.html">Lineal louse cotton tops</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$89</ins>
                                                    <del>$99</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_3"
                                                                value="Blue" id="color_4_3_1_blue" />
                                                            <label for="color_4_3_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_3" value="Yellow"
                                                                id="color_4_3_2_blue" />
                                                            <label for="color_4_3_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_3" value="Red"
                                                                id="color_4_3_3_blue" />
                                                            <label for="color_4_3_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_3" value="Blue"
                                                                id="size1_4_3_1" />
                                                            <label for="size1_4_3_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_3" value="Yellow"
                                                                id="size1_4_3_2" />
                                                            <label for="size1_4_3_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_3" value="Red"
                                                                id="size1_4_3_3" />
                                                            <label for="size1_4_3_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/5.jpg" alt="Ulina Product" />
                                                <img src="images/products/5.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">- $29</span>
                                                    <span class="plSale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">10 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details1.html">Stylish white leather bag</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$29</ins>
                                                    <del>$56</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_1"
                                                                value="Blue" id="color_4_1_1_blue" />
                                                            <label for="color_4_1_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_1" value="Yellow"
                                                                id="color_4_1_2_blue" />
                                                            <label for="color_4_1_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_1" value="Red"
                                                                id="color_4_1_3_blue" />
                                                            <label for="color_4_1_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_1" value="Blue"
                                                                id="size1_4_1_1" />
                                                            <label for="size1_4_1_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_1" value="Yellow"
                                                                id="size1_4_1_2" />
                                                            <label for="size1_4_1_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_1" value="Red"
                                                                id="size1_4_1_3" />
                                                            <label for="size1_4_1_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/6.jpg" alt="Ulina Product" />
                                                <img src="images/products/6.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plNew float-end">New</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">19 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Luxury maroon sweater</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$49</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_2"
                                                                value="Blue" id="color_4_2_1_blue" />
                                                            <label for="color_4_2_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_2" value="Yellow"
                                                                id="color_4_2_2_blue" />
                                                            <label for="color_4_2_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_2" value="Red"
                                                                id="color_4_2_3_blue" />
                                                            <label for="color_4_2_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_2" value="Blue"
                                                                id="size1_4_2_1" />
                                                            <label for="size1_4_2_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_2" value="Yellow"
                                                                id="size1_4_2_2" />
                                                            <label for="size1_4_2_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_2" value="Red"
                                                                id="size1_4_2_3" />
                                                            <label for="size1_4_2_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/8.jpg" alt="Ulina Product" />
                                                <img src="images/products/8.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">13 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Men’s black stylish half shirt</a>
                                                </h3>
                                                <div class="pi01Price">
                                                    <ins>$129</ins>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_4"
                                                                value="Blue" id="color_4_4_1_blue" />
                                                            <label for="color_4_4_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_4" value="Yellow"
                                                                id="color_4_4_2_blue" />
                                                            <label for="color_4_4_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_4" value="Red"
                                                                id="color_4_4_3_blue" />
                                                            <label for="color_4_4_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_4" value="Blue"
                                                                id="size1_4_4_1" />
                                                            <label for="size1_4_4_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_4" value="Yellow"
                                                                id="size1_4_4_2" />
                                                            <label for="size1_4_4_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_4" value="Red"
                                                                id="size1_4_4_3" />
                                                            <label for="size1_4_4_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/11.jpg" alt="Ulina Product" />
                                                <img src="images/products/11.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plSale float-end">sale</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">10 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Women’s long cardigans</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$89</ins>
                                                    <del>$99</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_7"
                                                                value="Blue" id="color_4_7_1_blue" />
                                                            <label for="color_4_7_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_7" value="Yellow"
                                                                id="color_4_7_2_blue" />
                                                            <label for="color_4_7_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_7" value="Red"
                                                                id="color_4_7_3_blue" />
                                                            <label for="color_4_7_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_7" value="Blue"
                                                                id="size1_4_7_1" />
                                                            <label for="size1_4_7_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_7" value="Yellow"
                                                                id="size1_4_7_2" />
                                                            <label for="size1_4_7_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_7" value="Red"
                                                                id="size1_4_7_3" />
                                                            <label for="size1_4_7_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/12.jpg" alt="Ulina Product" />
                                                <img src="images/products/12.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details2.html">Ulina bag for women</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$49</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_8"
                                                                value="Blue" id="color_4_8_1_blue" />
                                                            <label for="color_4_8_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_8" value="Yellow"
                                                                id="color_4_8_2_blue" />
                                                            <label for="color_4_8_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_8" value="Red"
                                                                id="color_4_8_3_blue" />
                                                            <label for="color_4_8_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_8" value="Blue"
                                                                id="size1_4_8_1" />
                                                            <label for="size1_4_8_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_8" value="Yellow"
                                                                id="size1_4_8_2" />
                                                            <label for="size1_4_8_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_8" value="Red"
                                                                id="size1_4_8_3" />
                                                            <label for="size1_4_8_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01 pi01NoRating">
                                            <div class="pi01Thumb">
                                                <img src="images/products/9.jpg" alt="Ulina Product" />
                                                <img src="images/products/9.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plHot float-end">Hot</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <h3><a href="shop_details2.html">Mini sleeve gray t-shirt</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$39</ins>
                                                    <del>$60</del>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_5"
                                                                value="Blue" id="color_4_5_1_blue" />
                                                            <label for="color_4_5_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_5" value="Yellow"
                                                                id="color_4_5_2_blue" />
                                                            <label for="color_4_5_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_5" value="Red"
                                                                id="color_4_5_3_blue" />
                                                            <label for="color_4_5_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_5" value="Blue"
                                                                id="size1_4_5_1" />
                                                            <label for="size1_4_5_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_5" value="Yellow"
                                                                id="size1_4_5_2" />
                                                            <label for="size1_4_5_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_5" value="Red"
                                                                id="size1_4_5_3" />
                                                            <label for="size1_4_5_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb">
                                                <img src="images/products/10.jpg" alt="Ulina Product" />
                                                <img src="images/products/10.1.jpg" alt="Ulina Product" />
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i
                                                            class="fa-solid fa-shopping-cart"></i></a>
                                                    <a href="javascript:void(0);" class="pi01QuickView"><i
                                                            class="fa-solid fa-arrows-up-down-left-right"></i></a>
                                                    <a href="javascript:void(0);" class="pi01Wishlist"><i
                                                            class="fa-solid fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                    <div class="ratingCounts">18 Reviews</div>
                                                </div>
                                                <h3><a href="shop_details2.html">Polyester silk blazer suit for
                                                        men</a></h3>
                                                <div class="pi01Price">
                                                    <ins>$499</ins>
                                                </div>
                                                <div class="pi01Variations">
                                                    <div class="pi01VColor">
                                                        <div class="pi01VCItem">
                                                            <input checked type="radio" name="color_4_6"
                                                                value="Blue" id="color_4_6_1_blue" />
                                                            <label for="color_4_6_1_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem yellows">
                                                            <input type="radio" name="color_4_6" value="Yellow"
                                                                id="color_4_6_2_blue" />
                                                            <label for="color_4_6_2_blue"></label>
                                                        </div>
                                                        <div class="pi01VCItem reds">
                                                            <input type="radio" name="color_4_6" value="Red"
                                                                id="color_4_645678_3_blue" />
                                                            <label for="color_4_645678_3_blue"></label>
                                                        </div>
                                                    </div>
                                                    <div class="pi01VSize">
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_6" value="Blue"
                                                                id="size1_4_6_1" />
                                                            <label for="size1_4_6_1">S</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_6" value="Yellow"
                                                                id="size1_4_6_2" />
                                                            <label for="size1_4_6_2">M</label>
                                                        </div>
                                                        <div class="pi01VSItem">
                                                            <input type="radio" name="size_4_6" value="Red"
                                                                id="size1_4_6_3" />
                                                            <label for="size1_4_6_3">XL</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Popular Products Section -->




    <!-- BEGIN: Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <aside class="widget aboutWidget">
                        <div class="footerLogo">
                            <a href="index.html"><img src="images/logo2.png" alt="Ulina" /></a>
                        </div>
                        <div class="aboutWidContent">
                            Quis nostrud exercitatin ullamc boris nisi ut aliquip ex ea commodo conse.
                        </div>
                        <div class="subscribForm">
                            <form method="post" action="#">
                                <input type="email" name="subsEmail" placeholder="Your email here" />
                                <button type="submit"><i class="fa-solid fa-envelope"></i></button>
                            </form>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="widget">
                        <h3 class="widgetTitle">Address</h3>
                        <div class="addressContent">
                            <div class="singleAddress">
                                <i class="fa-solid fa-location-dot"></i>
                                20, Awesome Road,
                                New York, Usa 4D BS3
                            </div>
                            <div class="singleAddress">
                                <i class="fa-solid fa-phone"></i>
                                +123 456 7890
                            </div>
                            <div class="singleAddress">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:hello@ulina.com">hello@ulina.com</a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-6">
                    <aside class="widget">
                        <h3 class="widgetTitle">Useful Links</h3>
                        <ul>
                            <li><a href="javascript:void(0);">Shop Coupon</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="javascript:void(0);">Carrer</a></li>
                            <li><a href="javascript:void(0);">Supports</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="widget twoColMenu">
                        <h3 class="widgetTitle">Categories</h3>
                        <ul>
                            <li><a href="shop_full_width.html">Men</a></li>
                            <li><a href="shop_left_sidebar.html">Bags</a></li>
                            <li><a href="shop_right_sidebar.html">Women</a></li>
                            <li><a href="shop_full_width.html">Jewellery</a></li>
                            <li><a href="shop_left_sidebar.html">Kids</a></li>
                            <li><a href="shop_left_sidebar.html">Cloths</a></li>
                            <li><a href="shop_right_sidebar.html">Accesories</a></li>
                            <li><a href="shop_full_width.html">Beauty Items</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="row footerAccessRow">
                <div class="col-md-6">
                    <div class="footerSocial">
                        <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footerPayments">
                        <a href="javascript:void(0);"><i class="fa-brands fa-cc-paypal"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-cc-stripe"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-cc-mastercard"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-cc-visa"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-cc-apple-pay"></i></a>
                        <a href="javascript:void(0);"><i class="fa-brands fa-cc-amazon-pay"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footerBar"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer Section -->

    <!-- BEGIN: Site Info Section -->
    <section class="siteInfoSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="siteInfo">
                        All rights reserved &nbsp;<a href="index.html">Ulina</a>&nbsp;&nbsp;&copy;&nbsp;&nbsp;2022
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footerNav">
                        <ul>
                            <li><a href="javascript:void(0);">Terms & Condition</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);">Legal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Site Info Section -->

    <!-- BEGIN: Back To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-angles-up"></i></a>
    <!-- END: Back To Top -->

    <!-- BEGIN: Product QuickView  -->
    <div class="modal fade productQuickView" id="productQuickView" tabindex="-1"
        data-aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="quickViewCloser" data-bs-dismiss="modal"
                    aria-label="Close"><span></span></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="productGalleryWrap">
                                <div class="productGalleryPopup">
                                    <div class="pgImage">
                                        <img src="images/product_details/p1.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p2.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p3.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p4.jpg" alt="Product Image" />
                                    </div>
                                    <div class="pgImage">
                                        <img src="images/product_details/p5.jpg" alt="Product Image" />
                                    </div>
                                </div>
                                <div class="productGalleryThumbWrap">
                                    <div class="productGalleryThumbPopup">
                                        <div class="pgtImage">
                                            <img src="images/product_details/t1.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t2.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t3.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t4.jpg" alt="Product Image" />
                                        </div>
                                        <div class="pgtImage">
                                            <img src="images/product_details/t5.jpg" alt="Product Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="productContent">
                                <div class="pcCategory">
                                    <a href="shop_right_sidebar.html">Fashion</a>, <a
                                        href="shop_left_sidebar.html">Sports</a>
                                </div>
                                <h2><a href="shop_details1.html">Ulina luxurious shirt for men</a></h2>
                                <div class="pi01Price">
                                    <ins>$108</ins>
                                    <del>$120</del>
                                </div>
                                <div class="productRadingsStock clearfix">
                                    <div class="productRatings float-start">
                                        <div class="productRatingWrap">
                                            <div class="star-rating"><span></span></div>
                                        </div>
                                        <div class="ratingCounts">52 Reviews</div>
                                    </div>
                                    <div class="productStock float-end">
                                        <span>Available :</span> 12
                                    </div>
                                </div>
                                <div class="pcExcerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusncididunt ut
                                    labo re et dolore magna aliqua. Ut enim ad minim
                                    veniam
                                </div>
                                <div class="pcVariations">
                                    <div class="pcVariation">
                                        <span>Color</span>
                                        <div class="pcvContainer">
                                            <div class="pi01VCItem">
                                                <input checked type="radio" name="color_4_6" value="Blue"
                                                    id="color_4_634_1_blue" />
                                                <label for="color_4_634_1_blue"></label>
                                            </div>
                                            <div class="pi01VCItem yellows">
                                                <input type="radio" name="color_4_6" value="Yellow"
                                                    id="color_4_6sdf_2_blue" />
                                                <label for="color_4_6sdf_2_blue"></label>
                                            </div>
                                            <div class="pi01VCItem reds">
                                                <input type="radio" name="color_4_6" value="Red"
                                                    id="color_4_6_3_blue" />
                                                <label for="color_4_6_3_blue"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pcVariation pcv2">
                                        <span>Size</span>
                                        <div class="pcvContainer">
                                            <div class="pswItem">
                                                <input checked="" type="radio" name="ws_1"
                                                    value="S" id="ws_1_s">
                                                <label for="ws_1_s">S</label>
                                            </div>
                                            <div class="pswItem">
                                                <input type="radio" name="ws_1" value="M"
                                                    id="ws_1_m">
                                                <label for="ws_1_m">M</label>
                                            </div>
                                            <div class="pswItem">
                                                <input type="radio" name="ws_1" value="L"
                                                    id="ws_1_l">
                                                <label for="ws_1_l">L</label>
                                            </div>
                                            <div class="pswItem">
                                                <input type="radio" name="ws_1" value="XL"
                                                    id="ws_1_xl">
                                                <label for="ws_1_xl">XL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pcBtns">
                                    <div class="quantity clearfix">
                                        <button type="button" name="btnMinus" class="qtyBtn btnMinus">_</button>
                                        <input type="number" class="carqty input-text qty text" name="quantity"
                                            value="01">
                                        <button type="button" name="btnPlus" class="qtyBtn btnPlus">+</button>
                                    </div>
                                    <button type="submit" class="ulinaBTN"><span>Add to Cart</span></button>
                                </div>
                                <div class="pcMeta">
                                    <p>
                                        <span>Sku</span>
                                        <a href="javascript:void(0);">3489 JE0765</a>
                                    </p>
                                    <p class="pcmTags">
                                        <span>Tags:</span>
                                        <a href="javascript:void(0);">Fashion</a>, <a
                                            href="javascript:void(0);">Bags</a>, <a
                                            href="javascript:void(0);">Girls</a>
                                    </p>
                                    <p class="pcmSocial">
                                        <span>Share</span>
                                        <a class="fac" href="javascript:void(0);"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                        <a class="twi" href="javascript:void(0);"><i
                                                class="fa-brands fa-twitter"></i></a>
                                        <a class="lin" href="javascript:void(0);"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                        <a class="ins" href="javascript:void(0);"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Product QuickView -->

    <!-- BEGIN: JS -->
    <script src="{{ asset('front/asset2/js/jquery.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/asset2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/shuffle.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/owl.carousel.filter.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('front/asset2/js/lightcase.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('front/asset2/js/slick.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/circle-progress.js') }}"></script>

    <script src="{{ asset('front/asset2/js/gmaps.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCA_EDGVQleQtHIp2fZ-V56QFRbRL8cXT8"></script>

    <script src="{{ asset('front/asset2/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('front/asset2/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script src="{{ asset('front/asset2/js/theme.js') }}"></script>
    <!-- END: JS -->
</body>

<!-- Mirrored from uiuxom.com/ulina/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jun 2023 12:11:51 GMT -->

</html>
