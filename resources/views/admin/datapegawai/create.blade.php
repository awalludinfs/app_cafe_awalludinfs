@extends('admin.navbar.main')

@section('judul','tambah Pegawai| Cafe')

@section('halaman')
<style>
    body {
        background-image: url('/img/bg.jpg');

    }

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-3 text-light">tambah Data pegawai</h2>
            <form action="{{route('tpegawai')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label text-light">Nama</label>
                    <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Example@gmail.com"
                        required>
                </div>
                <div class="mb-3">
                    <label for="sebagai" class="form-label text-light">Profesi</label>
                    <input type="text" name="sebagai" class="form-control" id="sebagai" placeholder="Masukkan Profesi"
                        required>
                </div>
                <input type="hidden" name="status" id="stutus" value="2">
                <button class="btn btn-lg btn-primary" type="submit">Save</button>
                <a href="/admindatapegawai" class="btn btn-lg btn-warning" type="back">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
