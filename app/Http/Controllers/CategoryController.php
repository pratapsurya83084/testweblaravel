<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

  public function  index(){
    return view('category.index');

  }



  public function  create(){
    return view('category.create');

  }

  public function  store(Request $request){
    // return view('category.store');

     $request->validate([
        'name' =>'required|string|max:255',
        'description' =>'required|string|max:255',
        'status'=>'nullable'
     ]);


     Category::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'status'=>$request->status ==true ? 1:0
     ]);

     return redirect('/category')->with('status','Category Created successfully');


  }

  public function  destroy(){
    return view('category.destroy');

  }

  
  public function  edit(){
    return view('category.edit');

  }

}
