@extends('dashboard.layouts.master')

@section('dashboard.title', 'categories')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">All Categories</h4>
                    <p class="card-subtitle card-subtitle-dash"><a style="text-decoration: none; color:black;" href="{{ route('categories.index') }}">All Categories/</a>  There are {{ $count }} Category</p>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('categories.create') }}'" class="btn btn-dark btn-md text-white" type="button"></i>Add new Category</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered border border-secondary">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
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
                        @foreach($all_categories as $category)
                            <tr>
                                <td class="py-1">
                                    <span>{{ ucfirst($category->name) ?? 'name for id: '.$category->id }}</span> 
                                    {{-- <img src="{{ $category->image }}" alt="image for id: {{ $category->id }}"/> --}}
                                </td>

                                <td>{{ $category->description }}</td>

                                <td>
                                    {{ $category->create_user->name ?? 'null' }}
                                </td>

                                <td>
                                    {{ $category->created_at->format('(D) d-M-Y — h:m A') ?? 'error please call tech support' }}
                                </td>

                                <td>
                                    {{ $category->update_user->name ?? 'null' }}
                                </td>

                                <td>
                                    {{ $category->updated_at->format('(D) d-M-Y — h:m A') ?? 'error please call tech support' }}
                                </td>


                                @if (auth()->user()->user_type == 'admin')

                                        <td class="d-flex justify-content-evenly">

                                                <button type="button" onclick="window.location.href='{{ route('categories.edit' , [$category->id]) }}'" class="btn btn-success btn-xs fw-bold">Edit</button> &nbsp; &nbsp;
                                                <form action="{{ route('categories.destroy' , [$category->id]) }}" method="post">  
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
                            {!! $all_categories->links('pagination::bootstrap-5') !!}
                        </ul>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection

