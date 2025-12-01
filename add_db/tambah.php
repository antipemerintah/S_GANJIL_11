<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_anggota'];
    $jab = $_POST['jabatan'];
    $gaji = $_POST['gaji_pokok'];
    $tr   = $_POST['tunjangan_rumah'];
    $tj   = $_POST['tunjangan_jabatan'];
    $tg  = $_POST['tunjangan_gelombang'];
    $pdo->query("INSERT INTO gajiPNS (nama_anggota,jabatan,gaji_pokok,tunjangan_rumah,tunjangan_jabatan,tunjangan_gelombang)
                 VALUES ('$nama','$jab','$gaji','$tr','$tj','$tg')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Gaji PNS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-md mx-auto bg-white p-4 rounded shadow mt-6">
    <h1 class="text-lg font-semibold mb-3">Tambah Data</h1>
    <form method="post" class="space-y-3">
        <div>
            <label class="block text-sm">Nama</label>
            <input name="nama_anggota" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Jabatan</label>
            <input name="jabatan" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Tunjangan Rumah</label>
            <input type="number" name="tunjangan_rumah" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Tunjangan Jabatan</label>
            <input type="number" name="tunjangan_jabatan" class="border w-full px-2 py-1 text-sm">
        </div>
        <div>
            <label class="block text-sm">Tunjangan gelombang</label>
            <input type="number" name="tunjangan_gelombang" class="border w-full px-2 py-1 text-sm">
        </div>
        <div class="mt-3 flex gap-2">
            <button name="simpan" class="bg-blue-600 text-white text-sm px-3 py-1 rounded">Simpan</button>
            <a href="index.php" class="bg-gray-300 text-sm px-3 py-1 rounded">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>
