<?php
// Remove warning message
error_reporting(E_ALL ^ E_WARNING);

// make object from class AgamaModel
$agamaModel = new AgamaModel();
// get all records from agamaModel
if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
    $agamaRecords = $agamaModel->search($_GET['keyword']);
} else {
    $agamaRecords = $agamaModel->findAll();
}
?>


<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center row justify-content-evenly">
                        <div class="col-sm-6 ">
                            <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Data Jenis Agama</h5>
                        </div>
                        <div class="col-sm-6 d-flex mt-3 mt-sm-0">
                            <a href="index.php?hal=agamaAdd" class="btn btn-sm btn-outline-primary ms-auto"><i
                                    class="bx bx-plus"></i> Add Data</a>
                            <!-- Search button -->
                            <form action="./controllers/AgamaController.php" method="post"
                                class="input-group input-group-sm ms-2 w-50">
                                <input type="text" class="form-control" name="keyword" placeholder="Search"
                                    aria-label="Search" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" name="process" value="search"
                                    id="button-addon2"><i class="bx bx-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Daftar Agama</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table text-center">
                        <thead class="table-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama Agama</th>
                                <th>jumlah Pemeluk</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <form action="./controllers/AgamaController.php" method="post">
                                <?php
                                $no = 1;
                                foreach ($agamaRecords as $key => $value):
                                    ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">
                                                <?= $no ?>
                                            </span></td>
                                        <td>
                                            <?= $value['nama_agama'] ?>
                                        </td>
                                        <td><span class="badge rounded-pill bg-label-warning">
                                                <?= random_int(0, 30) ?> Orang
                                            </span></td>
                                        <td>
                                            <!-- Input action delete update & view group without dropdown -->
                                            <div class="btn-group">
                                                <a href="index.php?hal=agamaEdit&id=<?= $value['id'] ?>"
                                                    class="btn btn-sm btn-outline-secondary">
                                                    <i class="bx bx-edit-alt"></i></a>

                                                <button type="submit" name="process" value="delete"
                                                    class="btn btn-sm btn-outline-secondary"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                    <i class="bx bx-trash"></i></button>
                                            </div>
                                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                        </td>
                                    </tr>
                                    <?php $no++; endforeach; ?>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->