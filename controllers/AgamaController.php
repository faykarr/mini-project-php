<?php
// Include config file
require_once "../config/Connection.php";
// Include model
require_once "../models/AgamaModel.php";


// Define variables and initialize with post values
$nama_agama = $_POST['nama_agama'];
$button = $_POST['process'];

// Store data to array
$data = [
    $nama_agama
];

// Create new instance of AgamaModel
$agamaModel = new AgamaModel();

// Check $button condition
switch ($button) {
    case 'insert':
        // Insert data
        $agamaModel->insert($data);
        // Redirect to index.php?hal=agamaList
        header("location:../index.php?hal=agamaList");
        break;
    case 'delete':
        // Get id from hidden input
        $id = $_POST['id'];
        // Delete data
        $agamaModel->delete($id);
        // Redirect to index.php?hal=agamaList
        header("location:../index.php?hal=agamaList");
        break;
    case 'update':
        // Get id from hidden input
        $id = $_POST['id'];
        // Add id to array
        array_push($data, $id);
        // Update data
        $agamaModel->update($data);
        // Redirect to index.php?hal=agamaList
        header("location:../index.php?hal=agamaList");
        break;
    case 'search':
        // Get keyword from input
        $keyword = $_POST['keyword'];
        // Redirect to index.php?hal=agamaList
        header("location:../index.php?hal=agamaList&keyword=$keyword");
        break;
    default:
        // Redirect to index.php?hal=agamaList
        header("location:../index.php?hal=agamaList");
        break;
}
?>