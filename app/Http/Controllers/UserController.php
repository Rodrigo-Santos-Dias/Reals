<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request -> validate(
            [   'name'=>'required',
                'cpf'=> 'required',
                'birthdate'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
                'address'=> 'required',
                #'state'=> 'required',
                #'city'=> 'required',
            ]);
           
            User :: create($incomingFields);
            return 'tahhhhel';
    }

}
