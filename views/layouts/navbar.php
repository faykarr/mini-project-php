<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <b>
                    <?= preg_replace('/([a-z])([A-Z])/', '$1 $2', empty($hal) ? 'Dashboard' : ucwords($hal)); ?>
                </b>
            </div>
        </div>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
                <a class="github-button" href="https://github.com/faykarr/mini-project-php" data-icon="octicon-star"
                    data-size="large" data-show-count="true"
                    aria-label="Star faykarr/mini-project-php on GitHub">Star</a>
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <?php
                        if ($_SESSION['dataUser']['foto'] !== null) {
                            $link = $_SESSION['dataUser']['foto'];
                            $startPos = strpos($link, "id=");
                        }

                        if ($startPos !== false && $_SESSION['dataUser']['foto'] !== null) {
                            $startPos += 3; // Move past "id="
                            $url = 'https://drive.google.com/uc?export=view&id=' . substr($link, $startPos);
                        } else {
                            $url = './assets/img/avatars/1.png';
                        }
                        ?>
                        <img src="<?= $url ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="<?= $url ?>" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-medium d-block">
                                        <?php if ($_SESSION['dataUser']['nama_lengkap'] == null) {
                                            echo $_SESSION['dataUser']['username'];
                                        } else {
                                            echo $_SESSION['dataUser']['nama_lengkap'];
                                        } ?>
                                    </span>
                                    <small class="text-muted">
                                        <?= $_SESSION['dataUser']['role'] ?>
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
            </li>
            <li>
                <a class="dropdown-item" href="./views/logout.php">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Log Out</span>
                </a>
            </li>
        </ul>
        </li>
        <!--/ User -->
        </ul>
    </div>
</nav>

<!-- / Navbar -->