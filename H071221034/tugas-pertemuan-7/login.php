<?php
include("./controllers/Login_controller.php");

if (isset($_POST['submit'])) {
    $login = new Login_controller($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #F5DEB3">
    <h1 class="text-center my-4">Login Page</h1>

    <div class="container col-lg-4">
    <?php
        if (isset($_GET['message'])) {
            echo "<div class='text-bg-danger p-3' role='alert'>$_GET[message]</div>";
        }
    ?>

    <form method="POST">
        <div class="my-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
        </div>
        <button type="submit" class="mt-3 btn btn-primary w-100" name="submit">Login</button>
    </form>

    <p class="mt-3">Belum memiliki akun? <a href="./register.php" class="link-opacity-50-hover">Register!</a></p>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>