<?php

include '../db/controllers.php';

if (!isset($_POST["nim"]) ||
    !isset($_POST["nama"]) ||
    !isset($_POST["pass"]) ||
    !isset($_POST["prodi"])) {

} else {
    if (empty($_POST["nim"]) ||
        empty($_POST["nama"]) ||
        empty($_POST["pass"]) ||
        empty($_POST["prodi"])) {
        header("Location: ../pages/usr-reg-page.php?error=1");
        exit();
    } else {
        insertStd($_POST['nim'], $_POST['nama'], $_POST['pass'], $_POST['prodi']);
        session_start();
        $_SESSION["login"] = $_POST["nim"];
        header("Location: ../pages/usr-home-page.php");
        exit();
    }
}
