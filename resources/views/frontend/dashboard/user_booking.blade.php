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
                <li>User Booking List </li>
            </ul>
            <h3>User Booking List</h3>
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
        <form action="{{ route('password.change.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">User Booking List  </h3>

    

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>



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

 


@endsection