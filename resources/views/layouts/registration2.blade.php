@section('content')
@extends('layouts.header')

<form method="get" action="/auth" id="login">
					<input type="text" name="login" placeholder="Логин"  >
					<input type="text" name="login" placeholder="Email"  >
					<input type="password" name="password" placeholder="Пароль" >

					<button> Вход </button>
</form>
@endsection('content')
