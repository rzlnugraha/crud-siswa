@extends('layouts.app')

@push('css')
    <style>
        .vh-80 {
            height: 80vh !important;
        }
    </style>
@endpush
@section('content')
    <div class="container d-flex justify-content-center align-items-center w-100 vh-80">
        <h2>Welcome Page</h2>
    </div>
@endsection
