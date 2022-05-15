@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hai! {{ Auth::user()->name }}

                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Data Siswa untuk {{ ucwords(Auth::user()->role) }}
                </div>
                <div class="card-body">
                    <table class="table">
                        <div class="table-wrapper table-responsive">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $siswa->nama_siswa }}</td>
                                        <td>{{ $siswa->jenis_kelamin }}</td>
                                        <td>{{ $siswa->alamat }}</td>
                                        <td>{{ $siswa->sekolah->nama_sekolah }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
