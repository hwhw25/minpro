<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function halamanMahasiswa()
    {
        return view('halaman-mahasiswa');
    }

    public function mataKuliahSI()
    {
        $matkulsi = matkul::all();
        return view('mahasiswa.mahasiswa-perwalian', ['matkulsi'=>$matkulsi]);
    }

    public function create()
    {
        return view('mahasiswa.add-data-perwalian');
    }

}
