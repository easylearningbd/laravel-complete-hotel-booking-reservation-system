@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
			 
				<div class="container">
					<div class="main-body">
						<div class="row">




<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-primary" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                        </div>
                        <div class="tab-title">Manage Room </div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false" tabindex="-1">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                        </div>
                        <div class="tab-title">Room Number</div>
                    </div>
                </a>
            </li>
            
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane fade active show" id="primaryhome" role="tabpanel">
              
                <div class="col-xl-12 mx-auto">
						
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="mb-4">Vertical Form</h5>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="input1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="input1" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="input2" class="form-label">Last Name</label>
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
             {{-- // End primaryhome --}}



















            <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
            </div>
            



        </div>
    </div>
</div>





						 
 
						</div>
					</div>
				</div>
 </div>

 
        


@endsection