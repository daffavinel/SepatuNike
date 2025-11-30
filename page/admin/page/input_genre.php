<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
/* Card minimalis, tanpa shadow lebay */
.clean-card {
    border: 1px solid #e5e5e5;
    border-radius: 12px;
    padding: 25px;
    background: #ffffff;
    max-width: 650px;
    margin: 30px auto;
}

/* Judul */
.form-title {
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 20px;
}

/* Input clean */
.input-clean {
    border-radius: 10px;
    height: 48px;
    font-size: 16px;
}

/* Fokus input halus */
.input-clean:focus {
    border-color: #0d6efd !important;
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
}

/* Tombol clean */
.btn-clean {
    padding: 10px 26px;
    font-size: 16px;
    border-radius: 10px;
    transition: 0.2s;
}

/* Hover soft */
.btn-clean:hover {
    transform: translateY(-2px);
}
</style>


<div class="clean-card">

    <div class="form-title">
        <?= isset($_GET['action']) && $_GET['action'] == 'edit' ? "Edit Genre" : "Tambah Genre"; ?>
    </div>

    <form method="POST" action="">

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Genre</label>
            <input 
                name="nama" 
                type="text" 
                class="form-control input-clean"
                placeholder="Masukkan nama genre..."
                value="<?php echo (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($edit['nama'])) 
                        ? htmlspecialchars($edit['nama'], ENT_QUOTES) 
                        : ''; ?>"
                required
            >
        </div>

        <button 
            type="submit" 
            class="btn btn-primary btn-clean" 
            name="submit"
        >
            Submit
        </button>

    </form>

</div>


<?php
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];

    echo "
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data genre berhasil diproses.',
            icon: 'success',
            confirmButtonColor: '#0d6efd'
        });
    </script>";
}
?>
