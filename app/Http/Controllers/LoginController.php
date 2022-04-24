<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
function register(Request $request){
    $this->validate($request,[
        'name'=>['required','max:255'],
        'username'=> ['required','max:255'],
        'email'=>['required','email','max:255'],
        'password'=>['required','confirmed']


    ]);
    User::create([
        'name'=>$request->name,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);

    auth()-> attempt($request->only('email','password'));
    return redirect()->route('home');
}

function login(Request $request){
    $this->validate($request,[

        'username'=> ['required','max:255'],

        'password'=>['required']


    ]);

    if(!auth()-> attempt($request->only('username','password' ))){
        return back()-> with('status','invalid login details');
    }

    return redirect()->route('home');
}
public function logout(){
    auth()->logout();
   return redirect()->route('home');
}
}
