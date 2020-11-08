@extends('layout.layout')

@section('title', 'Detail Student!')

@section('content')
    <div class="row">
        <div class="col-6">
            <h2 class="mt-2">Detail Student</h2>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->noic }}</h6>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a class="btn btn-primary" href="{{ $student->id }}/edit">Edit</a>
                            <form action="/students/{{ $student->id }}" method="post"  class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                        <div>
                            <a href="/students" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
