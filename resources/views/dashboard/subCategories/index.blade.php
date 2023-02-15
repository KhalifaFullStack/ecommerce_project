@extends('dashboard.layouts.master')

@section('dashboard.title', 'Sub-categories')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">All Sub-categories</h4>
                    <p class="card-subtitle card-subtitle-dash"><a style="text-decoration: none; color:black;" href="{{ route('subcategories.index') }}">All Sub-categories/</a>  There are {{ $count }} Sub-category</p>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('subcategories.create') }}'" class="btn btn-dark btn-md text-white" type="button"></i>Add new Sub-category</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered border border-secondary">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category Name</th>
                            <th>Create by</th>
                            <th>created at</th>
                            <th>update by</th>
                            <th>updated at</th>

                            @if (auth()->user()->user_type == 'admin')
                            <th>Action</th>
                            @endif
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($all_Sub_category as $subcategory)
                            <tr>
                                <td class="py-1">
                                    <span>{{ ucfirst($subcategory->name) ?? 'name for id: '.$subcategory->id }}</span> 
                                    {{-- <img src="{{ $subcategory->image }}" alt="image for id: {{ $subcategory->id }}"/> --}}
                                </td>

                                <td>{{ $subcategory->description }}</td>

                                <td>{{ $subcategory->category->name }}</td>

                                <td>
                                    {{ $subcategory->create_user->name ?? 'null' }}
                                </td>

                                <td>
                                    {{ $subcategory->created_at->format('(D) d-M-Y — h:m A') ?? 'error please call tech support' }}
                                </td>

                                <td>
                                    {{ $subcategory->update_user->name ?? 'null'}}
                                </td>

                                <td>
                                    {{ $subcategory->updated_at->format('(D) d-M-Y — h:m A') ?? 'error please call tech support' }}
                                </td>


                                @if (auth()->user()->user_type == 'admin')

                                        <td class="d-flex justify-content-evenly">

                                                <button type="button" onclick="window.location.href='{{ route('subcategories.edit' , [$subcategory->id]) }}'" class="btn btn-success btn-xs fw-bold">Edit</button> &nbsp; &nbsp;

                                                 <form action="{{ route('subcategories.destroy', [$subcategory->id]) }}" method="post">  
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                        <button type="submit" class="btn btn-danger btn-xs fw-bold" >Delete</button>
                                                </form>
                                        </td>                                    
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                    <nav class="m-b-30 mt-2 p-2" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-primary">
                            {!! $all_Sub_category->links('pagination::bootstrap-5') !!}
                        </ul>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection

