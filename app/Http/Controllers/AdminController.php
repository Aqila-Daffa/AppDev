<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FoodMenu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminMenuIndex(){
        $menu = FoodMenu::all();
        return view('admin/menu/menu', ['menulist' => $menu]);
    }

    public function adminUserIndex(){
        $users = User::all();
        return view('admin/user/userlist', compact('users'));
    }

    public function deleteUserPage(){

        $user = User::all();
        return view('admin/user/deleteuser', ['userlist' => $user]);
    }

    public function deleteUser(Request $request){
        //dd($request);
        $userId = $request->user;
        $user = User::findorfail($userId);
        $user->delete();
        return back()->with('success', 'User was deleted!');
    }
}
