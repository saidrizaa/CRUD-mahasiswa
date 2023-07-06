<?php
include("koneksi.php");

if (isset($_POST['update'])) {
    // ambil data dari form
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $keahlian = implode(",", $_POST['keahlian']);

    // buat query
    $sql = "update mahasiswa SET nim='$nim',
    nama_mahasiswa='$nama_mahasiswa',
    jenis_kelamin='$jenis_kelamin',
    program_studi='$program_studi', keahlian='$keahlian' where id=$id";
    $query = mysqli_query($koneksi, $sql);

    if ($query){
        header('location: index.php');
    } else {
        echo "Gagal mengubah data mahasiswa <a href=index.php>Halaman Index</a>";
    }
 } else {
    
        echo "Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
    }


