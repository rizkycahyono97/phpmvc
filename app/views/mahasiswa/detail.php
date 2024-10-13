<div class="container">
  <div class="card mt-5" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
      <p class="card-text"><?= $data['mhs']['nrp']; ?></p>
      <p class="card-text"><?= $data['mhs']['email']; ?></p>
      <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
      <a href="<?= BASEURL ?>/Mahasiswa" class="btn btn-primary">Go Back</a>
    </div>
  </div>
</div>