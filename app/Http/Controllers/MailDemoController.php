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
var_dump(__LINE__);
        $data = $request->all();
var_dump(__LINE__);
        Mail::send('mail.temp', $data, function($message) use($data){
var_dump(__LINE__);
            $message->to($data["email"])->subject('【自動配信】お問い合わせ完了通知');
var_dump(__LINE__);
        });
var_dump(__LINE__);
        return view('mail.finish');
    }
}
