<?php
include "../../../config/Database.php";
$database = new Database();
$conn = $database->getConnection();

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_genre WHERE id = $id");
$data = mysqli_fetch_assoc($query);
?>

<h3>Edit Genre</h3>

<form method="POST">
    <input type="text" name="nama_genre" value="<?= $data['nama_genre']; ?>" class="form-control">
    <button type="submit" name="update" class="btn btn-primary mt-3">Update</button>
</form>

<?php
if(isset($_POST['update'])) {
    $nama = $_POST['nama_genre'];

    mysqli_query($conn, "UPDATE tb_genre SET nama_genre='$nama' WHERE id=$id");

    echo "<script>alert('Berhasil diupdate!');window.location='?page=genre&action=index';</script>";
}
?>
