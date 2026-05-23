<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id    = $_POST['id'];
    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'";

    if ($koneksi->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal mengupdate data: " . $koneksi->error;
    }
}
?>