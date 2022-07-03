<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Cart;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\FoodMenu;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Livewire\Component;

class PaymentController extends Controller
{

    public function checkout(Request $request)
    {   
        //dd($request);
        // Enter Your Stripe Secret
        Stripe::setApiKey('sk_test_51LHPczEi35K4ZfYdQ1rRuVKf4qjGo5qRGizcnadXqN6LP1B83KjaZos0QIf7iAgPYrC4jrJ3sq0b4F8PSGrF65Hf00clZk532E');

		$amount = $request->totPrice;
		$amount *= 100;
        $amount = (int) $amount;

        $userId = $request->userId;
        $tableNumb = $request->tableNumb;        
        $totOrder = $request->totOrder;
        $totPrice = $request->totPrice;
        
        $payment_intent = PaymentIntent::create([
			'description' => 'Stripe Payment',
			'amount' => $amount,
			'currency' => 'MYR',
			'description' => 'OSOS payment for order',
			'payment_method_types' => ['card'],
		]);
		$intents = $payment_intent->client_secret;

		return view('client.checkout',['intent' => $intents, 'usId' => $userId , 'tabNum' => $tableNumb , 'totOrd' => $totOrder, 'totPrc' => $totPrice]);

    }

    public function afterPayment(Request $request)
    {
        $usd = $request->userId;
        $pay = new Payment;
        $pay->user_id = $request->userId;
        $pay->tableNumber = $request->tableNumb;        
        $pay->totalOrder = $request->totOrder;
        $pay->totalPrice = $request->totPrice;
        $pay->save();

        //$cart = Cart::where('user_id', $usd)->truncate();
        Cart::where('user_id', $usd)->update(['status' => 'Paid']);
        return redirect("/cart")->with('success', 'Payment Successful');
    }

    /*
    public function payment(Request $request){
        dd($request);

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

        Cart::create($valData);
        return back()->with('success', 'Your Payment will be checked!');
    }
    */

    //************* Cart *******************/

    public function indexCart(){
        $userId = auth()->user()->id;
        $cartItems = Cart::with('menu')->where('user_id', $userId)
        ->where('status', 'Pending')->get();
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

    public function indexPurchased(){
        $userId = auth()->user()->id;
        $cartItems = Cart::with('menu')->where('user_id', $userId)
        ->where('status', 'Paid')->get();
        
        return view('client/purchasedpage', ['cartItem' => $cartItems]);
    }

    public function updateQuantity(Request $request){
        $productId = $request->menuId;
        $qty = $request->quantity;
        Cart::where('food_menu_id', $productId)->update(['quantity' => $qty]);
        return back();
    }

}
