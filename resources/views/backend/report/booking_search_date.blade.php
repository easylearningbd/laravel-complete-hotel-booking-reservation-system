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
                    <li class="breadcrumb-item active" aria-current="page">All Booking</li>

    <li class="breadcrumb-item active" aria-current="page">Search Date </li>

    <li class="breadcrumb-item active" aria-current="page"> <span class="badge bg-success">{{ $startDate }}</span> to <span class="badge bg-danger">{{ $endDate }}</span>  </li>


                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('booking.report') }}" class="btn btn-primary px-5">Booking Report </a>
                
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
                            <th>Code</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Payment Method </th>
                            <th>Total Price </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($bookings as $key=> $item ) 
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->payment_method }}</td>
                            <td>${{ $item->total_price }}</td>
                            <td>
    <a href="{{ route('download.invoice',$item->id) }}" class="btn btn-warning px-3 radius-10"><i class="lni lni-download"></i> Download Invoice</a>

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