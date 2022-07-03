<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\FoodMenu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function indexAction(){
        $product = $_GET["product"];
        $search = request()->query('search');
        $menuItems = FoodMenu::where('type', $product)->latest();

        if($search){
            $menuItems->where('name', 'like', '%' . $search . '%');
            //$menuItems->where('name', $search);
            return view('client/menu/menupage', ['prod' => $product, 'menu' => $menuItems->get()]);
        }else{           
            return view('client/menu/menupage', ['prod' => $product, 'menu' => $menuItems->get()]);
        }
    }

    public function menuDetail(){
        $product = $_GET["product"];
        $fname = $_GET["name"];
        $menuDetail = FoodMenu::where('name', $fname)->get();
        return view('client/menu/menudetail', ['prod' => $product, 'foodName' => $menuDetail]);
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

    public function deleteMenuPage(){

        $menu = FoodMenu::all();
        return view('admin/menu/deletemenu', ['menulist' => $menu]);
    }

    public function deleteMenu(Request $request){
        //dd($request);
        $menuId = $request->menu;
        $menu = FoodMenu::findorfail($menuId);
        $menu->delete();
        return back()->with('success', 'Menu item was deleted!');
    }
}
