<div class="container" id="me">
<div class="header d-flex justify-content-between align-items-center pb-4">
        <h3 class="mb-3 text-capitalize">Daftar Absen</h3>
        <a href="<?= BASE_URL;?>/absen/tambah" class="btn btn-primary">Absen</a>
    </div>
    <table class="table table-success table-striped table-bordered">
    <thead>
        <tr>
        <th scope="col" class="text-center">#</th>
        <th scope="col" class="text-center">Nama</th>
        <th scope="col" class="text-center">NIS</th>
        <th scope="col" class="text-center">Rayon</th>
        <th scope="col" class="text-center">Tanggal Absen</th>
        <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($data['absen'] as $absen) {
        ?>
        <tr>
        <th scope="row" class="text-center"><?php echo $no++ ?></th>
        <td><?= $absen['Nama'] ?></td>
        <td><?= $absen['NIS'] ?></td>
        <td><?= $absen['Rayon'] ?></td>
        <td><?= $absen['Tanggal_Absen'] ?></td>
        <td> 
            <form action="<?= BASE_URL ;?>/absen/hapus/<?= $absen['id'] ;?>" method="POST">
                <center>
                    <button class= "btn btn-danger">Hapus</button>
                </center>
            </form>
        </td>
        </tr>
        <?php } ?>
        
    </tbody>   
    </table> 
</div>