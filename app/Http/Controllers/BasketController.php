<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;

class BasketController extends Controller
{

public function show()
{
  dump (Basket::all());

}



}
