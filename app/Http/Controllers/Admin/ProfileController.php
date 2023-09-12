<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdatePasswordRequest;
use App\Http\Requests\Admin\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update_password(UpdatePasswordRequest $request){
        $user = User::find(auth()->user()->id);
        $user->update([
            'password'      => Hash::make($request->new_password),
        ]);

        return redirect()->route('admin.profile.index')
        ->with('success','password has been updated successfully');
    }
     
    public function update(UpdateProfileRequest $request)
    {
        $user = User::find(auth()->user()->id);
        if($user->image != null){
            File::delete(public_path('storage/images/admins/'.$user->image));
        }
        $image_name = time().'-'.$request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/images/admins',$image_name);

        $user->update([
            'name'          => $request->user_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'dob'           => $request->birthday,
            'code'          => $request->code,
            'image'         => $image_name,
        ]);

        return redirect()->route('admin.profile.index')
        ->with('success','user profile has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
