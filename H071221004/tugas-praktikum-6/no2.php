<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Tata letak checkbox secara horizontal */
        .checkbox-group {
            display: flex;
        }

        .checkbox-group input[type="checkbox"],
        .checkbox-group label {
            margin-right: 20px;
        }

        label {
            display: inline-block;
            width: 165px;

        }
    </style>
    <title>Formulir Perkenalan</title>
</head>

<body>
    <h2>Formulir Perkenalan</h2>
    <form method="POST" action="no2.php">
        <!-- Elemen-elemen formulir untuk nama, usia, email, tanggal lahir, jenis kelamin, dan bahasa -->
        <!-- Menetapkan nilai-nilai input dari data yang telah di-submit sebelumnya -->
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>" required><br><br>

        <label for="usia">Usia</label>
        <input type="number" id="usia" name="usia" value="<?php echo isset($_POST['usia']) ? $_POST['usia'] : ''; ?>" required><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required><br><br>

        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : ''; ?>" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" <?php echo (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?> required>
        <label for="laki_laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" <?php echo (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?> required>
        <label for="perempuan">Perempuan</label>
        <br><br>

        <div class="checkbox-group">
            <!-- memeriksa apakah checkbox tersebut dicentang pada saat formulir di-submit
             Jika dicentang, atribut checked akan ditambahkan ke elemen checkbox tersebut
             dan nilai input tidak akan hilang setelah submit. -->
            <label>Bahasa yang dikuasai:</label><br>
            <input type="checkbox" id="java" name="bahasa[]" value="Java" <?php echo (isset($_POST['bahasa']) && in_array('Java', $_POST['bahasa'])) ? 'checked' : ''; ?>>
            <label for="java">Java</label>

            <input type="checkbox" id="python" name="bahasa[]" value="Python" <?php echo (isset($_POST['bahasa']) && in_array('Python', $_POST['bahasa'])) ? 'checked' : ''; ?>>
            <label for="python">Python</label>

            <input type="checkbox" id="html" name="bahasa[]" value="HTML" <?php echo (isset($_POST['bahasa']) && in_array('HTML', $_POST['bahasa'])) ? 'checked' : ''; ?>>
            <label for="html">HTML</label><br>

            <input type="checkbox" id="css" name="bahasa[]" value="CSS" <?php echo (isset($_POST['bahasa']) && in_array('CSS', $_POST['bahasa'])) ? 'checked' : ''; ?>>
            <label for="css">CSS</label>

            <input type="checkbox" id="javascript" name="bahasa[]" value="JavaScript" <?php echo (isset($_POST['bahasa']) && in_array('JavaScript', $_POST['bahasa'])) ? 'checked' : ''; ?>>
            <label for="javascript">JavaScript</label>

            <input type="checkbox" id="php" name="bahasa[]" value="PHP" <?php echo (isset($_POST['bahasa']) && in_array('PHP', $_POST['bahasa'])) ? 'checked' : ''; ?>>
            <label for="php">PHP</label><br>
        </div>

        <!-- Tombol "Submit" digunakan untuk mengirim formulir -->
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pengolahan data formulir setelah di-submit
        // Penanganan nama, usia, email, tanggal lahir, jenis kelamin, dan bahasa
        $nama = $_POST["nama"];
        $usia = $_POST["usia"];
        $email = $_POST["email"];
        $tgl_lahir = $_POST["tgl_lahir"];
         // Mengubah format tanggal menjadi nama bulan
        $tgl_lahir = date("j F Y", strtotime($tgl_lahir));
        $jenis_kelamin = $_POST["jenis_kelamin"];
        // Mengatasi pesan jika semua checkbox dicentang
        $bahasa = isset($_POST["bahasa"]) ? $_POST["bahasa"] : [];
        // Jika checkbox tidak dicentang akan menampilkan pesan 'apapun'
        if (count($bahasa) == 0) {
            echo "<p>Halo! Perkenalkan, nama saya $nama, saya berumur $usia tahun, saya lahir pada tanggal $tgl_lahir, saya berjenis kelamin $jenis_kelamin, dan saya belum menguasai bahasa pemrograman apapun.</p>";
        } else {
            //implode untuk mengambil array dan menggabungkannya menjadi satu string dengan koma sebagai pemisah
            $bahasa_dikuasai = implode(", ", $bahasa);
            echo "<p>Halo! Perkenalkan, nama saya $nama, saya berumur $usia tahun, saya lahir pada tanggal $tgl_lahir, saya berjenis kelamin $jenis_kelamin, dan saya menguasai bahasa pemrograman $bahasa_dikuasai.</p>";
        }
        // Hasil formulir perkenalan kemudian ditampilkan sebagai kalimat di bawah formulir
    }
    ?>

</body>

</html>
