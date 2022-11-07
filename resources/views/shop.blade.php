@extends('layouts.master')

@section('title', 'Shop')

@section('content')
    
@include('layouts.sidebar')
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="category-description">
                    	<h3>Category Description</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    </div>
                    <hr>
                	<div class="productList">
                    	<!--Toolbar-->
                        @include('layouts.shop_toolbar')
                        <!--End Toolbar-->
                        <div class="list-view-items grid--view-items">

                            @forelse ( $compact_value as $product_value)       
                                <!--ListView Item-->
                                <div class="list-product list-view-item">
                                    <div class="list-view-item__image-column">
                                        <div class="list-view-item__image-wrapper">
                                            <!-- Image -->
                                            <a href="product-layout-2.html"><img class="list-view-item__image blur-up lazyload" data-src="{{ $product_value->image }}" src="{{ $product_value->image }}" alt="{{ $product_value->name." image not found" }}" title="{{ $product_value->name ?? 'Product name' }}"></a>
                                            <!-- End Image -->
                                        </div>
                                    </div>
                                    <div class="list-view-item__title-column">
                                        <div class="h4 grid-view-item__title"><a href="product-layout-2.html">{{ $product_value->name ?? 'Product name'}}</a></div>
                                        <!-- Product Review -->
                                        <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                        <!-- End Product Review -->
                                        <!-- Sort Description -->
                                        <p>{{ $product_value->description}}</p>
                                        <!-- End Sort Description -->
                                        <!-- Price -->
                                        <p class="product-price grid-view-item__meta">
                                            @if($product_value->discount <= 0 || $product_value->discount == " ")
                                            <span class="product-price__price product-price__sale"><span class="money">{{ $product_value->price }} EGP</span></span>
                                            @elseif( $product_value->discount > 0 )
                                            <span class="old-price">{{ $product_value->price }} EGP</span>
                                            <span class="product-price__price product-price__sale"><span class="money">{{ $product_value->price - ($product_value->price * $product_value->discount)}}</span></span>
                                            @endif
                                        </p>
                                        <!-- End Price -->
                                        <form class="variants" action="{{ route('create_cart', [$product_value->id]) }}" method="post">
                                            @csrf
                                            <input class="cart__qty-input qty form-control" type="text" name="add_quantity" id="qty" value="1" pattern="[0-9]*">
                                            <button class="btn btn--small" type="submit" >Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <!--End ListView Item-->
                            @empty
                                
                            @endforelse
                            
                        </div>
                    </div>
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="#" class="btn loadMore">Load More</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
@endsection