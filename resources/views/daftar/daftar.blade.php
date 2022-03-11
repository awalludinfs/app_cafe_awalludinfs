<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      {{-- link bootstrap --}}
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
      <style>
        body{
            background-image: url('/img/bglogin.jpg');
           
        }
    </style>

    <title>Halaman dafatr|Cafe</title>
  </head>
  <body>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div id="card">
            <main class="from-register">
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Form Register</h1>
                <br>
                <form action="{{route('daftar')}}" method="post">
                    @csrf
                    <div class="form-floating">
                            <input type="name" name="name" class="form-control" id="name" placeholder="name  enter" autofocus required  value="{{ old('name') }}">
                            <label for="name">Nama</label>
                        </div>
                        <div class="form-floating">
                            <input type="username" name="username" class="form-control"  id="username" placeholder="username enter" required>
                            <label for="username">username</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control"  id="email" placeholder="example@emai.com" required>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control"  id="password" placeholder="XXXXXX" required>
                            <label for="password">Password</label>
                        </div>
                            <input type="hidden" name="role" id="role" value="2">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </form>     
            </main>
         </div>
    </div>
 </div>
    {{-- link js --}}
    <link rel="stylesheet" href="/bootstrap/js/bootstrap.bundle.min.js">
  
  </body>
</html>