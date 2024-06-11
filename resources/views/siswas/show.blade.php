<!DOCTYPE html>
<html>
<head>
    <title>Detail Siswa</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Detail Siswa</h1>
    <p>Nama: {{ $siswa->nama }}</p>
    <p>Gender: {{ $siswa->gender }}</p>
    <p>Umur: {{ $siswa->umur }}</p>
    <p>Asal: {{ $siswa->asal }}</p>
    <p>Tempat Tinggal: {{ $siswa->tempat_tinggal }}</p>
    <p>Tanggal Lahir: {{ $siswa->tanggal_lahir }}</p>
    <p>Nama Orang Tua: {{ $siswa->nama_orang_tua }}</p>
    <p>Asal Sekolah: {{ $siswa->asal_sekolah }}</p>
    <p>Alasan: {{ $siswa->alasan }}</p>
</body>
</html>
