<?php

//array yang berisi data barang
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

//inisialisasi variabel yang memiliki nilai default untuk menyimpan jenis barang yang akan difilter
$jenis_barang = ''; 
//inisialisasi variabel untuk menyimpan hasil filter
$filtered_data = []; 

// mengembalikan metode permintaan HTTP yang digunakan untuk mengakses halaman 
// saat ini menggunakan methode post dalam protocol html
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan jenis barang dari input form
    //memeriksa apakah variabel sudah diatur atau tidak
    //menggunakan operator ternary untuk mengembalikan nilai berdasarkan kondiri
    $jenis_barang = isset($_POST['jenis_barang']) ? $_POST['jenis_barang'] : '';

    // Jika jenis_barang tidak kosong, data akan difilter berdasarkan jenis barang yang dipilih
    if (!empty($jenis_barang)) {
        $filtered_data = array_filter($data, function ($item) use ($jenis_barang) {
            return strtolower($item["jenis"]) == strtolower($jenis_barang);
        });
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan data</title>
</head>

<body>
    <form method="POST" action="no1.php">
        <!-- inputan untuk memasukkan jenis barang yang akan difilter kemudian di set ke $jenis_barang -->
        <input type="text" id="jenis_barang" name="jenis_barang" placeholder="Masukkan tipe" value="<?php echo htmlspecialchars($jenis_barang); ?>">
        <button type="submit">Submit</button>
        <!-- tabel dengan 3 kolom untuk menampilkan data hasil filter -->
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && count($filtered_data) > 0) : ?>
        <!-- Jika ada data hasil filter, akan ditampilkan tabel dengan data tersebut -->
        <!-- Loop melalui $filtered_data dan ditampilkan masing-masing barang sebagai baris tabel -->
            <?php foreach ($filtered_data as $barang) : ?>
                <tr>
                    <td><?php echo $barang["nama_barang"]; ?></td>
                    <td><?php echo $barang["stok"]; ?></td>
                    <td><?php echo $barang["harga"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST" && empty($filtered_data)) : ?>
         <!-- Jika tidak ada data hasil filter, tampilkan pesan bahwa tidak ada barang dengan jenis tersebut -->
        <p>Tidak ada barang dengan jenis <?php echo htmlspecialchars($jenis_barang); ?></p>
    <?php endif; ?>
</body>

</html>

