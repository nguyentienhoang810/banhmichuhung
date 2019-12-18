<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Session;

class CartController extends Controller
{
    public function checkout() {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $cartItems = $cart->items;
            $totalQty = $cart->totalQty;
            $totalPrice = $cart->totalPrice;
            return view('page.checkout', compact('cartItems', 'totalQty', 'totalPrice'));
        }
        $cartItems = [];
        $totalQty = 0;
        $totalPrice = 0;
        return view('page.checkout', compact('cartItems', 'totalQty', 'totalPrice'));
    }

    public function getAddToCart($id) {
        $cartProd = Product::find($id);
        $currentCart = Session::has('cart') ? Session::get('cart') : null;
        $newCart = new Cart($currentCart);
        $newCart->add($cartProd, $id);
        Session::put('cart', $newCart);
        return redirect()->back();
    }

    public function deleteCartProd($id) {
        $currentCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($currentCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function postCheckout(Request $req) {
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->note = $req->note;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->note;
        $bill->save();

        foreach ($cart->items as $item) {
            $billDetail = new BillDetail;
            $billDetail->id_bill = $bill->id;
            $billDetail->id_product = $item['item']->id;
            $billDetail->quantity = $item['qty'];
            if ($item['item']->promotion_price == 0) {
                $billDetail->unit_price = $item['item']->unit_price;
            } else {
                $billDetail->unit_price = $item['item']->promotion_price;
            }
            $billDetail->save();
        }

        Session::forget('cart');
        return redirect()->back()->with('alert', 'order successful');
    }
}
