<?php
include 'koneksi.php';
$id = (int) $_POST['id'];
$nama_buku      = $_POST['nama_buku'];
$pengarang      = $_POST['pengarang'];
$jenis_buku     = $_POST['jenis_buku'];

$sql = "UPDATE tb_buku SET 
            nama_buku   = '$nama_buku',
            pengarang   = '$pengarang',
            jenis_buku  = '$jenis_buku'
        WHERE id = $id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal update data: " . $conn->error;
}
?>
