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
        $cartItems = Cart::where('userId', $userId)->get();
        //$price = Cart::where('userId', $userId)->value('StudentEmail');
        
        return view('client/cartpage', ['cartItem' => $cartItems]);
    }

    public function indexPurchased(){
        $userId = auth()->user()->id;
        $cartItems = Cart::where('userId', $userId)->get();
        
        return view('client/purchasedpage', ['cartItem' => $cartItems]);
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

    public function payment(Request $request){
        //dd($request);

        $pay = new Payment;
        $pay->userId = $request->userId;
        $pay->tableNumber = $request->typeTable;        
        $pay->cardType = $request->card;
        $pay->cardName = $request->typeName;
        $pay->cardNumber = $request->typeNumber;
        $pay->cardExp = $request->typeExp;
        $pay->cardCvv = $request->typeCvv;
        $pay->totalOrder = $request->totOrder;
        $pay->totalPrice = $request->totPrice;
        $pay->save();

        //Cart::create($valData);
        return back()->with('success', 'Your Payment will be checked!');
    }
}
