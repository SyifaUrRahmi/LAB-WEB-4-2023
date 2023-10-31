<?php
include("./config/Connection.php");

class Register_controller extends Connection{
    public function __construct($data){
        parent::__construct();

        $nama = $data['name'];
        $nim = $data['nim'];
        $prodi = $data['prodi'];
        $password = $data['password'];
        $confirmPassword = $data['confirmPassword'];

        $query = "SELECT * FROM users WHERE username = '$nim'";

        $result = mysqli_query($this->connect, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('NIM sudah terdaftar!')</script>";
            return;
        }

        if ($password == $confirmPassword) {
            $query = "INSERT INTO users VALUES ('', '$nim', '$nama', '$prodi', 'mahasiswa', '$password')";
            $result = mysqli_query($this->connect, $query);

            header("Location: login.php?message=BERHASIL REGISTER!");
            return $result;
        } else {
            echo "<script>alert('KONFIRMASI PASSWORD TIDAK SESUAI!')</script>";
            return;
        }
    }
}
?>