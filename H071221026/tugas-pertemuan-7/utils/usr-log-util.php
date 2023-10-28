<?php
if ($_GET["log"]=="in") {
    if (!isset($_POST["nim"]) ||
        !isset($_POST["pass"])) {
    } else {
        if (empty($_POST["nim"]) ||
            empty($_POST["pass"])) {
            header("Location: ../pages/usr-log-page.php?error=1");
            exit();
        } else {
            session_start();
            $_SESSION["login"] = $_POST["nim"];
            header("Location: ../pages/usr-home-page.php");
            exit();
        }
    }
} elseif ($_GET["log"]=="out") {
    session_destroy();
    header("Location: ../pages/usr-log-page.php");
    exit();
}
?>