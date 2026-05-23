<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM siswa WHERE id='$id'";

if ($koneksi->query($query) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Gagal menghapus data: " . $koneksi->error;
}
?>