@extends('layout.layout')

@section('title', 'Daftar Mahasiswa!')

@section('content')
    <div class="row">
        <div class="col-10">
            <h2 class="mt-2">Daftar Mahasiswa</h2>

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">MyKad</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    <tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $mh)
                        <tr>
                            {{-- <th scope="row">{{ $mh->id }}</th> --}}
                            <th scope="row">{{ $loop->iteration }}</th>
                            <th>{{ $mh->nama }}</th>
                            <th>{{ $mh->noic }}</th>
                            <th>{{ $mh->email }}</th>
                            <th>{{ $mh->jurusan }}</th>
                            <th>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
