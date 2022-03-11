@extends('admin.navbar.main')

@section('judul','Tambah Tempat Duduk|cafe')
    
@section('halaman')
<style>
    body{
        background-image: url('/img/bg.jpg');
       
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-light">Tambah Meja</h1>
            <form action="{{route('tmeja')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="meja_id" class="form-label text-light">Meja ke</label>
                    <input type="number" name="meja_id" class="form-control" id="meja_id" required>
                </div>
                <div class="mb-3">
                    <label for="nomer" class="form-label text-light">Nomer Meja</label>
                    <input type="text" name="nomer" class="form-control" id="nomer" value="table" placeholder="masukkan nomer meja" required>
                </div>
                <input type="hidden" name="no_meja" id="no_meja" value="1">
                <button class="btn btn-lg btn-primary" type="sumbit">Tambah</button>
                <a href="/admintempatduduk" class="btn btn-lg btn-warning" type="back">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection