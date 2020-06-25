<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function indexAction(Request $request)
  {
  return view('index', ['product' => (new ProductController())->show() ]);
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
  return view('catalog1', ['catalogs' => (new ProductController())->show() ]);
  }
  public function catalog2Action(Request $request)
  {
  return view('catalog2', ['catalogs1' => (new ProductController())->show() ]);
  }
  public function catalog3Action(Request $request)
  {
  return view('catalog3',['catalogs2' => (new ProductController())->show() ]);
  }
  public function catalog4Action(Request $request)
  {
  return view('catalog4',['catalogs3' => (new ProductController())->show() ]);
  }
  public function registration2Action(Request $request)
  {
  return view('registration2');
  }
  public function getBaskets(Request $request)
  {
    return (new BasketController())->show();
  }
  public function getProducts(Request $request)
  {
    return (new ProductController())->show();
  }
  public function auth (Request $request)
  {
    dump ($request->login);
    dump ($request->password);
    return back()->withInput();
  }


  public function search (Request $request)
  {

  $index = (new ProductController())->search($request->search) ;
  if (is_null($products)){
    return "Не найдено";
  }
  return view('index', ['product'=> $index]);
  }

  
}
