<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
  public function show()
  {
    return Product::all();
  }


  public function search ($title)
  {
    return Product::where ('title','like','%' .$title. '%')->get();
  }
}
