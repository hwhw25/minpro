<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDosen;
use DB;
class DosenController extends Controller
{
    public function halamanMahasiswa()
    {
        return view('Halaman-mahasiswa');
    }

    public function add()
    {
        return view('admin.add-data-dosen');
    }

    public function tambah(Request $request)
    {
        // simpan gambar
        
        // upload gambar atau foto
        $gambar = Request()->foto;
        $namafile = Request()->nama_dosen .'.'.$gambar->extension();
        $gambar->move(public_path('Foto'), $namafile);

        // masukkan data ke DB
        $query = DB::table('data_dosens')->insert([
            'kode_dosen' => $request ['kode_dosen'],
            'nama_dosen' => $request ['nama_dosen'],
            'alamat' => $request ['alamat'],
            'kontak' => $request ['kontak'],
            'foto' => $request [$namafile],
        ]);
        return redirect()->route('admin-data-dosen')->with('Pesan','Data Telah Berhasil Disimpan !!!');
    }
}
