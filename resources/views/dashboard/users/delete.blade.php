@extends('dashboard.layouts.master')

@section('dashboard.title', 'Sub-categories')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">All Users</h4>
                    <p class="card-subtitle card-subtitle-dash"><a style="text-decoration: none; color:black;" href="{{ route('subcategories.index') }}">All Users/</a>  There are {{ $count }} User</p>
                </div>
                <div>
                    <button onclick="window.location.href='{{ route('users.create') }}'" class="btn btn-dark btn-md text-white" type="button"></i>Add new User</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered border border-secondary">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Phone Number</th>
                            <th>User Type</th>
                            <th>Gender</th>
                            <th>Date Of Birth</th>
                            <th>Address</th>
                            <th>Last Login</th>
                            <th>Created by & date</th>
                            <th>Deleted at</th>

                            @if (auth()->user()->user_type == 'admin')
                            <th>Action</th>
                            @endif
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ $user->profile_pic }}" alt="image for id: {{ $user->id }}"> &nbsp; &nbsp;
                                    <span>{{ ucfirst($user->name) ?? $user->username }}</span> 
                                </td>

                                <td>{{ $user->username ?? 'Error please call support'}}</td>

                                <td>
                                    @if($user->status == 'active') <span class="fw-bold text-center text-success">Active</span>
                                    @elseif($user->status == 'inactive') <span class="fw-bold text-center text-warning">Inactive</span>
                                    @elseif($user->status == 'blocked') <span class="fw-bold text-center text-danger">Blocked</span>
                                    @endif
                                </td>

                                <td>
                                    @if($user->phone_no == null) <span>Not Mentioned</span>
                                    @else <span>{{ $user->phone_no }}</span>
                                    @endif
                                </td>

                                <td>{{ $user->user_type ?? 'Error please call support' }}</td>

                                <td>{{ $user->gender ?? 'Error please call support' }}</td>

                                <td>
                                    {{ $user->dob }}
                                </td>

                                <td>
                                    @if($user->address == null) <span>Not Mentioned</span>
                                    @else <span>{{ $user->address }}</span>
                                    @endif
                                </td>

                                <td>
                                    {{ date('(D) d-m-Y h:m A', strtotime($user->last_login_time)) ?? 'Never' }}
                                </td>

                                <td>
                                    @if( $user->created_user_id == $user->id ) <span>{{ $user->username }}</span> @elseif($user->created_user_id == null) <span>Seeder User at &rightarrow;</span> @else <span>{{ $user->created_user->name }}</span> @endif
                                    <span>{{ date('(D) d-m-Y h:m A', strtotime($user->created_at)) ?? 'Error please call tech support' }}</span>

                                </td>

                                <td>
                                    <span>{{ date('(D) d-m-Y h:m A', strtotime($user->deleted_at)) ?? 'Error please call tech support' }}</span>
                                </td>

                                @if (auth()->user()->user_type == 'admin')

                                    <td class="d-flex justify-content-evenly">
                                        <button type="button" onclick="window.location.href='{{ route('users.restore' , [$user->id]) }}'" class="btn btn-success btn-xs fw-bold">Restore</button> &nbsp; &nbsp;

                                        <form action="{{ route('users.forceDelete', [$user->id]) }}" method="post">  
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger btn-xs fw-bold" >Permanently Delete</button>
                                        </form>
                                    </td>
                                    
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                    <nav class="m-b-30 mt-2 p-2" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-primary">
                            {!! $users->links('pagination::bootstrap-5') !!}
                        </ul>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection

