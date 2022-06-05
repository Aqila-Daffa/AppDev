<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu;

class AdminController extends Controller
{
    public function adminMenuIndex(){
        $menu = FoodMenu::all();
        return view('admin/menu', ['menulist' => $menu]);
    }
}
