<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function profile(Request $req){
        $user = User::where('id','=',Auth::user()->id)->first();

        return view('admins.profile',['admin'=> $user]);
    }

    public function updateUserEmail(Request $req){
        $user = User::where('id','=',Auth::user()->id)->first();
        $validator = Validator::make(
            $req->post(),
            [
                'email'=> 'required|email'
            ]
        );

        if($validator->fails()){
            return to_route('admins.profile')
            ->with('flashMessage',['status'=>'danger','content'=>'Incorrect email address']);
        }

        $data = $validator->safe()->all();
        $user->email = $data['email'];
        $user->save();

        return to_route('admins.profile')
        ->with('flashMessage',['status'=>'success','content'=>'The Email address has been updated']);
    }
}
