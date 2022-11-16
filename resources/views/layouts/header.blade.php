<!--Promotion Bar-->
<div class="notification-bar mobilehide">
    <a href="#" class="notification-bar__message">20% off your very first purchase, use promo code: fashionova-Shoper</a>
    <span class="close-announcement">×</span>
</div>
<!--End Promotion Bar-->
<!--Search Form Drawer-->
<div class="search">
    <div class="search__form">
        <form class="search-bar__form" action="{{ route('search-criteria') }}" method="GET">
            <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
            <input class="search__input" type="search" name="criteria" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
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
                        <li data-currency="EGP" class="selected">EGP</li>
                        <li data-currency="USD" class="">USD</li>
                        <li data-currency="EUR" class="">EUR</li>
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
                    <img src="/assets/images/logo.png" alt="Fashionova logo" title="Fashionova logo" style="height: 10vh" />
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

                                <li><a href="{{ Route('men_shop') }}" class="site-nav site_nav_categories_men">Men</a></li>
                                <li><a href="{{ Route('women_shop') }}" class="site-nav site_nav_categories_women">Women</a></li>
                                <li><a href="{{ Route('kids_shop') }}" class="site-nav site_nav_categories_kids">Kids</a></li>
                                <li><a href="{{ Route('shoes_shop') }}" class="site-nav site_nav_categories_shoes">Shoes</a></li>
                                <li><a href="{{ Route('accessories_shop') }}" class="site-nav site_nav_categories_accessories">Accessories</a></li>
                                <li><a href="{{ Route('cosmetics_shop') }}" class="site-nav site_nav_categories_cosmetics">cosmetics</a></li>
                                <li><a href="{{ Route('lookbook') }}" class="site-nav site_nav_categories_lookbook">Lookbook<span class="lbl nm_label1">New</span></i></a></li>
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
                        <img src="/assets/images/logo.png" alt="Fashonova Ecommerce Laravel and bootstrap" title="Fashonova Ecommerce Laravel and bootstrap" />
                    </a>
                </div>
            </div>
                    <!--Mobile Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">

                @auth
                    @if(auth()->user()->user_type == 'customer')
                        
                        <div class="site-cart">
                            <a href="#" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">{{ \App\Models\Cart::where('customer_id', '=', auth()->user()->id)->count(); }}</span>
                                    {{-- This is a replacement of ($count_cart_header)-> you can use this when you want to add a small part of backend and 
                                        it id not worth making a whole new function -- here you just add the condition using directly the model 
                                        -- can be used in replacement of any variable even if this variable is for a loop --
                                        {{ \App\Models\Cart::where('customer_id', '=', auth()->user()->id)->count(); }} --}}
                            </a>

                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">

                        @forelse ( \App\Models\Cart::where('customer_id', '=', auth()->user()->id)->get() as $cart_products)

                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="{{ $cart_products->image }}"
                                                alt="Picture for product id: {{ $cart_products->id }}" title="" />
                                        </a>
                                        <div class="product-details">

                                            <form action="{{ route('delete_row', [$cart_products->id]) }}" method="post">
                                                @csrf
                                                {{ method_field('delete') }}

                                                <button type="submit" style="border:none;" class="remove"><i class="anm anm-times-l"
                                                        aria-hidden="true"></i></button>
                                            </form>

                                            <a class="pName" href="cart.html">{{ $cart_products->product_name ?? "Name for prduct id: .$cart_products->id" }}</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>

                                                    <form id="card_header_update" method="POST" action="{{ route('update_cart', [$cart_products->id]) }}" style="padding: auto; margin:auto;">
                                                            @csrf
                                                            {{ method_field('patch') }}
                                                        <input type="text" id="Quantity" name="update_quantity" value="{{ $cart_products->quantity}}" max="{{ $cart_products->available_quantity}}" min="1"
                                                            class="product-form__input qty">
                                                    </form>

                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    <button onclick="document.getElementById('card_header_update').submit();" style="border: 1px solid; padding: 0px 2px; margin: 5px; color:whitesmoke; background-color:black;">Edit <i class="anm anm-edit"
                                                        aria-hidden="true" style="color: whitesmoke; width:1px; height:1px;"></i></button>
                                                </div>
                                            </div>
                                            <!-- product price -->
                                                <div class="product-price">
                                                    @if($cart_products->discount <= 0)
                                                    <span class="price">{{ $cart_products->price }} EGP</span>
                                                    @elseif($cart_products->discount > 0)
                                                    <span class="old-price">{{ $cart_products->price }}</span>
                                                    <span class="price">{{ $cart_products->price - ($cart_products->price * $cart_products->discount)}} EGP</span>
                                                    @endif
                                                </div>
                                            <!-- End product price -->
                                        </div>
                                    </li>
                                </ul>
                                <hr>
                                @empty
                            @endforelse

                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span
                                                class="money">$748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Minicart Popup-->
                        </div>
                    @endif
                    @endauth
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->