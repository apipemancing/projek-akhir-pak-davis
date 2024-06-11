<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Siswa Baru</h1>
    <form action="{{ route('siswas.store') }}" method="POST">
        @csrf
        <label>Nama: <input type="text" name="nama"></label><br>
        <label>Gender: <input type="text" name="gender"></label><br>
        <label>Umur: <input type="number" name="umur"></label><br>
        <label>Asal: <input type="text" name="asal"></label><br>
        <label>Tempat Tinggal: <input type="text" name="tempat_tinggal"></label><br>
        <label>Tanggal Lahir: <input type="date" name="tanggal_lahir"></label><br>
        <label>Nama Orang Tua: <input type="text" name="nama_orang_tua"></label><br>
        <label>Asal Sekolah: <input type="text" name="asal_sekolah"></label><br>
        <label>Alasan: <textarea name="alasan"></textarea></label><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
