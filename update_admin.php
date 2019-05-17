<?php
ob_start();
include "koneksi.php";
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];

$query=mysqli_query($k,"UPDATE admin SET username='$username', password='$password' WHERE id_admin='$id_admin'");
header('location:tampiladmin.php');
?>