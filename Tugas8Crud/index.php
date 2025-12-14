<?php 
require_once "BarangGadai.php";

$barang = new BarangGadai();
$data = $barang->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pegadaian</title>

    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>
</head>
<body>

<h2>Data Barang Gadai</h2>

<div style="text-align:center; margin-bottom:25 px;">
    <a href="tambah.php">+ Tambah Data</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Nasabah</th>
        <th>Barang</th>
        <th>Pinjaman</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_nasabah']; ?></td>
        <td><?= $row['barang']; ?></td>
        <td>Rp <?= number_format($row['pinjaman'], 0, ',', '.'); ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row['id']; ?>" 
               onclick="return confirmHapus();">
               Hapus
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
