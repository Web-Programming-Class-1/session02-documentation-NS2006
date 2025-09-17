<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/student', function(){
    return view('student');
});

Route::prefix('lecturer')->group(function(){
    Route::get('/', function(){
        return view('lecturer');
    });

    Route::get('/dashboard', function(){
        return view('lecturer.dashboard');
    });

    Route::get('/about', function(){
        return view('lecturer.about');
    });
});

Route::get('/contact', function(){
    return view('contact');
});

Route::post('/submit-contact', function(Request $request){
    $name = $request->input('name');
    return redirect("/about")->with('name', $name);
});

Route::get('/about', function(){
    $name = session('name', 'Guest');

    return view('about', ["name" => $name]);
});

Route::get('/profile', function(){
    return redirect('/profile/Guest');
});

Route::get('/profile/{username}', function($username){
    return view('profile',  ['username' => $username]);
});

Route::fallback(function(){
    return response()->view('fallback', [], 404);
});