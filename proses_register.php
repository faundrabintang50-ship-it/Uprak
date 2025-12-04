<?php
include 'config.php'; // koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password agar aman
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query insert ke tabel users
    $sql = "INSERT INTO users (username, email, password, role, created_at) 
            VALUES ('$username', '$email', '$hashedPassword', 'siswa', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil! <a href='login.html'>Login di sini</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>