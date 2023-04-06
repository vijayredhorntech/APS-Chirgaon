<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;
use Mail;
use App\Http\Requests;
class ContactController extends Controller
{
    function contact ()
    {
        return view('contact');
    }
    //function to add new message
    function contactDetails(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message'=>'required',
            ]
        );

            $users=$request->post('email');
            $userName=$request->post('name');
            $userMessage=$request->post('message');

            Mail::send('mail', ['userName' => $userName, 'userMessage'=>$userMessage],  function ($message) use ($users)
            {
                $message->to($users);
                $message->subject('Thanks for contacting with us. ');
                $message->from('mountainstar234@gmail.com', 'MountainStarTravels');
            });

            $complains = new Complain();
            $complains->name =  $request->post('name');
            $complains->email = $request->post('email');
            $complains->subject = $request->post('subject');
            $complains->message = $request->post('message');
            $complains->save();
            $request->session()->flash("complainSuccess",'* Your query has been submitted successfully.');
            return redirect('/contact');
    }

}
