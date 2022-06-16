<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FoodMenu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminMenuIndex(){
        $menu = FoodMenu::all();
        return view('admin/menu', ['menulist' => $menu]);
    }

    public function adminUserIndex(){
        $user = User::all();
        return view('admin/menu', compact('user'));
    }
}
