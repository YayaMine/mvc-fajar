<?php

class Mahasiswa extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar mahasiwa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templat/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templat/footer');
    }
}