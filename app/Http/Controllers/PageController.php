<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function tentang()
    {
        $nama = "Damanhuri";
        return view('tentang', compact('nama'));
    }
    public function user($nama)
    {
        return view('user', compact('nama'));
    }
    public function form()
    {
        return view('form');
    }
    public function prosesForm(Request $request)
    {
       $request->validate([
           'nama' => 'required|min:3'
       ], [
        'nama.required' => 'Nama wajib diisi!',
        'nama.min' => 'Nama minimal 3 karakter'
       ]);
       $nama = $request->nama;
       return view('hasil', compact('nama'));
    }
}
