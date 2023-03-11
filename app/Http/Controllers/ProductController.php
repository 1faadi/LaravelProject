<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class ProductController extends Controller
{
    public function productCart()
    {
        $product = Product::all();
        return view('product.index', compact('product'));

    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('Cart', $cart);
        return redirect()->back();
    }

    public function increaseByOne($id)
    {
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $cart = new Cart($oldCart);
        $cart->increase($id);
        if (count($cart->items) > 0) {
            Session::put('Cart', $cart);
        } else {
            Session::forget('Cart');
        }
        return redirect()->back();
    }

    public function decreaseByOne($id)
    {
        $oldCart = Session::has('Cart') ? Session::get('Cart') : null;
        $cart = new Cart($oldCart);
        $cart->decrease($id);
        if (count($cart->items) > 0) {
            Session::put('Cart', $cart);
        } else {
            Session::forget('Cart');
        }
        return redirect()->back();
    }

    public function view()
    {
        if (!Session::has('Cart')) {
            return view('product.view');
        }
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        return view('product.view', ['product' => $cart->items, 'totalPrice' => $cart->totalprice]);
    }

    public function deleteCart(Request $request)
    {
        Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->back();
    }
    public function checkOut(){
        if (!Session::has('Cart')){
            return view('product.payment');
        }
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalprice;
        return view('product.payment',['total' =>$total]);
    }
    public function postCheckout(Request $request){
        if (!Session::has('Cart')){
            return redirect();
        }
        $oldCart = Session::get('Cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Charge::create([
            "amount" =>$cart->totalprice*100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment"
        ]);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->name = $request->name;
        $order->payment_id = $charge->_id;
        $order->save();
        Session::forget('Cart');
        Session::flash('success', 'Payment successful!');
        return redirect('/product');
    }
}
