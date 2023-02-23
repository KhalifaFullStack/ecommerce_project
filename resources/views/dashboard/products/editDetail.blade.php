@extends('dashboard.layouts.master')

@section('dashboard.title', 'products')

@section('dashboard.content')

<div class="col-12 grid-margin stretch-card">
    <div class="card px-5 py-4">
  
          <div class="d-flex justify-flex-start ">
            <div class="form-group" style="width: 40%; margin-right: 5%;" >
              <label>Product Name</label>
              <input type="text" class="form-control" name="name" placeholder="Add Product Name"
              value="{{ Request::old('name') ? Request::old('name') : $product->name }}">
            </div>
  
            <div class="form-group" style="width: 40%">
              <label>Brand Name</label>
              <input name="brand" class="form-control" placeholder="Add Brand Name" 
              value="{{ Request::old('brand_name') ? Request::old('brand_name') : $product->brand_name }}">
            </div>
          </div>
  
          <div class="d-flex justify-flex-start ">
            <div class="form-group" style="width: 40%; margin-right: 5%;" >
              <label>Price</label>
              <input type="text" class="form-control" name="price" placeholder="Add Price"
              value="{{ Request::old('price') ? Request::old('price') : $product->price }}">
            </div>
  
            <div class="form-group" style="width: 40%">
              <label>Discount</label>
              <input name="discount" class="form-control" placeholder="Add Price Discount" 
              value="{{ Request::old('discount') ? Request::old('discount') : $product->discount }}">
            </div>
          </div>
  
          <div class="form-group" style="width: 60%">
            <label>Description</label>
            <input height="10" name="description" class="form-control" placeholder="Add Product description" 
            value="{{ Request::old('description') ? Request::old('description') : $product->description }}">
          </div>
  
          <div class="d-flex justify-flex-start ">
            <div class="form-group" style="width: 40%; margin-right: 5%;" >
              <label>Category & Sub-category <span class="text-danger">*</span></label>
                <select class="form-select form-select-sm" name="subcat_id">category Name
                  <option selected>Select Sub-category Name</option>
                  @forelse ($subcategory as $subCat)
                  <option value="{{ $subCat->id }}" {{ $subCat->id == $product->subcat_id ? 'selected' : '' }}>
                  {{ $subCat->name }} &rightarrow; {{ $subCat->category->name }}</option>
                  @empty
  
                  @endforelse
              </select>
            </div>
  
              <div class="form-group" style="width: 40%; margin-right: 5%;" >
                  <label>Supplier <span class="text-danger">*</span></label>
                @inject('user', 'App\Models\User')
                @if(auth()->user()->user_type == "supplier")
                    {!! Form::select('supplier_id', $user->where('id', auth()->user()->id)->pluck('name', 'id'), Request::old('supplier_id') ? Request::old('supplier_id') : $product->supplier_id,[
                        'class' => 'form-control select'.( $errors->has('supplier_id') ? ' is-invalid' : '' ),
                        // ( $ProductDetail_model->supplier_id == auth()->user()->id ? 'selected'  : '' ),
                        // 'required',
                        // 'disabled',
                    ]) !!} 
                @else
                    {!! Form::select('supplier_id', $user->type('supplier')->pluck('name','id'), Request::old('supplier_id') ? Request::old('supplier_id') : $product->supplier_id,[
                        'placeholder' => '---------- Please select a supplier ----------',
                        'class'       => 'form-control select'.( $errors->has('supplier_id') ? ' is-invalid' : '' ),
                        // ( $ProductDetail_model->supplier_id == $user->id ? 'selected'  : '' ),
                        // 'required',
                    ]) !!} 
                @endif
              </div>
          </div>
  

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