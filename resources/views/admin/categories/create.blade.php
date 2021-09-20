@extends('layouts.adminpanel')
<title>add category</title>
@section('content')

<div class="container">
            {{--form for username  --}}
    <form method="POST" action="{{ route('categorie.store') }}">
      {{ csrf_field() }}
      {{-- this solve the 419 error or page expired --}}
        
      {{-- input for category name --}}
    <div class="mb-3">
        <label class="form-label">category name</label>
        <input type="text" class="form-control" name="name">
    </div>
    {{-- button for submit --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- link for back --}}
  <a class="btn btn-dark" href="{{ route('categorie.index') }}">back</a>
</div>

@endsection