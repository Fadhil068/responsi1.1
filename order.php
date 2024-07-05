<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket - Museum Nusantara</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <header>
        <h1>Museum Nusantara</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="koleksi.html">Koleksi</a></li>
                <li><a href="order.html">Pemesanan Tiket</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Pemesanan Tiket</h2>
        <form action="simpan_orderan.php" method="POST">
            <div class="mb-3">
            <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>

    <label for="noTelphone">No Telepon:</label>
    <input type="text" id="noTelphone" name="noTelphone"><br>

    <label for="date">Tanggal:</label>
    <input type="date" id="date" name="date"><br>

    <label for="Tiket">Tiket:</label>
    <input type="text" id="Tiket" name="Tiket"><br>

    <input type="submit" value="Submit">
        </form>
    </main>
</body>
</html>
