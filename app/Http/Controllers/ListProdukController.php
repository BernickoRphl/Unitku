<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function show($code) {
        $product = Product::dataWithCode($code);
        return view('list_product', ['product' => $product]);
    }

    public function show_list_product(Request $request){

        if($request->has('search')){
            $product = Product::where('product_name', 'like', "%".$request->search."%")->orwhere('color', 'like', "%".$request->search."%")->paginate(5)->withQueryString();
        }else{
            $product = Product::paginate(10);
        }

        return view(
            'product_list',
            [
                'product' => $product
            ],
        );
    }

    public function create()
    {
        return view('product.create');
    }

    public function showproduct(Product $product){
        return view('product_list',
            [
                'product' => $product
            ],
        );
    }
}
