<?php
require_once "BarangGadai.php";
$barang = new BarangGadai();

$data = $barang->getById($_GET['id']);

if (isset($_POST['update'])) {
    $barang->update(
        $_GET['id'],
        $_POST['nama_nasabah'],
        $_POST['barang'],
        $_POST['pinjaman']
    );
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang Gadai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Barang Gadai</h2>

<form method="post" style="width:40%; margin:auto;">
    Nama Nasabah <br>
    <input type="text" name="nama_nasabah" 
           value="<?= $data['nama_nasabah']; ?>" required><br><br>

    Barang <br>
    <input type="text" name="barang" 
           value="<?= $data['barang']; ?>" required><br><br>

    Nilai Gadai <br>
    <input type="number" name="pinjaman" 
           value="<?= $data['pinjaman']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
    <a href="index.php">Kembali</a>
</form>

</body>
</html>
