<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No.2</title>
</head>
<body>
    <h1>Form</h1>
    <form method="post" action="">
        <label for="nama">Nama Lengkap :</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
        <br>
        <label for="usia">Usia </label>
        <input type="number" id="usia" name="usia" placeholder="Masukkan Usia" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
        <br>
        <label for="tl">Tanggal Lahir :</label>
        <input type="date" id="tl" name="tl" required>
        <br>
        <label for="gender">Jenis Kelamin :</label>
        <label for="male">Laki-Laki</label>
        <input type="radio" id="male" name="gender" value="Laki-laki" required>
        <label for="female">Perempuan</label>
        <input type="radio" id="female" name="gender" value="Perempuan" required>
        <br>
        <label for="bahasa">Bahasa Yang Dikuasai :</label>
        <input type="checkbox" id="bahasa" name="bahasa[]" value="Java">Java
        <input type="checkbox" id="bahasa" name="bahasa[]" value="Python">Python
        <input type="checkbox" id="bahasa" name="bahasa[]" value="HTML">HTML
        <input type="checkbox" id="bahasa" name="bahasa[]" value="CSS">CSS
        <input type="checkbox" id="bahasa" name="bahasa[]" value="JavaScript">JavaScript
        <input type="checkbox" id="bahasa" name="bahasa[]" value="PHP">PHP
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
        
<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];
    $tl = $_POST['tl'];
    $tanggal = date('d', strtotime($tl));
    $bulan = date('F', strtotime($tl));
    $tahun = date('Y', strtotime($tl));
    $gender = $_POST['gender'];
    $bahasa = isset($_POST['bahasa']) ? $_POST['bahasa'] : array();
    $bahasa_string = implode(', ', $bahasa);
    
    if (empty($bahasa)){
        $output = "Halo! Perkenalkan nama saya $nama, saya berumur $usia tahun, saya lahir pada tanggal $tanggal $bulan tahun $tahun, saya berjenis kelamin $gender, dan saat ini saya belum menguasai bahasa pemrograman apapun.";
    } else {
        $output = "Halo! Perkenalkan nama saya $nama, saya berumur $usia tahun, saya lahir pada tanggal $tanggal $bulan tahun $tahun, saya berjenis kelamin $gender, dan saat ini saya berhasil menguasai bahasa pemrograman $bahasa_string.";
    }
    echo "<p>$output</p>";
}
?>