@extends('layouts.app')
@section('content')
    <h1>Form, Input Nama</h1>
    {{--TAMPILIN ERROR--}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/biodata">
        @csrf
        <input type="text" name="nama"
placeholder="Masukkan nama"><br>
        <input type="number" name="umur"
placeholder="Masukkan umur"><br>
        <textarea name="alamat"
placeholder="Masukkan alamat"></textarea><br>

@if(session('success'))
    <p style="color:green;">
        {{ session('success') }}
</p>
@endif
        
        
        <button type="submit">kirim</button>
</form>
@endsection
