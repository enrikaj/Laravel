<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $categories = \App\Category::paginate(10);

      return view('categories.all', ['categories' => $categories]);
  }


  public function store(Request $request)
  {
      $rules = [
      'name' => 'required',

    ];

      $request->validate($rules);

        $category = new \App\Category();

      $category->name = $request->input('name');
      $category->save();

      return redirect('categories');
  }


  public function create()
  {
      return view('categories.create');
  }


  public function show($id)
  {
      $category = \App\Category::find($id);    //pasiimama viena kategorija
      $products = $category->products()->get(); //paimami tos kategorijos produktai

      $single = [
        'category' => $category,   //masyve nurodoma kokia paimta kategorija
        'products' => $products   // ir koks paimtas produktas
      ];

      return view('categories.single', $single);
  }

    public function showProducts($id)
    {
      $category = \App\Category::find($id);
      $products = $category->products()->paginate();

      return view('products.all', ['products' => $products]);
    }

  public function update(Request $request, $id)
  {
      $rules = [
        'name' => 'required|max:100',
      ];

      $request->validate($rules);

      $category = \App\Category::find($id);

      $category->name = $request->input('name');
      $category->save();

      return redirect('categories');

  }

  public function edit($id)
  {
      $category = \App\Category::find($id);

      return view('categories.all', ['products' =>$products]);
  }

  public function destroy($id)
  {

    \App\Category::destroy($id);
    return redirect('categories');
  }


}
