<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SensorModel extends Model
{
    //ambil data dari tabel tb_sensor
    public function AllData()
    {
        return DB::table('tabel_sensor')->get();
    }
}
