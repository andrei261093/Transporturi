<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function getSignup(){
        return view('adminPages.signup');
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users'  ,
            'password' => 'required|min:4'
        ]);
        $user = new User([
            'firstName'=> $request->input('firstName'),
            'lastName'=> $request->input('lastName'),
            'email'=> $request->input('email'),
            'password'=> bcrypt($request->input('password'))
        ]);
        $user->save();
        return view('clients.home');
    }
    public function getSignin(){
        return view('adminPages.signin');
    }
    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required'  ,
            'password' => 'required|min:4'
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            return redirect()->intended('/');
        }
        return redirect()->back();
    }

    public function getProfile(){
        return view('user.profile');
    }

    public function getLogout(){
        Auth::logout();
        return view('clients.home');
    }
}