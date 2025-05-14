<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class AboutController extends Controller
{
    function index(Request $request)  {

       return view("welcome");
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
