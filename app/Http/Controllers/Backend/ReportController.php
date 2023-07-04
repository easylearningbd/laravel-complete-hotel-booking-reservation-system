<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod; 
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function BookingReport(){

        return view('backend.report.booking_report');

    } // End Method 


    public function SearchByDate(Request $request){

        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $bookings = Booking::where('check_in', '>=', $startDate)->where('check_out', '<=', $endDate)->get();

        return view('backend.report.booking_search_date',compact('startDate','endDate','bookings'));

    }// End Method 




} 
