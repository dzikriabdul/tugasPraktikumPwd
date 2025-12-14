<?php
require_once "BarangGadai.php";
$barang = new BarangGadai();

if (isset($_GET['id'])) {
    $barang->delete($_GET['id']);
}

header("Location: index.php");
