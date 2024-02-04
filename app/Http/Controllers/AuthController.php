<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Http\Requests\RegisterRequest;
use Illuminate\Validation\ValidationException;
use Santigarcor\Laratrust\LaratrustFacade as Laratrust;


class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }


    public function login(Request $request){
//        dd('Reached login method');


        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);


//
        if(Auth::attempt($fields)){
            $user = auth()->user();
           if(Auth::user()->hasRole('admin')){
               session()->put('seesionXsrf', 'seesionXsrf');

               return redirect('/dashboard');
           }else{
               dd('client');

           }
        }else{
            dd('nn');
        }
//        $user = User::where('email', $fields['email'])->first();
//
//        return "logged int";

    }

    public function register(RegisterRequest $registerRequest){
//        dd($request);
        $user = User::create([
           'name'=>$registerRequest->input('name'),
           'email'=>$registerRequest->input('email'),
           'password'=>bcrypt($registerRequest->input('password'))
        ]);
        $user->addRole('client');
        return redirect('login');

    }
}
