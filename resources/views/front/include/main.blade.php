    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    {{-- <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>¥ JPY</option>
                            <option>$ USD</option>
                            <option>€ EUR</option>
                        </select>
                    </div> --}}
                    <div class="right-phone-box">
                        <p>اتصل بنا :- <a href="#"> +11 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> حسابي</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> موقعنا</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> الاتصال بنا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box" style="width: unset">
                        {{-- <div  class="selectpicker show-tick form-control" data-placeholder="Sign In"> --}}
                            @if (Route::has('login'))
                                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                                    @auth
                                        <a href="{{ url('/dashboard') }}"
                                            class="btn btn-success">الصفحة الرئيسية</a>
                                    @else
                                        <a href="{{ route('login') }}"
                                                class="btn btn-success">تسجيل الدخول</a>
                                        {{-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                    class="ml-2 btn btn-success">إنشاء حساب الان</a>

                                        @endif --}}
                                    @endauth
                                {{-- </div> --}}
                            @endif
                    </div>
                    {{-- <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->
