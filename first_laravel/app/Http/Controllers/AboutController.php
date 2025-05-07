<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(Request $request)  {
        $data = [10,30,300];

        dd($request->all());
        return view("about",
        ["user_roll" => $data]
    );
    }
}
