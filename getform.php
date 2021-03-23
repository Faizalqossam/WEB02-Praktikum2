<?php


$siswa =$_GET['siswa'];
$matkul =$_GET['matkul'];
$nilai_uts =$_GET['nilai_uts'];
$nilai_uas =$_GET['nilai_uas'];
$nilai_tugas =$_GET['nilai_tugas'];
$nilai_akhir =is_numeric(35*$nilai_uas/100)+(30*$nilai_uts/100)+(35*$nilai_tugas/100);


echo 'Nama : '.$siswa."</br>";
echo 'Mata Kuliah : '.$matkul."</br>";
echo 'Nilai UTS : '.$nilai_uts."</br>";
echo 'Nilai UAS : '.$nilai_uas."</br>";
echo 'Nilai Tugas/Praktikum : '.$nilai_tugas."</br>";
echo 'Nilai Akhir : '.$nilai_akhir."</br>";

$predikat = $nilai_akhir;

if ($predikat <= 35){
    echo 'Grade E ';
}elseif ($predikat <= 55){
    echo 'Grade D ';
}elseif ($predikat <= 69){
    echo 'Grade C ';
}elseif ($predikat <= 84){
    echo 'Grade B ';
}elseif ($predikat <= 100){
    echo 'Grade A ';
}        
switch(true)
{
    case ($predikat <= 35);
    echo '</br> Sangat Kurang';
    break;

    case ($predikat <= 55);
    echo '</br> Kurang';
    break;

    case ($predikat <= 69);
    echo '</br> Cukup';
    break;

    case ($predikat <= 84);
    echo '</br> Memuaskan';
    break;

    case ($predikat <= 100);
    echo '</br> Sangat Memuaskan';
    break;

}

?>