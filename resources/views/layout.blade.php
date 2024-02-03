<!doctype html>
<html class="h-full bg-white">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="h-full p-8">

  <div class="container mx-auto flex items-center justify-between mb-4">
    @yield('header')
  </div>
  
  <div class="container mx-auto border rounded p-8">
    @yield('content')
  </div>

</body>

</html>