<?php

namespace App\Http\Controllers\Web;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    protected $themefolder = "hamla" ;
    public function index(){

        /*
        $meta = embedMetas('main');

        $getBnrs = new Banner;
        $bigBanner = $getBnrs->getAdsByPlace('bigbnr');

        return view('theme.pages.contact')->with([
            'meta' => $meta,
            'bigBanner' => $bigBanner,
            'bigBnrCount' => 0
        ]);
*/
         return view($this->themefolder.'.contactus');
    }


    public function Contectus(Request $request){

        $rules = [
            'email' => 'required|email',
            'msg' => 'required',
            'name' => 'required',
        ];

        $customMessages = [
            'email.required' => '"Email" field is required.',
            'email.email' => '"Email" field not valid!!',
            'msg.required' => '"Message" field is required.',
            'name.required' => '"Full Name" field is required.',
        ];

        $this->validate($request, $rules, $customMessages);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('msg');
        $subject = $request->input('subject');

        $newcontact = new Contact();
        $newcontact ->fullname = $name;
        $newcontact ->email = $email;
        $newcontact ->subject = $subject;
        $newcontact ->message = $message;
        
        $newcontact->save();
       // Mail::to('ibtisam@nadsoft.net')->send(new SendMailable($name , $email , $message));

        /*
        // Added by ibtisam send email
        Mail::send('email',
            array(
                'email' => $request->input('email'),
                '$message' => $request->input('msg')
            ), function($message)//use($subscriptionrenewal)
            {
              //  $message->from($subscriptionrenewal->email);
                $message->to('ibtisam@nadsoft.net', 'Access')->subject('Access - New enquery');
            });*/
            session()->put('form', 'contact');
        return back()->with('success', 'Thank you for contacting us');

    }

}
