@extends('dashboard.layouts.master')

@section('dashboard.title', 'products')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">All your products</h4>
                    <p class="card-subtitle card-subtitle-dash"><a style="text-decoration: none; color:black;" href="{{ route('products.index') }}">All Products/</a>  There are {{ $count }} products</p>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('products.create') }}'" class="btn btn-dark btn-md text-white" type="button"></i>Add new Product</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered border border-secondary">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Supplier Name</th>
                            <th>Brand Name</th>
                            <th>Category</th>
                            <th>Issued</th>
                            <th>More Details</th>

                            @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'supplier')
                            <th>Action</th>
                            @endif
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="py-1">
                                    <span>{{ ucfirst($product->name) ?? 'name for id: '.$product->id }}</span> 
                                    {{-- <img src="{{ $product->image }}" alt="image for id: {{ $product->id }}"/> --}}
                                </td>

                                <td>{{ $product->price }} EGP</td>

                                <td>
                                    {{ $product->discount*100 ?? 'error please call tech support' }}%
                                </td>

                                <td>
                                    {{ $product->user->name ?? 'error please call tech support' }}
                                </td>

                                <td>
                                    {{ $product->brand_name ?? 'error please call tech support' }}
                                </td>

                                <td>
                                    {{-- {{ ucfirst($product->sub_category->category->name) ?? 'Category for product: '.$product->name }} ->  --}}
                                    {{ ucfirst($product->sub_category->category->name ?? 'Sub-category for product: '.$product->name) }} &rightarrow;
                                    {{ ucfirst($product->sub_category->name ?? 'Sub-category for product: '.$product->name) }}
                                </td>

                                <td><i class="mdi mdi-calendar text-muted me-1"></i> <span class="text-muted">{{ $product->created_at->translatedFormat('d/m/Y') }}</span></td>            

                                <td>
                                    <button type="button" onclick="window.location.href='{{ route('product_details.index' , [$product->id, $product->name]) }}'" class="btn btn-dark btn-xs fw-bold">More Details</button>
                                </td>

                                @if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'supplier')

                                        <td class="d-flex justify-content-evenly">

                                                <button type="button" onclick="window.location.href='{{ route('products.edit', [$product->id, $product->name]) }}'" class="btn btn-success btn-xs fw-bold">Edit</button> &nbsp; &nbsp;

                                                <form action="{{ route('products.destroy', [$product->id]) }}" method="post">  
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

