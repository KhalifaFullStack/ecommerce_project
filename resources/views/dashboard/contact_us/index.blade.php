@extends('dashboard.layouts.master')

@section('dashboard.title', 'Contact Us')

@section('dashboard.content')

<div class="col-lg-10 grid-margin stretch-card" style="margin:1% 3% 1% 1%;">
    <div class="card">
        <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <h4 class="card-title card-title-dash">All Contact Us Forms</h4>
                    <p class="card-subtitle card-subtitle-dash"><a style="text-decoration: none; color:black;" href="{{ route('contactUs.index') }}">All Contact Us Forms</a>  There are {{ $count }} Forms</p>
                </div>
                @if(auth()->user()->user_type == 'supplier')
                <div>
                    <button onclick="window.location.href='{{ route('contact-us') }}'" class="btn btn-dark btn-md text-white" type="button"></i>Submit new From</button>
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered border border-secondary">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Subject</th>
                            <th>Comment</th>
                            <th>User Type</th>
                            <th>created at</th>
                            <th>updated at</th>

                            @if (auth()->user()->user_type == 'admin')
                            <th>Action</th>
                            @endif
                            
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contact_us as $form)
                            <tr>
                                <td class="py-1">
                                    <span>{{ ucfirst($form->name) ?? 'name for id: '.$form->id }}</span> 
                                    {{-- <img src="{{ $form->image }}" alt="image for id: {{ $form->id }}"/> --}}
                                </td>

                                <td>{{ $form->email }}</td>

                                <td>{{ $form->phone ?? 'null'}}</td>

                                <td>
                                    {{ $form->subject ?? 'null' }}
                                </td>

                                <td>
                                    {{ $form->message ?? 'null'}}
                                </td>

                                <td>
                                    {{ $form->user_type}}
                                </td>

                                <td>
                                    {{ $form->created_at->format('(D) d-M-Y — h:m A') ?? 'error please call tech support' }}
                                </td>

                                <td>
                                    {{ $form->updated_at->format('(D) d-M-Y — h:m A') ?? 'error please call tech support' }}
                                </td>


                                @if (auth()->user()->user_type == 'admin')

                                        <td class="d-flex justify-content-evenly">
                                                <form action="{{ route('contactUs.destroy', [$form->id]) }}" method="post">  
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
                            {!! $contact_us->links('pagination::bootstrap-5') !!}
                        </ul>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection

