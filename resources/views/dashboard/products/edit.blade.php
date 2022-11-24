@extends('dashboard.layouts.master')

@section('dashboard.title', 'Products')

@section('dashboard.content')

    <div class="card-body">
        <h4 class="card-title">Edit product</h4>
        <p class="card-description">End Product name:  ({{ $product->name ??  $product->id}})</p>

        <form action="{{ route('products.update', [$product->id]) }}" method="POST">
            @csrf
            {{ method_field('put') }}
            @include('dashboard.products.form')

            <button type="submit" class="btn btn-primary me-2">Edit product</button>
            <button class="btn btn-light">Cancel</button>
        </form>

    </div>
</div>
</div> 
    </div>

@endsection