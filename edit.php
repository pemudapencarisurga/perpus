<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM tb_buku WHERE id = $id")->fetch_assoc();
?>

<h2>Edit Data Buku</h2>
<form action="proses_edit.php" method="post">
    <input type="text" name="nama_buku" value="<?= $data['nama_buku'] ?>"><br>
    <input type="text" name="pengarang" value="<?= $data['pengarang'] ?>"><br>
    <input type="text" name="jenis_buku" value="<?= $data['jenis_buku'] ?>"><br>
    <button type="submit">Update</button>
</form>
