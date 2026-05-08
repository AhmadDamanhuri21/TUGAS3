<h1>Halaman Edit</h1>

<form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Judul</label><br>
    <input type="text" name="judul" value="{{ $post->judul }}">
    <br><br>

    <label>Isi</label><br>
    <textarea name="isi">{{ $post->isi }}</textarea>
    <br><br>

    <label>Gambar</label><br>
    <input type="file" name="gambar">
    <br><br>

    <button type="submit">Update</button>
</form>