<?php

function konversi_tanggal($tanggal)
{
    $bulan = [
        1 => 'januari',
        2 => 'februari',
        3 => 'maret',
        4 => 'april',
        5 => 'mei',
        6 => 'juni',
        7 => 'juli',
        8 => 'agustus',
        9 => 'september',
        10 => 'oktober',
        11 => 'november',
        12 => 'desember'
    ];
    $split_tanggal = explode('-', $tanggal);

    return $split_tanggal[2] . ' ' . $bulan[(int)$split_tanggal[1]] . ' tahun ' . $split_tanggal[0];
}
