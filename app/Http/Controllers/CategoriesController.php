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
      $single = \App\Category::find($id);

      return view('categories.single', ['category' => $single]);
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

      return view('categories.edit', ['category' =>$category]);
  }

  public function destroy($id)
  {

    \App\Category::destroy($id);
    return redirect('categories');
  }

}
