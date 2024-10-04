<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getstatesAndCities(Request $request){
        $states = $request ->input('estados');
        
        $response = Http::get("GET https://servicodados.ibge.gov.br/api/v1/localidades/$states");
        $states = $response->json();
        return view('register', ['states' => $states]);
    }

    public function editUser(Request $user){
        $incomingFields = $user -> validate(
            [   'name'=>'required',
                'cpf'=> 'required',
                'birthdate'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
                'address'=> 'required',
                'state'=> 'required',
                'city'=> 'required',
            ]);
            $user->update($incomingFields);

        return redirect('home');
    }

    public function delete(Request $user){
        $user -> delete();
        return redirect('home');

    }

    public function register(Request $request){
        $incomingFields = $request -> validate(
            [   'name'=>'required',
                'cpf'=> 'required',
                'birthdate'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
                'address'=> 'required',
                'state'=> 'required',
                'city'=> 'required',
            ]);
           
            User :: create($incomingFields);
            return redirect('home');
    }

}
