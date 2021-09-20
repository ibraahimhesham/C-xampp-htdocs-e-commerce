@extends('layouts.enduser')
@section('content')
<title>register</title>
@section('content')

<div class="container">
            {{--form for signing up  --}}
    <form method="Post" action="{{ route('home.store') }}" >
      {{ csrf_field() }}
      {{-- this solve the 419 error or page expired --}}
        
      {{-- input for username --}}
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control" name="name">
    </div>
    {{--input for password  --}}
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
      <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
    </div>
    {{-- input for email --}}
    <div class="mb-3">
      <label class="form-label">email</label>
      <input type="email" class="form-control" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{-- button for submit --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection