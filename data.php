<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akademik";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel
$query = "SELECT align_content, kickstart_content FROM action";
$result = mysqli_query($conn, $query);

// Memeriksa hasil query
if (mysqli_num_rows($result) > 0) {
    // Mengambil baris hasil query
    $row = mysqli_fetch_assoc($result);

    // Menyimpan konten dinamis ke dalam variabel
    $alignContent = $row['align_content'];
    $kickstartContent = $row['kickstart_content'];
} else {
    $alignContent = "Konten Align tidak ditemukan.";
    $kickstartContent = "Konten Kickstart tidak ditemukan.";
}

// Membebaskan hasil query
mysqli_free_result($result);

// Menutup koneksi
mysqli_close($conn);
?>