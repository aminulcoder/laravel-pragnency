<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminProfileController extends Controller
{
   function adminProfile(){

    $adminprofile = Auth::user();
    // return $roles;
    return view('admin.profile.profile',compact('adminprofile'));
   }

   public function UpdateAdminProfile(Request $request){


    $request->validate([
        'name'      => 'required',

        'thumbnail' => 'required',
    ], [
        'name.required'      => 'please enter your name',
        'thumbnail.required' => 'please enter your thumbnail ',
    ]);
    $adminid = Auth::user()->id;

    User::findOrFail($adminid)->update([
        'name'   => $request->name,
      'thumbnail' => $request->thumbnail,


    ]);
    return redirect()->back()->with('success', 'successfully data added');
   }

   public function resetpasswordAdminProfile(){

        $adminprofile = Auth::user();
        return view('admin.profile.reset-password-profile',compact('adminprofile'));
   }

   public function changepasswordProfile(Request $request) {


    // return $request->all();
      $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

         Auth::logout();
         return redirect()->route('login');
   }

}
