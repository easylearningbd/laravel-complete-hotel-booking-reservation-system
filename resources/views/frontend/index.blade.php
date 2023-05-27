@extends('frontend.main_master')
@section('main')
<!-- Banner Area -->
<div class="banner-area" style="height: 480px;">
    <div class="container">
        <div class="banner-content">
            <h1>Discover a Hotel & Resort to Book a Suitable Room</h1>
            
             
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Banner Form Area -->
<div class="banner-form-area">
    <div class="container">
        <div class="banner-form">
            <form>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK IN TIME</label>
                            <div class="input-group">
                                <input id="datetimepicker" type="text" class="form-control" placeholder="11/02/2020">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>	
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK OUT TIME</label>
                            <div class="input-group">
                                <input id="datetimepicker-check" type="text" class="form-control" placeholder="11/02/2020">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>	
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <div class="form-group">
                            <label>GUESTS</label>
                            <select class="form-control">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>	
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <button type="submit" class="default-btn btn-bg-one border-radius-5">
                            Check Arability
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Banner Form Area End -->

<!-- Room Area -->
 @include('frontend.home.room_area')
<!-- Room Area End -->

<!-- Book Area Two-->
@include('frontend.home.room_area_two')
<!-- Book Area Two End -->

<!-- Services Area Three -->
@include('frontend.home.services')
<!-- Services Area Three End -->

<!-- Team Area Three -->
@include('frontend.home.team')
<!-- Team Area Three End -->

<!-- Testimonials Area Three -->
@include('frontend.home.testimonials')
<!-- Testimonials Area Three End -->

<!-- FAQ Area -->
@include('frontend.home.faq')
<!-- FAQ Area End -->

<!-- Blog Area -->
@include('frontend.home.blog')
<!-- Blog Area End -->

@endsection