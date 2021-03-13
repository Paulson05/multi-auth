<?php

namespace App\Http\Controllers;



use App\Models\Users;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }

    public  function getSignUp(Request $request){

        $array=collect($request->only(['name','email']))->put('password',bcrypt($request->password))->all();
        $users = Users::create($array);
        return redirect()->route('pages.welcome')->with('new users created successfully');

    }
    public  function SignUp(){
        return view ('pages.signup');
    }
    public  function login(){
        return view ('pages.login');
    }
    public  function postlogin(Request $request){

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');

        }

        return redirect()->route('users.index')
            ->with('info', 'you are signed in!');

    }


    public function getSignout(){
        Auth::logout();
        return redirect()->route('pages.welcome');

    }
}
