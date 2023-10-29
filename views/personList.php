<?php
if ($_SESSION['dataUser']['role'] !== 'Peserta'):
    // Remove warning message
    error_reporting(E_ALL ^ E_WARNING);

    // make object from class contactModel
    $personModel = new ContactModel();
    // Pagination
    $jumlahDataPerHalaman = 7;
    $jumlahData = count($personModel->findAll());
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    // get all records from personModel
    if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
        $personRecords = $personModel->search($_GET['keyword'], $awalData, $jumlahDataPerHalaman);
        $keyword = $_GET['keyword'];
    } else {
        $personRecords = $personModel->findAllLimit($awalData, $jumlahDataPerHalaman);
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
                                <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Data Person</h5>
                            </div>
                            <div class="col-sm-6 d-flex mt-3 mt-sm-0">
                                <a href="index.php?hal=personAdd" class="btn btn-sm btn-outline-primary ms-auto"><i
                                        class="bx bx-plus"></i> Add Data</a>
                                <!-- Search button -->
                                <form action="./controllers/ContactController.php" method="post"
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
                    <h5 class="card-header">Daftar Contact</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table text-center table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Asal Kampus</th>
                                    <th>Sosmed</th>
                                    <th>Foto Profile</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <form action="./controllers/ContactController.php" method="post">
                                    <?php
                                    $no = 1;
                                    foreach ($personRecords as $key => $value):
                                        ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <span class="fw-medium">
                                                    <?= $no ?>
                                                </span></td>
                                            <td>
                                                <?= $value['nama_lengkap'] ?>
                                            </td>
                                            <td>
                                                <?= $value['asal_kampus'] ?>
                                            </td>
                                            <td>
                                                <a href="https://instagram.com/<?= $value['sosmed'] ?>" type="button"
                                                    class="btn btn-sm btn-outline-danger" target="_blank">
                                                    <?= $value['sosmed'] ?>
                                                    <span class="badge ms-2 d-flex justify-content-center"
                                                        style="padding:0.5px;">
                                                        <i class="bx bxl-instagram"></i>
                                                    </span>
                                                </a>
                                            </td>
                                            <td align="center">
                                                <?php
                                                $link = $value['foto'];
                                                $startPos = strpos($link, "id=");

                                                if ($startPos !== false) {
                                                    $startPos += 3; // Move past "id="
                                                    $url = 'https://drive.google.com/uc?export=view&id=' . substr($link, $startPos);
                                                } else {
                                                    $url = './assets/img/avatars/no-image.png';
                                                }
                                                ?>
                                                <div class="avatar avatar-sm">
                                                    <img src="<?= $url ?>" alt="Avatar" class="rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <!-- Input action delete update & view group without dropdown -->
                                                <div class="btn-group">
                                                    <a href="index.php?hal=personShow&id=<?= $value['id'] ?>"
                                                        class="btn btn-sm btn-outline-secondary">
                                                        <i class="bx bx-show"></i></a>

                                                    <a href="index.php?hal=personEdit&id=<?= $value['id'] ?>"
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
                    <hr class="mt-4 mb-0">
                    <div class="card-footer mb-0">
                        <!-- Pagination -->
                        <nav aria-label="pagination-contaxa mb-0">
                            <ul class="pagination justify-content-end mb-0">
                                <?php if ($halamanAktif > 1): ?>
                                    <li class="page-item <?= ($halamanAktif < 1) ? 'disabled' : '' ?>">
                                        <a href="index.php?hal=personList&halaman=<?= $halamanAktif - 1 ?>&keyword=<?= $keyword ?>"
                                            class="page-link">Previous</a>
                                    </li>
                                <?php endif; ?>
                                <?php for ($i = 1; $i < $jumlahHalaman; $i++): ?>
                                    <?php if ($i == $halamanAktif): ?>
                                        <li class="page-item active"><a class="page-link"
                                                href="index.php?hal=personList&halaman=<?= $i ?>&keyword=<?= $keyword ?>">
                                                <?= $i ?>
                                            </a></li>
                                    <?php else: ?>
                                        <li class="page-item" aria-current="page">
                                            <a class="page-link"
                                                href="index.php?hal=personList&halaman=<?= $i ?>&keyword=<?= $keyword ?>">
                                                <?= $i ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endfor; ?>
                                <?php if ($halamanAktif < $jumlahHalaman): ?>
                                    <li class="page-item">
                                        <a class="page-link"
                                            href="index.php?hal=personList&halaman=<?= $halamanAktif + 1 ?>&keyword=<?= $keyword ?>">Next</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
<?php else: ?>
    <?php require_once './views/accesDenied.php' ?>
<?php endif; ?>