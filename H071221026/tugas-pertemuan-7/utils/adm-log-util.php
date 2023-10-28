<?php
if ($_GET["log"]=="in") {
    if (!isset($_POST["email"]) ||
    !isset($_POST["pass"])) {
    } else {
        if (empty($_POST["email"]) ||
            empty($_POST["pass"])) {
            header("Location: ..\pages\adm-log-page.php?error=1");
            exit();
        } else {
            session_start();
            $_SESSION["login"] = $_POST["email"];
            header("Location: ..\pages\adm-home-page.php");
            exit();
        }
    }
} elseif ($_GET["log"]=="out") {
    session_destroy();
    header("Location: ../pages/adm-log-page.php");
    exit();
}

