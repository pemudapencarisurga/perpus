<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_buku = $_POST['nama_buku'];
    $pengarang  = $_POST['pengarang'];
    $jenis_buku     = $_POST['jenis_buku'];

    $sql = "INSERT INTO tb_buku (nama_buku, pengarang, jenis_buku)
            VALUES ('$nama_buku', '$pengarang', '$jenis_buku')";

    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menambah data: " . $conn->error;
    }
}
?>
