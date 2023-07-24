@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Daftar Matakuliah</h1>
        <p>Ini adalah halaman daftar matakuliah</p>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Daftar Matakuliah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $matakuliah)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $matakuliah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
