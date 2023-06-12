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
            <?php $empty_array = []; ?>
           
           @foreach ($rooms as $item)

           @php
               $bookings = App\Models\Booking::withCount('assign_rooms')->whereIn('id',$check_date_booking_ids)->where('rooms_id',$item->id)->get()->toArray();

            $total_book_room = array_sum(array_column($bookings,'assign_rooms_count'));

            $av_room = @$item->room_numbers_count-$total_book_room;

           @endphp



            @if ($av_room > 0 && old('persion') <= $item->total_adult)
                
            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    <a href="{{ route('search_room_details',$item->id.'?check_in='.old('check_in').'&check_out='.old('check_out').'&persion='.old('persion'))}}">
                        <img src="{{ asset( 'upload/roomimg/'.$item->image ) }}" alt="Images" style="width: 550px; height:300px;">
                    </a>
                    <div class="content">
                        <h6>
  <a href="{{ route('search_room_details',$item->id.'?check_in='.old('check_in').'&check_out='.old('check_out').'&persion='.old('persion'))}}">{{ $item['type']['name'] }}</a></h6>
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

            @else
            <?php array_push($empty_array, $item->id) ?>

            @endif 
           @endforeach

           @if (count($rooms) == count($empty_array))
           <p class="text-center text-danger">Sorry No Data Found</p>
               
           @endif

        
        </div>
    </div>
</div>
<!-- Room Area End -->






@endsection