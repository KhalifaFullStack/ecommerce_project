 <!--Body Content-->
 <div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header mb-5">
        <div class="collection-hero">
            <div class="collection-hero__image"><img data-src="/assets/images/cat-women3.jpg" src="/assets/images/cat-women3.jpg" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shop List View</h1></div>
        </div>
    </div>
    <!--End Collection Banner-->
    
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">

                    <form method="GET" action="{{ route('input') }}" id="compact_value">
                        <!--Categories-->
                        <div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Clothing</a>
                                        <ul class="sublinks">
                                            <li class="level2"><button type="submit" name="men" value="men" class="site-nav">Men</button></li>
                                            <li class="level2"><button type="submit" name="women" value="women" class="site-nav">Women</button></li>
                                            <li class="level2"><button type="submit" name="kids" value="kids" class="site-nav">Kids</button></li>
                                            <li class="level2"><button type="submit" name="all_clothing" value="all_clothing" class="site-nav">View All Clothing</button></li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Top Offers</a>
                                        <ul class="sublinks">
                                            <li class="level2"><button type="submit" name="men" value="men" class="site-nav">Sales</button></li>
                                            <li class="level2"><button type="submit" name="women" value="women" class="site-nav">Women</button></li>
                                            <li class="level2"><button type="submit" name="kids" value="kids" class="site-nav">Kids</button></li>
                                            <li class="level2"><button type="submit" name="all_clothing" value="all_clothing" class="site-nav">View All Clothing</button></li>
                                        </ul>
                                    </li>
                                    <li class="lvl-1"><button type="submit" name="shoes" value="shoes" class="site-nav">Shoes</button></li>
                                    <li class="lvl-1"><button type="submit" name="bags" value="bags" class="site-nav">Bags</button></li>
                                    <li class="lvl-1"><button type="submit" name="accessories" value="accessories" class="site-nav">Accessories</button></li>
                                    <li class="lvl-1"><button type="submit" name="cosmetics" value="cosmetics" class="site-nav">Cosmetics</button></li>
                                    <li class="lvl-1"><button type="submit" name="all_products" value="all_products" class="site-nav">All Products</button></li>
                                    {{-- Note: it works with -- type="submit"-- OR -- onclick="document.querySelector('#compact_value').submit();" --}}
                                </ul>
                            </div>
                        </div>
                    </form>
                    <!--Categories-->

                    <!--Price Filter-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Price</h2>
                        </div>
                        <form action="{{ route('price_filter') }}" method="get" class="price-filter">
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="no-margin"><input id="amount" name="firter" value="1" type="text"></p>
                                </div>
                                <div class="col-6 text-right margin-25px-top">
                                    <button type="submit" class="btn btn-secondary btn--small">filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Price Filter-->

                    <!--Size Swatches-->
                    <div class="sidebar_widget filterBox filter-widget size-swacthes">
                        <div class="widget-title"><h2>Size</h2></div>
                        <div class="filter-color swacth-list">
                            <ul>
                                <li><span class="swacth-btn checked">X</span></li>
                                <li><span class="swacth-btn">XL</span></li>
                                <li><span class="swacth-btn">XLL</span></li>
                                <li><span class="swacth-btn">M</span></li>
                                <li><span class="swacth-btn">L</span></li>
                                <li><span class="swacth-btn">S</span></li>
                                <li><span class="swacth-btn">XXXL</span></li>
                                <li><span class="swacth-btn">XXL</span></li>
                                <li><span class="swacth-btn">XS</span></span></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Color</h2></div>
                        <div class="filter-color swacth-list clearfix">
                            <span class="swacth-btn black"></span>
                            <span class="swacth-btn white checked"></span>
                            <span class="swacth-btn red"></span>
                            <span class="swacth-btn blue"></span>
                            <span class="swacth-btn pink"></span>
                            <span class="swacth-btn gray"></span>
                            <span class="swacth-btn green"></span>
                            <span class="swacth-btn orange"></span>
                            <span class="swacth-btn yellow"></span>
                            <span class="swacth-btn blueviolet"></span>
                            <span class="swacth-btn brown"></span>
                            <span class="swacth-btn darkGoldenRod"></span> 
                            <span class="swacth-btn darkGreen"></span> 
                            <span class="swacth-btn darkRed"></span> 
                            <span class="swacth-btn dimGrey"></span>
                            <span class="swacth-btn khaki"></span> 
                        </div>
                    </div>
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <div class="sidebar_widget filterBox filter-widget">
                        <div class="widget-title"><h2>Brands</h2></div>
                        <ul>
                            <li>
                              <input type="checkbox" value="allen-vela" id="check1">
                              <label for="check1"><span><span></span></span>Allen Vela</label>
                            </li>
                            <li>
                              <input type="checkbox" value="oxymat" id="check3">
                              <label for="check3"><span><span></span></span>Oxymat</label>
                            </li>
                            <li>
                              <input type="checkbox" value="vanelas" id="check4">
                              <label for="check4"><span><span></span></span>Vanelas</label>
                            </li>
                            <li>
                              <input type="checkbox" value="pagini" id="check5">
                              <label for="check5"><span><span></span></span>Pagini</label>
                            </li>
                            <li>
                              <input type="checkbox" value="monark" id="check6">
                              <label for="check6"><span><span></span></span>Monark</label>
                            </li>
                        </ul>
                    </div>
                    <!--End Brand-->
                    <!--Popular Products-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Popular Products</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                              <div class="grid">
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image">
                                        <a class="grid-view-item__link" href="#">
                                            <img class="grid-view-item__image" src="/assets/images/product-images/mini-product-img.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="/assets/images/product-images/mini-product-img1.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="/assets/images/product-images/mini-product-img2.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="grid__item">
                                  <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="/assets/images/product-images/mini-product-img3.jpg" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                      <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <!--End Popular Products-->

                    <!--Banner-->
                    <div class="sidebar_widget static-banner">
                        <img src="/assets/images/side-banner-2.jpg" alt="" />
                    </div>
                    <!--Banner-->
                    <!--Information-->
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Information</h2></div>
                        <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                    </div>
                    <!--end Information-->
                    <!--Product Tags-->
                    <div class="sidebar_widget">
                      <div class="widget-title">
                        <h2>Product Tags</h2>
                      </div>
                      <div class="widget-content">
                        <ul class="product-tags">
                          <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                          <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                          <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                          <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                          <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                          <li><a href="#" title="Show products matching tag Black">Black</a></li>
                          <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                          <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                          <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                          <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                          <li><a href="#" title="Show products matching tag Green">Green</a></li>
                          <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                          <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                          <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                          <li><a href="#" title="Show products matching tag L">L</a></li>
                          <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                          <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                          <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                          <li><a href="#" title="Show products matching tag M">M</a></li>
                          <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                          <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                          <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                          <li><a href="#" title="Show products matching tag new">new</a></li>
                          <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                          <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                          <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                          <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                        </ul>
                        <span class="btn btn--small btnview">View all</span> </div>
                    </div>
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->