@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2>Add Product</h2>
        <form method="POST" action="{{ route('list_product') }}">
            @csrf
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="product_desc">Product Description</label>
                <textarea name="product_desc" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="text" name="product_image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" name="color" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
@endsection
