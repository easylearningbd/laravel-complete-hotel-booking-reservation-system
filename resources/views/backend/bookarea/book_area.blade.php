@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Update Book Area </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Update Book Area</li>
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

            <form   action="{{ route('book.area.update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $book->id }}">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0"> Short Title</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="text" name="short_title" class="form-control" value="{{ $book->short_title }}"  />
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Main Title</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="text" name="main_title"  class="form-control" value="{{ $book->main_title }}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Short Description </h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
        <textarea class="form-control" id="input40" name="short_desc" rows="3" placeholder="Description"> {{ $book->short_desc }} </textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Link Url</h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input type="text" name="link_url"  class="form-control" value="{{ $book->link_url }}"  />
                    </div>
                </div>
               
               
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Photo </h6>
                    </div>
                    <div class="form-group col-sm-9 text-secondary">
                        <input class="form-control" name="image" type="file" id="image">
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">  </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <img id="showImage" src="{{ asset($book->image) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
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