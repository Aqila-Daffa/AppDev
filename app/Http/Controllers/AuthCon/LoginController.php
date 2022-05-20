<?php

namespace App\Http\Controllers\AuthCon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('auth/login');
    }
    
    public function loginAuth(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        

        //dd(Auth::attempt($cred));
 
        if (Auth::attempt($cred)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->with('logError', 'Login Failed, Please try again!');
     }

     public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
     }
}
