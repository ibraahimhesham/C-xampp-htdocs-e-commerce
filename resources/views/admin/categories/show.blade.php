@extends('layouts.adminpanel')
<title>show category</title>
@section('content')

<div class="container">
    <form>
        {{--form for categoryname show --}}
    <div class="mb-3">
        <label class="form-label">category name</label>
        <input type="" class="form-control" value="{{ $category->name }}">
    </div>
    {{-- form for category date show--}}
    <div class="mb-3">
      <label class="form-label">category date</label>
      <input type="text" class="form-control" value="{{ $category->added_at }}">
    </div>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('categorie.index') }}">back</a>
</div>

@endsection