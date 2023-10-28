<?php
include "connection.php";

function getName($role, $data) {
    global $conn;
    $nama = "";
    if ($role == "admin") {
        $res = $conn->query("SELECT nama FROM admin WHERE email = '$data'");
    } elseif ($role == "user") {
        $res = $conn->query("SELECT nama FROM mahasiswa WHERE nim = '$data'");
    }
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            foreach ($row as $i) {
                $nama = $i;
            }
        }
    }
    return $nama;
}

function getAllStd() {
    global $conn;
    $li = [];
    $res = $conn->query("SELECT nim, nama, prodi FROM mahasiswa");
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $count = 0;
            $lis = [];
            foreach ($row as $i) {
                if ($count < 3) {
                    $lis[] = $i;
                    $count += 1;
                } else {
                    $count = 0;
                    $lis = array_diff($lis, $lis);
                }
            }
            $li[] = $lis;
        }
    }
    return $li;
}

function getStdDetail($data) {
    global $conn;
    $li = [];
    $res = $conn->query("SELECT nim, nama, prodi FROM mahasiswa WHERE nim = '$data'");
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            foreach ($row as $i) {
                $li[] = $i;
            }
        }
    }
    return $li;
}

function updateStd($data, $nim, $nama, $prodi) {
    global $conn;
    $conn->query("UPDATE `mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi'  WHERE nim = '$data';");
}

function insertStd($nim, $nama, $pass, $prodi) {
    global $conn;
    $conn->query("INSERT INTO `mahasiswa`(`nim`, `nama`, `password`, `prodi`) VALUES ('$nim','$nama','$pass','$prodi')");
}

function deleteStd($nim) {
    global $conn;
    $conn->query("DELETE FROM `mahasiswa` WHERE `nim` = '$nim'");
}
