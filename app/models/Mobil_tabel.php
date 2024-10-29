<?php

class Mobil_tabel {

    private $tabel = 'mobil';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query("SELECT * FROM {$this->tabel}");
        return $this->db->resultAll();
    }

    public function getHarga() {
        $this->db->query("SELECT `harga` FROM {$this->tabel}");
        return $this->db->result();
    }

}