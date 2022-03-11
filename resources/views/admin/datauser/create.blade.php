@extends('admin.navbar.main')

@section('judul','tambah User| Cafe')

@section('halaman')
<style>
    body{
        background-image: url('/img/bg.jpg');
       
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-light">tambah Menu</h2>
            <form action="{{route('tuser')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-light">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Example@gmail.com"required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="*****"required>
                </div>
                <input type="hidden" name="role" id="role" value="3">
                <button class="btn btn-lg btn-primary" type="submit">Save</button>
                <a href="/adminuser" class="btn btn-lg btn-warning" type="back">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection