<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    //
    public function index()
    {
        $jawaban = JawabanModel::get_all();
        return view('jawaban.index',compact('jawaban'));
    }

    public function create()
    {
        return view('jawaban.form');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $datajawaban = $request->all();
        unset($datajawaban["_token"]);
        //dd($datapertanyaan);
        $jawaban = JawabanModel::save($datajawaban);
        if($jawaban)
        {
            return redirect('/jawaban/{pertanyaan_id}');
        }
    }
}
