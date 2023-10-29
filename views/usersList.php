<?php
if ($_SESSION['dataUser']['role'] !== 'Peserta'):
    // Remove warning message
    error_reporting(E_ALL ^ E_WARNING);

    // make object from class contactModel
    $usersModel = new UserModel();
    // get data from database
    $userRecords = $usersModel->findAll();
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
                                <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Data Users</h5>
                            </div>
                            <div class="col-sm-6 d-flex mt-3 mt-sm-0">
                                <a href="index.php?hal=usersAdd" class="btn btn-sm btn-outline-primary ms-auto"><i
                                        class="bx bx-plus"></i> Add Data</a>
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
                    <h5 class="card-header">Daftar Users</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table text-center table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <form action="./controllers/AuthController.php" method="post">
                                    <?php
                                    $no = 1;
                                    foreach ($userRecords as $key => $value):
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">
                                                    <?= $no ?>
                                                </span></td>
                                            <td>
                                                <?= !empty($value['nama_lengkap']) ? $value['nama_lengkap'] : $value['username'] ?>
                                            </td>
                                            <td>
                                                <?= $value['username'] ?>
                                            </td>
                                            <td>
                                                <span class="badge rounded-pill bg-label-primary">
                                                    <?= $value['role'] ?>
                                                </span>
                                            </td>
                                            <td>
                                                <!-- Input action delete update & view group without dropdown -->
                                                <div class="btn-group">

                                                    <a href="index.php?hal=usersEdit&id=<?= $value['id_users'] ?>"
                                                        class="btn btn-sm btn-outline-secondary"
                                                        <?= $_SESSION['dataUser']['id'] === $value['id'] ? 'style="pointer-events: none;"' : '' ?>>
                                                        <i class="bx bx-edit-alt"></i></a>

                                                    <button type="submit" name="process" value="delete"
                                                        class="btn btn-sm btn-outline-secondary"
                                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                                                        <?= $_SESSION['dataUser']['id'] === $value['id'] ? 'disabled' : '' ?>>
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </div>
                                                <input type="hidden" name="id_user" value="<?= $value['id_users'] ?>">
                                            </td>
                                        </tr>
                                        <?php $no++; endforeach; ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
<?php else: ?>
    <?php require_once './views/accesDenied.php' ?>
<?php endif; ?>