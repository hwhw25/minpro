<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataDosen;
use App\Models\DataMahasiswa;
use App\Models\DataRekap;


class HomeController extends Controller
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

    public function halamanAdmin()
    {
        return view('halaman-admin');
    }

    public function halamanMahasiswa()
    {
        return view('halaman-mahasiswa');
    }

    public function halamanDosen()
    {
        return view('halaman-dosen');
    }
   
    public function halamanDataDosen()
    {
        $datadosen = DataDosen::all();
        return view('admin.admin-data-dosen', ['datadosen'=>$datadosen]);
    }

    public function halamanDataMahasiswa()
    {
        $datamahasiswa = DataMahasiswa::all();
        return view('admin.admin-data-mahasiswa', ['datamahasiswa'=>$datamahasiswa]);
    }

    public function halamanRekapPerwalian()
    {
        $datarekap = DataRekap::all();
        return view('admin.admin-rekap-perwalian', ['datarekap'=>$datarekap]);
    }
}
