@extends('layouts.adminpanel')
<title>categories</title>
@section('content')
{{-- table for shownig categories --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">addeded_at</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        {{-- foreach to show the  categories --}}
        @foreach($categories as $category)
      <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->added_at }}</td>
        <td>
            {{-- div contain the actions --}}
    <div class="d-flex">
        <a class="btn btn-primary" href="{{ route('categorie.show' , $category->id) }}">show</a>
        <a class="btn btn-warning"   href="{{ route('categorie.edit' , $category->id) }}">edit</a>
        <form method="POST" action="{{ route('categorie.destroy' , $category->id) }}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">delete</button>
        </form>
    </div>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- link for adding user page --}}
  <a class="btn btn-info" href="{{ route('categorie.create') }}">Add category</a>
  
@endsection