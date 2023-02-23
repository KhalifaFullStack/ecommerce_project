@extends('dashboard.layouts.master')

@section('dashboard.title', 'products')

@section('dashboard.content')

        <div class="card-body" style="width: 40%; margin-right: 5%;">
                <h4 class="card-title">Edit product</h4>
                <p class="card-description">Edit Product name:  ({{ $product->name ??  $product->id}})</p>

            <form action="{{ route('products.update', [$product->id]) }}" method="POST">
                    @csrf
                    {{ method_field('put') }}
                    @include('dashboard.products.form')

                <div class="d-flex justify-start">
                <button type="submit" class="btn btn-primary me-2">Edit product</button>
                <button class="btn btn-light">Cancel</button>
                </div>
            </form>

        </div>
    </div> 
</div>

@endsection