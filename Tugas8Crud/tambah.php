<?php
require_once "BarangGadai.php";
$barang = new BarangGadai();

if (isset($_POST['simpan'])) {
    $barang->insert(
        $_POST['nama_nasabah'],
        $_POST['barang'],
        $_POST['pinjaman']
    );
    header("Location: index.php");
}
?>

<form method="post">
    Nama Nasabah <br>
    <input type="text" name="nama_nasabah" required><br><br>

    Barang <br>
    <input type="text" name="barang" required><br><br>

    Nilai Gadai <br>
    <input type="number" name="pinjaman" required><br><br>

    <button name="simpan">Simpan</button>
</form>
