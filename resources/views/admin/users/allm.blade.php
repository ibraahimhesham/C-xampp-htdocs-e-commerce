@extends('layouts.adminpanel')
<title>admins</title>
@section('content')
{{-- table for shownig admins --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">created_at</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        {{-- foreach to show the admins data's --}}
        @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
            {{-- div contain the actions --}}
    <div class="d-flex">
        <a class="btn btn-primary" href="{{ route('user.show' , $user->id) }}">show</a>
    </div>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- link for adding user page --}}
  <a class="btn btn-info" href="{{ route('user.create') }}">Add user</a>
  
@endsection