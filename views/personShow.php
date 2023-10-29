<?php
if ($_SESSION['dataUser']['role'] !== 'Peserta'):
    // Remove warning message
    error_reporting(E_ALL ^ E_WARNING);
    // Get id from URL
    $id = $_GET['id'];
    // Make object from class ContactModel
    $contactModel = new ContactModel();
    // Get data by id
    $contactRecord = $contactModel->find($id);
    ?>


    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Header -->
        <div class="row justify-content-center">
            <div class="col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center row justify-content-around">
                            <div class="col-sm-6 ">
                                <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Person / Contact
                                    Details</h5>
                            </div>
                            <div class="col-sm-6 mt-3 mt-sm-0 text-sm-end text-center">
                                <button class="btn btn-sm btn-outline-secondary" type="button" id="button-addon2"
                                    onclick="history.back();">
                                    <i class="bx bx-arrow-back me-1"></i> Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="row justify-content-center mt-2">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <?php
                            $link = $contactRecord['foto'];
                            $startPos = strpos($link, "id=");

                            if ($startPos !== false) {
                                $startPos += 3; // Move past "id="
                                $url = 'https://drive.google.com/uc?export=view&id=' . substr($link, $startPos);
                            } else {
                                $url = './assets/img/avatars/no-image.png';
                            }
                            ?>
                            <img class="card-img card-img-left" src="<?= $url ?>" alt="Card image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-3">
                                    <?= $contactRecord['nama_lengkap'] ?>
                                </h5>
                                <hr class="mt-0 mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-2">Jenis Kelamin :
                                            <?= $contactRecord['gender'] ?>
                                        </p>
                                        <p class="mb-2">Agama :
                                            <?= $contactRecord['nama_agama'] ?>
                                        </p>
                                        <p class="mb-2">Tanggal Lahir :
                                            <?= date('d F Y', strtotime($contactRecord['tanggal_lahir'])); ?>
                                        </p>
                                        <p class="mb-2">Tempat Lahir :
                                            <?= $contactRecord['tempat_lahir'] ?>
                                        </p>
                                        <p class="mb-2">Alamat :
                                            <?= $contactRecord['alamat'] ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">Asal Kampus :
                                            <?= $contactRecord['asal_kampus'] ?>
                                        </p>
                                        <p class="mb-2">No. HP :
                                            <?= $contactRecord['no_hp'] ?>
                                        </p>
                                        <p class="mb-2">Email :
                                            <?= $contactRecord['email'] ?>
                                        </p>
                                        <p class="mb-2">Social Media (Instagram) :
                                            <a href="https://instagram.com/<?= $contactRecord['sosmed'] ?>" type="button"
                                                class="btn btn-sm btn-outline-danger mt-2" target="_blank">
                                                <?= $contactRecord['sosmed'] ?>
                                                <span class="badge ms-2 d-flex justify-content-center"
                                                    style="padding:0.5px;">
                                                    <i class="bx bxl-instagram"></i>
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-1 mb-0">
                                    <div class="col-md">
                                        <div class="card shadow-md border">
                                            <h5 class="card-title pt-2 mt-1 text-center mb-0 fw-bold">
                                                Quotes
                                            </h5>
                                            <div class="card-body mb-0 mt-0 pt-3 pb-3">
                                                <div class="card-text text-center">
                                                    <p class="fs-5 fw-bold text-muted"><i>"
                                                            <?= $contactRecord['quotes'] ?>"
                                                        </i></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
<?php else: ?>
    <?php require_once './views/accesDenied.php' ?>
<?php endif; ?>