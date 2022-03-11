<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        {{-- link bootstrap --}}
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

        {{-- link css --}}
        <link rel="stylesheet" href="/css/dashboard.css">
  <title>@yield('judul')</title>
</head>
<body>
  @include('admin.navbar.header')
      
  <div class="container-fluid">
      <div class="row">
          @include('admin.navbar.sidebar')
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              @yield('halaman')

  {{-- link js --}}
  <link rel="stylesheet" href="/bootstrap/js/bootstrap.bundle.min.js">
  
</body>
</html>