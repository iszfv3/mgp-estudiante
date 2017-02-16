<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('link')
  </head>
  <body>
    @include('admin.template.partials.nav')
    @include('flash::message')
    <section>
      @yield('content')
    </section>

    @include('admin.template.partials.footer')

    <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    @yield('script')
  </body>
</html>
