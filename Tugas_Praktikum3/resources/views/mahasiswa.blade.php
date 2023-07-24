@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Data Mahasiswa</h1>
        <p>Ini adalah halaman data mahasiswa</p>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $mahasiswa)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $mahasiswa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
