<?php

include '..\db\controllers.php';

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: \Tpraktikum7\TP7\pages\adm-log-page.php?error=2");
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="min-width: 315px">

<div class="container-fluid p-0">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid" style="justify-content: space-between">
            <span>
            <a class="navbar-brand" href="#" style="font-size: medium">
                <?php
                echo getName("admin", $_SESSION['login']);
                ?>
            </a>
            </span>
            <form action="../utils/adm-log-util.php?log=out" method="post">
                <button type="submit" class="btn btn-outline-light">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container-sm" style="padding-top: 5%">
        <table class="table table-primary">
            <thead style="text-align: center">
                <tr class="table-dark">
                    <td>No</td>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Prodi</td>
                    <td>Options</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for ($i = 0; $i < count(getAllStd()); $i++) {
                        echo "<tr class='align-middle'>";
                        echo "<td style='width: 5%; text-align: center'>";
                        echo $i+1;
                        echo "</td>";
                        echo "<td style='width: 15%; text-align: center'>";
                        echo getAllStd()[$i][0];
                        echo "</td>";
                        echo "<td style='width: 40%';>";
                        echo getAllStd()[$i][1];
                        echo "</td>";
                        echo "<td style='width: 40%';>";
                        echo getAllStd()[$i][2];
                        echo "</td>";
                        echo "<td>";
                        echo '<form method="post" style=";display: flex; justify-content: space-evenly">';
                        echo "<input type='hidden' name='nim' value=";
                        echo getAllStd()[$i][0];
                        echo ">";
                        echo '<button type="submit" formaction="..\utils\adm-edt-util.php?edit=false" class="btn btn-warning">Edit</button>';
                        echo '<button type="submit" formaction="..\utils\adm-edt-util.php?edit=delete" class="btn btn-danger">Delete</button>';
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>