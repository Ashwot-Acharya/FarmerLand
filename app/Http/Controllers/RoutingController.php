<?php

namespace App\Http\Controllers;
use App\Models\Farmer;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    function index(){
        $posts = Farmer::orderBy('id','desc')->paginate(6);
            return view("home",['posts'=>$posts]);
    }
    function login(){
        return view('login');
    }
    function register(){
        return view('registration');

    }
    function post(){
        return view('post');
    }
    function profile(){
        $user = Auth::user()-> id;
        $post = Farmer::where('user_id','=', $user) -> paginate(3);
        //  $posts = Post::where( $user == Post()->user_id);
         return view('profile', ["posts" => $post]);

    }

    function delete($id){
        $post= Farmer::where('id',$id)->first();
        $post -> delete();
       return back();    }

       function dashp(){
        return view('newpass');
    }

       function changepass(Request $request){
        if (Auth::attempt(['id' => Auth::id(), 'password' => $request->oldpassword])){
            $user=User::where('id',Auth::id())->first();
            $user->password=Hash::make($request->newpassword);
            $user->save();
            return redirect('home');
       }
       else{
           return redirect()->back()->withErrors("error");
       }


}
}
