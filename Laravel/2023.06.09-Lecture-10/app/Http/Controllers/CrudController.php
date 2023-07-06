<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::All();
        return view('index', [
            'products' => $products,
            'i' => 0,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidationRequest $request)
    {
        $record = new Product();
        
        $record->name = $request->name;
        $record->detail = $request->detail;

        $record->save();

        return redirect()->route('products.index')->with('success', '');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('show', [
                    'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('edit', [
            'product' => $product,
]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidationRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
