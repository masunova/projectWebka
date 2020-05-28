@section('content')
@extends('layouts.header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

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

	<div class="main-information">
		<div class="text-inform">
			<h1>Твоя косметичка <strong></strong></h1>
			<p class="tagline">Только природная косметика. Лучшие средства ухода за вашей кожей.</p>
			<div class="inform-link">
				<div class="inform-btn read"><a href="http://127.0.0.1:8000/oplata">Оплата</a></div>
				<div class="inform-btn shop"><a href="http://127.0.0.1:8000/dostavka">Доставка</a></div>


			</div>
		</div>

		<div class="photo-model">
			<img src="для фона.png" alt="" class="photo-model">
		</div>
	</div>

	@endsection('content')
