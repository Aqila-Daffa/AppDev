<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\FoodMenu;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function indexCart(){
        $userId = auth()->user()->id;
        $cartItems = Cart::with('menu')->where('user_id', $userId)->get();
        //$cartItems = Cart::where('userId', $userId)->get();
        //$price = Cart::where('userId', $userId)->value('StudentEmail');
        
        return view('client/cartpage', ['cartItem' => $cartItems]);
    }

    public function deleteCart(Request $request){
        //dd($request);
        $cartId = $request->cartId;
        $cart = Cart::findorfail($cartId);
        $cart->delete();
        return back();
    }

    public function indexPurchased(){
        $userId = auth()->user()->id;
        $cartItems = Cart::where('userId', $userId)->get();
        
        return view('client/purchasedpage', ['cartItem' => $cartItems]);
    }

    public function addCart(Request $request){
        //dd($request);
        $cart = new Cart;
        $cart->user_id = $request->userId;
        $cart->food_menu_id = $request->menuId;        
        $cart->quantity = $request->quantity;
        $cart->notes = $request->notes;
        $cart->save();

        //Cart::create($valData);
        return back()->with('success', 'This menu has successfully added to cart!');
    }

    public function payment(Request $request){
        //dd($request);

        $valData = $request->validate([
            'proof' => 'image|file'
        ]);
        $valData['proof'] = $request->file('proof')->store('payment_proof-images');

        $pay = new Payment;
        $pay->user_id = $request->userId;
        $pay->food_menu_id = $request->userId;
        $pay->tableNumber = $request->tableNumb;        
        $pay->payment_proof = $valData['proof'];
        $pay->totalOrder = $request->totOrder;
        $pay->totalPrice = $request->totPrice;
        $pay->save();

        //Cart::create($valData);
        return back()->with('success', 'Your Payment will be checked!');
    }
}
