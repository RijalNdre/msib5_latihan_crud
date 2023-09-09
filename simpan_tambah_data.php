<?php
include ("koneksi.php");
$platnomor = $_POST['txtPlatNomor'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$simpan = mysqli_query($koneksi, "insert into data_motor(plat_nomor, merk, tahun, harga_sewa) values ('$platnomor', '$merk', '$tahun', '$harga')");
if ($simpan) {
    header ("Location:index.php");
}