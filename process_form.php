<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Veritabanı bağlantısı oluştur
    require_once('db_config.php');

    // SQL sorgusu
    $sql = "INSERT INTO contact (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Veri başarıyla eklendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<form action="" method="post" class="contact-form">
    <div class="form-control">
        <label for="name">İsim</label>
        <input type="text" id="name" name="name" placeholder="Adınızı girin">
    </div>
    <div class="form-control">
        <label for="email">E-posta</label>
        <input type="email" id="email" name="email" placeholder="E-posta adresinizi girin">
    </div>
    <div class="form-control">
        <label for="phone">Telefon</label>
        <input type="text" id="phone" name="phone" placeholder="Telefon numaranızı girin">
    </div>
    <button type="submit" class="btn btn-primary">Gönder</button>
</form>

</body>
</html>


