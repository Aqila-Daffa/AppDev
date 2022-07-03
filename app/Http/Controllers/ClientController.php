<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->get();
        return view('client/profile/profilePage', compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUpdate()
    {
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->get();
        return view('client/profile/updateProfile', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $val = $request->validate([
            'username' => 'required|min:3|max:100',
            'email' => 'required|email:dns',
            'password' => 'required|min:6|max:255',
            'confirmationPassword' => 'required|same:password|min:6|max:255'
        ]);
        
        $val['password'] = Hash::make($val['password']);
        
        $userId = auth()->user()->id;
        $userUpdt = User::findorfail($userId);
        $userUpdt->update($val);
        return redirect("/profile")->with('success', 'Data Updated Successfully');
    }
}
