<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      {{-- link bootstrap --}}
      <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">


    <title>Halaman Login</title>
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
        <style>
            img{
                width: 100px%;
                height: 100px;
                
            }
        </style>
        <style>
            #card{
                background: #fbfbfb;
                border-radius: 20px;
                box-shadow: 9px 8px 9px rgba(0,0,0,0.78);
                height: 500px;
                margin: 4rem auto 10rem;
                width: 400px;
            }
        </style>
        <style>
            body{
                background-image: url('/img/bglogin.jpg');
               
            }
        </style>
        <div id="card">
            <main class="from-signin">
                <h1 class="h3 mb-3 fw-normal text-center fw-bold">Please Login</h1>
                <br>
                <form action="login" method="post">
                    @csrf
                    <center>
                        <img src="/img/login.png" class="rounded-circle" alt="...">
                   </center>
                   <br>
                    <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required  value="{{ old('email') }}">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control"  id="password" placeholder="*********" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>     
                <small class="d-block text-center mt-3">Anda Belum Punya Akun? <a href="/daftar">Daftar Sekarang Yuk!</a></small>
                <p class="mt-3 mb-2 text-muted text-center">&copy; 2022–2023</p>
                    </main>
            </div>
         </div>
 </div>
    {{-- link js --}}
    <link rel="stylesheet" href="/bootstrap/js/bootstrap.bundle.min.js">
  
  </body>
</html>