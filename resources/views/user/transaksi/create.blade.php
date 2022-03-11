@extends('user.navbar.main')

@section('judul','Tambah Transaksi')

@section('halaman')
<style>
    body{
        background-image: url('/img/bg.jpg');
       
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3 text-light">Transaksi</h1>
            <form action="{{route('ttransaksi')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_pembeli" class="form-label text-light">Nama Pembali</label>
                    <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli" placeholder=" Masukaan Nama pembeli" required>
                </div>
                <div class="mb-3">
                    <label for="jenis" class="form-label text-light">Jenis</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="">===pilih===</option>
                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label text-light">Nama</label>
                   <select name="nama" id="nama" class="form-control">
                       <option value="">===pilih===</option>
                       @foreach ($menu as $menu)
                           <option value="{{$menu->nama}}">{{$menu->nama}}</option>
                       @endforeach
                   </select>
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label text-light">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label text-light">Harga Satuan</label>
                    <input type="text"  class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Stuan" required>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label text-light">Total</label>
                    <input type="text" name="total" class="form-control" id="total"  placeholder="Masukkan Total Yang di pesan" required>
                </div>
                <div class="mb-3">
                    <label for="no_meja" class="form-label text-light">NO Meja</label>
                    <input type="text" name="no_meja" class="form-control" id="no_meja"  placeholder="Masukkan Total Yang di pesan" required>
                </div>
                    <input type="hidden" name="nama_pegawai" id="nama_pegawai" value="Arjunanta">
                    <input type="hidden" name="status" id="status" value="1">
                    <input type="hidden" name="pesanan_id" id="pesanan_id" value="2">
                <button class="btn btn-lg btn-primary" type="submit">Pesan</button>
                <a  href="/transaksi" class="btn btn-lg btn-warning" type="back">Back</a>
            </form>
        </div>
    </div>
</div>  
@endsection