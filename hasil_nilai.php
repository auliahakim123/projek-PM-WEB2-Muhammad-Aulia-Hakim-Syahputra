<?php

$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$Nilai_uas = $_GET['Nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

//buat total nilai
//nilai_uts+nilai_uas+nilai_tugas/3
$total_nilai = ($Nilai_uas + $Nilai_uas + $nilai_tugas) / 3;


//buat perhitungan IF untuk mencari  grade

if ($total_nilai >= 85) {
    $GRADE = "A";
} elseif ($total_nilai >= 70) {
    $GRADE = "B";
} elseif ($total_nilai >= 56) {
    $GRADE = "C";
} elseif ($total_nilai >= 30) {
    $GRADE = "D";
} else {
    $GRADE = "E";
}

//buat perhitungan switch case

switch ($GRADE) {
    case "A":
        $predikat = "sangat memuaskan";
        break;
    case "B":
        $predikat = "memuaskan";
        break;
    case "C":
        $predikat = "cukup";
        break;


}


//buat perhitungan If untuk mencari stsatus lulus/gagal

// cetak hasis
echo 'Nama:' . $nama . '<br>';
echo 'Matkul' . $matkul . '<br>';
echo 'Nilai UTS' . $nilai_uts . '<br>';
echo 'Nilai UAS' . $Nilai_uas . '<br>';
echo 'Nilai Tugas' . $nilai_tugas . '<br>';
echo 'total_nilai' . $total_nilai . '<br>';
echo 'GRADE' . $GRADE . '<br>';
echo 'predikat' . $predikat . '<br>';
?>