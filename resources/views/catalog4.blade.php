@section('content')
@extends('layouts.header')

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style4.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="navigation">
<div class="logo">
<img src="logotype.png" alt="" class="logotype">
</div>

<div class="nav-menu">
<ul class="menu">
<li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Лицо</a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/catalog3" class="nav-link">Тело</a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/catalog2" class="nav-link">Волосы</a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Декоративная косметика</a></li>

</ul>
</div>
<div class="search-block">
			<div class="searsh">
				<input type="text" class="search-form" placeholder="Поиск по товарам">
				<a href="" class="search-btn"><i class="fa fa-search"></i></a>

			</div>
		</div>

		<div class="personal-item">
			<div class="auth">
				<div class="login">
					<a href="http://127.0.0.1:8000/registration" class="auth-link"><i class="fa fa-user"></i>Войти</a>
				</div>
				<div class="car">
					<a href="http://127.0.0.1:8000/basket" class="auth-link"><i class="fa fa-shopping-cart"></i>Корзина</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-item">
  <img src="37.jpg">
  <div class="product-list">
    <h3>Тушь для ресниц</h3>
      <span class="price">899 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button">В корзину</a>
  </div>
</div>
<div class="product-item1">
  <img src="38.jpg">
  <div class="product-list1">
    <h3>Палетка теней из 7 цветов</h3>
      <span class="price1">1550 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button1">В корзину</a>
  </div>
</div>
<div class="product-item2">
  <img src="39.jpg">
  <div class="product-list2">
    <h3>Палетка теней из 12 цветов</h3>
      <span class="price2">2500 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button2">В корзину</a>
  </div>
</div>
<div class="product-item3">
  <img src="40.jpg">
  <div class="product-list3">
    <h3>Тушь для ресниц</h3>
      <span class="price3">1600 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button3">В корзину</a>
  </div>
</div>
<div class="product-item4">
  <img src="41.jpg">
  <div class="product-list4">
    <h3>Карандаш для бровей</h3>
      <span class="price4">1200 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button4">В корзину</a>
  </div>
</div>
<div class="product-item5">
  <img src="42.jpg">
  <div class="product-list5">
    <h3>Краска для бровей</h3>
      <span class="price4">450 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button5">В корзину</a>
  </div>
</div>
<div class="product-item6">
  <img src="43.jpg">
  <div class="product-list6">
    <h3>Кремовая помада</h3>
      <span class="price6">1000 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button6">В корзину</a>
  </div>
</div>
<div class="product-item7">
  <img src="44.jpg">
  <div class="product-list7">
    <h3>Матовая помада</h3>
      <span class="price7">1640 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button7">В корзину</a>
  </div>
</div>
<div class="product-item8">
  <img src="45.jpg">
  <div class="product-list8">
    <h3>Блеск для губ</h3>
      <span class="price8">150 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button8">В корзину</a>
  </div>
</div>
<div class="product-item9">
  <img src="46.jpg">
  <div class="product-list9">
    <h3>Блеск для губ</h3>
      <span class="price9">150 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button9">В корзину</a>
  </div>
</div>
<div class="product-item10">
  <img src="47.jpg">
  <div class="product-list10">
    <h3>Блеск для губ</h3>
      <span class="price10">150 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button10">В корзину</a>
  </div>
</div>
<div class="product-item11">
  <img src="48.jpg">
  <div class="product-list11">
    <h3>Блеск для губ</h3>
      <span class="price11">400 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button11">В корзину</a>
  </div>
</div>
@endsection('content')
