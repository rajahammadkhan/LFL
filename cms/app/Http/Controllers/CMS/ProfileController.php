<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.profile.profile');
    }

    public function update(Request $request)
    {
        $data = User::where('id',auth()->user()->id)->get()->first();
        $request->validate([
            'old_password' => 'required',
            'new_password'=> 'required',
            'confirm_password'=> 'required',

        ]);
       
        $hashedPassword = auth()->user()->password;
        if (Hash::check($request->old_password,$hashedPassword)) {
            if ($request->new_password == $request->confirm_password){
                $data->update([
                    'password'=>Hash::make($request->new_password)
                ]);
                return redirect()->back()->with('success','Password Updated Successfully.');
            }
            else
            {
                return redirect()->back()->with('wrong','New Password & Confirm Password  do not match, please try again.');
            }
        }else{
            return redirect()->back()->with('wrong','You Entered a Wrong Current Password');

        }
    }
}
