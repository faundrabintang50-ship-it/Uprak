<?php
$host = 'localhost';       // atau 127.0.0.1
$user = 'root';            // sesuaikan dengan user MariaDB kamu
$pass = '';                // kosong kalau belum di-set password
$db   = 'uprak';           // nama database yang kamu pakai

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
