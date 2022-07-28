@extends('home')

@section('Halaman Data Dosen')
@section('isicontent')

<h1><center><font face="Perpetua", color="22223b">Halaman Perwalian</font></center></h1>

<div class="card border-secondary mb-3">
    <div class="col-md-12 mt-2">
        <a href="mahasiswa-perwalian/create" class="btn btn-sm btn-success"><i class="fa-solid fa-circle-plus"> Tambah </i></a>
    <div class="card-body">
    <table id="example1" class = "table table-boarded table-stripped">
        <thead>
            <tr>
                <th> No </th>
                <th> Smester </th>
                <th> Kode MK </th>
                <th> Nama Mk </th>
                <th> SKS </th>

            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($matkulsi as $data)
                <tr> 
                    <td> {{ $no++ }} </td>
                    <td> {{ $data->smester }} </td>
                    <td> {{ $data->kode_mk }} </td>
                    <td> {{ $data->nama_mk }} </td>
                    <td> {{ $data->sks }} </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection