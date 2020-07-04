@extends('master')

@section('content')
    <table class="table">
        <thead>
            <h1> Daftar Pertanyaan </h1>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pertanyaan as $key => $pertanyaan)
                <tr>
                    <td> {{$key + 1}} </td>
                    <td> {{$pertanyaan->judul}} </td>
                    <td> {{$pertanyaan->isi}} </td>
                    <td>
                        <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-sm btn-info">show</a>
                    </td>

                </tr>
            @endforeach

            <a href="/pertanyaan/create" class="btn btn-primary"> Buat Pertanyaan Baru</a>
        </tbody>
    </table>
@endsection