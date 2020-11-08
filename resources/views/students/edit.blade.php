@extends('layout.layout')

@section('title', 'Detail Student!')

@section('content')
    <div class="row">
        <div class="col-8">
            <h2 class="mt-2">Kemaskini Student</h2>

            <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama anda.." value="{{ $student->nama }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>No.MyKad</label>
                    <input type="text" class="form-control @error('noic') is-invalid @enderror" id="noic" name="noic" placeholder="Masukkan No.MyKad anda.." value="{{ $student->noic }}">
                    @error('noic')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email anda.." value="{{ $student->email }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan anda.." value="{{ $student->jurusan }}">
                    @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Kemaskini</button>
            </form>

        </div>
    </div>
@endsection
