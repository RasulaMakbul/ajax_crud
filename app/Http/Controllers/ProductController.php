<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:products',
                'price' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'name.unique' => 'Product Already Exist',
                'price.required' => 'Price is required',
            ]
        );
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(
            [
                'up_name' => 'required|unique:products,name,' . $request->up_id,
                'up_price' => 'required',
            ],
            [
                'up_name.required' => 'Name is required',
                'up_name.unique' => 'Product Already Exist',
                'up_price.required' => 'Price is required',
            ]
        );
        Product::where('id', $request->up_id)->update([
            'name' => $request->up_name,
            'price' => $request->up_price,
        ]);
        return response()->json([
            'status' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::find($request->product_id)->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function pagination(Request $request)
    {
        $products = Product::latest()->paginate(5);
        return view('pagination_products', compact('products'))->render();
    }
    public function searchProduct(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->search_string . '%')
            ->orWhere('price', 'like', '%' . $request->search_string . '%')
            ->orderBy('id', 'desc')
            ->paginate(20);

        if ($products->count() >= 1) {
            return view('pagination_products', compact('products'))->render();
        } else {
            return response()->json([
                'status' => 'nothing_found',
            ]);
        }
    }
}
