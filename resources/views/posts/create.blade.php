<h1>Tambah Post</h1>

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="judul" placeholder="Judul">
    <br><br>

    <textarea name="isi" placeholder="Isi"></textarea>
    <br><br>

    <input type="file" name="gambar">
    <br><br>

    <button type="submit">Simpan</button>
</form>