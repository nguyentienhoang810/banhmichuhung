<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;

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

    public function getProductType($type) {
        // $prodType = ProductType::where('id', $type)->get();
        $prodTypes = ProductType::all();
        $selectedType = $prodTypes[$type - 1];
        $prods = Product::where('id_type', $type)->paginate(6, ['*'], 'pag');
        $otherProds = Product::where('id_type', '<>', $type)->paginate(3, ['*'], 'page');
        return view('page.product_type', compact('prodTypes', 'selectedType', 'prods', 'otherProds'));
    }

    public function getProductDetail(Request $req) {
        $prod = Product::where('id', $req->id)->first();
        $sameProds = Product::where('id_type', $prod->id_type)->paginate(6, ['*'], 'page');
        return view('page.product_detail', compact('prod', 'sameProds'));
    }

    public function getContact() {
        return view('page.contact');
    }

    public function getAbout() {
        return view('page.about');
    }
}
