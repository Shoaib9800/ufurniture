<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $product = new Product();
        return view('admin.products.create', compact('product'));
    }


    public function store(Request $request)
    {

        // Validate the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);

        // Upload the image
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());
        }

        // Save the data into database
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()

        ]);

        // Sessions Message
        $request->session()->flash('msg','Your product has been added');

        // Redirect

        return redirect('admin/products/create');

    }


    public function show(Product $product)
    {
        $product = Product::find($product->id);
        return view('admin.products.details', compact('product'));
    }


    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        return view('admin.products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {

        // Find the product
        $product = Product::find($product->id);

        // Validate The form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        // Check if there is any image
        if ($request->hasFile('image')) {
            // Check if the old image exists inside folder
            if (file_exists(public_path('uploads/') . $product->image)) {
                unlink(public_path('uploads/') . $product->image);
            }

            // Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $product->image = $request->image->getClientOriginalName();
        }

        // Updating the product
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $product->image
        ]);

        // Store a message in session
        $request->session()->flash('msg', 'Product has been updated');

        // Redirect
        return redirect('admin/products');
    }


    public function destroy(Product $product)
    {
        // Delete the product
        Product::destroy($product->id);

        // Store a message
        session()->flash('msg','Product has been deleted');

        // Redirect back
        return redirect('admin/products');
    }

}
