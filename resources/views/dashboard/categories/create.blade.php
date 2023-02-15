@extends('dashboard.layouts.master')

@inject('category', 'App\Models\Category');

@section('dashboard.title', 'Add Category')

@section('dashboard.content')

            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
                <p class="card-description">Basic form elements</p>

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    @include('dashboard.categories.form')

                    <div class="d-flex justify-flex-start ">
                        <button type="submit" class="btn btn-primary me-2">Add Category</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </form>

            </div>
        </div> 
    </div>

@endsection