@extends('layouts.adminpanel')
<title>edit product</title>
@section('content')

<div class="container">
      {{--form for product name edit  --}}
    <form method="POST" action="{{ route('category.updtae') }}">
        @csrf
        {{-- csrf field --}}
    <div class="mb-3">
        <label class="form-label">product name</label>
        <input type="text" class="form-control">
    </div>
    {{-- form for product discrip edit--}}
    <div class="mb-3">
      <label class="form-label">discription</label>
      <input type="text" class="form-control">
      
    </div>
    {{-- form for product price edit--}}
    <div class="mb-3">
        <label class="form-label">price</label>
        <input type="text" class="form-control">
        
      </div>
      {{-- form for product image edit--}}
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="text" class="form-control">
        
      </div>
      {{-- form for product category edit--}}
    <div class="mb-3">
        <label class="form-label">category</label>
        <input type="text" class="form-control">
        
      </div>
    {{-- submit button --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('products.index') }}">back</a>
</div>

@endsection