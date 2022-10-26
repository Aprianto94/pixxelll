<?php
include('koneksi.php');

$nik = $_GET['nik'];

$koneksi = new PDO("mysql:host=localhost;dbname=pduli_diri", 'root', '');
$query = $koneksi->query("DELETE FROM isi_data WHERE id='$nik'");

if($query){
    header("location:catatan.php");
}
?>