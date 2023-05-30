<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class TeamController extends Controller
{
    public function AllTeam(){

        $team = Team::latest()->get();
        return view('backend.team.all_team',compact('team'));
    } // End Method 

    public function AddTeam(){
        return view('backend.team.add_team');
    } // End Method 

    public function StoreTeam(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(550,670)->save('upload/team/'.$name_gen);
        $save_url = 'upload/team/'.$name_gen;

        Team::insert([

            'name' => $request->name,
            'postion' => $request->postion,
            'facebook' => $request->facebook,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Team Data Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.team')->with($notification);

    } // End Method 

    




}
 