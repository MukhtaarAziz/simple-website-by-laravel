@extends('layouts.app')
@section('content')
<div class="container my-5" style="min-height:70vh;">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <h2>Profile</h2>
            <div>

            @if(session('flashMessage'))
            @php
                $flashMessage = session()->pull('flashMessage');
            @endphp
            <div class="alert alert-{{ $flashMessage['status'] }} alert-dismissible fade show" role="alert">
            <strong> - </strong> {{ $flashMessage['content'] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                        <span class="fw-bold mx-2">Name:</span>
                        <span>{{ $admin->name }}</span>
                    </li>
                    <li class="list-group-item ">
                            <form class="d-block" action="{{ route('admins.update-email') }}" method="post" >
                                @csrf
                                <div class="d-flex justify-content-between">
                                    <div class="form-group flex-grow-1 mx-1">
                                        <label for="">
                                            <i class="fa fa-envelope"></i>
                                            email
                                        </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('email')?  old('email') : $admin->email  }}">
                                    </div>
                                    <button class="btn btn-secondary btn-sm" type="submit" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                        update
                                    </button>
                                </div>
                            </form>
                    </li>
                    <li class="list-group-item d-flex justify-content-start align-items-center">
                        <span class="small mx-2"> {{ $admin->updated_at }}</span>
                        <span class="small">{{ $admin->created_at }}</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection