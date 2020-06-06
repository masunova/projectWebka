<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function indexAction(Request $request)
  {
  return view('index');
  }
  public function oplataAction(Request $request)
  {
  return view('oplata');
  }
  public function dostavkaAction(Request $request)
  {
  return view('dostavka');
  }
  public function registrationAction(Request $request)
  {
  return view('registration');
  }
  public function basketAction(Request $request)
  {
  return view('basket');
  }
  public function catalog1Action(Request $request)
  {
  return view('catalog1');
  }
  public function catalog2Action(Request $request)
  {
  return view('catalog2');
  }
  public function catalog3Action(Request $request)
  {
  return view('catalog3');
  }
  public function catalog4Action(Request $request)
  {
  return view('catalog4');
  }
  public function getBaskets(Request $request)
  {
    return (new BasketController())->show();
  }
  public function getProducts(Request $request)
  {
    return (new ProductController())->show();
  }
}
