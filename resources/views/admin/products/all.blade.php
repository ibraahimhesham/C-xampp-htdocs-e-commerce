@extends('layouts.adminpanel')
<title>Products</title>
@section('content')
{{-- table for shownig admins --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">discription</th>
        <th scope="col">price</th>
        <th scope="col">category</th>
        <th scope="col">added_at</th>
        <th scope="col">image</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        {{-- foreach to show the admins data's --}}
        @foreach($products as $product)
      <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->discription }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->category_id }}</td>
        <td>{{ $product->added_at }}</td>
        <td><img
          @if($product->image != null)
          src="{{ URL ::asset('adminpanel/img')}}/{{ $product->image }}"  
          @else
          src="{{ URL ::asset('adminpanel/img/faces/avatar')}}"
          @endif
             style="height: 10vh"></td>
        <td>
            {{-- div contain the actions --}}
    <div class="d-flex">
        <a class="btn btn-primary" href="{{ route('products.show' , $product->id) }}">show</a>
        <a class="btn btn-warning"   href="{{ route('products.edit' , $product->id) }}">edit</a>
        <form method="POST" action="{{ route('products.destroy' , $product->id) }}">
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
  {{-- link for adding product page --}}
  <a class="btn btn-info" href="{{ route('products.create') }}">add product</a>
  
@endsection
