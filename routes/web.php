<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    
    return view('register');
});

Route :: get('/home',function(){
    $users =User :: all();
    return view('home',['users'=> $users]);
});

Route ::post('/register',[UserController::class,'register']);
