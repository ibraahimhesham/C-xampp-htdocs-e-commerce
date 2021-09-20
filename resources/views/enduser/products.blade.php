@extends('layouts.enduser')
@section('content')

<!-- Page Content -->
    <!-- Items Starts Here -->
    
    
      <div class="featured-items">
        <div class="container">
            <div class="col-md-12">
              <div class="section-heading">
                <div class="line-dec"></div>
                <h1>Featured Items</h1>
              </div>
            </div>
            <div class="col-md-12">
              <div class="owl-carousel owl-theme">
                @foreach($products as $product)
                  <div class="featured-item">
                    <img src="{{ asset('enduser/assets/images') }}/{{ $product->image }}" alt="Item 1">
                    <h4>{{ $product->name }}</h4>
                    <h6>{{ $product->price }}</h6>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
              
      <!-- Featred Page Ends Here -->
  
@endsection