<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
</head>

<body>
    <form method="POST" action="index.php">
        <input type="text" placeholder="Masukkan tipe..." name="tipe" required>
        <button type="submit">Submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST["tipe"])) {
        echo "<h2>Daftar Barang $_POST[tipe] </h2>";
        echo "<a href=\"index.php\">Back</a>";
        echo "<br>";
        echo "<br>";
    }
    ?>

    <table border="2">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("./data.php");

            if (isset($_POST["tipe"])) {
                $tipe = strtolower($_POST["tipe"]);
                $data = array_filter($data, function ($item) use ($tipe) {
                    return strtolower($item["jenis"]) == $tipe;
                });

                foreach ($data as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value["nama_barang"] . "</td>";
                    echo "<td>" . $value["stok"] . "</td>";
                    echo "<td>" . $value["harga"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>