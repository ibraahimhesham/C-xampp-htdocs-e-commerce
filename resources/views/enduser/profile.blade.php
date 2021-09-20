@extends('layouts.enduser')
@section('content')

<div class="container">
    <form>
        {{--form for username show --}}
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="" class="form-control" value="{{ $user->name }}">
    </div>
    {{-- form for email show--}}
    <div class="mb-3">
      <label class="form-label">email</label>
      <input type="email" class="form-control" value="{{ $user->email }}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('main') }}">back</a>
</div>

@endsection