<?php

class absen extends controller{
    public function index(){

        $data['judul'] = 'Absen';
        $data['absen'] = $this->model('absen_model')->getabsen();
        $this->view('templates/header', $data);
        $this->view('absen/index', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Absen';
        $this->view('templates/header', $data);
        $this->view('absen/tambah', $data);
        $this->view('templates/footer');

        if(isset($_POST['kirim'])){
            $Nama = $_POST['nama'];
            $NIS = $_POST['nis'];
            $Rayon = $_POST['rayon'];
            $Tanggal = $_POST['tanggal'];
            $conn = mysqli_connect("localhost", "root", "", "siswa");
            // parameter 1 : nama server, parameter 2 : username, parameter 3 : password, parameter 4 : nama database 
            $query = "INSERT INTO nama VALUES ('', '$Nama', '$NIS', '$Rayon', '$Tanggal')";
            $result = mysqli_query($conn, $query);
        }

    }

    public function hapus($id){
        $conn = mysqli_connect("localhost", "root", "", "siswa");
            // parameter 1 : nama server, parameter 2 : username, parameter 3 : password, parameter 4 : nama database 
            $query = "DELETE FROM nama WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $berhasil = mysqli_affected_rows($conn);

            if($berhasil > 0){
                header("Location: /tugasremed/MVCNew/public/absen/");
            }
    }
}