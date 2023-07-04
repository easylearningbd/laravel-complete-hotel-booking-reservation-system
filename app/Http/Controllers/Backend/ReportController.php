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

    }// End Method 




} 
