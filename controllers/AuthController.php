<?php
// Include config file
require_once '../config/Connection.php';
// Include model
require_once '../models/UserModel.php';

// Define variables and initialize with post values
$username = $_POST['username'];
$password = $_POST['password'];
$button = $_POST['process'];

// create new instance of UserModel
$userModel = new UserModel();

// Check button action
switch ($button) {
    case 'delete':
        $id = $_POST['id_user'];
        $userModel->delete($id);
        // redirect to index.php?hal=usersList
        header('location:../index.php?hal=usersList');
        break;
    case 'insert':
        $role = $_POST['role'];
        $id_person = $_POST['id_person'];
        $userModel->insert($username, $password, $role, $id_person);
        // redirect to index.php?hal=usersList
        header('location:../index.php?hal=usersList');
        break;
    case 'update':
        $id = $_POST['id_users'];
        $role = $_POST['role'];
        $id_person = $_POST['id_person'];
        $userModel->update($id, $username, $role, $id_person);
        // redirect to index.php?hal=usersList
        header('location:../index.php?hal=usersList');
        break;
    default:
        // Authenticate user
        $result = $userModel->authenticate($username, $password);
        if (!empty($result)) {
            session_start();
            // Set session variables
            $_SESSION['dataUser'] = $result;
            // Redirect to index.php
            header("location:../index.php?hal=dashboard");
        } else {
            // Redirect to login.php
            echo '<script>alert("Username/Password Anda Salah!!!");history.go(-1);</script>';
        }
        break;
}
?>