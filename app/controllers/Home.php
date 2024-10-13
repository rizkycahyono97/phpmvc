<?php

class Home extends Controller{

  public function index()
  {
    $data['judul'] = 'Halaman Home';
    $data['nama'] = $this->model('User_model')->getUser(); // this->model mengambil dari core/controller method model

    $this->view('templates/header', $data);
    $this->view('home/index', $data); // mengarah ke controller di method view 
    $this->view('templates/footer');
  }
}