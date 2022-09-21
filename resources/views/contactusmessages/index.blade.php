@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row">

        <div class="col-12">

            <h2 class="mb-3 border-bottom p-3  bg-white">
                <i class="fa fa-list"></i>
                All Contact Us Messages
            </h2>
            <div class="row">
                @if(session('flashMessage'))
                @php
                $flashMessage = session()->pull('flashMessage');
                @endphp
                <div class="alert alert-{{ $flashMessage['status'] }} alert-dismissible fade show" role="alert">
                    <strong> - </strong> {{ $flashMessage['content'] }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

            </div>

            <div class="row">
                @forelse ($contactUsMessages as $contactUsMessage)
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $contactUsMessage->fullname }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $contactUsMessage->email }}</h6>
                            <p class="card-text">
                                {{ $contactUsMessage->message }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('contactusmessage.destroy',['messageID'=>$contactUsMessage->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete this message')">delete</button>
                                </form>
                                <a href="{{ route('contactusmessage.show',['messageID'=>$contactUsMessage->id]) }}" class="btn btn-outline-secondary card-link"> {{ __('Show')   }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    {{ __('There is no messages') }}
                </div>
                @endforelse
            </div>
            <div class="row mt-3">
                {{ $contactUsMessages->links() }}
            </div>
        </div>
    </div>
</div>
@endsection