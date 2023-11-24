<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\User\AddNewRequest;
use App\Http\Requests\Backend\User\UpdateRequest;
use Illuminate\Support\Facades\Hash;
use File;
use Exception;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=User::paginate(10);
        return view('backend.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role=Role::get();
        return view('backend.user.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
            $data=new User();
            $data->name_en=$request->userName_en;
            $data->name_bn=$request->userName_bn;
            $data->email=$request->EmailAddress;
            $data->contact_no_en=$request->contactNumber_en;
            $data->contact_no_bn=$request->contactNumber_bn;
            $data->role_id=$request->roleId;
            $data->status=$request->status;
            $data->full_access=$request->fullAccess;
            $data->language='en';
            $data->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $data->image=$imageName;
            }

            if($data->save()){
                $this->notice::success('Successfully saved');
                return redirect()->route('user.index');
            }
        }catch(Exception $e){
            //dd($e);
            $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role=Role::get();
        $user=User::findOrFail(encryptor('decrypt',$id));
        return view('backend.user.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try{
            $data=User::findOrFail(encryptor('decrypt',$id));
            $data->name_en=$request->userName_en;
            $data->name_bn=$request->userName_bn;
            $data->email=$request->EmailAddress;
            $data->contact_no_en=$request->contactNumber_en;
            $data->contact_no_bn=$request->contactNumber_bn;
            $data->role_id=$request->roleId;
            $data->status=$request->status;
            $data->full_access=$request->fullAccess;

            if($request->password)
                $data->password=Hash::make($request->password);

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $data->image=$imageName;
            }

            if($data->save()){
                $this->notice::success('Successfully updated');
                return redirect()->route('user.index');
            }
        }catch(Exception $e){
            $this->notice::error('Please try again');
            //dd($e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data= User::findOrFail(encryptor('decrypt',$id));
        $image_path=public_path('uploads/users/').$data->image;
        
        if($data->delete()){
            if(File::exists($image_path)) 
                File::delete($image_path);
            
            $this->notice::warning('Deleted Permanently!');
            return redirect()->back();
        }
    }
}
