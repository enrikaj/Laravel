<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = \App\Product::all();

        return view('products.all', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
        'name' => 'required',
        'photo_url' => 'image',
        'price' => 'required|numeric'
      ];

        $request->validate($rules);

    //      $product = new \App\Product();

    //    if ($request->hasFile('photo_url')) {
    //      $product->photo_url = $request->file('photo_url')->store('public/products');
    //    }

  //      $product->name = $request->input('name');
    //    $product->price = $request->input('price');
    //    $product->save();


        $product = \App\Product::create($request->all());

        if ($request->hasFile('photo_url')) {
            $product->photo_url = $request->file('photo_url')->store('public/products');
            $product->save();
}
            return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = \App\Product::find($id);

        return view('products.single', ['product' => $single]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = \App\Product::find($id);

        return view('products.edit', ['product' =>$product]);
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
        $rules = [
          'name' => 'required|max:100',
          'price' => 'required|numeric',
          'photo_url' => 'image'
        ];

        $request->validate($rules);

        $product = \App\Product::find($id);

        if ($request->hasFile('photo_url')){
         $newPath = $request->file('photo_url')->store('public/products');

         Storage::delete($product->photo_url);

        $product->photo_url = $newPath;
       }

      if ($request->input('delete_photo') == true){
            Storage::delete($product->photo_url);

            $product->photo_url = null;
        }

      $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

      $product = \App\Product::create($request->all());

      if ($request->hasFile())


        return redirect('products');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = \App\Product::find($id);
      Storage::delete($product->photo_url);

      \App\Product::destroy($id);
      return redirect('products');
    }
}
