@extends('mahasiswa.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim : </b>{{ $Mahasiswa->nim }}</li>
                    <li class="list-group-item"><b>Nama : </b>{{ $Mahasiswa->nama }}</li>
                    <li class="list-group-item"><b>Kelas : </b>{{ $Mahasiswa->kelas }}</li>
                    <li class="list-group-item"><b>Jurusan : </b>{{ $Mahasiswa->jurusan }}</li>
                    <li class="list-group-item"><b>Jurusan : </b>{{ $Mahasiswa->email }}</li>
                    <li class="list-group-item"><b>Jurusan : </b>{{ $Mahasiswa->alamat }}</li>
                    <li class="list-group-item"><b>Jurusan : </b>{{ Carbon\Carbon::parse($Mahasiswa ->ttl)->format('d-m-Y') }}</li>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">kembali</a>
        </div>
    </div>
</div>
    
@endsection