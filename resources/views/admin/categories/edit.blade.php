@extends('layouts.adminpanel')
<title>edit category</title>
@section('content')

<div class="container">
      {{--form for category edit  --}}
    <form method="POST" action="{{ route('categorie.update') }}">
        @csrf{{-- csrf field --}}
        {{-- category edit field --}}
    <div class="mb-3">
        <label class="form-label">category names</label>
        <input type="text" class="form-control">
    </div>
    {{-- submit button --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('categorie.index') }}">back</a>
</div>

@endsection