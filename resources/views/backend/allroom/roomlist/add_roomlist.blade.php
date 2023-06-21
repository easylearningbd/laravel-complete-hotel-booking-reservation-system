@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Room List</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Room List</li>
							</ol>
						</nav>
					</div>
					 
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
						 
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body p-4">
                 
                
    <form class="row g-3">
        <div class="col-md-4">
            <label for="input1" class="form-label">Room Type</label>
            <select id="input7" class="form-select">
                <option selected="">Select Room Type </option>
                @foreach ($roomtype as $item) 
                <option>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="input2" class="form-label">Checkin</label>
            <input type="text" class="form-control" id="input2" placeholder="Last Name">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">CheckOut</label>
            <input type="text" class="form-control" id="input2" placeholder="Last Name">
        </div>



        <div class="col-md-12">
            <label for="input3" class="form-label">Phone</label>
            <input type="text" class="form-control" id="input3" placeholder="Phone">
        </div>
        <div class="col-md-12">
            <label for="input4" class="form-label">Email</label>
            <input type="email" class="form-control" id="input4" placeholder="Email">
        </div>
        <div class="col-md-12">
            <label for="input5" class="form-label">Password</label>
            <input type="password" class="form-control" id="input5" placeholder="Password">
        </div>
        <div class="col-md-12">
            <label for="input6" class="form-label">DOB</label>
            <input type="date" class="form-control" id="input6" placeholder="Date of Birth">
        </div>
        <div class="col-md-12">
            <label for="input7" class="form-label">Country</label>
            <select id="input7" class="form-select">
                <option selected="">Choose...</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
        </div>
        
        <div class="col-md-6">
            <label for="input8" class="form-label">City</label>
            <input type="text" class="form-control" id="input8" placeholder="City">
        </div>
        <div class="col-md-4">
            <label for="input9" class="form-label">State</label>
            <select id="input9" class="form-select">
                <option selected="">Choose...</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="input10" class="form-label">Zip</label>
            <input type="text" class="form-control" id="input10" placeholder="Zip">
        </div>
        <div class="col-md-12">
            <label for="input11" class="form-label">Address</label>
            <textarea class="form-control" id="input11" placeholder="Address ..." rows="3"></textarea>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="input12">
                <label class="form-check-label" for="input12">Check me out</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="d-md-flex d-grid align-items-center gap-3">
                <button type="button" class="btn btn-primary px-4">Submit</button>
                <button type="button" class="btn btn-light px-4">Reset</button>
            </div>
        </div>
    </form>
            </div>
        </div>
      


    </div>
						</div>
					</div>
				</div>
			</div>


            <script type="text/javascript">
                $(document).ready(function (){
                    $('#myForm').validate({
                        rules: {
                            name: {
                                required : true,
                            }, 
                            postion: {
                                required : true,
                            }, 
                            facebook: {
                                required : true,
                            }, 
                            image: {
                                required : true,
                            },
                            
                        },
                        messages :{
                            name: {
                                required : 'Please Enter Team Name',
                            }, 
                            postion: {
                                required : 'Please Enter Team Postion',
                            }, 
                            facebook: {
                                required : 'Please Enter Facebook Url',
                            },
                            image: {
                                required : 'Please Select Image',
                            }, 
                             
            
                        },
                        errorElement : 'span', 
                        errorPlacement: function (error,element) {
                            error.addClass('invalid-feedback');
                            element.closest('.form-group').append(error);
                        },
                        highlight : function(element, errorClass, validClass){
                            $(element).addClass('is-invalid');
                        },
                        unhighlight : function(element, errorClass, validClass){
                            $(element).removeClass('is-invalid');
                        },
                    });
                });
                
            </script>

 
        
        


@endsection