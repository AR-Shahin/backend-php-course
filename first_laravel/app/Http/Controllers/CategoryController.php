<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()  {
        return view('backend.category.index');
    }

    function store(Request $request) {
        // Validate the request data
        $request->validate([
            "name" => ["required", "string", "max:90","min:2"],
            // "image" => ["required", "mimes:jpeg,png,jpg,gif,svg", "max:2048"],
        ]);

        $data = $request->get("name");

        dd($data);
        return $request;
    }
}
