@extends('dashboard.layouts.master')

@inject('subcategory', 'App\Models\Sub_category');

@section('dashboard.title', 'Sub-Category')

@section('dashboard.content')

            <div class="card-body">
                <h4 class="card-title">Add a Sub-Category</h4>
                <p class="card-description">Basic form elements</p>

                <form action="{{ route('subcategories.store') }}" method="POST">
                    @csrf
                    @include('dashboard.subcategories.form')

                    <div class="d-flex justify-flex-start ">
                        <button type="submit" class="btn btn-primary">Create Sub-Category</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>

@endsection