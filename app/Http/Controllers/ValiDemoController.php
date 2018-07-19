<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValiDemoController extends Controller
{
    //
    public function getIndex() {
        return view('validation.index');
    }

    public function confirm(\App\Http\Requests\ValiDemoRequest $request) {
        $data = $request->all();
        return view('validation.confirm')->with($data);
    }
}
