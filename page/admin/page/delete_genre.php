<?php 
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM tb_genre WHERE id = $id");

echo "<script>alert('Data berhasil dihapus!');window.location='?page=genre&action=index';</script>";
?>
