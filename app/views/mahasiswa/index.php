<div class="container mt-4">

  <div class="row">
    <div class="col-lg-6">
      <?= Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#forModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/Mahasiswa/cari" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolCari">cari</button>
      </div>
      </form>
    </div>
  </div>

  <div class="row">

      <h3 class="mt-3">Daftar Mahasiswa</h3>
      <ul>
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/Mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end" onclick="return confirm('yakin')">hapus</a>
            <a href="<?= BASEURL; ?>/Mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-end ms-2 me-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#forModal" data-id="<?= $mhs['id']; ?>">ubah</a>
            <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="tambahDataMahasiswa" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/Mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          
          <!-- Nama -->
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="text" class="form-control" id="nrp" name="nrp" oninput="validateNumberInput(this)">
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-select mt-1" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
              <option value="Teknik Kehutanan">Teknik Kehutanan</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
          </div>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
    </div>
  </div>
</div>

