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
Route :: get('/getStatesAndCities',[UserController::class,'getStatesAndCities']);
Route :: get('/editUser/{user}',[UserController::class,'editUser']);
Route :: put('/editUser/{user}',[UserController::class,'editUser']);
Route ::delete('/deleteUser/{user}',[UserController::class,'deleteUser']);


