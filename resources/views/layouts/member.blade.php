<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @include('layouts.partials.navbar')
  
  <br><br>

  @yield('content')

  <br><br>

  @include('layouts.partials.navbar')
  
</body>
</html>