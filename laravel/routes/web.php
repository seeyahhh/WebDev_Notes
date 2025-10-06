<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{id}', function($id){
//     return "Your ID is: ". $id;
// });


Route::get('/edit/{id}', function($id){
    return "EDIT- Your ID is: ". $id . "<br>" . "<a href = ".route('homeUser',$id)." >Home</a>";
})->name("editUser");


Route::get('/home/{id}', function($id){
    return "Welcome ". $id;
})->name("homeUser");


Route::get('/employee', function() {
    return "<h1>Employee Page</h1>";
});


Route::group(['prefix' => 'user'], function(){
    Route::get('/', function () {
    return view('welcome');
    });


    Route::get('/', function() {
    return view('users.user');
    })->name("userPage");


    Route::get('/{id}', function($id){
    return "<a href = ".route('editUser',$id)." >Edit</a>";
    });


    Route::get('/{id}/{name}', function($id, $name){
    return "Your ID is: " . $id . ", " . $name;
    });
});

// Route::fallback(function(){
//     return "Route does not exist";
// });

// Route::fallback(function(){
//     return redirect()->route('userPage');
// });

Route::fallback(function(){
    return view('error');
});

Route::get('/dashboard', function (){
    return view('dashboard');
});
