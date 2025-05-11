<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AboutController extends Controller
{
    function index(Request $request)  {

        $data = [10,20,40];
       return view("welcome",compact("data"));
    }


    function store(Request $request) {

        $name =  $request->input("name");
        $pass =  $request->input("password");

        // $data = $request->all();
       // $data = $request->only(["name","password"]);
       // $data = $request->except(["name","password"]);

        // return response();
        return view("about",compact("name"));
    }
}
