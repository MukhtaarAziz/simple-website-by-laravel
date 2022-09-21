@extends('layouts.app')
@section('content')
<div class="container my-5" >
    <h2 class="mb-3">
        Contact Us Page
    </h2>
    <div class="row py-5 px-2" style="background:url(http://dev.aljawadain.org/assets/images/backgrounds/bk005.jpg)">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="bg-white p-4 shadow rounded">
                @include('forms.contactus')
            </div>
        </div>
    </div>
</div>
@endsection