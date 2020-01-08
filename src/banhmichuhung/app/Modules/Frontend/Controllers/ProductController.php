<?php

namespace App\Modules\Frontend\Controllers;

use Illuminate\Http\Request;
use App\Modules\Models\Product;
use App\Modules\Models\ProductType;

class ProductController extends Controller
{
    public function getProductType($type) {
        // $prodType = ProductType::where('id', $type)->get();
        $prodTypes = ProductType::all();
        $selectedType = $prodTypes[$type - 1];
        $prods = Product::where('id_type', $type)->paginate(6, ['*'], 'pag');
        $otherProds = Product::where('id_type', '<>', $type)->paginate(3, ['*'], 'page');
        return view('Frontend::page.product_type', compact('prodTypes', 'selectedType', 'prods', 'otherProds'));
    }

    public function getProductDetail(Request $req) {
        $prod = Product::where('id', $req->id)->first();
        $sameProds = Product::where('id_type', $prod->id_type)->paginate(6, ['*'], 'page');
        return view('Frontend::page.product_detail', compact('prod', 'sameProds'));
    }
}
