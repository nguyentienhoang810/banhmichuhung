<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slides = Slide::All();
        //lấy toàn bộ
        // $newProducts = Product::where('new', 1)->get();

        //đánh số trang
        // $newProducts = Product::where('new', 1)->paginate(4);
        // $promotionProducts = Product::where('promotion_price', '<>', '0')->paginate(8);
        $newProducts = Product::where('new', 1)->paginate(4, ['*'], 'pag');
        $promotionProducts = Product::where('promotion_price', '<>', '0')->paginate(8, ['*'], 'page');
        // return view('page.trangchu', ['slides'=>$slides]);
        return view('page.trangchu', compact('slides', 'newProducts', 'promotionProducts'));
    }

    public function getProductType() {
        return view('page.product_type');
    }

    public function getProductDetail() {
        return view('page.product_detail');
    }

    public function getContact() {
        return view('page.contact');
    }
}