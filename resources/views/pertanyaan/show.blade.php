@extends('master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Pertanyaan</h3>
        <p> Judul : {{$pertanyaans->judul}} </p>
        <p> Isi : {{$pertanyaans->isi}} </p>
    </div>
@endsection