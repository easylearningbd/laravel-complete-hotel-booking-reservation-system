@extends('frontend.main_master')
@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>User Dashboard </li>
            </ul>
            <h3>User Dashboard</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
             <div class="col-lg-3">

                @include('frontend.dashboard.user_menu')

            </div>


            <div class="col-lg-9">
                <div class="service-article">
                    

    <section class="checkout-area pb-70">
    <div class="container">
        <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">User Profile   </h3>

                        <div class="row">
                           
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Name <span class="required">*</span></label>
                <input type="text" name="name"  class="form-control" value="{{ $profileData->name }}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Email <span class="required">*</span></label>
                <input type="email" name="email" class="form-control" value="{{ $profileData->email }}">
            </div>
        </div>

         
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label> Address <span class="required">*</span></label>
                <input type="text" name="address" class="form-control" value="{{ $profileData->address }}">
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>Phone <span class="required">*</span></label>
                <input type="text" name="phone" class="form-control" value="{{ $profileData->phone }}">
            </div>
        </div>



<div class="col-lg-12 col-md-6">
<div class="form-group">
    <label>User Profile  <span class="required">*</span></label>
    <input type="file" name="photo" class="form-control"  id="image">
</div>
</div>

<div class="col-lg-12 col-md-6">
<div class="form-group">
    <label>  <span class="required"> </span></label>
    <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
</div>
</div>

<button type="submit" class="btn btn-danger">Save Changes </button>
</div>
</div>
</div>
</div>
</form>      
        
    </div>
</section>
                    
                </div>
            </div>

           
        </div>
    </div>
</div>
<!-- Service Details Area End -->


<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

    </script>      



@endsection