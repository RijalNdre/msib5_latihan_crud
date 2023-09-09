<?php
include ("koneksi.php");
$platnomor = $_POST['txtPlatNomor'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$id = $_POST['id'];
$simpan = mysqli_query($koneksi, "update data_motor set plat_nomor='$platnomor', merk='$merk', tahun='$tahun', harga_sewa='$harga' where id_motor='$id'");
if ($simpan) {
    header ("Location:index.php");
}