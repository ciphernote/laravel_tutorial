<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailDemoController extends Controller
{
    //
    public function getIndex()
    {
        return view('mail.index');
    }

    public function confirm(\App\Http\Requests\MailDemoRequest $request)
    {
        $data = $request->all();
        return view('mail.confirm')->with($data);
    }

    //use Mail;

    public function finish(\App\Http\Requests\MailDemoRequest $request)
    {
        $data = $request->all();
        $subject = "【自動配信メール】お問い合わせありがとうございます"
        Mail::send('mail.temp', $data, function($message) use($data){
            $message->to($data["email"])->subject($subject);
        });
        return view('mail.finish');
    }
}
