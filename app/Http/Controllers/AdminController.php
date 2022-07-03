<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FoodMenu;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminMenuIndex(){
        $menu = FoodMenu::all();
        return view('admin/menu/menu', ['menulist' => $menu]);
    }

    public function paymentIndex(){
        $pay = Payment::all();
        return view('admin/paymentlist', ['payment' => $pay]);
    }

    public function adminUserIndex(){
        $users = User::all();
        return view('admin/user/userlist', compact('users'));
    }

    public function deleteUserPage(){
        $user = User::all();
        return view('admin/user/deleteuser', ['userlist' => $user]);
    }

    public function chooseUser(){
        $user = User::all();
        return view('admin/user/chooseUser', ['userlist' => $user]);
    }

    public function editUserPage(Request $request){
        $userId = $request->user;
        $userlist = User::where('id', $userId)->get();
        return view('admin/user/edituser', ['user' => $userlist]);
    }

    public function editUser(Request $request){
        //dd($request); 
        $userId = $request->usId;
        $isAdmin = $request->isAdmin;
        User::where('id', $userId)->update(['isAdmin' => $isAdmin]);
        return redirect("/chooseuser")->with('success', 'Data Updated Successfully');
    }

    public function deleteUser(Request $request){
        //dd($request);
        $userId = $request->user;
        $user = User::findorfail($userId);
        $user->delete();
        return back()->with('success', 'User was deleted!');
    }
}
