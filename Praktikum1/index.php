<?php

// ini komentar
/* 

komentar ini
*/
// echo "Hello World <br>" ;
// print_r("Nama Saya Fadli <br>") ;
// var_dump("Kuliah di STT Terpadu Nurul Fikri") ;

// Membuat variabel user
// $nama = "Ahmad Fadli";
// $umur = 18;
// $berat = 70.2;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya adalah $umur <br>";
// echo "Berat badan $berat <br> ";

// // Membuat variabel Sistem
// echo "Document_root ". $_SERVER[ "DOCUMENT_ROOT"];
// echo "Nama_file ". $_SERVER[" PHP_SELF"];

//

// define("PHI", 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari jari = $jari = $jari <br>";
// echo "Keliling lingkaran adalah $keliling";

// Membuat Array
$program = ["php" , "javascrip" , "HTML" , "CSS"];
// echo $program [0];
// echo count ($program);
// $program[] = "mysql" ;
// echo count ($program);

// // undet ($program)
// echo "<br>" . $program[0];

echo "<ol>";
foreach($program as $program){
    echo "<li> $program </li>";
}
echo "</li>";

?>