<?php

class About extends Controller{
    public function index($Nama ='fajar', $pekerjaan='designer', $umur= '20'){


        //untuk nyiapin data, dan kita simpan sebagai array asosiatif
        $data ['nama'] = $Nama;
        $data ['pekerjaan'] = $pekerjaan;
        $data ['umur'] = $umur;
        $data ['judul'] = 'about';
        $this->view('templat/header', $data);
        $this->view('about/index', $data);
        $this->view('templat/footer');
    }
    public function page()
    {
       $data ['judul'] = 'page';
       $this->view('templat/header', $data);
       $this->view('about/page');
       $this->view('templat/footer');
    }
}