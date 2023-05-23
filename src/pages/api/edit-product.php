<?php

include 'index.php';

//mengambil id data yang akan dihapus

if (isset($_POST['submit'])) {

  $id = $_GET['id'];
  $nama_produk = $_POST['nama_produk'];
  $info_produk = $_POST['info_produk'];
  $harga_produk = $_POST['harga_produk'];
  $stok_produk = $_POST['stok_produk'];

  //query delete data
  $query = "UPDATE produk SET nama_produk = '$nama_produk', info_produk = '$info_produk', harga_produk = '$harga_produk', stok_produk = '$stok_produk' WHERE id='$id'";
  $update = mysqli_query($conn, $query);

  if ($update) {
    header('location: ../admin/read/product.php');
  }
}
