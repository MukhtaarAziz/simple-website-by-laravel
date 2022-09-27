@extends('layouts.app')
@section('content')
<div class="container my-5" style="min-height:70vh">
    <div class="row">
        <div class="col-12">
            <h3 class=" mb-3 border-bottom p-3  bg-white">
                <a name="" id="" class="btn btn-primary" href="{{ route('contactusmessage.index',Request::all()) }}" role="button"><i class="fa fa-arrow-left"></i></a>
                Show Message
            </h3>
            <div class="bg-white p-2 borader">
                <h3>{{ $contactUsMessage->fullname }}</h3>
                <p>{{ $contactUsMessage->email }}</p>
                <div>
                    {{  $contactUsMessage->message }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection