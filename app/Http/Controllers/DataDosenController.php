<?php

namespace App\Http\Controllers;
use App\Models\DataDosen;

use Illuminate\Http\Request;

class DataDosenController extends Controller
{
    public function __construct()
    {
        $this->DataDosen = new DataDosen();

    }

    public function index()
    {
        $data = [
                'dosen' => $this->DataDosen->alldata(),
        ];
        return view ('home',$data);
    }
    
}
