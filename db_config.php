<?php
$servername = ""; // Veritabanı sunucusu
$username = ""; // Veritabanı kullanıcı adı
$password = ""; // Veritabanı şifresi
$dbname = "contactform"; // Veritabanı adı

// Veritabanı bağlantısı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantının başarılı olup olmadığını kontrol et
if ($conn->connect_error) {
    die("Baglanti hatasi: " . $conn->connect_error);
}
?>