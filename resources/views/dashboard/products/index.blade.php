@extends('dashboard.layouts.master')

@section('dashboard.title', 'Products')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">All products</h4>
                    <p class="card-subtitle card-subtitle-dash">There are {{ $product_count }} products</p>
                </div>
                <div>
                    <button onclick="window.location.href='cart.html'" class="btn btn-dark btn-md text-white" type="button"></i>Add new Product</button>
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
                            <th>In stock</th>
                            <th>Issued</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ $product->image }}" alt="image for id: {{ $product->id }}"/> <span>{{ ucfirst($product->name) ?? 'name for id: '.$product->id }}</span>
                                </td>

                                <td>{{ $product->price }} EGP</td>

                                <td>{{ ucfirst($product->category) ?? 'Category for product: '.$product->name }}</td>

                                <td>
                                    <span class="text-xs font-weight-bold">Sizes</span>
                                    <button type="button" onclick="window.location.href='{{ route('products.edit' , [$product->id]) }}'" class="btn btn-success btn-xs fw-bold">Manage</button>
                                </td>

                                <td>
                                    <span class="text-xs font-weight-bold">Colors</span>
                                    <button type="button" onclick="window.location.href='{{ route('products.edit' , [$product->id]) }}'" class="btn btn-success btn-xs fw-bold">Manage</button>
                                </td>

                                <td>
                                    @if ($product->available_quantity >= 1)
                                        <div class="badge badge-opacity-success">In stock</div>
                                        <span class="text-xs font-weight-bold">With {{ $product->available_quantity }}</span>
                                    @else
                                        <div class="badge badge-danger">Out of stock</div>
                                    @endif
                                </td>

                                <td><i class="mdi mdi-calendar text-muted me-1"></i> <span class="text-muted">{{ $product->created_at->translatedFormat('d/m/Y') }}</span></td>            

                                @if (auth()->user()->user_type == 'admin')

                                        <td class="d-flex justify-content-evenly">
                                                    <button type="button" onclick="window.location.href='{{ route('products.edit' , [$product->id]) }}'" class="btn btn-success btn-xs fw-bold">Edit</button>

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
            </div>
        </div>
    </div>
  </div>
@endsection

