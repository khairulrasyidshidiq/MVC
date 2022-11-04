<?php
class absen_model{
    private $absen = [
        [

        ],
    ];

    public function getabsen(){
        $conn = mysqli_connect("localhost", "root", "", "siswa");
        // parameter 1 : nama server, parameter 2 : username, parameter 3 : password, parameter 4 : nama database 
        $query = "SELECT * FROM nama";
        $result = mysqli_query($conn, $query);
        return $result;
    }
}