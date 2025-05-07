<?php
include 'koneksi.php';

$id = $_GET['id'];

$conn->query("DELETE FROM tb_buku WHERE id = $id");

header("Location: index.php");
?>
