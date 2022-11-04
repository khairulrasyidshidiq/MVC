<form action="" method="POST">
    <div class="container col-lg-6" id="wsl">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nama</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nama">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1" >NIS</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nis">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Rayon</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="rayon">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Tanggal Absen</span>
          <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="tanggal" placeholder="Example : 22-20-2020">
        </div>
        <button type="submit" name="kirim" class="btn btn-success">Tambah</button>
        <a href="index" class="btn btn-danger">Kembali</a>
      </div>
    </form>


<?php if(isset($_POST['kirim'])) :?>
<script>
    Swal.fire({
        title: 'Success',
        text: 'Data berhasil ditambah!',
        icon: 'success',
        confirmButtonText: 'OK'
    })
    .then(function() {
        window.location.href = 'index'
    })
</script>
<?php endif;?>