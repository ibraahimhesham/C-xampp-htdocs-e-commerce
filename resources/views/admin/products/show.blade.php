@extends('layouts.adminpanel')
<title>show product</title>
@section('content')

<div class="container">
    <form>
        {{--form for product name show --}}
    <div class="mb-3">
        <label class="form-label">username</label>
        <input type="" class="form-control" value="{{--  --}}">
    </div>
    {{-- form for discription show--}}
    <div class="mb-3">
      <label class="form-label">discription</label>
      <input type="email" class="form-control" value="{{--  --}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    {{--form for price show --}}
    <div class="mb-3">
        <label class="form-label">price</label>
        <input type="" class="form-control" value="{{--  --}}">
    </div>
    {{--form for image show --}}
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="" class="form-control" value="{{--  --}}">
    </div>
    {{--form for category show --}}
    <div class="mb-3">
        <label class="form-label">category</label>
        <input type="" class="form-control" value="{{--  --}}">
    </div>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('product.index') }}">back</a>
</div>

@endsection