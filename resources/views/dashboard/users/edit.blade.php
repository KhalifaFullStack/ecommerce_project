@extends('dashboard.layouts.master')

@section('dashboard.title', 'subCategories')

@section('dashboard.content')

    <div class="card-body">
        <h4 class="card-title">Edit Sub-Category</h4>
        <p class="card-description">Sub-Category name:  ({{ $subcategory->name ??  $subcategory->id}})</p>

        <form action="{{ route('subcategories.update', [$subcategory->id]) }}" method="POST">
            @csrf
            {{ method_field('put') }}
            @include('dashboard.subcategories.form')

            <button type="submit" class="btn btn-primary me-2">Edit Sub-Category</button>
            <button class="btn btn-light">Cancel</button>
        </form>

    </div>
</div>
</div> 
    </div>

@endsection