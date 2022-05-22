<?php

namespace App\Http\Controllers;

use App\Models\FoodMenu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function indexAction(){
        $product = $_GET["product"];
        $menuItems = FoodMenu::where('type', $product)->get();
        return view('client/menupage', ['prod' => $product, 'menu' => $menuItems]);
    }

    public function storeMenu(Request $request){
        //dd($request);
        //return $request->file('image')->store('menu-images');

        $valData = $request->validate([
            'name' => 'required|unique:food_menus|min:3|max:100',
            'type' => 'required',
            'price' => 'required|numeric|between:0,999999.999',
            'description' => 'required|min:10|max:250',
            'image' => 'image|file'
        ]);
        
        $valData['image'] = $request->file('image')->store('menu-images');

        FoodMenu::create($valData);
        return back()->with('success', 'New menu was added!');
    }
}
