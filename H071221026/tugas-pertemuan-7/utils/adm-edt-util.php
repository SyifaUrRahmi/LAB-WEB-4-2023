<?php

session_start();
include '..\db\controllers.php';


if ($_GET['edit'] == "false") {
    if (isset($_POST["nim"])) {
        if (!empty($_POST["nim"])) {
            $_SESSION["edit"] = $_POST["nim"];
            header("Location: ..\pages\adm-edt-page.php");
            exit();
        }
    }
} elseif ($_GET['edit'] == "true") {
    if (isset($_POST["nim"]) && isset($_POST["nama"]) && isset($_POST["prodi"])) {
        if (!empty($_POST["nim"]) && !empty($_POST["nama"]) && !empty($_POST["prodi"])) {
            updateStd($_SESSION['edit'], $_POST['nim'], $_POST['nama'], $_POST['prodi']);
            header("Location: ..\pages\adm-home-page.php");
            exit();
        }
        
    }
} elseif ($_GET['edit'] == "delete") {
    if (isset($_POST["nim"])) {
        if (!empty($_POST["nim"])) {
            deleteStd($_POST["nim"]);
            header("Location: ..\pages\adm-home-page.php");
            exit();
        }
    }
} elseif ($_GET['edit'] == "cancel") {
    header("Location: ..\pages\adm-home-page.php");
}
