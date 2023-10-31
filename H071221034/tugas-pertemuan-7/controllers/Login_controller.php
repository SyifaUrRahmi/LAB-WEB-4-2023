<?php
include("./config/Connection.php");

class Login_controller extends Connection{
    public function __construct($data){
        parent::__construct();

        $username = $data['username'];
        $password = $data['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($this->connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['prodi'] = $data['prodi'];
                $_SESSION['status'] = 'login';

                if ($data['role'] == 'admin') {
                    header("Location: dashboard/login_admin.php?message=SELAMAT DATANG ADMIN!");
                } else {
                    header("Location: dashboard/login_user.php?message=SELAMAT DATANG!!");
                }
            }
            return;
        } else {
            header("Location: ?message=PASSWORD SALAH!");
            return;
        }
    }
}
?>