@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{ $nama }}</h1>
                <p>NPM: {{ $npm }}</p>
                <p>Umur: {{ $umur }} tahun</p>
                <p>Status Pendidikan: {{ $statusPendidikan }}</p>
                <p>Jurusan: {{ $jurusan }}</p>
                <!-- Anda dapat menambahkan informasi lainnya jika diperlukan -->
            </div>
        </div>
    </div>
@endsection
