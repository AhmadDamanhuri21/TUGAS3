<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller

{
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image'
        ]);

        $path =
        $request->file('gambar')->store('gambar-post', 'public');

        Post::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $path
        ]);
        return "Data berhasil disimpan";
        
    }
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',
        compact('posts'));
    }
    public function destroy($id)
    {
        $post = Post::findOrfail($id);
        $post->delete();
        return redirect('/posts');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit',
        compact('post'));
    }
    public function update(Request $request,
    $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);
        return redirect('/posts');
    }
    //
}
