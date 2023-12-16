<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function show($code) {
        $product = product::dataWithCode($code);
        return view('list_product', ['product' => $product]);
    }

    public function show_list_product(Request $request){

        if($request->has('search')){
            $product = product::where('product_name', 'like', "%".$request->search."%")->orwhere('color', 'like', "%".$request->search."%")->paginate(5)->withQueryString();
        }else{
            $product = product::paginate(5);
        }

        return view(
            'list_product',
            [
                'product' => $product
            ],
        );
    }

    public function create()
    {
        return view('product.create');
    }

    public function showproduct(product $product){
        return view('list_product',
            [
                'product' => $product
            ],
        );
    }
}
