@extends('home')

@section('Halaman Tambah Dosen')
@section('isicontent')

<h1><center><font face="Perpetua", color="22223b">Tambah Data Dosen</font></center></h1>

<div class="container">
    <div class="card border-dark mb-3">
        <div class="card-body text-dark">
            <form action="/home/halaman-admin/admin-data-dosen/tambah" method="POST" enctype="multipart/form-data">

        @csrf
        <div class ="content">
            <div class ="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Kode Dosen</label>
                        <input name="kode_dosen" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input name ="nama_dosen" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kontak</label>
                        <input name="kontak" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input name="foto" class="form-control" type="file">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary"> Simpan </button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>



@endsection