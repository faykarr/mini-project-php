<?php
// Remove warning message
error_reporting(E_ALL ^ E_WARNING);
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
                            <h5 class="card-title text-primary p-0 mb-0 text-center text-sm-start">Data Jenis Agama</h5>
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
    <div class="row justify-content-center mt-5">
        <div class="col-sm-6">
            <div class="card">
                <h5 class="card-header">Form Input Agama</h5>
                <hr class="m-0 w-100">
                <div class="card-body">
                    <form action="./controllers/AgamaController.php" method="post">
                        <label for="nama_agama" class="form-label">Nama Agama</label>
                        <input type="text" class="form-control" id="nama_agama" name="nama_agama"
                            placeholder="Input agama name here" aria-describedby="defaultFormControlHelp" autofocus>
                        <div id="defaultFormControlHelp" class="form-text">Please notice this agama input is unique, so
                            input a new unique agama name.</div>
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