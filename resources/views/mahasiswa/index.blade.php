@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <form action="{{ route('mahasiswa.index') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" >Search</button>
                    <div class="col-md">
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@if($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($mahasiswa->count())
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>E-mail</th>
        <th>Alamat</th>
        <th>TTL</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->kelas }}</td>
        <td>{{ $mhs->jurusan }}</td>
        <td>{{ $mhs->email }}</td>
        <td>{{ $mhs->alamat }}</td>
        <td>{{ $mhs->ttl }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
            @csrf
            @method('DELETE') 
            <button type="submit" class="btn btn-danger">Delete</button>           
            </form>
        </td>
    </tr>
    @endforeach
</table>


    
@else
    <p class="text-center fs-4">Mahasiswa tidak ditemukan.</p>
@endif

<div class="d-flex justify-content-center">
    {{ $mahasiswa->links() }}
</div>

@endsection
