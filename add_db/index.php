<?php
require 'koneksi.php';

$data = $pdo->query("SELECT * FROM gajiPNS")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Gaji PNS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gary-100 p-6">
<div class="max-w-7xl mx-auto bg-white p-6 rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-semibold">Data Gaji PNS</h1>
        <a href="tambah.php" class="px-3 py-1 bg-blue-600 text-white text-sm rounded">+ Tambah</a>
    </div>

    <table class="w-full border text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="border p-2">ID</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Jabatan</th>
                <th class="border p-2">Gaji Pokok</th>
                <th class="border p-2">T. Jabatan</th>
                <th class="border p-2">T. Rumah</th>
                <th class="border p-2">T. gelombang</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $row): ?>
            <tr>
                <td class="border p-2"><?= $row['id'] ?></td>
                <td class="border p-2"><?= $row['nama_anggota'] ?></td>
                <td class="border p-2"><?= $row['jabatan'] ?></td>
                <td class="border p-2"><?= $row['gaji_pokok'] ?></td>
                <td class="border p-2"><?= $row['tunjangan_rumah'] ?></td>
                <td class="border p-2"><?= $row['tunjangan_jabatan'] ?></td>
                <td class="border p-2"><?= $row['tunjangan_gelombang'] ?></td>
                <td class="border p-2 space-x-1">
                    <a href="edit.php?id=<?= $row['id'] ?>" class="px-2 py-1 bg-yellow-500 text-white text-xs rounded">Edit</a>
                    <a href="hapus.php?id=<?= $row['id'] ?>" class="px-2 py-1 bg-red-600 text-white text-xs rounded"
                       onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
