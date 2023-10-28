<?php

include '..\db\controllers.php';

session_start();

if (!isset($_SESSION["login"]) && !isset($_SESSION["edit"])) {
    header("Location: \Tpraktikum7\TP7\pages\adm-log-page.php?error=2");
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="min-width: 315px">

<div class="container-fluid p-0">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" style="justify-content: space-between">
            <a class="navbar-brand" href="#" style="font-size: medium">
                <?php
                echo getName("admin", $_SESSION['login']);
                ?>
            </a>
        </div>
    </nav>
    <div class="container-sm" style="padding: 5% 13%">
        <form method="post">
            <table class="table table-primary">
                <tbody class='align-middle'>
                    <tr>
                        <td>
                            NIM
                        </td>
                        <td>
                            <input name="nim" class="form-control" type="text" value="<?=getStdDetail($_SESSION['edit'])[0];?>">
                        </td>
                    </tr>
                    <tr class='align-middle'>
                        <td>
                            Nama
                        </td>
                        <td>
                            <input name="nama" class="form-control" type="text" value="<?=getStdDetail($_SESSION['edit'])[1];?>">
                        </td>
                    </tr>
                    <tr class='align-middle'>
                        <td>
                            Prodi
                        </td>
                        <td>
                            <input name="prodi" class="form-control" type="text" value="<?=getStdDetail($_SESSION['edit'])[2];?>">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="container-fluid text-center">
                    <button type="submit" formaction="..\utils\adm-edt-util.php?edit=cancel" class="btn btn-secondary">Cancel</button>
                    <button type="submit" formaction="..\utils\adm-edt-util.php?edit=true" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>