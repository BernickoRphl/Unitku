<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Product::create([
            'customer_id'=>$request->customer_id,
            'product_name'=>$request->product_name,
            'product_desc'=>$request->product_desc,
            'product_image'=>$request->product_image,
            'price'=>$request->price,
            'color'=>$request->color,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function showProduct()
    {
        $products = Product::all();

        return view('product', ['products' => $products]);
    }

    public function showProductOrdered()
    {
        $products = Product::all();

        return view('order_history', ['products' => $products]);
    }

}
