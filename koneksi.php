<?php
// Pengaturan Database
$host = "localhost";    // Nama host (biasanya localhost di XAMPP)
$user = "root";         // Username default XAMPP adalah root
$pass = "";             // Password default XAMPP kosong
$db   = "db_merbabu";   // Nama database yang kamu buat di phpMyAdmin

// Membuat Koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek Koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Jika berhasil, variabel $conn akan digunakan di file proses.php
?>