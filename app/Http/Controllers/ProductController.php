<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $product = new Product(); // Instantiate an empty Product
        $categories = Category::all(); // Fetch all categories (adjust based on your actual model)

        return view('product_add', ['product' => $product, 'categories' => $categories]);
    }

    public function create(Request $request)
    {
        // Create a new product
        Product::create([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'product_image' => $request->product_image,
            'price' => $request->price,
            'color' => $request->color,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('product.list');
    }

    public function edit(Product $product)
    {
        $productEdit = Product::where('id', $product->id)->first();
        $products = Product::all();
        $categories = Category::all();

        return view('product_edit', compact('productEdit', 'products', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        if ($request->hasFile('product_image')) {
            $imageName = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('uploads'), $imageName);
        } else {
            $imageName = $product->product_image;
        }

        $product->update(
            [
                'product_name' => $request->product_name,
                'product_desc' => $request->product_desc,
                'product_image' => $imageName,
                'price' => $request->price,
                'color' => $request->color,
                'category_id' => $request->category_id
            ]
        );

        return redirect()->route('product.list')->with('success', 'Product updated successfully');
    }

    // public function edit(Product $product)
    // {
    //     dd($product->id);

    //     $productEdit = Product::find($product->id);

    //     if (!$productEdit) {
    //         return redirect()->route('product.list')->with('error', 'Product not found');
    //     }

    //     $categories = Category::all();

    //     return view('product_edit', compact('productEdit', 'categories'));
    // }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        // Redirect to a specific page after deletion
        return redirect('/list_product')->with('status', 'Product deleted successfully');
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
        $products = Product::with('categories')->get();

        return view('product.create', compact('products'));
    }
}
