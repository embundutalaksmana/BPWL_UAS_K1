<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah($_POST['npsn'], $_POST['namasekolah'], $_POST['besaranbantuan']);
    header("location:../view/tampil.php");

}elseif($aksi == "hapus") {
    $db->hapus($_GET['NPSN']);
    header("location:../view/tampil.php");
    
}elseif($aksi == "update"){
    $db->update($_POST['npsn'],$_POST['namasekolah'],$_POST['besaranbantuan']);
    header("location:../view/tampil.php");
}

?>