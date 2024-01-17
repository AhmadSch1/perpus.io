<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    // Gantilah email_penerima dengan alamat email Anda
    $email_penerima = "ahmadbayupangesru@gmail.com";
    $subjek = "Pesan dari Formulir Kontak";

    $pesan_email = "Nama: $nama\n";
    $pesan_email .= "Email: $email\n\n";
    $pesan_email .= "Pesan:\n$pesan";

    // Mengirim email
    mail($email_penerima, $subjek, $pesan_email);

    // Redirect pengguna setelah pengiriman formulir (opsional)
    header("Location: terimakasih.html");
    exit();
}
?>
