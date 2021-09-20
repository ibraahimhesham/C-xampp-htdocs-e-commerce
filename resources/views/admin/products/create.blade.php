@extends('layouts.adminpanel')
<title>Add product</title>
@section('content')

<div class="container">
            {{--form for adding  --}}
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{-- this solve the 419 error or page expired --}}
        
      {{-- form for name --}}
    <div class="mb-3">
        <label class="form-label">product name</label>
        <input type="text" class="form-control" name="name">
        @error('name')
    <p class="text-danger">{{ $message }}</p>
@enderror
    </div>

    {{-- form for discription --}}
    <div class="mb-3">
      <label class="form-label">discription</label>
      <input type="text" class="form-control" name="dicription">
 
    </div>
    {{--form for price  --}}
    <div class="mb-3">
      <label class="form-label">price</label>
      <input type="text" class="form-control" name="price">
      @error('price')
    <p class="text-danger">{{ $message }}</p>
@enderror
    </div>
     {{--form for category  --}}
    {{-- check box for the category --}}
    <div class="mb-3">
      @foreach($categories as $category)
        <div class="form-check" >
          <input class="form-check-input"  name="category_id" type="checkbox"
           value="{{ $category->id }}" id="{{ $category->name }}" >
           <label class="form-check-label"  for="{{ $category->ame }}">{{ $category->name }} </label>
        </div>
      @endforeach
  </div>
        @error('category_id')
    <p class="text-danger">{{ $message }}</p>
@enderror
    
      <div class="mb-3">
        <label class="form-label">upload image</label>
        <input type="file" class="form-control"  name="image">
        @error('image')
    <p class="text-danger">{{ $message }}</p>
@enderror
        </div>
    {{-- button for submit --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('products.index') }}">back</a>
</div>

@endsection