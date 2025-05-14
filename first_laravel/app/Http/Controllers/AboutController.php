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
        // User::create([
        //     "name" => "Ali",
        //     "email" => "a@mail.com",
        //     "password" => bcrypt("123")
        // ]);
        // $user = User::find(1);
      DB::listen(function ($query) {
    Log::info('SQL: ' . $query->sql);
    Log::info('Bindings: ', $query->bindings);
});

User::find(1)->update([
    "email" => "a@mail.com",
    "password" => bcrypt("123"),
]);
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
