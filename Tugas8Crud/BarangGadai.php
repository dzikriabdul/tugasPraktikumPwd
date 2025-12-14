<?php
require_once "Database.php";

class BarangGadai {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        return $this->db->conn->query("SELECT * FROM barang_gadai");
    }

    public function getById($id) {
        return $this->db->conn
            ->query("SELECT * FROM barang_gadai WHERE id='$id'")
            ->fetch_assoc();
    }

    public function insert($nama_nasabah, $barang, $pinjaman) {
        return $this->db->conn->query(
            "INSERT INTO barang_gadai (nama_nasabah, barang, pinjaman)
             VALUES ('$nama_nasabah', '$barang', '$pinjaman')"
        );
    }

    public function update($id, $nama_nasabah, $barang, $pinjaman) {
        return $this->db->conn->query(
            "UPDATE barang_gadai SET
             nama_nasabah='$nama_nasabah',
             barang='$barang',
             pinjaman='$pinjaman'
             WHERE id='$id'"
        );
    }

    public function delete($id) {
        return $this->db->conn->query(
            "DELETE FROM barang_gadai WHERE id='$id'"
        );
    }
}
