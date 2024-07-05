<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? $_POST['nama'] : 'Tidak ada nama';
    $email = isset($_POST['email']) ? $_POST['email'] : 'Tidak ada email';
    $noTelphone = isset($_POST['noTelphone']) ? $_POST['noTelphone'] : 'Tidak ada nomor telepon';
    $date = isset($_POST['date']) ? $_POST['date'] : 'Tidak ada tanggal';
    $tiket = isset($_POST['Tiket']) ? $_POST['Tiket'] : 'Tidak ada tiket';

    echo "<h1>Data Pemesan Diterima</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>No Telphone: $noTelphone</p>";
    echo "<p>Tanggal: $date</p>";
    echo "<p>Tiket: $tiket</p>";

    $order = "Nama: $nama\nEmail: $email\nNo Telephone: $noTelphone\nTanggal: $date\nTiket: $tiket\n\n";
    file_put_contents('order.txt', $order, FILE_APPEND | LOCK_EX);

    echo "Pesanan Sukses Disimpan!";
}
?>
