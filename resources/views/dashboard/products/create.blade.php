@extends('dashboard.layouts.master')
@inject('products', 'App\Models\Product');

@section('dashboard.title', 'Products')

@section('dashboard.content')

    <div class="card-body">
        <h4 class="card-title">Add a product</h4>
        <p class="card-description">Basic form elements</p>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            @include('dashboard.products.form')

            <button type="submit" class="btn btn-primary me-2">Add product</button>
            <button class="btn btn-light">Cancel</button>
        </form>

    </div>
</div>
</div> 
    </div>

@endsection