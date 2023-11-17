<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HONO - Multi Purpose HTML Template</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico');}}" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css"> -->

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="assets/sass/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css');}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css');}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css');}}">

</head>

<body>
  
  <!-- Start Header Area -->
  <!-- Start Header Area -->
  <header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets/images/logo/logo_black.png')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--black menu-hover-color--golden">
                            <nav>
                                <ul>
                                    <li>
                                        <a  href="{{url('/')}}">Home </a>
                                        <!-- Sub Menu -->
                                       
                                    </li>
                                    <li>
                                        <a href="">Shop </a>
                                        <!-- Mega Menu -->                               
                                    </li>
                                    <li >
                                        <a href="">Blog</a>
                                        <!-- Sub Menu -->
                                       
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <!-- Sub Menu -->
                                      
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->

                        <!-- Start Header Action Link -->
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">{{$totalItems}}</span>
                                </a>
                            </li>
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                    <i class="icon-menu"></i>
                                </a>
                            </li> --}}
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Start Header Area -->

<!-- Start Mobile Header -->
<div class="mobile-header mobile-header-bg-color--golden section-fluid d-lg-block d-xl-none">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <!-- Start Mobile Left Side -->
                <div class="mobile-header-left">
                    <ul class="mobile-menu-logo">
                        <li>
                            <a href="index.html">
                                <div class="logo">
                                    <img src="{{asset('assets/images/logo/logo_black.png')}}" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Left Side -->

                <!-- Start Mobile Right Side -->
                <div class="mobile-right-side">
                    <ul class="header-action-link action-color--black action-hover-color--golden">
                        <li>
                            <a href="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                <i class="icon-heart"></i>
                                <span class="item-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                <i class="icon-bag"></i>
                                <span class="item-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Right Side -->
            </div>
        </div>
    </div>
</div>

  <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                          
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul 
                            {{-- class="mobile-sub-menu" --}}
                            >
                                <li>
                                    <a href="#">Shop Layout</a>
                                    {{-- <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                        <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                        <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                            <ul 
                            {{-- class="mobile-sub-menu" --}}
                            >
                                <li>
                                    <a href="#">Shop Pages</a>
                                    {{-- <ul class="mobile-sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                            <ul
                             {{-- class="mobile-sub-menu" --}}
                             >
                                <li>
                                    <a href="#">Product Single</a>
                                    {{-- <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Product Default</a></li>
                                        <li><a href="product-details-variable.html">Product Variable</a></li>
                                        <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                        <li><a href="product-details-group.html">Product Group</a></li>
                                        <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                        <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                        <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                        <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                        <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                        <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                        <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>


                            {{-- <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                        <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-full-width.html">Blog Full Width</a>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-list-sidebar-left.html">Blog List Sidebar left</a></li>
                                        <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                        <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                    </ul>
                                </li>
                            </ul> --}}


                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>


                            {{-- <ul class="mobile-sub-menu">
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul> --}}


                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->
            

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
       
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper">
            <h4 class="offcanvas-title">Shopping Cart</h4>
            <ul class="offcanvas-cart">
                <?php foreach($cartItems as $cartItem): ?>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                          
                            <img src="{{asset('uploads/product/resized/600x690'. $cartItem['product']->image)}}" alt=""
                                class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">{{$cartItem['product']->title}}</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">{{$cartItem->quantity}} x </span>
                                <span class="offcanvas-cart-item-details-price">$ {{$cartItem['product']->price}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <?php endforeach; ?>
              
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <span class="offcanvas-cart-total-price-value">$ {{$totalPrice}}</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li><a href="{{url('cart')}}" class="btn btn-block btn-golden">View Cart</a></li>
                <li><a href="{{url('compare')}}" class=" btn btn-block btn-golden mt-5">Checkout</a></li>
            </ul>
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-1/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-2/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="assets/images/product/default/home-3/default-1.jpg" alt=""
                                class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-right">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-golden">Search</button>
        </form>
    </div>
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>
 
@yield('content');

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>  -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>



</html>