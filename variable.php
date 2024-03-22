<?php
 // definisikan variables
 $nama = 'wowo';
 $umur = 20;
 $berat = 80.1;

 echo '<br>';
 echo 'Nama : ' . $nama;
 echo '<br/>Umur : ' . $umur.' Tahun';
 echo '<br/>Berat : '.$berat.' Kg';

 echo "<br/>Hello $nama Apakabar";

 echo'<hr>' ;

 // variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo'<hr>' ;
// definisikan variable konstanta
// define: untuk memanggil variable konstanta
define('pelajaran', 'pm web');
echo pelajaran;


 ?>