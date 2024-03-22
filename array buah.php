<?php
// array disebut juga sekumpulan data
// array ada yg numerik dan asosiatif
// perulangan foreach

// array numerik
$ar_buah = array('pepaya', 'mangga','pisang','jeruk');
// cetak index
echo $ar_buah[1];
echo '<br>';

// jumlah total buah
$jumlah = count($ar_buah);
echo $jumlah;
echo '<br>';

// lihat hasil sekumpulan data buah menggunakan foreach
foreach ($ar_buah as $value) {
    echo $value.'<br>';
}


foreach ($ar_buah as $index => $value) {
    echo "$index $value <br>";
}

//array asosiatif
$ar_sisga = array(10=> 'luluk', 20=> 'angga', 30=> 'adi', 'afif');
foreach ($ar_sisga as $index => $value) {
    echo "$index $value <br>";
}
?>