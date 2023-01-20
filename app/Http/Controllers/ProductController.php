<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'sku' => '#AB12312',
                'name' => 'Product A',
                'price' => 15000
            ],
            [
                'id' => 2,
                'sku' => '#CD12312',
                'name' => 'Product B',
                'price' => 20000
            ]
        ];
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // CARA 1
        // $request->validate([
        //     'sku' => ['required', 'unique:products', 'max:100'],
        //     'name' => ['required', 'max:100'],
        //     'price' => ['required', 'min:1'],
        //     'stock' => ['required', 'min:0'],
        // ]);

        // return 'Validate Data Correct';

        // CARA 2
        // $validator = Validator::make($request->all(), [
        //     'sku' => ['required', 'unique:products', 'max:100'],
        //     'name' => ['required', 'max:100'],
        //     'price' => ['required', 'numeric', 'min:1'],
        //     'stock' => ['required', 'numeric', 'min:0'],
        // ]);

        // if ($validator->fails()) {
        //     return redirect('products/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
 
        // // Retrieve the validated input...
        // $validated = $validator->validated();

        // return $validated;

        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show products";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit products";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "update products";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "delete products";
    }
}
