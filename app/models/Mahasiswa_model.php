<?php

class Mahasiswa_model{

  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
  
      $result = $this->db->single();
      
      // Debugging: print data yang diambil
      if ($result === null) {
          echo "Data mahasiswa dengan ID $id tidak ditemukan.";
          exit;
      }
  
      return $result;
  }

  // public function tambahDataMahasiswa($data)
  // {
  //   $query = "INSERT INTO mahasiswa 
  //               VALUES 
  //             ('', :nama, :nrp, :email, :jurusan)";

  //   $this->db->query($query);
  //   $this->db->bind('nama', $data['nama']);
  //   $this->db->bind('nrp', $data['nrp']);
  //   $this->db->bind('email', $data['email']);
  //   $this->db->bind('jurusan', $data['jurusan']);

  //   $this->db->execute();

  //   // return $this->db->rowCount();
  //   // Debugging: cek apakah query berhasil dijalankan
  //   if($this->db->rowCount() > 0) {
  //     return $this->db->rowCount();
  //   } else {
  //     // Jika query gagal, tampilkan kesalahan SQL
  //     echo "Error: " . $this->db->errorInfo();
  //     return 0;
  //   }   
  // }

  public function tambahDataMahasiswa($data)
  {
      $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) 
                VALUES (:nama, :nrp, :email, :jurusan)";
      
      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nrp', $data['nrp']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('jurusan', $data['jurusan']);
      
      if ($this->db->execute()) {
          return $this->db->rowCount();
      } else {
          // Jika query gagal, tampilkan kesalahan SQL
          var_dump($this->db); // Debug untuk melihat kesalahan SQL
          return 0;
      }
  }

  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id = :id";
    
    $this->db->query($query);
    $this->db->bind('id', $id);

    if ($this->db->execute()) {
      return $this->db->rowCount();
    } else {
      var_dump($this->db); 
      return 0;
    }
  }

  public function ubahDataMahasiswa($data)
  {
      $query = "UPDATE mahasiswa SET
        nama = :nama,
        nrp = :nrp,
        email = :email,
        jurusan = :jurusan
        WHERE id = :id
      ";
      
      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nrp', $data['nrp']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('jurusan', $data['jurusan']);
      $this->db->bind('id', $data['id']);
      
      if ($this->db->execute()) {
          return $this->db->rowCount();
      } else {
          // Jika query gagal, tampilkan kesalahan SQL
          var_dump($this->db); // Debug untuk melihat kesalahan SQL
          return 0;
      }
  }

  public function cariDataMahasiswa()
  {
    $keyword = $_POST['keyword'];
    $query = 'SELECT * FROM mahasiswa WHERE nama LIKE :keyword';

    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }
  
}