<?php
class produk {
    //memberi var
    private $koneksi;
    public function __construct(){
        global $dbh; //instance object koneksi.php
        $this->koneksi = $dbh;
    }
    public function dataProduk(){
        $sql = "SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN jenis_produk ON jenis_produk.id = produk.jenis_produk_id ";
        $ps = $this->koneksi->prepare($sql);
        $ps -> execute();
        $ps = $ps->fetchAll();
        return $rs;
    }
}


?>