<?php
// make new object from class ContactModel
$contactModel = new ContactModel();
// Pagination
$jumlahDataPerHalaman = 8;
$jumlahData = count($contactModel->findAll());
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
// get all records from contactModel
$contactRecords = $contactModel->findAllLimit($awalData, $jumlahDataPerHalaman);
?>
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-between">
        <?php foreach ($contactRecords as $key => $value): ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100 border border-primary p-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $value['nama_lengkap'] ?>
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            <?= $value['asal_kampus'] ?>
                        </h6>
                    </div>
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
                    <img class="img-fluid rounded border border-secondary" src="<?= $url ?>" alt="Card image cap"
                        style="height: 240px; object-fit:cover; background-position: top;">
                    <div class="card-body">
                        <p class="card-text">
                            <?= $value['quotes'] ?>
                        </p>
                        <hr class="bg-primary">
                        <a href="index.php?hal=contactShow&id=<?= $value['id'] ?>" class="btn btn-outline-primary">
                            <i class="bx bx-show me-1"></i>
                            Show Details
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Pagination -->
    <nav aria-label="pagination-contaxa mb-0">
        <ul class="pagination justify-content-end mb-0">
            <?php if ($halamanAktif > 1): ?>
                <li class="page-item <?= ($halamanAktif < 1) ? 'disabled' : '' ?>">
                    <a href="index.php?hal=contactList&halaman=<?= $halamanAktif - 1 ?>" class="page-link">Previous</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i < $jumlahHalaman; $i++): ?>
                <?php if ($i == $halamanAktif): ?>
                    <li class="page-item active"><a class="page-link" href="index.php?hal=contactList&halaman=<?= $i ?>">
                            <?= $i ?>
                        </a></li>
                <?php else: ?>
                    <li class="page-item" aria-current="page">
                        <a class="page-link" href="index.php?hal=contactList&halaman=<?= $i ?>">
                            <?= $i ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($halamanAktif < $jumlahHalaman): ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?hal=contactList&halaman=<?= $halamanAktif + 1 ?>">Next</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>