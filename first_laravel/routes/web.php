<?php

use App\Http\Controllers\AboutController;
use App\Http\Middleware\AgeCheckMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [AboutController::class,"index"]);



Route::get('/user', function () {
    //return redirect()->route("profile");
    return "user";
});



Route::get('/admin', function () {
    //return redirect()->route("profile");
    return "admin";
});


// Route::get("/about",function(){
//     return view("about");
// });



Route::get("/about",[AboutController::class,"index"]);

Route::get("profile",function(){
    return "Profile";
})->name("profile");

// Route::post("profile",function(){
//     return "Profile";
// });

// Route::put("profile",function(){
//     return "Profile";
// });

// Route::delete("profile",function(){
//     return "Profile";
// });


// Route::prefix("users/")->middleware()->controller()->name()->group(function(){
//     Route::get("/all",function(){
//         return "all user";
//     });
//     Route::get("store",function(){
//         return "all user";
//     });
// });

Route::get("/users/{id}/{name?}",function($id,$name = null,Request $request){

    return $request->all();
    return "user $id $name";
});

Route::get("/users/create",function(){
    return "all user";
});

Route::get("/users/edit",function(){
    return "all user";
});

Route::get("/users/delete",function(){
    return "all user";
});
Route::get("/users/update",function(){
    return "all user";
});


// Route::resource("products",)



Route::fallback(function(){
    return "Route not found!";
});
