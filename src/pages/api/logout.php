<?php
include 'index.php';

session_start();
$_SESSION['login'] = false;
session_destroy();
header('location: ../index.php');
