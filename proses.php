<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jalur = $_POST['jalur'];
    $pesan = $_POST['pesan'];

    $query = "INSERT INTO pendaftaran (nama, tanggal_pendakian, jalur, pesan) 
              VALUES ('$nama', '$tanggal', '$jalur', '$pesan')";

    if (mysqli_query($conn, $query)) {
        echo "sukses"; // Jawaban ini yang dibaca JavaScript
    } else {
        echo mysqli_error($conn);
    }
}
?>