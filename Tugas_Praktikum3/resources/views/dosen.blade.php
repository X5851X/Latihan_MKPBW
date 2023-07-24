@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Data Dosen</h1>
        <p>Ini adalah halaman data dosen</p>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Dosen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $dosen)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $dosen }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
