@extends('layouts.dasar')

@section('title', 'Quotes')

<link rel="stylesheet" href="{{ asset('css/nav.css') }}">

@section('content')
    <!-- Menambahkan ID content di sini agar JavaScript bisa menggantinya -->
    <div id="content">
        <h1>Welcome to the Mempelai</h1>
        <p>Some content here...</p>
    </div>
@endsection

@include('layouts.nav') <!-- Bisa tetap di luar section jika ingin navigasi tetap ada di setiap halaman -->
