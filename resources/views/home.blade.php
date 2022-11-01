@extends('layouts.master')

@section('title')
Home page
@endsection

@section('content')

<!--Body Content-->
<div id="page-content">
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section">

        <!-- slide 1 -->
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner1.jpg" src="assets/images/slideshow-banners/home2-default-banner1.jpg" alt="Shop Our New Collection" title="Shop Our New Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                <div class="wrap-caption right">
                                    <h2 class="h1 mega-title slideshow__title">Our New Collection</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% Off</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slide 2 -->
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner2.jpg" src="assets/images/slideshow-banners/home2-default-banner2.jpg" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                    <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy
                                        Fashion Clother's</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slide 3 -->
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home2-default-banner2.jpg" src="assets/images/slideshow-banners/home2-default-banner2.jpg" alt="Summer Bikini Collection" title="Summer Bikini Collection" />
                    <div class="slideshow__text-wrap slideshow__overlay classic middle">
                        <div class="slideshow__text-content middle">
                            <div class="container">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                    <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy
                                        Fashion Clother's</span>
                                    <span class="btn">Shop now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End Home slider-->

    <!--Collection Box slider-->
    <div class="collection-box section">
        <div class="section-header text-center">
            <h2 class="h2">Product Categories</h2>
            <p>We Choose Our Products Based On The Latest Branding Fashion</p>
        </div>
        <div class="container-fluid">
            <div class="collection-grid">
                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="assets/images/categories/men.jfif" src="assets/images/categories/men.jfif" alt="men cate" class="blur-up lazyload" style="height:390px;" />
                        <div class="collection-grid-item__title-wrapper">
                            <h3 class="collection-grid-item__title btn btn--secondary no-border">Men</h3>
                        </div>
                    </a>
                </div>

                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="assets/images/categories/women.jpg" src="assets/images/categories/women.jpg" alt="women cate" class="blur-up lazyload" style="height:390px;" />
                        <div class="collection-grid-item__title-wrapper">
                            <h3 class="collection-grid-item__title btn btn--secondary no-border">Women</h3>
                        </div>
                    </a>
                </div>

                <div class="collection-grid-item blur-up lazyloaded">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="assets/images/categories/kids.jpg" src="assets/images/categories/kids.jpg" alt="kids cate" class="blur-up lazyload" style="height:390px;" />
                        <div class="collection-grid-item__title-wrapper">
                            <h3 class="collection-grid-item__title btn btn--secondary no-border">Kids</h3>
                        </div>
                    </a>
                </div>

                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img class="blur-up lazyload" data-src="assets/images/collection/cosmetic.jpg" src="assets/images/collection/cosmetic.jpg" alt="Cosmetic" style="height:390px;" />
                        <div class="collection-grid-item__title-wrapper">
                            <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic</h3>
                        </div>
                    </a>
                </div>

                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="assets/images/collection/accessories.jpg" src="assets/images/collection/accessories.jpg" alt="Accessories" class="blur-up lazyload" style="height:390px;" />
                        <div class="collection-grid-item__title-wrapper">
                            <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories
                            </h3>
                        </div>
                    </a>
                </div>

                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="assets/images/categories/shoes.jpg" src="assets/images/categories/shoes.jpg" alt="Shoes" class="blur-up lazyload" style="height:390px ;" />
                        <div class="collection-grid-item__title-wrapper">
                            <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--End Collection Box slider-->

    <!--Parallax Section-->
    <div class="section">
        <div class="hero hero--large hero__overlay bg-size">
            <img class="bg-img" src="assets/images/parallax-banners/parallax-banner.jpg" alt="" />
            <div class="hero__inner">
                <div class="container">
                    <div class="wrap-text left text-small font-bold">
                        <h2 class="h2 mega-title">Belle <br> The best choice for your store</h2>
                        <div class="rte-setting mega-subtitle">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s.</div>
                        <a href="#" class="btn">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Parallax Section-->
    <!--New Arrivals-->
    <div class="product-rows section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">New Arrivals</h2>
                        <p>Grab these new items before they are gone!</p>
                    </div>
                </div>
            </div>
            <div class="grid-products">
                <div class="row">

                    @forelse($products_first_row as $product)

                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">

                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">

                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{$product->image}}" src="{{$product->image}}" alt="image" title="product">
                                <!-- End image -->

                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{$product->hover_image}}" src="{{$product->hover_image}}" alt="image" title="product">
                                <!-- End hover image -->

                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="assets/images/product-images/product-image1.jpg" alt="image" title="product">
                                <!-- Variant Image-->

                                <!-- product label -->
                                <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->

                            <!-- countdown start -->
                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                            <!-- countdown end -->

                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                    Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="icon anm anm-random-r"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">{{$product->name}}</a>
                            </div>
                            <!-- End product name -->

                            <!-- product price -->
                            <div class="product-price">
                                @if($product->discounts > 0)

                                    <span class="old-price">{{$product->price}} EGP</span>
                                    <span class="price">{{$product->price - ($product->discounts * $product->price)}} EGP</span>
                                    
                                @elseif($product->discounts <= 0) 
                                    <span class="price">{{$product->price}} EGP</span>
                                @endif
                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <!-- <ul class="swatches">
                                <li class="swatch small rounded navy" rel="assets/images/product-images/product-image-stw1.jpg"></li>
                                <li class="swatch small rounded green" rel="assets/images/product-images/product-image-stw1-1.jpg"></li>
                                <li class="swatch small rounded gray" rel="assets/images/product-images/product-image-stw1-2.jpg"></li>
                                <li class="swatch small rounded aqua" rel="assets/images/product-images/product-image-stw1-3.jpg"></li>
                                <li class="swatch small rounded orange" rel="assets/images/product-images/product-image-stw1-4.jpg"></li>
                            </ul> -->
                            <!-- End Variant -->
                        </div>
                        <!-- End product details -->
                    </div>

                    @empty

                    @endforelse
                </div>
                    
                <div class="row">
                                @forelse ( $products_seconds_row as $sec_product )
                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="{{ $sec_product->image }}" src="{{ $sec_product->image }}" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="{{ $sec_product->hover_image }}" src="{{ $sec_product->hover_image }}" alt="image" title="product" />
                                <!-- End hover image -->
                                <!-- Variant Image-->
                                <img class="grid-view-item__image hover variantImg" src="assets/images/product-images/product-image7.jpg" alt="image" title="product">
                                <!-- Variant Image-->
                            </a>
                            <!-- end product image -->

                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                    Options</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="icon anm anm-random-r"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end product button -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">{{ $sec_product->name ?? "line 497"}}</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">

                                @if($sec_product->discounts <= 0 || $sec_product->discounts == null || $sec_product->discounts == "")
                                    <span class="price">{{ $sec_product->price ?? "line 504" }} EGP</span>
                                    
                                    @elseif ($sec_product->discounts > 0)
                                    <span class="old-price">{{ $sec_product->price ?? "line 507" }} EGP</span>
                                    <span class="price">{{ $sec_product->price - ($sec_product->dicounts * $sec_product->price) ?? "line 508"}} EGP</span>
                                @endif

                            </div>
                            <!-- End product price -->

                            <!-- Color Variant -->
                            <ul class="swatches">
                                <li class="swatch small rounded gray" rel="assets/images/product-images/product-image16.jpg"></li>
                                <li class="swatch small rounded red" rel="assets/images/product-images/product-image5.jpg"></li>
                                <li class="swatch small rounded orange" rel="assets/images/product-images/product-image5-1.jpg"></li>
                                <li class="swatch small rounded yellow" rel="assets/images/product-images/product-image17.jpg"></li>
                            </ul>
                            <!-- End Variant -->
                            
                        </div>
                        <!-- End product details -->
                    </div>
                    
                    @empty
                    
                @endforelse

                    {{-- <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <div class="product-image">
                            <!--start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image19.jpg" src="assets/images/product-images/product-image19.jpg" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image19-1.jpg" src="assets/images/product-images/product-image19-1.jpg" alt="image" title="product" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!-- product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                    Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <!-- Start product button -->
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="icon anm anm-random-r"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- End product button -->
                        </div>
                        <!--End start product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Romary Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$348.60</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image18.jpg" src="assets/images/product-images/product-image18.jpg" alt="image" title="product" />
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image18-1.jpg" src="assets/images/product-images/product-image18-1.jpg" alt="image" title="product" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                            <!-- Start product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                    Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="icon anm anm-random-r"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- End product button -->
                        </div>
                        <!--End start product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Lima Shirt</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$698.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->

                    </div>
                    <div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout-1.html" class="grid-view-item__link">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-image2.jpg" src="assets/images/product-images/product-image2.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-image2-1.jpg" src="assets/images/product-images/product-image2-1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- product button -->
                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                <button class="btn btn-addto-cart" type="button" tabindex="0">Add To
                                    Cart</button>
                            </form>
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                        <i class="icon anm anm-heart-l"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="icon anm anm-random-r"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- End product button -->
                        </div>
                        <!-- End start product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout-1.html">Elastic Waist Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                        </div>
                        <!-- End product details -->
                    </div> --}}
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <a href="shop-left-sidebar.html" class="btn">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Featured Product-->

    <!--Logo Slider-->
    <div class="section logo-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">The Most Loved Brands</h2>
                    </div>
                    <div class="logo-bar">
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/brandlogo1.png" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/brandlogo2.png" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/brandlogo3.png" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/brandlogo4.png" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/brandlogo5.png" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/brandlogo6.png" alt="" title="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Logo Slider-->
</div>
<!--End Body Content-->


<!--Quick View popup-->
<div class="modal fade quick-view-popup" id="content_quickview">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="ProductSection-product-template" class="product-template__container prstyle1">
                    <div class="product-single">
                        <!-- Start model close -->
                        <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                        <!-- End model close -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="pl-20">
                                        <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h2 class="product-single__title">Product Quick View Popup</h2>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                        <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                        </span>
                                    </p>
                                    <div class="product-single__description rte">
                                        Belle Multipurpose Bootstrap 4 Html Template that will give you and your
                                        customers a smooth shopping experience which can be used for various
                                        kinds of stores such as fashion,...
                                    </div>

                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="header">Color: <span class="slVariant">Red</span></label>
                                                <div data-value="Red" class="swatch-element color red available">
                                                    <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                                </div>
                                                <div data-value="Blue" class="swatch-element color blue available">
                                                    <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                                </div>
                                                <div data-value="Green" class="swatch-element color green available">
                                                    <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                                </div>
                                                <div data-value="Gray" class="swatch-element color gray available">
                                                    <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                                <label class="header">Size: <span class="slVariant">XS</span></label>
                                                <div data-value="XS" class="swatch-element xs available">
                                                    <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                                </div>
                                                <div data-value="S" class="swatch-element s available">
                                                    <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                                </div>
                                                <div data-value="M" class="swatch-element m available">
                                                    <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                                </div>
                                                <div data-value="L" class="swatch-element l available">
                                                    <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                        <div class="display-table-cell">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End-product-single-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Quick View popup-->

<!-- Newsletter Popup -->
<div class="newsletter-wrap" id="popup-container">
    <div id="popup-window">
        <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
        <!-- Modal content-->
        <div class="display-table splash-bg">
            <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
            <div class="display-table-cell width60 text-center">
                <div class="newsletter-left">
                    <h2>Join Our Mailing List</h2>
                    <p>Sign Up for our exclusive email list and be the first to know about new products and
                        special offers</p>
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                            <span class="input-group__btn">
                                <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                            </span>
                        </div>
                    </form>
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Popup -->
@endsection