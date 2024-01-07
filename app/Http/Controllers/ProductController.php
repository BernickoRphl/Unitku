<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\edition;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
         $product = new Product(); // Instantiate an empty Product
         $edition = edition::all();
         $categories = Category::all(); // Fetch all categories (adjust based on your actual model)

         return view('product_add', compact('product', 'categories', 'edition'));
     }


    public function create(Request $request)
    {
        $productImage = $request->file('product_image')->store('images', ['disk' => 'public']);

        // Create a new product
        Product::create([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_image' => $productImage,
            'price' => $request->price,
            'color' => $request->color,
            'category_id' => $request->category_id,
            'edition_id' => $request->edition_id,
        ]);

        return redirect()->route('product.list');
    }

    public function edit(Product $product)
    {
        $productEdit = Product::where('id', $product->id)->first();
        $products = Product::all();
        $categories = Category::all();
        $edition = edition::all();

        return view('product_edit', compact('productEdit', 'products', 'categories','edition'));
    }

    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('product_image')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }

            $productImage = $request->file('product_image')->store('images', ['disk' => 'public']);
        } else {
            $productImage = $request->oldImage;
        }

        $product->update([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_image' => $productImage,
            'price' => $request->price,
            'color' => $request->color,
            'category_id' => $request->category_id,
            'edition_id' => $request->edition_id,
        ]);

        return redirect()->route('product.list')->with('success', 'Product updated successfully');
    }


    public function destroy(Product $product)
    {
        if ($product->product_image) {
            Storage::disk('public')->delete($product->product_image);
        }

        $product->delete();

        return redirect()->route('product.list');
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
    public function index1()
{
    $products = Product::with('category')->get();

    return view('product.list', compact('products'));
}
}
