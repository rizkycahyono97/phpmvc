$(function() {

  $('.tombolTambahData').on('click', function() {

    $('#forModalLabel').html('Tambah Data Mahasiswa')
    $('.modal-footer button[type=submit]').html('Tambah Data')

  });

  // cari class dengan nama tampilModalUbah ketika diklik cari id formModalLabel ubah tulisanya menjadi ''
  $('.tampilModalUbah').on('click', function() { 

    $('#formModalLabel').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/Mahasiswa/ubah');

    const id = $(this).data('id');

    // untuk menampilkan data tanpa di reload
    $.ajax({
      url: 'http://localhost/phpmvc/public/Mahasiswa/getUbah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        $('#nama').val(data.nama);
        $('#nrp').val(data.nrp);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      }
    })

  });


});