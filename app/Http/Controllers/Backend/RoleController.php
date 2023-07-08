<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\PermissionExport;
use App\Imports\PermissionImport;
use Maatwebsite\Excel\Facades\Excel;

class RoleController extends Controller
{
    public function AllPermission(){
        $permissions = Permission::latest()->get();
        return view('backend.pages.permission.all_permission',compact('permissions'));
    } // End Method 


    public function AddPermission(){

        return view('backend.pages.permission.add_permission');

    } // End Method 

    public function StorePermission(Request $request){

        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification); 

    } // End Method 


    public function EditPermission($id){

        $permission = Permission::find($id);
        return view('backend.pages.permission.edit_permission',compact('permission'));

    }// End Method 


    public function UpdatePermission(Request $request){
        $per_id = $request->id;

        Permission::find($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification); 

    } // End Method 


    public function DeletePermission($id){

        Permission::find($id)->delete();

        $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method 


    public function ImportPermission(){

        return view('backend.pages.permission.import_permission');

    }// End Method 


    public function Export(){

        return Excel::download(new PermissionExport, 'permission.xlsx');

    }// End Method


    public function Import(Request $request){

        Excel::import(new PermissionImport, $request->file('import_file'));
       
        $notification = array(
            'message' => 'Permission Imported Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method

    

}
 