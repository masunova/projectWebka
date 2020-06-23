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
@foreach($catalogs3 as $catalog4)
<div class="product-item">
  <img src="37.jpg">
  <div class="product-list">
		<h3>{{$catalog4->title}}</h3>
		{{$catalog4->description}}
      <a href="http://127.0.0.1:8000/basket" class="button">В корзину</a>
  </div>
</div>
@endforeach
@endsection('content')
