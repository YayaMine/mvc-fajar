<?php

class Order_tabel {

    private $tabel = 'order';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query("SELECT * FROM {$this->tabel}");
        return $this->db->resultAll();
    }

    public function insert() {
        $this->db->query("INSERT INTO `order`(`tanggal_mulai`, `tanggal_akhir`, `total_harga`, `id_mobil`) VALUES (:tanggal_mulai, :tanggal_akhir, :total_harga, :id_mobil)");
        $this->db->bind("tanggal_mulai", $_POST['tanggal_mulai']);
        $this->db->bind("tanggal_akhir", $_POST['tanggal_akhir']);
        $this->db->bind("total_harga", $_POST['total_harga']);
        $this->db->bind("id_mobil", $_POST['id_mobil']);
        return $this->db->rowCount();
    }
}