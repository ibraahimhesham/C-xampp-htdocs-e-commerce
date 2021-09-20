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
            @foreach($Wproducts as $Wproduct)
              <div class="featured-item">
                <img src="{{ asset('enduser/assets/images') }}/{{ $Wproduct->image }}" alt="Item 1">
                <h4>{{ $Wproduct->name }}</h4>
                <h6>{{ $Wproduct->price }}</h6>
                <a></a>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection