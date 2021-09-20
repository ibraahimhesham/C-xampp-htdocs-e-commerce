@extends('layouts.adminpanel')
<title>edit admin</title>
@section('content')

<div class="container">
      {{--form for username edit  --}}
    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        {{-- csrf field --}}
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control">
    </div>
    {{-- form for email edit--}}
    <div class="mb-3">
      <label class="form-label">email</label>
      <input type="email" class="form-control">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{-- submit button --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('user.index') }}">back</a>
</div>

@endsection