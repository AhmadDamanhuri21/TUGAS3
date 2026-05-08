<h1>Daftar Post</h1>
@foreach($posts as $post)
    <h3>{{ $post->judul }}</h3>
    <p>{{ $post->isi }}</p>
    <img src="{{ asset('storage/' .
$post->gambar) }}" width="200">
<br>
<a href="/posts/{{ $post->id }}/edit">
    <button type="button">Edit</button>
</a>
<form action="/posts/{{ $post->id }}" method="POST"
    style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endforeach