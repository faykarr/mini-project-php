<?php
if ($_SESSION['dataUser']['role'] !== 'Peserta'):
    // Remove warning message
    error_reporting(E_ALL ^ E_WARNING);

    // make object from class agamaModel
    $agamaModel = new AgamaModel();
    // get all records from agamaModel
    $agamaRecords = $agamaModel->findAll();
    ?>


    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Header -->
        <div class="row justify-content-center">
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center row justify-content-around">
                            <div class="col-sm-6 ">
                                <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Data Person</h5>
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
        <div class="row justify-content-center ">
            <div class="col-md-10">
                <div class="card">
                    <h5 class="card-header">Form Input Person</h5>
                    <hr class="m-0 w-100">
                    <div class="card-body">
                        <form action="./controllers/ContactController.php" method="post">
                            <div class="row justify-content-between">
                                <div class="col-md-5">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control mb-2" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Input your full name here" autofocus>
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control mb-2">
                                        <option value=""> Pilih Jenis Kelamin </option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <label for="id_agama" class="form-label">Agama</label>
                                    <select name="id_agama" id="id_agama" class="form-control mb-2">
                                        <option value=""> Pilih Agama </option>
                                        <?php foreach ($agamaRecords as $key => $value): ?>
                                            <option value="<?= $value['id'] ?>">
                                                <?= $value['nama_agama'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="ttl" class="form-label">Tanggal/Tempat Lahir</label>
                                    <div class="input-group" id="ttl">
                                        <input type="date" name="tanggal_lahir" aria-label="Tanggal Lahir"
                                            class="form-control">
                                        <input type="text" name="tempat_lahir" aria-label="Tempat Lahir"
                                            class="form-control" placeholder="Input your city here">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="asal_kampus" class="form-label">Asal Kampus</label>
                                    <input type="text" class="form-control mb-2" id="asal_kampus" name="asal_kampus"
                                        placeholder="Input your university here">
                                    <label for="sosmed" class="form-label">Social Media (Instagram)</label>
                                    <input type="text" class="form-control mb-2" id="sosmed" name="sosmed"
                                        placeholder="Input your social media here">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control mb-2" id="email" name="email"
                                        placeholder="Input your email here">
                                    <label for="no_hp" class="form-label">No HP</label>
                                    <input type="text" class="form-control mb-2" id="no_hp" name="no_hp"
                                        placeholder="Input your phone number here">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="w-100">
                                    <label for="foto" class="form-label">Link Profile Picture</label>
                                    <textarea class="form-control mb-2" id="foto" name="foto" rows="2"
                                        placeholder="Input your photo profile link here" style="resize:none;"></textarea>
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control mb-2" id="alamat" name="alamat" rows="3"
                                        placeholder="Input your address here" style="resize:none;"></textarea>
                                    <label for="quotes" class="form-label">Quotes</label>
                                    <textarea class="form-control mb-2" id="quotes" name="quotes" rows="3"
                                        placeholder="Add your quotes here" style="resize:none;"></textarea>
                                </div>
                            </div>
                            <div class="btn-group mt-3">
                                <button class="btn btn-outline-primary" type="submit" name="process" value="insert">
                                    <i class='bx bx-add-to-queue me-1'></i> Simpan
                                </button>
                                <button class="btn btn-outline-warning" type="reset">
                                    <i class='bx bx-message-square-x me-1'></i> Clear
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
<?php else: ?>
    <?php require_once './views/accesDenied.php' ?>
<?php endif; ?>