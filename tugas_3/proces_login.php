<?php
// Periksa apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai username dan password dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Contoh validasi sederhana (ganti dengan validasi yang lebih kuat)
    if ($username === "admin" && $password === "password") {
        // Jika kredensial valid, redirect ke halaman admin.php
        header("Location: admin.php");
        exit();
    } else {
        // Jika kredensial tidak valid, tampilkan pesan error atau redirect kembali ke halaman login
        echo "Username atau password salah. Silakan coba lagi.";
    }
} else {
    // Jika form tidak disubmit secara langsung, redirect kembali ke halaman login
    header("Location: login.php");
    exit();
}
?>