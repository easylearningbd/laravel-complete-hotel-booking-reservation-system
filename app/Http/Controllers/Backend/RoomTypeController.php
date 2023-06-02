<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class RoomTypeController extends Controller
{
    public function RoomTypeList(){

        $allData = RoomType::orderBy('id','desc')->get();
        return view('backend.allroom.roomtype.view_roomtype',compact('allData'));

    }// End Method 






}
 