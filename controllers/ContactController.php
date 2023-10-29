<?php
// Include config file
require_once "../config/Connection.php";
// Include model
require_once "../models/ContactModel.php";


// Define variables and initialize with post values
$nama_lengkap = $_POST['nama_lengkap'];
$gender = $_POST['gender'];
$id_agama = $_POST['id_agama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$sosmed = $_POST['sosmed'];
$foto = $_POST['foto'];
$asal_kampus = $_POST['asal_kampus'];
$quotes = $_POST['quotes'];
$button = $_POST['process'];

// Store data to array
$data = [
    $nama_lengkap,
    $gender,
    $id_agama,
    $tanggal_lahir,
    $tempat_lahir,
    $alamat,
    $no_hp,
    $email,
    $sosmed,
    $foto,
    $asal_kampus,
    $quotes
];

// Create new instance of AgamaModel
$contactModel = new ContactModel();

// Check $button condition
switch ($button) {
    case 'insert':
        // Insert data
        $contactModel->insert($data);
        // Redirect to index.php?hal=personList
        header("location:../index.php?hal=personList");
        break;
    case 'delete':
        // Get id from hidden input
        $id = $_POST['id'];
        // Delete data
        $contactModel->delete($id);
        // Redirect to index.php?hal=personList
        header("location:../index.php?hal=personList");
        break;
    case 'update':
        // Get id from hidden input
        $id = $_POST['id'];
        // Add id to array
        array_push($data, $id);
        // Update data
        $contactModel->update($data);
        // Redirect to index.php?hal=personList
        header("location:../index.php?hal=personList");
        break;
    case 'search':
        // Get keyword from input
        $keyword = $_POST['keyword'];
        // Redirect to index.php?hal=personList with keyword
        header("location:../index.php?hal=personList&keyword=$keyword");
        break;
    default:
        // Redirect to index.php?hal=agamaList
        header("location:../index.php?hal=agamaList");
        break;
}
?>