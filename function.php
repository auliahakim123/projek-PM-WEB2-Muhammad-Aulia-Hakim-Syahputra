<?php
//function define by user

//fungsi yang tidak mengembalikan nilai
function salam(){
    echo "assalamualaikum apa kabar.......";
}
salam();//cetak


echo"<br>";
function panggil($arg){
    echo"halo apa kabar mas $arg";
}
panggil("angga");//cetak


echo "<br>";
//fumgsi yang mengembalikan nilai
function hasil($a,$b){
    $c=$a*$b;
    return $c;
}
echo hasil(5,2);


echo "<br>";

//buat fungsi hitung umur
function umur($thn_lahir){
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo  "umur saya adalah" .umur( 2004);

?>