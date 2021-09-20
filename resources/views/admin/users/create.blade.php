@extends('layouts.adminpanel')
<title>add admin</title>
@section('content')

<div class="container">
            {{--form for username  --}}
    <form method="POST" action="{{ route('user.store') }}" >
      {{ csrf_field() }}
      {{-- this solve the 419 error or page expired --}}
        
      {{-- form for username --}}
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="text" class="form-control" name="name">
    </div>
    {{--form for password  --}}
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{-- form for email --}}
    <div class="mb-3">
      <label class="form-label">email</label>
      <input type="email" class="form-control" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{-- check box for the role --}}
    <div class="mb-3">
      @foreach($roles as $role)
        <div class="form-check" >
          <input class="form-check-input"  name="role_id" type="checkbox"
           value="{{ $role->id }}" id="{{ $role->role_name }}" >
           <label class="form-check-label"  for="{{ $role->role_name }}">{{ $role->role_name }} </label>
        </div>
      @endforeach

  </div>
    {{-- button for submit --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('user.index') }}">back</a>
</div>

@endsection