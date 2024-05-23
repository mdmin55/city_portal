<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-stone-200 w-screen h-screen ">
    @yield('for_header')    
 @yield('header')
  @yield('vxod')
    @yield('home')
    @yield('registratia')
    @yield('zayavki')
    @yield('kategoria')
    @yield('footer')
</body>
</html>