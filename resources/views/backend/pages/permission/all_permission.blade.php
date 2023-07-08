@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content"> 
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
         
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Permission</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.permission') }}" class="btn btn-primary px-5">Add Permission </a>  
            </div>

            <div class="btn-group">
                <a href="{{ route('import.permission') }}" class="btn btn-warning px-5">Import </a>  
            </div>

            <div class="btn-group">
                <a href="{{ route('export') }}" class="btn btn-danger px-5">Export </a>  
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
                            <th>Permission Name </th>
                            <th>Permission Group</th> 
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($permissions as $key=> $item ) 
                        <tr>
                            <td>{{ $key+1 }}</td> 
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->group_name }}</td> 
                            <td>
    <a href="{{ route('edit.permission',$item->id) }}" class="btn btn-warning px-3 radius-30"> Edit</a>
    <a href="{{ route('delete.permission',$item->id) }}" class="btn btn-danger px-3 radius-30" id="delete"> Delete</a>

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




@endsection