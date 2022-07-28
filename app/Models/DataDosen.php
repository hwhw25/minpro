<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataDosen extends Model
{
    public function alldata()
    {

        return DB::table('data_dosens')->get();
    } 

    public function tambahdata($data)
    {
        DB::table('data_dosens')->insert($data);
    }

}
