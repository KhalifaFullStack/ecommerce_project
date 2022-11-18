@extends('dashboard.layouts.master')

@section('dashboard.title', 'Products')

@section('dashboard.content')

<form action="{{ route('products.store') }}" method="POST">
@csrf

<div class="card-body">
    <h4 class="card-title">Basic form elements</h4>
    <p class="card-description">Basic form elements</p>

    @include('dashboard.products.form')

</form>
@endsection