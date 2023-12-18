<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    public function store(Request $request)
    {
        // $products = Product::all();
        // return view('product_list', compact('products'));
        // Create a new product
        Product::create([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_image' => $request->product_image,
            'price' => $request->price,
            'color' => $request->color,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('product.store');
    }

    public function edit(Request $request, $id)
    {
        // Validasi input sesuai kebutuhan
        $request->validate([
            'customer_id' => 'required',
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_image' => 'required',
            'price' => 'required',
            'color' => 'required',
        ]);

        // Ambil produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Perbarui data produk menggunakan metode PATCH
        $product->update([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_image' => $request->product_image,
            'price' => $request->price,
            'color' => $request->color,
        ]);

        // Beri respons atau lakukan redirect sesuai kebutuhan
        return response()->json(['message' => 'Product updated successfully']);
    }

public function delete($id)
{
    $product = Product::find($id);

    // if (!$product) {
    //     return response()->json(['message' => 'Product not found'], 404);
    // }

    $product->delete();

    // Redirect to a specific page after deletion
    return redirect('/product_list')->with('status', 'Product deleted successfully');
}
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
    public function show_product(Product $product){
        return view('product_detail',
            [
                'product' => $product
            ],
        );
    }
    public function index1()
    {
        $products = Product::with('categories')->get();

        return view('product.create', compact('products'));
    }
}
