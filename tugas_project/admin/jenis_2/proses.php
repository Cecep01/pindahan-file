<?php
include '../../database.php';
$dosen = new Jenis();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
   $nama_jenis = $_POST['nama_jenis'];

    if ($aksi == "create") {
        $dosen->create($nama_jenis);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id ,$nama_jenis);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}