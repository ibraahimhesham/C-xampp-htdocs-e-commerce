@extends('layouts.enduser')
@section('content')
<div class="featured-items">
    <div class="container">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>men products</h1>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            @foreach($Fproducts as $Fproduct)
              <div class="featured-item">
                <img src="{{ asset('enduser/assets/images') }}/{{ $Fproduct->image }}" alt="Item 1">
                <h4>{{ $Fproduct->name }}</h4>
                <h6>{{ $Fproduct->price }}</h6>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection