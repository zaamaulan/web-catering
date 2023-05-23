<?php

include 'index.php';

//mengambil id data yang akan dihapus
$id = $_GET['id'];

//query delete data
$query = "DELETE FROM users WHERE id=$id";
$hapus = mysqli_query($conn, $query);

if($hapus) {
  header('location: ../admin/read/account.php');
} else {
  header('location: ../admin/read/account.php');
}
