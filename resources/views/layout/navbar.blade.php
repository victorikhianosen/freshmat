<nav class="main_menu_2 main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="menu_category_bar">
                    <p>
                        <span>
                            <img src="/assets/images/menu_category_icon.png" alt="category icon">
                        </span>
                        @php
                            $categories = App\Models\Category::latest()->paginate(9);
                            // dd($category);
                        @endphp
                        Browse Categories

                    </p>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="menu_cat_item show_home toggle_menu">
                    @foreach ($categories as $item)
                        <li>
                            <a href="#">
                                <span>
                                    <img src="/assets/images/category_list_icon_15.png" alt="category">
                                </span>
                                {{ $item->name }}
                            </a>
                            <ul class="menu_cat_droapdown">

                                @foreach ($item->products as $product)
                                    <li><a href="#">{{ $product->name }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-9 col-lg-9">
                <ul class="menu_item">
                    <li class="relative_li">
                        <a class="active" href="{{ route('home') }}">home</a>
                    </li>
                    <li>
                        <a href="shop.html">shop <i class="fas fa-chevron-down"></i></a>
                        <div class="mega_menu">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4">
                                    <div class="mega_menu_colum">
                                        <h4>Fresh & Organic</h4>
                                        <ul class="wsis__mega_menu_item">
                                            <li><a href="#">Bakery & Biscuites</a></li>
                                            <li><a href="#">Fresh & Organic</a></li>
                                            <li><a href="#">Coffee & Drinks</a></li>
                                            <li><a href="#">Breakfast</a></li>
                                            <li><a href="#">Jam & Jelly</a></li>
                                            <li><a href="#">Fresh & Organic</a> </li>
                                            <li><a href="#">berries</a></li>
                                            <li><a href="#">cherries</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="mega_menu_colum">
                                        <h4>Bakery & Biscuites</h4>
                                        <ul class="wsis__mega_menu_item">
                                            <li><a href="#">Coffee & Drinks</a></li>
                                            <li><a href="#">Bakery & Biscuites</a></li>
                                            <li><a href="#">Fresh & Organic</a></li>
                                            <li><a href="#">berries</a></li>
                                            <li><a href="#">Breakfast</a></li>
                                            <li><a href="#">Fresh & Organic</a> </li>
                                            <li><a href="#">Jam & Jelly</a></li>
                                            <li><a href="#">cherries</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="mega_menu_colum">
                                        <h4>Coffee & Drinks</h4>
                                        <ul class="wsis__mega_menu_item">
                                            <li><a href="#">Bakery & Biscuites</a></li>
                                            <li><a href="#">Fresh & Organic</a></li>
                                            <li><a href="#">Coffee & Drinks</a></li>
                                            <li><a href="#">Breakfast</a></li>
                                            <li><a href="#">Jam & Jelly</a></li>
                                            <li><a href="#">Fresh & Organic</a> </li>
                                            <li><a href="#">berries</a></li>
                                            <li><a href="#">cherries</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-lg-none d-xl-block">
                                    <div class="mega_menu_colum menu_banner">
                                        <a href="#">
                                            <img src="/assets/images/menu_img.jpg" alt="images"
                                                class="img-fluid w-100">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="blogs.html">blog</a></li>
                    <li class="relative_li"><a href="#">pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="menu_droapdown">
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
                </ul>
                <ul class="menu_icon">
                    <li><a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                class="far fa-shopping-basket"></i>
                            <span>2</span></a>
                    </li>
                    <li><a href="#"><i class="far fa-heart"></i> <span>5</span></a></li>
                    <li><a href="dashboard.html"><i class="far fa-user"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
