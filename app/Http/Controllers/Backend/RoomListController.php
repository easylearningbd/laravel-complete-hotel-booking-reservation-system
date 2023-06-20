<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Room;  
use App\Models\RoomBookedDate;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth; 
use App\Models\BookingRoomList;
use App\Models\RoomNumber;

class RoomListController extends Controller
{
    public function ViewRoomList(){

         $room_number_list = RoomNumber::with(['room_type','last_booking.booking:id,check_in,check_out,status,code,name,phone'])->orderBy('room_type_id','asc')
         ->leftJoin('room_types','room_types.id','room_numbers.room_type_id')
         ->leftJoin('booking_room_lists','booking_room_lists.room_number_id','room_numbers.id')
         ->leftJoin('bookings','bookings.id','booking_room_lists.booking_id')
         ->select(
            'room_numbers.*',
            'room_numbers.id as id',
            'room_types.name',
            'bookings.id as booking_id',
            'bookings.check_in',
            'bookings.check_out',
            'bookings.name as customer_name',
            'bookings.phone as customer_phone',
            'bookings.status as booking_stauts',
            'bookings.code as booking_no'
         )
         ->orderBy('room_types.id','asc')
         ->orderBy('bookings.id','desc')
         ->get();

         return view('backend.allroom.roomlist.view_roomlist',compact('room_number_list'));

    } // End Method 






}
 