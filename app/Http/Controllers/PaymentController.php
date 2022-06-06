<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodMenu;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function indexCart(){
        $userId = auth()->user()->id;
        $cartItems = Cart::where('userId', $userId)->get();
        //$price = Cart::where('userId', $userId)->value('StudentEmail');
        
        return view('client/cartpage', ['cartItem' => $cartItems]);
    }

    public function addCart(Request $request){
        //dd($request);
        $cart = new Cart;
        $cart->userId = $request->userId;
        $cart->menuId = $request->menuId;        
        $cart->quantity = $request->quantity;
        $cart->notes = $request->notes;
        $cart->menuImage = $request->image;
        $cart->menuName = $request->name;
        $cart->menuPrice = $request->price;
        $cart->save();

        //Cart::create($valData);
        return back()->with('success', 'This menu has successfully added to cart!');
    }
}
