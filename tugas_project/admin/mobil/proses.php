<?php
include '../../database.php';
$dosen = new Mobil();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
   $merek = $_POST['merek'];
   $no_plat = $_POST['no_plat'];
   $warna = $_POST['warna'];
   $id_jenis = $_POST['id_jenis'];

    if ($aksi == "create") {
        $dosen->create($merek , $no_plat , $warna , $id_jenis);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id ,$merek , $no_plat , $warna , $id_jenis);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}