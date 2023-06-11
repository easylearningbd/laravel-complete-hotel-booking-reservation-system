<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Facility;
use App\Models\MultiImage;
use App\Models\RoomNumber;
use App\Models\RoomType;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class RoomController extends Controller
{
    public function EditRoom($id){

        $basic_facility = Facility::where('rooms_id',$id)->get();
        $multiimgs = MultiImage::where('rooms_id',$id)->get();
        $editData = Room::find($id);
        $allroomNo = RoomNumber::where('rooms_id',$id)->get();
        return view('backend.allroom.rooms.edit_rooms',compact('editData','basic_facility','multiimgs','allroomNo'));
    } //End Method 


    public function UpdateRoom(Request $request, $id){

        $room  = Room::find($id);
        $room->roomtype_id = $room->roomtype_id;
        $room->total_adult = $request->total_adult;
        $room->total_child = $request->total_child;
        $room->room_capacity = $request->room_capacity;
        $room->price = $request->price;

        $room->size = $request->size;
        $room->view = $request->view;
        $room->bed_style = $request->bed_style;
        $room->discount = $request->discount;
        $room->short_desc = $request->short_desc;
        $room->description = $request->description; 
        $room->status = 1;
        /// Update Single Image 

        if($request->file('image')){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(550,850)->save('upload/roomimg/'.$name_gen);
        $room['image'] = $name_gen; 
        }

        $room->save();

        //// Update for Facility Table 

        if($request->facility_name == NULL){

            $notification = array(
                'message' => 'Sorry! Not Any Basic Facility Select',
                'alert-type' => 'error'
            );
    
            return redirect()->back()->with($notification);

        } else{
            Facility::where('rooms_id',$id)->delete();
            $facilities = Count($request->facility_name);
            for($i=0; $i < $facilities; $i++ ){
                $fcount = new Facility();
                $fcount->rooms_id = $room->id;
                $fcount->facility_name = $request->facility_name[$i];
                $fcount->save();
            } // end for
        } // end else 

        //// Update Multi Image 

        if($room->save()){
            $files = $request->multi_img;
            if(!empty($files)){
                $subimage = MultiImage::where('rooms_id',$id)->get()->toArray();
                MultiImage::where('rooms_id',$id)->delete();
 
            }
            if(!empty($files)){
                foreach($files as $file){
                    $imgName = date('YmdHi').$file->getClientOriginalName();
                    $file->move('upload/roomimg/multi_img/',$imgName);
                    $subimage['multi_img'] = $imgName;

                    $subimage = new MultiImage();
                    $subimage->rooms_id = $room->id;
                    $subimage->multi_img = $imgName;
                    $subimage->save();
                }

            }
        } // end if

        $notification = array(
            'message' => 'Room Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }//End Method 


    public function MultiImageDelete($id){

        $deletedata = MultiImage::where('id',$id)->first();

        if($deletedata){

            $imagePath = $deletedata->multi_img;

            // Check if the file exists before unlinking 
            if (file_exists($imagePath)) {
               unlink($imagePath);
               echo "Image Unlinked Successfully";
            }else{
                echo "Image does not exist";
            }

            //  Delete the record form database 

            MultiImage::where('id',$id)->delete();

        }

        $notification = array(
            'message' => 'Multi Image Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }//End Method 

    public function StoreRoomNumber(Request $request,$id){

        $data = new RoomNumber();
        $data->rooms_id = $id;
        $data->room_type_id = $request->room_type_id;
        $data->room_no = $request->room_no;
        $data->status = $request->status;
        $data->save();

        $notification = array(
            'message' => 'Room Number Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }//End Method 



    public function EditRoomNumber($id){

        $editroomno = RoomNumber::find($id);
        return view('backend.allroom.rooms.edit_room_no',compact('editroomno'));

    }//End Method 

    public function UpdateRoomNumber(Request $request, $id){

        $data = RoomNumber::find($id);
        $data->room_no = $request->room_no;
        $data->status = $request->status;
        $data->save();

       $notification = array(
            'message' => 'Room Number Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('room.type.list')->with($notification); 

    }//End Method 


    public function DeleteRoomNumber($id){

        RoomNumber::find($id)->delete();

        $notification = array(
            'message' => 'Room Number Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('room.type.list')->with($notification); 

    }//End Method

    public function DeleteRoom(Request $request, $id){
        $room = Room::find($id);

        if (file_exists('upload/roomimg/'.$room->image) AND ! empty($room->image)) {
           @unlink('upload/roomimg/'.$room->image);
        }

        $subimage = MultiImage::where('rooms_id',$room->id)->get()->toArray();
        if (!empty($subimage)) {
            foreach ($subimage as $value) {
               if (!empty($value)) {
               @unlink('upload/roomimg/multi_img/'.$value['multi_img']);
               }
            }
        }

        RoomType::where('id',$room->roomtype_id)->delete();
        MultiImage::where('rooms_id',$room->id)->delete();
        Facility::where('rooms_id',$room->id)->delete();
        RoomNumber::where('rooms_id',$room->id)->delete();
        $room->delete();

        $notification = array(
            'message' => 'Room Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);  

    }//End Method









}
 