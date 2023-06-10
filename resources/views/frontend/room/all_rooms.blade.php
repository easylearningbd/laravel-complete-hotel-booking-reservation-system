@extends('frontend.main_master')
@section('main')

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg9">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Rooms</li>
            </ul>
            <h3>Rooms</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Room Area -->
<div class="room-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color">ROOMS</span>
            <h2>Our Rooms & Rates</h2>
        </div>
        <div class="row pt-45">
           
           @foreach ($rooms as $item)
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <a href="{{ url('room/details/'.$item->id) }}">
                        <img src="{{ asset( 'upload/roomimg/'.$item->image ) }}" alt="Images" style="width: 550px; height:300px;">
                    </a>
                    <div class="content">
                        <h6><a href="{{ url('room/details/'.$item->id) }}">{{ $item['type']['name'] }}</a></h6>
                        <ul>
                            <li class="text-color">${{ $item->price }}</li>
                            <li class="text-color">Per Night</li>
                        </ul>
                        <div class="rating text-color">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                    </div>
                </div>
            </div> 
           @endforeach

        
        </div>
    </div>
</div>
<!-- Room Area End -->






@endsection