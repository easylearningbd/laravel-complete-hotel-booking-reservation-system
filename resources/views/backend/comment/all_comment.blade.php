@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .large-checkbox{
        transform: scale(1.5);
    }
</style>

<div class="page-content"> 
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Comments</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group"> 
                
            </div>
        </div>
    </div>
    <!--end breadcrumb-->


    
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>User Name</th>
                            <th>Post Name </th>
                            <th>Message</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
         @foreach ($allcomment as $key=> $item ) 
    <tr>
        <td>{{ $key+1 }}</td> 
        <td>{{ $item['user']['name'] }}</td>
        <td>{{ Str::limit($item['post']['post_titile'], 30)  }}</td>
        <td>{{ Str::limit($item->message, 40) }}</td>
        <td>
<div class="form-check-danger form-check form-switch">
    <input class="form-check-input status-toggle large-checkbox" type="checkbox" id="flexSwitchCheckCheckedDanger" data-comment-id="{{ $item->id }}" {{ $item->status ? 'checked' : '' }} >
    <label class="form-check-label" for="flexSwitchCheckCheckedDanger"> </label>
</div>

        </td>
    </tr>
                        @endforeach 
                      
                    </tbody>
                 
                </table>
            </div>
        </div>
    </div>
     
    <hr/>
     
</div>


<script>
    $(document).ready(function(){
        $('.status-toggle').on('change', function(){
            var commentId = $(this).data('comment-id');
            var isChecked = $(this).is(':checked');

            // Send an ajax request to update status 
            $.ajax({
                url: "{{ route('update.comment.status') }}",
                method: "POST",
                data: {
                    comment_id: commentId,
                    is_checked: isChecked ? 1 : 0,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response){
                    toastr.success(response.message);

                },
                error: function(){

                }
            }); 

        });
    });
</script>

@endsection