<?php
class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "sekolah_penerima_bantuan_operasional_afirmasi_kabupaten_siak";
    var $con = "";

    function __construct() {
        $this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db ($this->con, $this->db);
    }

    function tampil_data() {
        $data = mysqli_query ($this->con, "select * from datasiak2020");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah($npsn,$namasekolah,$besaran){
        mysqli_query($this->con, "insert into datasiak2020 values('$npsn','$namasekolah','$besaran')");
    }

    function hapus($npsn){
        mysqli_query($this->con,"delete from datasiak2020 where NPSN='$npsn'");
    }

    function update($npsn,$namasekolah,$besaran){
        mysqli_query($this->con,"update datasiak2020 set Nama_Sekolah='$namasekolah',
         Besaran_Bantuan='$besaran' where NPSN='$npsn'");
    }
    function edit_tampilan($npsn) {
        $data = mysqli_query ($this->con, "select * from datasiak2020 where NPSN='$npsn'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
}