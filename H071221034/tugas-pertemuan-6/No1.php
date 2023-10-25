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

$input_jenis = "";

if (isset($_POST["jenis_barang"])) {
    $input_jenis = $_POST["jenis_barang"];
}

echo '<form method="post" action="">
        <input type="text" id="jenis_barang" name="jenis_barang" value="' . $input_jenis . '" placeholder="Masukkan Tipe">
        <input type="submit" value="Submit">
    </form>';

echo '<table border="1">
                <tr>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga</th>
                </tr>';

foreach ($data as $barang) {
    if (strtoLower($barang["jenis"]) === strtoLower($input_jenis)) {
        echo '<tr>
                <td>' . $barang["nama_barang"] . '</td>
                <td>' . $barang["stok"] . '</td>
                <td>Rp ' . number_format($barang["harga"]) . '</td>
              </tr>';
    }
}
echo '</table>';
?>