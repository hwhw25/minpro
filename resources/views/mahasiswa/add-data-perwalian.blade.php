@extends('home')

@section('Halaman Data Dosen')
@section('isicontent')

<h1><center><font face="Perpetua", color="22223b">Tambah Data Dosen</font></center></h1>

<div class="container">
    <div class="card border-dark mb-3">

        @csrf
        <div class ="content">
            <div class ="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        <input name="kode_dosen" class="form-control">
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