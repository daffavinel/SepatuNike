<?php
// panggil database
include "../../config/Database.php";

// buka koneksi
$db  = new Database();
$conn = $db->getConnection();

// amankan id
$id = intval($_GET['id']);

// ambil data genre
$query = mysqli_query($conn, "SELECT * FROM tb_genre WHERE id = $id");
$data = mysqli_fetch_assoc($query);
?>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
/* CARD CLEAN */
.clean-card {
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 24px;
    background: white;
    max-width: 650px;
    margin: 35px auto;
}

/* TITLE */
.form-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 20px;
}

/* INPUT CLEAN */
.input-clean {
    border-radius: 10px;
    height: 46px;
    font-size: 16px;
}

.input-clean:focus {
    border-color: #0d6efd !important;
    box-shadow: 0 0 0 3px rgba(13,110,253,0.18);
}

/* BUTTON CLEAN */
.btn-clean {
    padding: 10px 26px;
    font-size: 16px;
    border-radius: 10px;
}
</style>


<div class="clean-card">

    <div class="form-title">Edit Genre</div>

    <form method="POST">

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Genre</label>
            <input 
                type="text" 
                name="nama_genre"
                value="<?= htmlspecialchars($data['nama_genre']); ?>"
                class="form-control input-clean"
                placeholder="Masukkan nama genre..."
                required
            >
        </div>

        <div class="d-flex gap-2">
            <a href="?page=genre" class="btn btn-secondary btn-clean">Kembali</a>
            <button type="submit" name="update" class="btn btn-primary btn-clean">Update</button>
        </div>

    </form>

</div>


<?php
// jika tombol update ditekan
if (isset($_POST['update'])) {

    $nama = mysqli_real_escape_string($conn, $_POST['nama_genre']);

    mysqli_query($conn, "UPDATE tb_genre SET nama_genre='$nama' WHERE id=$id");

    echo "
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil diperbarui!',
            icon: 'success',
            confirmButtonColor: '#0d6efd'
        }).then(() => {
            window.location='?page=genre';
        });
    </script>";
}
?>
