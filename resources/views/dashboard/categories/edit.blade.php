@extends('dashboard.layouts.master')

@section('dashboard.title', 'Categories')

@section('dashboard.content')

            <div class="card-body">
                <h4 class="card-title">Edit category</h4>
                <p class="card-description">Edit category: ({{ $category->name ??  $category->id}})</p>

                <form action="{{ route('categories.update', [$category->id]) }}" method="POST">
                    @csrf
                    {{ method_field('put') }}
                    @include('dashboard.categories.form')

                    <div class="d-flex justify-flex-start ">
                        <button type="submit" class="btn btn-primary me-2">Update Category</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </form>

            </div>
        </div> 
    </div>

@endsection