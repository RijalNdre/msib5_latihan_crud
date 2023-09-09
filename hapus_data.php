<?php
include ("koneksi.php");
$id=$_GET['id'];
$hapus = mysqli_query($koneksi, "delete from data_motor where id_motor = '$id'");
if ($hapus) {
    header("Location:index.php");
}