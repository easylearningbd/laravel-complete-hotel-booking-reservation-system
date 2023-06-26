<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class TestimonialController extends Controller
{
    public function AllTestimonial(){

        $testimonial = Testimonial::latest()->get();
        return view('backend.tesimonial.all_tesimonial',compact('testimonial'));

    } // End Method 


    public function AddTestimonial(){
        return view('backend.tesimonial.add_testimonial');
    }// End Method 


    public function StoreTestimonial(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(50,50)->save('upload/testimonial/'.$name_gen);
        $save_url = 'upload/testimonial/'.$name_gen;

        Testimonial::insert([

            'name' => $request->name,
            'city' => $request->city,
            'message' => $request->message,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Testimonial Data Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testimonial')->with($notification);

    } // End Method 

    public function EditTestimonial($id){

        $testimonial = Testimonial::find($id);
        return view('backend.tesimonial.edit_testimonial',compact('testimonial'));

    } // End Method 


    public function UpdateTestimonial(Request $request){

        $test_id = $request->id;

        if($request->file('image')){

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(50,50)->save('upload/testimonial/'.$name_gen);
            $save_url = 'upload/testimonial/'.$name_gen;
    
            Testimonial::findOrFail($test_id)->update([
    
            'name' => $request->name,
            'city' => $request->city,
            'message' => $request->message,
            'image' => $save_url,
            'created_at' => Carbon::now(),
            ]);
    
            $notification = array(
                'message' => 'Testimonial Updated With Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.testimonial')->with($notification);


        } else {

            Testimonial::findOrFail($test_id)->update([
    
                'name' => $request->name,
                'city' => $request->city,
                'message' => $request->message, 
                'created_at' => Carbon::now(),
                ]);
        
                $notification = array(
                    'message' => 'Testimonial Updated Without Image Successfully',
                    'alert-type' => 'success'
                );
        
                return redirect()->route('all.testimonial')->with($notification);

        } // End Eles  

    }// End Method 


    public function DeleteTestimonial($id){

        $item = Testimonial::findOrFail($id);
        $img = $item->image;
        unlink($img);

        Testimonial::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Testimonial Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


     }   // End Method 


}
