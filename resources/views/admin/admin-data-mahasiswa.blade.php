@extends('home')

@section('Halaman Data Mahasiswa')
@section('isicontent')

<h1><center><font face="Perpetua", color="22223b">Halaman Data Mahasiswa</font></center></h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ url('halaman-admin') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <a href="#" class="btn btn-sm btn-success"><i class="fa-solid fa-circle-plus"> Tambah </i></a>
        </div>
        
        <div class="card border-secondary mb-3 mt-2">
            <div class="card-body">
                <table id="example1" class = "table table-boarded table-stripped">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Kode Mahasiswa </th>
                            <th> Nama </th>
                            <th> Program Studi </th>
                            <th> Dosen Wali </th>
                            <th> Alamat </th>
                            <th> Kontak </th>
                            <th> Foto </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    @foreach ($datamahasiswa as $data)
                            <tr>
                                <td> {{ $no++ }} </td>
                                <td> {{ $data->kode_mahasiswa }} </td>
                                <td> {{ $data->nama_mahasiswa }} </td>
                                <td> {{ $data->program_studi }} </td>
                                <td> {{ $data->dosen_wali }} </td>
                                <td> {{ $data->alamat }} </td>
                                <td> {{ $data->kontak }} </td>
                                <td> <img src="{{ url('foto/'.$data->foto) }}" width="100px"></td>
                                <td>
                                    <a href="/halaman-admin/admin-data-mahasiswa/{{ $data->id }}" class="btn btn-sm btn-success"><i class="fa fa-eye"> View </i></a>
                                

                                </td>
                            </tr>
                                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





@endsection