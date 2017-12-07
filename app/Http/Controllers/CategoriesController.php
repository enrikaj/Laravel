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
    $categories = \App\Category::all();

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

}
