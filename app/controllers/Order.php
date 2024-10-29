<?php 
 class Order extends Controller{

    public function index ()
    {
         $data['judul'] = 'Order';
         $data['mobil'] = $this->model('Mobil')->getAll();
         // $this->view('templat/header', $data);
         $this->view('order', $data);
         // $this->view('templat/footer');
    }

    public function add ()
    {
         $_POST['total_harga'] = ($this->model('Mobil')->getHarga())['harga'];
         // Kalikan per banyaknya hari
         // var_dump($_POST);
         if (!empty($_POST['tanggal_mulai']) && !empty($_POST['tanggal_akhir'])) {
            if($this->model('Order')->insert()) {
               // Kasi info kalau order berhasil
               return Functions::redirect();
            }
         }
   }
 }