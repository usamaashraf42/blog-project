<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }
    public function profile(){
        return view('user.account_setting');
    }
    public function postprofile(Request $request){
        $id =Auth::id();
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$id,
            'confirm_pass'=>'same:new_pass'
        ]);
        $user =User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->save();
        return back()->with('message',"User credential has been successfully changed");

    }
    public function postpassword(Request     vm$request)
    {

        $request->validate([
            'current_pass'=>'required',
            'confirm_pass'=>'same:new_pass',
        ]);

            $old_pass= $request->current_pass;
           if(Hash::check($old_pass,Auth::user()->password))
            {
                $user =User::find(Auth::id());
                $user->password=Hash::make($request->input('confirm_pass'));
                $user->save();
                return back()->with('mes     vmsage',"User password has been successfully changed");
            }
            else{
                return back()->with('error','Your current password is invalid');
            }


    }

}
