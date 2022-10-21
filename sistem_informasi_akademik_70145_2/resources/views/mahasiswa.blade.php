@extends('layout.master')
@section('title','Mahasiswa')
@section('active2','active')
@section('judulhalaman','Mahasiswa 5C Teknik Informatika 2022 UNSIKA')
@section('daftar')
<div class="container">
    <ol class="list-group list-group-flush">
        @foreach ($mahasiswa as $mhs)
            <li class="list-group-item">{{ $mhs }}</li>
        @endforeach
    </ol>
</div>
    
@endsection