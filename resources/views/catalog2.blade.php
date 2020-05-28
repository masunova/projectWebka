@section('content')
@extends('layouts.header')
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<div class="navigation">
<div class="logo">
<img src="logotype.png" alt="" class="logotype">
</div>

<div class="nav-menu">
<ul class="menu">
<li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Лицо</a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Тело</a></li>
<li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Волосы</a></li>
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
  <img src="13.jpg">
  <div class="product-list">
    <h3>Шампунь для сухих волос</h3>
      <span class="price">179 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button">В корзину</a>
  </div>
</div>
<div class="product-item1">
  <img src="14.jpg">
  <div class="product-list1">
    <h3>Шампунь для окрашенных волос</h3>
      <span class="price1">250 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button1">В корзину</a>
  </div>
</div>
<div class="product-item2">
  <img src="15.jpg">
  <div class="product-list2">
    <h3>Сухой шампунь для блонда</h3>
      <span class="price2">600 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button2">В корзину</a>
  </div>
</div>
<div class="product-item3">
  <img src="16.jpg">
  <div class="product-list3">
    <h3>Кондиционер для ломких волос</h3>
      <span class="price3">160 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button3">В корзину</a>
  </div>
</div>
<div class="product-item4">
  <img src="17.jpg">
  <div class="product-list4">
    <h3>Маска-восстановление</h3>
      <span class="price4">1980 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button4">В корзину</a>
  </div>
</div>
<div class="product-item5">
  <img src="18.jpg">
  <div class="product-list5">
    <h3>Очищающий скраб для кожи головы</h3>
      <span class="price4">507 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button5">В корзину</a>
  </div>
</div>
<div class="product-item6">
  <img src="19.jpg">
  <div class="product-list6">
    <h3>Термозащита</h3>
      <span class="price6">295 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button6">В корзину</a>
  </div>
</div>
<div class="product-item7">
  <img src="20.jpg">
  <div class="product-list7">
    <h3>Гель для укладки</h3>
      <span class="price7">1070 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button7">В корзину</a>
  </div>
</div>
<div class="product-item8">
  <img src="21.jpg">
  <div class="product-list8">
    <h3>Бальзам для окрашенных волос</h3>
      <span class="price8">200 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button8">В корзину</a>
  </div>
</div>
<div class="product-item9">
  <img src="22.jpg">
  <div class="product-list9">
    <h3>Сухой шампунь для брюнеток</h3>
      <span class="price9">600 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button9">В корзину</a>
  </div>
</div>
<div class="product-item10">
  <img src="23.jpg">
  <div class="product-list10">
    <h3>Маска для жирных волос</h3>
      <span class="price10">650 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button10">В корзину</a>
  </div>
</div>
<div class="product-item11">
  <img src="24.jpg">
  <div class="product-list11">
    <h3>Лак для укладки волос</h3>
      <span class="price11">258 ₽ </span>
      <a href="http://127.0.0.1:8000/basket" class="button11">В корзину</a>
  </div>
</div>
@endsection('content')
