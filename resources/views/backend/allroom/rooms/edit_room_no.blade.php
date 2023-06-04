@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Room Number</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Room Number</li>
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

            <form action="{{ route('update.roomno',$editroomno->id) }}" method="post" enctype="multipart/form-data">
                @csrf
 

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Room Number </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" name="room_no" class="form-control" value="{{ $editroomno->room_no }}"  />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Room Status </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <select name="status" id="input7" class="form-select">
                            <option selected="">Select Status..</option>
                            <option value="Active" {{ $editroomno->status == 'Active'?'selected':''}}> Active </option>
                            <option value="Inactive" {{ $editroomno->status == 'Inactive'?'selected':''}}>Inactive </option> 
                        </select>
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