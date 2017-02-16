@extends('admin.template.main')

@section('title', 'Login')

@section('link')
<link rel="stylesheet" href="{{ asset('plugins/fla-login-form/css/style.css') }}">
@endsection

@section('content')
<div class="form">
  <div class="thumbnail">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/>
  </div>
  <form class="register-form">
    <input type="text" placeholder="name"/>
    <input type="password" placeholder="password"/>
    <input type="text" placeholder="email address"/>
    <button>create</button>
    <p class="message">¿Ya te registraste? <a href="#">Inicia sesión</a></p>
  </form>
  <form class="login-form" action="{{route('usuarios.login')}}" method="POST">
    <input type="text" name="cedula" placeholder="cedula"/>
    <input type="password" name="clave" placeholder="contraseña"/>
    <button type="submit">login</button>
    <p class="message">¿No te has registrado? <a href="#">Crea una cuenta</a></p>
  </form>
</div>
@endsection

@section('script')
  <script src="{{ asset('plugins/fla-login-form/js/index.js') }}"></script>
@endsection
