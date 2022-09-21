@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Welcome Page</h2>
            <hr/>
             current Locale: {{ App::getLocale() }} <br/>
             current Cookie: {{ request()->cookie('language') }} <br/>
        </div>
    </div>
</div>
@endsection