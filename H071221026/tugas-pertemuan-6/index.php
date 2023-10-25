<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Barang</title>
</head>
<body>
<form method="get">
    <label for="jenis">Pilih Jenis Barang:</label>
    <input type="text" name="jenis" id="jenis" placeholder="Masukkan jenis barang">
    <input type="submit" value="Tampilkan Barang">
</form>
</body>
</html>

<?php
$data = [
        [
            "nama_barang" => "HP",
            "harga" => 3000000,
            "stok" => 10,
            "jenis" => "Elektronik"
        ],
        [
            "nama_barang" => "Jeruk",
            "harga" => 5000,
            "stok" => 20,
            "jenis" => "Buah"
        ],
        [
            "nama_barang" => "Kemeja",
            "harga" => 5000,
            "stok" => 9,
            "jenis" => "Pakaian"
        ],
        [
            "nama_barang" => "Apel",
            "harga" => 5000,
            "stok" => 5,
            "jenis" => "Buah"
        ],
        [
            "nama_barang" => "Celana",
            "harga" => 5000,
            "stok" => 10,
            "jenis" => "Pakaian"
        ],
        [
            "nama_barang" => "Laptop",
            "harga" => 50000,
            "stok" => 30,
            "jenis" => "Elektronik"
        ],
        [
            "nama_barang" => "Semangka",
            "harga" => 5000,
            "stok" => 2,
            "jenis" => "Buah"
        ],
        [
            "nama_barang" => "Kaos",
            "harga" => 5000,
            "stok" => 1,
            "jenis" => "Pakaian"
        ],
        [
            "nama_barang" => "VGA",
            "harga" => 2000000,
            "stok" => 0,
            "jenis" => "Elektronik"
        ]
];

$filtered_data = [];

if (isset($_GET['jenis'])) {
    $jenis_barang = $_GET['jenis'];
    
    $filtered_data = array_filter($data, function ($item) use ($jenis_barang) {
        return $item['jenis'] == $jenis_barang;
    });
}

if ($filtered_data !== null) {
    echo "<h2>Hasil Pencarian:</h2>";
    echo "<table border=1>
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>";
    foreach ($filtered_data as $item) {
        echo "<tr>
                <td>{$item['nama_barang']}</td>
                <td>{$item['harga']}</td>
                <td>{$item['stok']}</td>
            </tr>";
    }
    echo "</table>";
}
?>


