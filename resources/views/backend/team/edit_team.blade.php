@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Team</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Team</li>
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

            <form action="{{ route('team.update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $team->id }}">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0"> Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="name" class="form-control" value="{{ $team->name }}"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Postion</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="postion"  class="form-control"  value="{{ $team->postion }}"  />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Facebook</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="facebook" class="form-control"  value="{{ $team->facebook }}"   />
                    </div>
                </div>
               
               
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Photo </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input class="form-control" name="image" type="file" id="image">
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">  </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <img id="showImage" src="{{ asset($team->image)  }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
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