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
                            <h5 class="mb-4">Update Room </h5>
    <form class="row g-3">
        <div class="col-md-4">
            <label for="input1" class="form-label">Room Type Name </label>
            <input type="text" name="roomtype_id" class="form-control" id="input1" value="{{ $editData['type']['name'] }}" >
        </div>
        <div class="col-md-4">
            <label for="input2" class="form-label">Total Adult</label>
            <input type="text" name="total_adult" class="form-control" id="input2"  value="{{ $editData->total_adult }}">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">Total Child </label>
            <input type="text" name="total_child" class="form-control" id="input2" value="{{ $editData->total_child }}">
        </div>


        <div class="col-md-6">
            <label for="input3" class="form-label">Main Image </label>
            <input type="file" name="image" class="form-control" id="image"  >

            <img id="showImage" src="{{ (!empty($editData->image)) ? url('upload/roomimg/'.$editData->image) : url('upload/no_image.jpg') }}" alt="Admin" class="bg-primary" width="60"> 
        </div>




        <div class="col-md-6">
            <label for="input4" class="form-label">Gallery Image </label>
            <input type="file" name="multi_img[]" class="form-control" multiple id="multiImg" accept="image/jpeg, image/jpg, image/gif, image/png" >

            <div class="row" id="preview_img"></div>
        </div>


        <div class="col-md-4">
            <label for="input1" class="form-label">Room Price  </label>
            <input type="text" name="price" class="form-control" id="input1" value="{{ $editData->price }}" >
        </div>
        <div class="col-md-4">
            <label for="input2" class="form-label">Discount ( % )</label>
            <input type="text" name="discount" class="form-control" id="input2"  value="{{ $editData->discount }}">
        </div>

        <div class="col-md-4">
            <label for="input2" class="form-label">Room Capacity </label>
            <input type="text" name="room_capacity" class="form-control" id="input2" value="{{ $editData->room_capacity }}">
        </div>

        <div class="col-md-6">
            <label for="input7" class="form-label">Room View </label>
            <select name="view" id="input7" class="form-select">
                <option selected="">Choose...</option>
                <option value="Sea View">Sea View </option>
                <option value="Hill View">Hill View </option>
               
            </select>
        </div>

        <div class="col-md-6">
            <label for="input7" class="form-label">Bed Style</label>
            <select name="bed_style" id="input7" class="form-select">
                <option selected="">Choose...</option>
                <option value="Queen Bed"> Queen Bed </option>
                <option value="Twin Bed">Twin Bed </option>
                <option value="King Bed">King Bed </option>
            </select>
        </div>
  
        <div class="col-md-12">
            <label for="input11" class="form-label">Short Description </label>
            <textarea name="short_desc" class="form-control" id="input11" placeholder="Address ..." rows="3">{{ $editData->short_desc }}</textarea>
        </div>

        <div class="col-md-12">
            <label for="input11" class="form-label"> Description </label>
            <textarea name="description" class="form-control" id="myeditorinstance" >{!! $editData->short_desc !!}</textarea>
        </div>
 
        <div class="col-md-12">
            <div class="d-md-flex d-grid align-items-center gap-3">
                <button type="submit" class="btn btn-primary px-4">Save Changes</button> 
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
        
        
        <!--------===Show MultiImage ========------->
<script>
    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
             
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                    .height(80); //create image element 
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
             
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });
 </script>


@endsection