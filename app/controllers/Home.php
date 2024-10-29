<?php 
 class Home extends Controller{

    public function index ()
    {
         $data['judul'] = 'Home';
         $data['mobil'] = $this->model('Mobil')->getAll();
         $this->view('templat/header', $data);
         $this->view('index', $data  );
         $this->view('templat/footer');
    }
 }