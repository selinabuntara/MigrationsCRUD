<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel
{
    public static function get_all()
    {
        $pertanyaans = DB::table('pertanyaan')->get();
        return $pertanyaans;
    }

    public static function save($datapertanyaan)
    {
        unset($datapertanyaan["_token"]);
        $new_pertanyaan = DB::table('pertanyaan')->insert($datapertanyaan);

        return $new_pertanyaan;
    }

    public static function find_by_id($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }
}