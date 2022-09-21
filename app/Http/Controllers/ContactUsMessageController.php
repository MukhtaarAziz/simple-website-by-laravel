<?php

namespace App\Http\Controllers;

use App\Models\ContactUsMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsMessageController extends Controller
{
    //
    public function create(){}

    // store contact us message
    public function store(Request $req){
        $validator = Validator::make($req->post(),
        [
            'fullname' => 'required|max:120',
            'email' => 'required',
            'message' => 'required',
        ]
        );

        if($validator->fails()){
            to_route('contact.page')
            ->withErrors($validator)
            ->withInput()
            ->with('flashMessage',['status' => 'danger','content'=> 'Please Correct Errors']);
        }

        $data = $validator->safe()->all();

        // store contact us message
        $contactUsMessage = new ContactUsMessage();
        $contactUsMessage->fullname = $data['fullname'];
        $contactUsMessage->email = $data['email'];
        $contactUsMessage->message = $data['message'];

        $contactUsMessage->save();

        return to_route('contact.page')->with('flashMessage',['status'=>'success','content'=>'The Message has been sent']);
    }
}
