@extends('dashboard.layouts.master')

@section('dashboard.title', 'product details')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">Details Of Your Product</h4>
                    <p class="card-subtitle card-subtitle-dash"><a style="color:black;" href="{{ route('products.index') }}">All Products</a>/
                        <span style=" color:black;"> Details for "{{ $find_product->name }}"</span></p>
                        <p class="card-subtitle card-subtitle-dash">There are {{ $product_count }} records</p>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('products.create') }}'" class="btn btn-dark btn-md text-white" type="button"></i>Add new detail for this product</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>category</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Availablitiy</th>
                            <th>Issued</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product_detail)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ $product_detail->image }}" alt="image for id: {{ $product_detail->id }}"/> <span>{{ ucfirst($product_detail->product->name) ?? 'name for id: '.$product_detail->id }}</span>
                                </td>

                                <td>{{ $product_detail->product->price }} EGP</td>

                                <td>{{ ucfirst($product_detail->product->sub_category->category->name) ?? 'Category for product_detail: '.$product_detail->product->name }} -> 
                                    {{ ucfirst($product_detail->product->sub_category->name ?? 'Sub-category for product_detail: '.$product_detail->product->name) }}</td>

                                <td>
                                    {{ $product_detail->color ?? 'color is not showen please cheack' }}
                                </td>

                                <td>
                                    {{ $product_detail->size ?? 'size is not showen please cheack' }}
                                </td>

                                <td>
                                    @if ($product_detail->quantity >= 1)
                                        <div class="badge badge-opacity-success">In stock</div>
                                        <span class="text-xs font-weight-bold">With {{ $product_detail->quantity }}</span>
                                    @else
                                        <div class="badge badge-danger">Out of stock</div>
                                    @endif
                                </td>

                                <td><i class="mdi mdi-calendar text-muted me-1"></i> <span class="text-muted">{{ $product_detail->created_at->translatedFormat('d/m/Y') }}</span></td>            

                                @if (auth()->user()->user_type == 'admin')

                                        <td class="d-flex justify-content-evenly">
                                                    <button type="button" onclick="window.location.href='{{ route('product_details.edit' , [$product_detail->id]) }}'" class="btn btn-success btn-xs fw-bold">Edit</button>

                                                <form action="#" method="post">  
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                        <button type="submit" class="btn btn-danger btn-xs fw-bold" >Delete</button>
                                                </form>
                                        </td>

                                @elseif (auth()->user()->user_type == 'moderator')
                                    
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                    <nav class="m-b-30 mt-2 p-2" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-primary">
                            {!! $products->links('pagination::bootstrap-5') !!}
                        </ul>
                  </nav>
            </div>
        </div>
    </div>
  </div>
@endsection
