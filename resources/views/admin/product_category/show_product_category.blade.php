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
                                            {{-- <div class="col-lg-12">
                                                <h3>Cateogies</h3>
                                                <ul>
                                                    @foreach ($categories as $item)
                                                        <li><a href="{{ route('admin.product.category', $item) }}">{{ $item->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div> --}}

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

    <!-- END: Slider Section -->



    <!-- BEGIN: Popular Products Section -->
    <section class="popularProductsSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="secTitle">{{ $product_category->name }} Category</h2>
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

                                    @foreach($products  as $product)
                                    <div class="col-sm-6 col-lg-4 col-xl-3">
                                        <div class="productItem01">
                                            <div class="pi01Thumb" style="width: 300px; height: 300px; overflow: hidden;">
                                                <img src="{{ asset('uploads/feature_product/'.$product->gallery->first()->feature_image) }}"
                                                    alt="Ulina Product" style="object-fit: cover; width: 100%; height: 100%;"/>
                                                <div class="pi01Actions">
                                                    <a href="javascript:void(0);" class="pi01Cart"><i class="fa-solid fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="productLabels clearfix">
                                                    <span class="plDis">${{ $product->price }}</span>
                                                </div>
                                            </div>
                                            <div class="pi01Details">
                                                <div class="productRatings">
                                                    <div class="productRatingWrap">
                                                        <div class="star-rating"><span></span></div>
                                                    </div>
                                                </div>
                                                <h3><a href="shop_details2.html"></a></h3>
                                                <div class="pi01Price">
                                                    <ins>${{ $product->price }}</ins>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach











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

    <!-- END: Footer Section -->

    <!-- BEGIN: Site Info Section -->

    <!-- END: Site Info Section -->

    <!-- BEGIN: Back To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="fa-solid fa-angles-up"></i></a>
    <!-- END: Back To Top -->

    <!-- BEGIN: Product QuickView  -->

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

