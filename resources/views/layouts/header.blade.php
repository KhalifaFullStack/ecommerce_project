<!--Promotion Bar-->
<div class="notification-bar mobilehide">
    <a href="#" class="notification-bar__message">20% off your very first purchase, use promo code: belle
        fashion</a>
    <span class="close-announcement">×</span>
</div>
<!--End Promotion Bar-->
<!--Search Form Drawer-->
<div class="search">
    <div class="search__form">
        <form class="search-bar__form" action="#">
            <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
            <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
    </div>
</div>
<!--End Search Form Drawer-->
<!--Top Header-->
<div class="top-header" style="background-color: #D3C6BC;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                <div class="currency-picker">
                    <span class="selected-currency">USD</span>
                    <ul id="currencies">
                        <li data-currency="INR" class="">INR</li>
                        <li data-currency="GBP" class="">GBP</li>
                        <li data-currency="CAD" class="">CAD</li>
                        <li data-currency="USD" class="selected">USD</li>
                        <li data-currency="AUD" class="">AUD</li>
                        <li data-currency="EUR" class="">EUR</li>
                        <li data-currency="JPY" class="">JPY</li>
                    </ul>
                </div>

                <div class="language-dropdown">
                    <span class="language-dd">English</span>
                    <ul id="language">
                        <li class="">German</li>
                        <li class="">French</li>
                        <li class="">Arabic</li>
                    </ul>
                </div>

                <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                <div class="text-center">
                    <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                </div>
            </div>
            <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                <ul class="customer-links list-inline">

                    <!-- start of if-condition -->
                    @if(auth()->user())
                    <li style="color: #000; font-weight:bold;">{{auth()->user()->name ?? 'No name'}}</li>
                    <li style="color: #000;  font-family: Times New Roman, Times, Serif;">{{auth()->user()->user_type ?? 'Error'}}</li>

                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket "></i><span> Logout</span></a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf </form>
                    <li><a href="wishlist.html">Wishlist</a></li>

                    @elseif(auth()->guest())
                    <li><a href="{{ Route('login') }}">Login</a></li>
                    <li><a href="{{ Route('register') }}">Create Account</a></li>

                    @endif
                    <!-- end of if-condition -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End Top Header-->
<!--Header-->
<div class="header-wrap animated d-flex border-bottom">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--Desktop Logo-->
            <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                <a href="{{ Route('home') }}">
                    <img src="/assets/images/logo.svg" alt="Belle logo" title="Belle logo" />
                </a>
            </div>
            <!--End Desktop Logo-->
            <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                <div class="d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
                <!--Desktop Menu-->
                <nav class="grid__item" id="AccessibleNav">
                    <!-- for mobile -->
                    <ul id="siteNav" class="site-nav medium center hidearrow ">

                        <li class="lvl1 parent"><a href="{{ Route('home') }}">Home <i class="anm anm-angle-down-l"></i></a></li>

                        <li class="lvl1 parent dropdown"><a href="#">Categories<i class="anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">

                                <li><a href="{{ Route('home') }}" class="site-nav">Men</a></li>
                                <li><a href="{{ Route('home') }}" class="site-nav">Women</a></li>
                                <li><a href="{{ Route('home') }}" class="site-nav">Kids</a></li>
                                <li><a href="{{ Route('home') }}" class="site-nav">Shoes</a></li>
                                <li><a href="{{ Route('home') }}" class="site-nav">Accessories</a></li>
                                <li><a href="{{ Route('home') }}" class="site-nav">cosmetics</a></li>
                                <li><a href="{{ Route('lookbook') }}" class="site-nav">Lookbook<span class="lbl nm_label1">New</span></i></a></li>
                            </ul>
                        </li>

                        <li class="lvl1 parent dropdown"><a href="#">Services<i class="anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">

                                <li><a href="{{ Route('compare-page') }}" class="site-nav">Compare Product <span class="lbl nm_label1">New</span> </a></li>
                                <li><a href="{{ Route('about-us') }}" class="site-nav">About Us </a></li>
                                <li><a href="{{ Route('contact-us') }}" class="site-nav">Contact Us</a></li>
                                <li><a href="{{ Route('faqs') }}" class="site-nav">FAQs</a></li>
                            </ul>
                        </li>

                        <li class="lvl1 parent"><a href="{{ Route('blog') }}">Blog <i class="anm anm-angle-down-l"></i></a></li>

                        <li class="lvl1"><a href="{{ Route('shop') }}"><b>Shop Now!</b> <i class="anm anm-angle-down-l"></i></a>
                        </li>

                    </ul>
                </nav>
                <!--End Desktop Menu-->
            </div>
            <!--Mobile Logo-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                <div class="logo">
                    <a href="index.html">
                        <img src="/assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
            </div>
            <!--Mobile Logo-->
            <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                <div class="site-cart">

                    @auth
                        @if (auth()->user()->user_type == 'customer')
                            <!--Minicart Popup-->
                            <a href="#" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{ \App\Models\Cart::where('customer_id', '=', auth()->user()->id)->count() }}</span>
                            </a>
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="/assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="{{ Route('show_cart') }}" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="{{ Route('checkout') }}" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        @endif
                    @endauth

                                                
                    <div class="site-header__search">
                        <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--End Header-->