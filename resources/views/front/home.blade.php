@extends('layout.app')

@section('main_content')
    <div class="mini_cart">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel"> my cart <span>(05)</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="far fa-times"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li>
                        <div class="cart_img">
                            <img src="/assets/images/cart_img_1.png" alt="product" class="img-fluid w-100">
                            <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                        </div>
                        <div class="cart_text">
                            <a class="cart_title" href="#">Lemon Meat Bone</a>
                            <p>$140 <del>$150</del></p>
                        </div>
                    </li>
                    <li>
                        <div class="cart_img">
                            <img src="/assets/images/cart_img_2.png" alt="product" class="img-fluid w-100">
                            <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                        </div>
                        <div class="cart_text">
                            <a class="cart_title" href="#">Three Carrot Vegetables</a>
                            <p>$130 <del>$160</del></p>
                        </div>
                    </li>
                    <li>
                        <div class="cart_img">
                            <img src="/assets/images/cart_img_3.png" alt="product" class="img-fluid w-100">
                            <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                        </div>
                        <div class="cart_text">
                            <a class="cart_title" href="#">Bengal Meat Beef Bone</a>
                            <p>$140 <del>$150</del></p>
                        </div>
                    </li>
                    <li>
                        <div class="cart_img">
                            <img src="/assets/images/cart_img_4.png" alt="product" class="img-fluid w-100">
                            <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                        </div>
                        <div class="cart_text">
                            <a class="cart_title" href="#">Three Carrot Vegetables</a>
                            <p>$140</p>
                        </div>
                    </li>
                    <li>
                        <div class="cart_img">
                            <img src="/assets/images/cart_img_5.png" alt="product" class="img-fluid w-100">
                            <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                        </div>
                        <div class="cart_text">
                            <a class="cart_title" href="#">Orange Slice Mix</a>
                            <p>$140</p>
                        </div>
                    </li>
                </ul>
                <h5>sub total <span>$3540</span></h5>
                <div class="minicart_btn_area">
                    <a class="common_btn" href="cart_view.html">view cart<span></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--=========================
                        MENU 2 END
                    ==========================-->


    <!--============================
                        MOBILE MENU START
                    ==============================-->
    <div class="mobile_menu_area">
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fal fa-times"></i></button>
            <div class="offcanvas-body">

                <ul class="mobile_menu_header d-flex flex-wrap">
                    <li><a href="cart_view.html"><i class="far fa-shopping-basket"></i> <span>2</span></a>
                    </li>
                    <li><a href="dashboard_wishlist.html"><i class="far fa-heart"></i> <span>5</span></a></li>
                    <li><a href="dashboard.html"><i class="far fa-user"></i></a></li>
                </ul>

                <form class="mobile_menu_search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form>

                <div class="mobile_menu_item_area">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Categories</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">menu</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <ul class="main_mobile_menu">
                                <li class="mobile_dropdown">
                                    <a href="#">Fresh & Organic</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Sea Fish</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">meat</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Bakery & Biscuites</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Health & Beauty</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Freah Fruits</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Coffee & Drinks</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Cleaning</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Sea Fish</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Fresh & Organic</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Bakery & Biscuites</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                    </ul>
                                </li>
                                <li class="mobile_dropdown">
                                    <a href="#">Health & Beauty</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <ul class="main_mobile_menu">
                                <li class="mobile_dropdown">
                                    <a href="#">home</a>
                                    <ul class="inner_menu">
                                        <li><a href="index.html">home style 01</a></li>
                                        <li><a href="index_2.html">home style 02</a></li>
                                        <li><a href="index_3.html">home style 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="about_us.html">about</a></li>
                                <li class="mobile_dropdown">
                                    <a href="#">shop</a>
                                    <ul class="inner_menu">
                                        <li><a href="shop.html">Fresh & Organic</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                        <li><a href="shop.html">meat</a></li>
                                        <li><a href="shop.html">Bakery & Biscuites</a></li>
                                        <li><a href="shop.html">Health & Beauty</a></li>
                                        <li><a href="shop.html">Freah Fruits</a></li>
                                        <li><a href="shop.html">Coffee & Drinks</a></li>
                                        <li><a href="shop.html">Cleaning</a></li>
                                        <li><a href="shop.html">Sea Fish</a></li>
                                    </ul>
                                </li>
                                <li><a href="blogs.html">blog</a></li>
                                <li class="mobile_dropdown">
                                    <a href="#">pages</a>
                                    <ul class="inner_menu">
                                        <li><a href="about_us.html">about us</a></li>
                                        <li><a href="blogs_details.html">blog details</a></li>
                                        <li><a href="shop_details.html">shop details</a></li>
                                        <li><a href="cart_view.html">cart view</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="payment.html">Payment</a></li>
                                        <li><a href="dashboard.html">dashboard</a></li>
                                        <li><a href="order_tracking.html">order tracking</a></li>
                                        <li><a href="team.html">Our team</a></li>
                                        <li><a href="team_details.html">team details</a></li>
                                        <li><a href="error.html">error/404</a></li>
                                        <li><a href="faq.html">faq's</a></li>
                                        <li><a href="gallery.html">gallery</a></li>
                                        <li><a href="sign_in.html">sign in</a></li>
                                        <li><a href="sign_up.html">sign up</a></li>
                                        <li><a href="forgot_password.html">forgot password</a></li>
                                        <li><a href="privacy_policy.html">privacy policy</a></li>
                                        <li><a href="terms_condition.html">terms & condition</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="flash_sell.html">flash sell</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
                        MOBILE MENU END
                    ==============================-->


    <!--=========================
                        BANNER 2 START
                    ==========================-->
    <section class="banner_2" style="background: url(assets/images/home_2_banner_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-md-9 col-lg-8 wow fadeInLeft">
                    <div class="banner_2_text single_slider_text">
                        <h3>Select Only Grocery Products</h3>
                        <h1>Get 30% Discount Of Your First Shopping</h1>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text
                            piece of classical Latin literature.</p>
                        <a class="common_btn" href="shop_details.html">shop now <i class="fas fa-long-arrow-right"></i>
                            <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        BANNER 2 END
                    ==========================-->

             

    <!--=========================
                        SUPPORT START
                    ==========================-->
    <section class="support pt_120 xs_pt_80">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="support_content">
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/support_icon_1.jpg" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>Return Policy</h3>
                                    <p>Money back guarantee</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/support_icon_2.jpg" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>Free shipping</h3>
                                    <p>On all orders over $60.00</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/support_icon_3.jpg" alt="support" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h3>Store locator</h3>
                                    <p>Find your nearest store</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        SUPPORT END
                    ==========================-->


    <!--=========================
                        ADD BANNER 2 START
                    ==========================-->
    <section class="add_banner_2 pt_95 xs_pt_55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="special_product_banner">
                        <img src="/assets/images/special_pro_banner_img_2.jpg" alt="special product"
                            class="img-fluid w-100">
                        <div class="text">
                            <h5>Up to 20% all Products</h5>
                            <h3>Everyday Fresh & Clean With Our Products</h3>
                            <p>Don’t miss avail the saving opportunity.</p>
                            <a class="common_btn" href="shop_details.html">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 wow fadeInUp">
                            <div class="add_banner_item" style="background: url(assets/images/banner_bg_5.jpg);">
                                <div class="add_banner_item_text">
                                    <h4>Up To 50% Off</h4>
                                    <h2>Organic Food Collection</h2>
                                    <p>Don’t miss avail the saving opportunity</p>
                                    <a class="common_btn" href="shop_details.html">shop now <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 wow fadeInUp">
                            <div class="add_banner_item" style="background: url(assets/images/banner_bg_6.jpg);">
                                <div class="add_banner_item_text">
                                    <h4>Organic Food</h4>
                                    <h2>Best For Your Family</h2>
                                    <p>Limited Time Offer</p>
                                    <a class="common_btn" href="shop_details.html">shop now <i
                                            class="fas fa-long-arrow-right"></i>
                                        <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        ADD BANNER 2 END
                    ==========================-->


    <!--=========================
                        NEW PRODUCTS START
                    ==========================-->
    <section class="new_products pt_115 xs_pt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto wow fadeInUp">
                    <div class="section_heading mb_20">
                        <h4>Checkout New Products</h4>
                        <h2>Today’s new hotest products available now</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_1.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">25% Off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                            <p>$20.00 <del>$25.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_2.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="new">new</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                            <p>$12.00 <del>$10.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_3.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="hot">hot</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Carrot Vegetables</a>
                            <p>$33.00 <del>$28.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_4.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">35% off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Bengal Beef Bone</a>
                            <p>$12.00 <del>$10.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_5.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="hot">hot</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Carrot Vegetables</a>
                            <p>$45.00 <del>$50.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_6.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">40% off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <a class="title" href="shop_details.html">Orange Slice Mix</a>
                            <p>$29.00 <del>$35.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_7.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="new">new</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Beef Butter Cake</a>
                            <p>$30.00 <del>$34.00</del> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp">
                    <div class="single_product_2 single_product">
                        <div class="single_product_img">
                            <img src="/assets/images/home2_product_img_8.jpg" alt="Product" class="img_fluid w-100">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cart_popup_modal"><i
                                            class="far fa-shopping-basket"></i></a></li>
                                <li><a href="#"><i class="far fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <span class="off">30% off</span>
                        </div>
                        <div class="single_product_text">
                            <span class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <a class="title" href="shop_details.html">Fresh Mango Fruits</a>
                            <p>$22.00 <del>$26.00</del> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cart_popup_modal">
        <div class="modal fade" id="cart_popup_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="cart_popup_modal_img">
                                    <img src="/assets/images/home2_product_img_4.jpg" alt="Product img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="product_det_text">
                                    <h2 class="details_title">Nestle Nescafe Classic Instant</h2>
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                        <span>Review (20)</span>
                                    </p>
                                    <p class="price">$10.50 <del>$12.00</del></p>
                                    <div class="details_quentity_area">
                                        <p><span>Qti Weight</span> (in kg) :</p>
                                        <div class="button_area">
                                            <button>-</button>
                                            <input type="text" placeholder="01">
                                            <button>+</button>
                                        </div>
                                        <h3>= $10.50</h3>
                                    </div>
                                    <div class="details_cart_btn">
                                        <a class="common_btn" href="#"><i class="far fa-shopping-basket"></i>
                                            Add To
                                            Cart
                                            <span></span></a>
                                        <a class="love" href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                    <p class="category"><span>Category:</span>Coffee</p>
                                    <ul class="tags">
                                        <li>Tags:</li>
                                        <li><a href="#">Black Coffee, </a></li>
                                        <li><a href="#">Popular,</a></li>
                                        <li><a href="#">Top Sell</a></li>
                                    </ul>
                                    <ul class="share">
                                        <li>Share with friends:</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================
                        NEW PRODUCTS END
                    ==========================-->


    <!--=========================
                        COUNTDOWN 2 START
                    ==========================-->
    <section class="countdown_2 mt_120 xs_mt_80 pt_120 xs_pt_80 pb_120 xs_pb_80">
        <div class="container">
            <div class="countdown_2_area">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6 wow fadeInLeft">
                        <div class="countdown_text">
                            <div class="section_heading heading_left">
                                <h4>Monthly Offers</h4>
                                <h2>Our Specials Products deal of the day</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum
                                butmajority have suffered.</p>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <a class="common_btn" href="flash_sell.html">shop now <i class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInRight">
                        <div class="countdown_img">
                            <img src="/assets/images/countdown_2_img.jpg" alt="coint" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        COUNTDOWN 2 END
                    ==========================-->


    <!--=========================
                        BEST SELL START
                    ==========================-->
    <section class="best_sell mt_120 xs_mt_80">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_heading heading_left mb_25 wow fadeInLeft">
                        <h4>Best Sells Products</h4>
                        <h2>Organic Bestseller Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-4 wow fadeInLeft">
                    <div class="special_product_banner">
                        <img src="/assets/images/special_pro_banner_img_3.jpg" alt="special product"
                            class="img-fluid w-100">
                        <div class="text">
                            <h5>Organic Food</h5>
                            <h3>Fresh Foods Up To 45% Off</h3>
                            <a class="common_btn" href="shop_details.html">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-6 col-lg-8 wow fadeInUp">
                    <div class="row best_sell_slider">
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="/assets/images/home2_product_img_1.jpg" alt="Product"
                                        class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="off">25% Off</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                                    <p>$20.00 <del>$25.00</del> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="/assets/images/home2_product_img_2.jpg" alt="Product"
                                        class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="new">new</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Fresh Red Seedless</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="/assets/images/home2_product_img_3.jpg" alt="Product"
                                        class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="hot">hot</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <p>$33.00 <del>$28.00</del> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_product_2 single_product">
                                <div class="single_product_img">
                                    <img src="/assets/images/home2_product_img_4.jpg" alt="Product"
                                        class="img_fluid w-100">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal"
                                                data-bs-target="#cart_popup_modal"><i
                                                    class="far fa-shopping-basket"></i></a></li>
                                        <li><a href="#"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <span class="off">35% off</span>
                                </div>
                                <div class="single_product_text">
                                    <a class="title" href="shop_details.html">Bengal Beef Bone</a>
                                    <p>$12.00 <del>$10.00</del> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        BEST SELL END
                    ==========================-->


    <!--=============================
                        SPECIAL PRODUCT 2 START
                    ==============================-->
    <section class="special_product_2 pt_110 xs_pt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_25 wow fadeInUp">
                        <h4>Special Products</h4>
                        <h2>Our Spatial Brand Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="/assets/images/special_product_1.jpg" alt="product"
                                        class="img-fluid w-100">
                                    <span class="discount">save 70%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Butter garlic crab</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$10.00 <del>$12.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="/assets/images/special_product_3.jpg" alt="product"
                                        class="img-fluid w-100">
                                    <span class="discount">save 40%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Three Carrot</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$17.00 <del>$20.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInLeft">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="/assets/images/special_product_2.jpg" alt="product"
                                        class="img-fluid w-100">
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Bengal Meat Bone</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$13.00 <del>$15.00</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp">
                    <div class="special_product_banner">
                        <img src="/assets/images/special_pro_banner_img_4.jpg" alt="special product"
                            class="img-fluid w-100">
                        <div class="text">
                            <h3>Fresh Fruits Healthy Juice</h3>
                            <p>Get 50% Off on Selected Organic Items</p>
                            <a class="common_btn" href="shop_details.html">shop now <i
                                    class="fas fa-long-arrow-right"></i>
                                <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="/assets/images/special_product_4.jpg" alt="product"
                                        class="img-fluid w-100">
                                    <span class="discount">save 50%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Lemon Meat Bone</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$29.00 <del>$32.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="/assets/images/special_product_5.jpg" alt="product"
                                        class="img-fluid w-100">
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Orange Slice Mix</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$20.00 <del>$22.00</del></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInRight">
                            <div class="special_product_item">
                                <div class="special_product_img">
                                    <img src="/assets/images/special_product_6.jpg" alt="product"
                                        class="img-fluid w-100">
                                    <span class="discount">save 30%</span>
                                </div>
                                <div class="special_product_text">
                                    <a class="title" href="shop_details.html">Carrot Vegetables</a>
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p>$16.00 <del>$18.00</del></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                        SPECIAL PRODUCT 2 END
                    ==============================-->


    <!--=============================
                        TESTIMONIAL 2 START
                    ==============================-->
    <section class="testimonial_2 mt_120 xs_mt_80 pt_120 xs_pt_80 pb_220 xs_pb_180">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 wow fadeInLeft">
                    <div class="testimonial_2_text">
                        <div class="section_heading heading_left mb_25">
                            <h4>Our Testimonials</h4>
                            <h2>What Our Customer Talking About Us</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit sed, ading do
                            eiusmod tempor incididunt labore et dolore elit,
                            sed do eiusmod.</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 wow fadeInUp">
                    <div class="row testi_slider_2">
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="/assets/images/testimonial_img_1.jpg" alt="testimonial"
                                        class="img-fluid w-100">
                                </div>
                                <p class="review_text">Contrary to popular belief, Lorem Ipsum is not
                                    random text. It has roots in a piece of classic
                                    literature from 45 BC, making</p>
                                <div class="text">
                                    <h3>Bartholomew</h3>
                                    <p>Customer</p>
                                </div>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="/assets/images/testimonial_img_2.jpg" alt="testimonial"
                                        class="img-fluid w-100">
                                </div>
                                <p class="review_text">Contrary to popular belief, Lorem Ipsum is not
                                    random text. It has roots in a piece of classic
                                    literature from 45 BC, making</p>
                                <div class="text">
                                    <h3>Sophie Dennison</h3>
                                    <p>Graphic Designer</p>
                                </div>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="testimonial_item_2">
                                <div class="img">
                                    <img src="/assets/images/testimonial_img_3.jpg" alt="testimonial"
                                        class="img-fluid w-100">
                                </div>
                                <p class="review_text">Contrary to popular belief, Lorem Ipsum is not
                                    random text. It has roots in a piece of classic
                                    literature from 45 BC, making</p>
                                <div class="text">
                                    <h3>Israt Jahan</h3>
                                    <p>Developer</p>
                                </div>
                                <p class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                        TESTIMONIAL 2 END
                    ==============================-->


    <!--=============================
                        INSTAGRAM PHOTO START
                    ==============================-->
    <section class="instagram_photo">
        <div class="row insta_slider">
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_1.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_2.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_3.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_4.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_5.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_6.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
            <div class="col-xl-2 wow fadeInUp">
                <div class="instagram_photo_item">
                    <img src="/assets/images/instagram_img_4.jpg" alt="instagram" class="img-fluid w-100">
                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                        INSTAGRAM PHOTO END
                    ==============================-->


    <!--=========================
                        BLOG 2 START
                    ==========================-->
    <section class="blog_2 pt_110 xs_pt_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="section_heading mb_15 wow fadeInUp">
                        <h4>Our Blog Post</h4>
                        <h2>Latest News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img src="/assets/images/blog_2_img_1.jpg" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blog_text">
                            <ul class="top">
                                <li><i class="far fa-tag"></i> Drink</li>
                                <li><i class="far fa-user-circle"></i> Admin</li>
                            </ul>
                            <a class="title" href="#">Freshly Served Exploring the World of Fresh</a>
                            <ul class="bottom">
                                <li><a href="blogs_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 15 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img src="/assets/images/blog_2_img_2.jpg" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blog_text">
                            <ul class="top">
                                <li><i class="far fa-tag"></i> Fish</li>
                                <li><i class="far fa-user-circle"></i> Admin</li>
                            </ul>
                            <a class="title" href="#">The Fresh Connection Exploring the Link Between</a>
                            <ul class="bottom">
                                <li><a href="blogs_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 42 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="blog_item">
                        <div class="blog_img">
                            <img src="/assets/images/blog_2_img_3.jpg" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="blog_text">
                            <ul class="top">
                                <li><i class="far fa-tag"></i> Meat</li>
                                <li><i class="far fa-user-circle"></i> Admin</li>
                            </ul>
                            <a class="title" href="#">Common Engine Oil Problems and Solutions</a>
                            <ul class="bottom">
                                <li><a href="blogs_details.html">read more <i class="fas fa-long-arrow-right"></i></a>
                                <li><span><i class="far fa-comment-dots"></i> 36 Comments</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        BLOG 2 END
                    ==========================-->


    <!--=========================
                        BRAND 2 START
                    ==========================-->
    <section class="brand_2 mt_115 xs_mt_75">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto wow fadeInUp">
                    <div class="section_heading mb_45">
                        <h4>Our Partners</h4>
                        <h2>Our Organic Farm Partners</h2>
                    </div>
                </div>
            </div>
            <div class="brand_item_area wow fadeInUp">
                <div class="row">
                    <div class="col-12">
                        <div class="marquee_animi">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_1.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_2.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_3.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_4.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_5.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_6.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/brand_item_4.png" alt="brand"
                                            class="img-fluid w-100">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
                        BRAND 2 END
                    ==========================-->


    <!--=========================
                        FOOTER 2 START
                    ==========================-->
@endsection
