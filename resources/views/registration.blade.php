@section('content')
@extends('layouts.header')

<link rel="stylesheet" href="style7.css">


<div id="range2">
	<div class="outer">
  <div class="middle">
    <div class="inner">
        <div class="login-wr">
					<h2>Вход</h2>
				<div class="form">
<form method="get" action="/auth" id="login">
					<input type="text" name="login" placeholder="Логин"  >
					<input type="password" name="password" placeholder="Пароль" >
					<a href="http://127.0.0.1:8000/registration2"> <p> У вас нет аккаунта? Регистрация </p></a>
					<button> Вход </button>
</form>
					</div>

		</div>
	</div>
  </div>
</div>
</div>
	@endsection('content')
