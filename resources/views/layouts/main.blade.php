<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serene Gated Homes Ghana</title>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  @stack('styles')

  <link rel="stylesheet" href="{{ url('/css/app.css') }}">
</head>

<body>
  @include('includes.header')

  @yield('content')

  @include('includes.contact')
  @include('includes.footer')
</body>

</html>