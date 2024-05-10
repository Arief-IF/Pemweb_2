<?php
require '../dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM dokter WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}