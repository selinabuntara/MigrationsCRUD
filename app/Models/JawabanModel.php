<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($datajawaban)
    {
        $new_jawaban = DB::table('jawaban')->insert($datajawaban);

        return $new_jawaban;
    }
}