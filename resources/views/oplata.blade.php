@section('content')
@extends('layouts.header')
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style5.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


	<div class="navigation">
		<div class="logo">
			<img src="logotype.png" alt="" class="logotype">
		</div>

		<div class="nav-menu">
			<ul class="menu">
				<li class="nav-item"><a href="http://127.0.0.1:8000/catalog1" class="nav-link">Лицо</a></li>
				<li class="nav-item"><a href="http://127.0.0.1:8000/catalog3" class="nav-link">Тело</a></li>
				<li class="nav-item"><a href="http://127.0.0.1:8000/catalog2" class="nav-link">Волосы</a></li>
				<li class="nav-item"><a href="http://127.0.0.1:8000/catalog4" class="nav-link">Декоративная косметика</a></li>
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


		<div class="text-inform">
			<h1>Оплату </h1>
			<p class="tagline">можно произвести следующими способами:<strong></strong></p>
			<h2>Банковской картой (Visa/MasterCard/МИР)</h2>
			<h3>Сбербанк Онлайн</h3>
			<h4>Мобильным банком (9041158634) Александровская А.В.</h4>
			<h5>QIVI Кошельком</h5>

		</div>
<div class="photo">
			<img src="оплата.png" alt="" class="photo">
		</div>
<div class="kartinka1">
			<img src="сбер.png" alt="" class="kartinka1">
		</div>
<div class="kartinka2">
			<img src="мобильный.png" alt="" class="kartinka2">
		</div>
<div class="kartinka3">
			<img src="киви.png" alt="" class="kartinka3">
		</div>

		@endsection('content')
