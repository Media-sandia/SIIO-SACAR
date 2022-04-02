<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Auth;
class LoginController extends Controller
{

    //use AuthenticatesUsers;
    public function __construct(){
        $this->middleware('guest',['only'=>'ShowLoginForm']);
       }
    
       public function login(LoginRequest $request){
         if(Auth::attempt(request(['email','password']))){
          request()->session()->regenerate();
          return redirect()->route('home');
         }
         else{
          return back()->WithErrors(['Invalidate'=>'El Usuario y/o contraseña son incorrectos'])->withInput(request(['email']));
        }
    
        }// fin de la funcion login
    
    
        public function ShowLoginForm(){
          return view('Login.auth');
        }
    
        public function logout(){
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
        }

    
}
