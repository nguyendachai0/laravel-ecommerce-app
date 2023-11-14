 <!-- Start Service Section -->
 <div class="service-promo-section section-top-gap-100">
    <div class="service-wrapper">
        <div class="container">
            <div class="row">
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-1.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">FREE SHIPPING</h6>
                            <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
              
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-2.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">30 DAYS MONEY BACK</h6>
                            <p>100% satisfaction guaranteed, or get your money back within 30 days!</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-3.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">SAFE PAYMENT</h6>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="600">
                        <div class="image">
                            <img src="assets/images/icons/service-promo-4.png" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">LOYALTY CUSTOMER</h6>
                            <p>Card for the other 30% of their purchases at a rate of 1% cash back.</p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Service Section -->

<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100 section-fluid">
    <div class="banner-wrapper">
        <div class="container-fluid">
            <div class="row mb-n6">

                
                <div class="col-lg-6 col-12 mb-6">
                    <!-- Start Banner Single Item -->
                    <?php foreach ($top1Categories as $category): ?>
                    
                    <div class="banner-single-item banner-style-1 banner-animation img-responsive"
                        data-aos="fade-up" data-aos-delay="0">
                        <div class="image">
                           
                            <img src="{{asset('uploads/category/'.$category->image);}}" alt="">
                        </div>
                        <div class="content">
                            <h4 class="title">{{$category->title}}</h4>
                            <h5 class="sub-title">We design your home</h5>
                            <a href="product-details-default.html"
                                class="btn btn-lg btn-outline-golden icon-space-left"><span
                                    class="d-flex align-items-center">discover now <i
                                        class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- End Banner Single Item -->
                </div>

                <div class="col-lg-6 col-12 mb-6">
                    <div class="row mb-n6">
                        <!-- Start Banner Single Item -->

                        <?php foreach ($categories as $category): ?>
                        <div class="col-lg-6 col-sm-6 mb-6">
                            <div class="banner-single-item banner-style-2 banner-animation img-responsive"
                                data-aos="fade-up" data-aos-delay="0">
                                <div class="image">
                                    <img src="{{asset('uploads/category/'.$category->image);}}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">{{$category->title}} 
                                        </h4>
                                    <a href="product-details-default.html" class="link-text"><span>Shop
                                            now</span></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                 
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Banner Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">THE NEW ARRIVALS</h3>
                            <p>Preorder now to receive exclusive deals & gifts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-2rows default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-2row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Product Default Single Item -->

                                <?php foreach ($products as $product): ?>
                                <div class="product-default-single-item product-color--golden swiper-slide">
                                    <div class="image-box">
                                        <a href="product/{{$product->slug}}" class="image-link">
                                            <img src="{{asset('uploads/product/resized/600x690'.$product->image);}}" alt="">
                                            {{-- <img src="assets/images/product/default/home-1/default-2.jpg" alt=""> --}}
                                        </a>
                                        <div class="tag">
                                            <span>sale</span>
                                        </div>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <form style="display:inline;" action="{{ route('cart.add', $product->id) }}" method="post">
                                                    @csrf
                                                    <button style="color:white;" type="submit">Add to Cart</button>
                                                </form>
                                                
{{--                                              
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalAddcart">Add to Cart
                                                </a> --}}
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalQuickview"><i
                                                        class="icon-magnifier"></i></a>
                                                <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                <a href="compare.html"><i class="icon-shuffle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a href="product-details-default.html">{{$product->title}}</a></h6>
                                            <ul class="review-star">
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                <li class="empty"><i class="ion-android-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="content-right">
                                            <span class="price">$75.00 - $85.00</span>
                                        </div>

                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!-- End Product Default Single Item -->
                             
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->

<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <!-- Start Banner Single Item -->
                <div class="banner-single-item banner-style-3 banner-animation img-responsive" data-aos="fade-up"
                    data-aos-delay="0">
                    <div class="image">
                        <img class="img-fluid" src="assets/images/banner/banner-style-3-img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3 class="title">Modern Furniture
                            Basic Collection</h3>
                        <h5 class="sub-title">We design your home more beautiful</h5>
                        <a href="product-details-default.html"
                            class="btn btn-lg btn-outline-golden icon-space-left"><span
                                class="d-flex align-items-center">discover now <i
                                    class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>
                </div>
                <!-- End Banner Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Banner Section -->

