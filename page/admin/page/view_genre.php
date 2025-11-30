<div class="row justify-content-center mt-4">

    <div class="col-md-10">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-primary text-white rounded-top">
                <h5 class="mb-0">Daftar Genre</h5>
            </div>

            <div class="card-body p-0">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>Nama Genre</th>
                            <th style="width: 120px;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $no = 1;
                        if(isset($genres)){ 
                            foreach($genres as $genre){ 
                        ?>
                                <tr>
                                    <td class="fw-bold"><?= $no++; ?></td>
                                    <td><?= $genre['nama_genre'] ?></td>
                                    <td>
                                        <a href="?page=genre&action=edit&id=<?= $genre['id'] ?>" 
                                           class="text-primary fw-semibold me-2">Edit</a>
                                        <a href="?page=genre&action=delete&id=<?= $genre['id'] ?>" 
                                           class="text-danger fw-semibold">Hapus</a>
                                    </td>
                                </tr>
                        <?php 
                            } 
                        } else { 
                        ?>
                            <tr>
                                <td colspan="3" class="text-center py-3 text-muted">
                                    Tidak ada data genre.
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
