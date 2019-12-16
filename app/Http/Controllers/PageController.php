<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slides = Slide::All();
        $newProducts = Product::where('new', 1)->get();
        // return view('page.trangchu', ['slides'=>$slides]);
        return view('page.trangchu', compact('slides', 'newProducts'));
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
