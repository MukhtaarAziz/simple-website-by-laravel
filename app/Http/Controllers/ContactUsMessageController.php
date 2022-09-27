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

    // index (listing all contact messages)
    public function index(Request $req){
        $contactUsMessages = ContactUsMessage::paginate(6);

        return view('contactusmessages.index',['contactUsMessages'=>$contactUsMessages]);
    }
    // show single contact us message
    public function show(Request $req,$messageID){
        $contactUsMessage = ContactUsMessage::where('id','=',$messageID)->first();
        if($contactUsMessage){
            return view('contactusmessages.show',['contactUsMessage' => $contactUsMessage]);
        }else{
            abort(404);
        }
    }

    // destroy (delete contact us messages)
    public function destroy(Request $req,$messageID){
        $contactUsMessage = ContactUsMessage::where('id','=',$messageID)->first();
        if($contactUsMessage){
            $contactUsMessage->delete();
            return to_route('contactusmessage.index')->with('flashMessage',['status'=>'success','content'=>'message has been deleted']);
        }else{
            return to_route('contactusmessage.index')->with('flashMessage',['status'=>'danger','content'=>'message not found!']);

        }
    }
}
