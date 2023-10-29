<?php
if ($_SESSION['dataUser']['role'] !== 'Peserta'):
    // Remove warning message
    error_reporting(E_ALL ^ E_WARNING);

    // make object from class contactModel
    $contactModel = new ContactModel();
    // get data from database
    $contactRecords = $contactModel->findAll();
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
                                <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Data Users</h5>
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
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header">Form Input Users</h5>
                    <hr class="m-0 w-100">
                    <div class="card-body">
                        <form action="./controllers/AuthController.php" method="post">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Input username here" aria-describedby="defaultFormControlHelp" autofocus>
                            <div id="defaultFormControlHelp" class="form-text mb-3">Please notice this username input is
                                unique,
                                so
                                input a new unique username.</div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <label for="username" class="form-label">Role</label>
                            <select name="role" id="role" class="form-control mb-3">
                                <option value="">-- Pilih Role --</option>
                                <option value="Mentor">Mentor</option>
                                <option value="Peserta">Peserta</option>
                            </select>
                            <label for="id_person" class="form-label">Connect to Contact (Optional)</label>
                            <div id="person_help" class="form-text mt-0 p-0">Akun ini terdaftar dalam contact list?
                                Pilih disini.</div>
                            <select name="id_person" id="id_person" class="form-control mb-3"
                                aria-describedby="person_help">
                                <option value="">-- Pilih Contact --</option>
                                <?php foreach ($contactRecords as $key => $value): ?>
                                    <option value="<?= $value['id'] ?>">
                                        <?= $value['nama_lengkap'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
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