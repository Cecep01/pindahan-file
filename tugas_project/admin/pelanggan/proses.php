<?php
include '../../database.php';
$dosen = new pelanggan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_hp = $_POST['no_hp'];
  

    if ($aksi == "create") {
        $dosen->create($nama, $alamat , $jk , $no_hp);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id , $nama ,$alamat , $jk , $no_hp);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}