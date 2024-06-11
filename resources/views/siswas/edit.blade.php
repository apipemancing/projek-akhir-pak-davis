<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswas.update', $siswa) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama: <input type="text" name="nama" value="{{ $siswa->nama }}"></label><br>
        <label>Gender: <input type="text" name="gender" value="{{ $siswa->gender }}"></label><br>
        <label>Umur: <input type="number" name="umur" value="{{ $siswa->umur }}"></label><br>
        <label>Asal: <input type="text" name="asal" value="{{ $siswa->asal }}"></label><br>
        <label>Tempat Tinggal: <input type="text" name="tempat_tinggal" value="{{ $siswa->tempat_tinggal }}"></label><br>
        <label>Tanggal Lahir: <input type="date" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}"></label><br>
        <label>Nama Orang Tua: <input type="text" name="nama_orang_tua" value="{{ $siswa->nama_orang_tua }}"></label><br>
        <label>Asal Sekolah: <input type="text" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}"></label><br>
        <label>Alasan: <textarea name="alasan">{{ $siswa->alasan }}</textarea></label><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
