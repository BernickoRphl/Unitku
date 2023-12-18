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


    public function add_form()
    {
        return view('/product_add');
    }

    public function create(Request $request)
    {
        dd($request);
        // Validate the request data as needed
        $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'color' => 'required',
        ]);

        $imagePath = $request->file('product_image')->store('public/resources/images');

        // Create a new product
        Product::create([
            'customer_id' => auth()->user()->id,
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_image' => basename($imagePath),
            'price' => $request->price,
            'color' => $request->color,
        ]);

        // Redirect to a specific page after creation
        return redirect('/product_list')->with('status', 'Product created successfully');
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

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

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
    public function show_product(Product $product)
    {
        return view(
            'product_detail',
            [
                'product' => $product
            ],
        );
    }
}
