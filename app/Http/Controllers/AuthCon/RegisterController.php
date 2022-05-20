<?php

namespace App\Http\Controllers\AuthCon;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth/register');
    }

    // see all the requested values
    // public function store(){
    //     return request()->all();
    // }

    public function store(Request $request){
        $val = $request->validate([
            'username' => 'required|min:3|max:100|unique:clients',
            //'email' => ['required', 'email:dns', 'unique:clients'], the same as below
            'email' => 'required|email:dns|unique:clients',
            'password' => 'required|min:6|max:255',
            'confirmationPassword' => 'required|same:password|min:6|max:255'
        ]);
        
        //$val['password'] = bcrypt($val['password']);
        $val['password'] = Hash::make($val['password']);

        User::create($val);
        return redirect('/signin')->with('success', 'Registration successful! You can now login');
    }
}
