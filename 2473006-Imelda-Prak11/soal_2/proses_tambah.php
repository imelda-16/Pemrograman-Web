<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";

    if ($koneksi->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>