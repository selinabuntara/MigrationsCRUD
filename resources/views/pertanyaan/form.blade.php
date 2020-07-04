@extends('master')

@section('content')
    <form action = "/pertanyaan" method = "POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" placeholder="Judul Pertanyaan" id="email">
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <input type="text" class="form-control" placeholder="Ketik Pertanyaan" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection