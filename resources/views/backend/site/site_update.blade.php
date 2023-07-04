@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Update Site Setting  </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Update Site Setting </li>
							</ol>
						</nav>
					</div>
					 
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
						 
    <div class="col-lg-8">
        <div class="card">

    <form action="{{ route('site.update') }}" method="post" enctype="multipart/form-data">
                @csrf

    <input type="hidden" name="id" value="{{ $site->id }}">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0"> phone </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="phone" class="form-control" value="{{ $site->phone }}"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="address"  class="form-control"  value="{{ $site->address }}"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="email" name="email" class="form-control"  value="{{ $site->email }}"   />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">facebook</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="facebook" class="form-control"  value="{{ $site->facebook }}"   />
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">	twitter</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="twitter" class="form-control"  value="{{ $site->twitter }}"   />
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">copyright</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="copyright" class="form-control"  value="{{ $site->copyright }}"   />
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0"> Logo </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" name="logo" class="form-control"    />


                         <img src="{{ asset($site->logo) }}" alt="" style="width: 100px; height:100px;">
                    </div>
                </div>
               
                
               
               
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                    </div>
                </div>
            </div>
        </form>

        </div>
            


    </div>
						</div>
					</div>
				</div>
			</div>

      
@endsection