<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('front.home.page') }}">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ماذا عننا</a></li>
                    {{-- <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html">Sidebar Shop</a></li>
                            <li><a href="shop-detail.html">Shop Detail</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="gallery.html">منتجاتنا</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="contact-us.html">اتصل بنا</a></li> --}}
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    {{-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> --}}
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge" id="notifications_count">{{ \App\models\Cart::count() }}</span>
                            <p>بطاقتي</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list" id="unreadNotifications">
                    @foreach ($carts as $cart)

                    <li>
                        <a href="#" class="photo"><img src="{{ $cart -> product-> image }}" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">{{ $cart -> product->title }} </a></h6>
                        <p>{{ $cart -> qty }}x - <span class="price">${{ $cart -> price }}</span></p>
                    </li>
                    @endforeach

                    {{-- <li>
                        <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li> --}}
                    {{-- <li>
                        <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li> --}}
                    {{-- <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li> --}}
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->
