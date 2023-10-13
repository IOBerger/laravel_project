<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class Contact extends Controller
{

    public function add(Request $request){

        $content = json_encode($request->post());
        Storage::append('contact.txt', $content);
        return view('pages.contact');

    }

}
