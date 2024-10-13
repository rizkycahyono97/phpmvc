<?php

class Mahasiswa extends Controller{

  public function index()
  {
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    
    // var_dump($data['mhs']);

    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah()
  {
    // var_dump($_POST);

    if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/Mahasiswa');
      exit;
    } else {
        Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/Mahasiswa');
        exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/Mahasiswa');
      exit;
    } else {
        Flasher::setFlash('Tidak berhasil', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/Mahasiswa');
        exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id'])); // menggunakan json_encode karena js tidak bisa menerima array assoc
  }

  public function ubah()
  {
    // var_dump($_POST);

    if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0){
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/Mahasiswa');
      exit;
    } else {
        Flasher::setFlash('berhasil', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/Mahasiswa');
        exit;
    }
  }

  public function cari()
  {
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();

    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
}