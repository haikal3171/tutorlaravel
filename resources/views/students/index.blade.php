@extends('layout.layout')

@section('title', 'Senarai Student!')

@section('content')
    <div class="row">
        <div class="col-6">
            <h2 class="mt-2">Senarai Student</h2>

            <a href="/students/create" class="btn btn-sm btn-success my-3">Tambah Pelajar</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $student->nama }}
                  <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
              </ul>

        </div>
    </div>
@endsection
