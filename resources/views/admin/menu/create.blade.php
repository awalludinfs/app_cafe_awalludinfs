@extends('admin.navbar.main')

@section('judul','tambah Menu| Cafe')

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
            <form action="{{route('tmenu')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="jenis" class="form-label text-dark">Jenis</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="">==pilih==</option>
                            <option value="makanan">makanan</option>
                            <option value="minuman">minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="namea" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label text-dark">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga Satuan Rp"required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label text-dark">Stok</label>
                    <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan Stok" required>
                </div>
                <input type="hidden" name="status" id="stutus" value="enable">
                <button class="btn btn-lg btn-primary" type="submit">Save</button>
                <a href="/adminmenu" class="btn btn-lg btn-warning" type="back">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection