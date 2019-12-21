<?php

namespace App\Modules\Frontend\Controllers;

use App\Modules\Models\Slide;
use App\Modules\Models\Product;
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

    public function getContact() {
        return view('page.contact');
    }

    public function getAbout() {
        return view('page.about');
    }

    public function getSearch(Request $req) {
        $prods = Product::where('name', 'like', '%'.$req->search_key.'%')
                        ->orWhere('unit_price', $req->search_key)
                        ->paginate(12, ['*'], 'page');
        return view('page.search', compact('prods'));
    }
}
