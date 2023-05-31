<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\BookArea;
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

    
    public function EditTeam($id){

        $team = Team::findOrFail($id);
        return view('backend.team.edit_team',compact('team'));

    }// End Method 


    public function UpdateTeam(Request $request){

        $team_id = $request->id;

        if($request->file('image')){

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(550,670)->save('upload/team/'.$name_gen);
            $save_url = 'upload/team/'.$name_gen;
    
            Team::findOrFail($team_id)->update([
    
                'name' => $request->name,
                'postion' => $request->postion,
                'facebook' => $request->facebook,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
    
            $notification = array(
                'message' => 'Team Updated With Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.team')->with($notification);


        } else {

            Team::findOrFail($team_id)->update([
    
                'name' => $request->name,
                'postion' => $request->postion,
                'facebook' => $request->facebook, 
                'created_at' => Carbon::now(),
            ]);
    
            $notification = array(
                'message' => 'Team Updated Without Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.team')->with($notification);

        } // End Eles 


    }// End Method 

     public function DeleteTeam($id){

        $item = Team::findOrFail($id);
        $img = $item->image;
        unlink($img);

        Team::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Team Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


     }   // End Method 

    //  ==================== Book Area All Methods =============

    public function BookArea(){

        $book = BookArea::find(1);
        return view('backend.bookarea.book_area',compact('book'));
    }  // End Method 



}
 