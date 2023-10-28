<?php
if (isset($_GET["error"]) && $_GET["error"] == 1) {
    echo '<script>alert("Isi seluruh input sebelum melanjutkan!");</script>';
} elseif (isset($_GET["error"]) && $_GET["error"] == 2) {
    echo '<script>alert("Login terlebih dahulu!");</script>';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid p-0">
    <div class="container-sm">
        <div class="card mb-3 mx-auto" style="max-width: 540px; margin-top: 50px; height: 400px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..\resources\images\potrait.jpeg" class="img-fluid rounded-start" style="height: 400px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card" style="height: 400px">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="usr-log-page.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="true" href="usr-reg-page.php">Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <form action="..\utils\usr-log-util.php?log=in" method="post">
                                    <label for="nim" class="nim">NIM</label>
                                    <input type="text" name="nim" class="form-control" id="log-nim" placeholder="NIM">

                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" name="pass" class="form-control" id="log-pass" placeholder="Password">

                                    <button type="submit" class="btn btn-primary mt-4">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="text-align: center">
    <a class="admin-link" href="adm-log-page.php" style="font-size: small">
        Login as admin
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>