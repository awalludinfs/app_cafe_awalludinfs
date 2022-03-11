@extends('admin.navbar.main')

@section('judul','Edit data Pegawai')

@section('halaman')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-dark">Edit</h2>
            <form action="{{ url('pegawai', $pegawai->id ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="from-label text-dark">nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama',$pegawai->gambar)}}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="from-label text-dark">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{old('email',$pegawai->judul)}}" required>
                </div>
                <div class="mb-3">
                    <label for="sebagai" class="from-label text-dark">Profesi</label>
                    <input type="text" class="form-control" name="sebagai" id="sebagai" value="{{old('sebagai',$pegawai->isi)}}" required>
                </div>
                <input type="hidden" name="status" id="status" value="1">
                <div class="d-grip gap-2 d-md-block">
                    <button class="btn btn-lg btn-primary" type="sumbit">Update</button>
                    <a href="/admindatapegawai" class="btn btn-lg btn-warning" type="back">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection