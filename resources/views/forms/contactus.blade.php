
@if(session('flashMessage'))
@php
    $flashMessage = session()->pull('flashMessage');
@endphp
<div class="alert alert-{{ $flashMessage['status'] }} alert-dismissible fade show" role="alert">
  <strong> - </strong> {{ $flashMessage['content'] }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form action="{{ route('contactusmessage.store') }}" method="post">
    @csrf
<div class="mb-3">
  <label for="fullname" class="form-label">Email address</label>
  <input type="text" name="fullname" class="form-control" id="fullname" placeholder="ex: Ahmed Ali" value="{{ old('fullname') }}">
@error('fullname')
    <div class="small text-danger">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value=" {{ old('email') }}">
  @error('email')
    <div class="small text-danger">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
  <label for="message" class="form-label">Example textarea</label>
  <textarea class="form-control" name="message" id="message" rows="3">{{ old('message') }}</textarea>
  @error('message')
    <div class="small text-danger">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">send</button>
</div>
</form>