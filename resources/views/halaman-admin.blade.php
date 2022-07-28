@extends('home')

@section('breadcump','Halaman Admin')
@section('isicontent')

<h1><center><font face="Perpetua", color="22223b">Halaman Admin</font></center></h1>

<div class ="container">
    <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Klik Untuk Melihat Data Dosen</p>
                        <a href="/home/halaman-admin/admin-data-dosen" class="btn btn-primary">Dosen</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Klik Untuk Melihat Data Mahasiswa</p>
                        <a href="/home/halaman-admin/admin-data-mahasiswa" class="btn btn-primary">Mahasiswa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-2">   
                <div class="card text-center" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">Klik Untuk Merekap Perwalian</p>
                        <a href="/home/halaman-admin/admin-rekap-perwalian" class="btn btn-primary">Rekap Perwalian</a>
                    </div>
                </div>
            </div>
    </div>
</div>


@endsection