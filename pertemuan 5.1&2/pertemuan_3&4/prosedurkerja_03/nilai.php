<?php
// Sistem penentuan Grade berdasarkan Nilai
$nilai = 59.5;

if($nilai >= 85) {
    echo "Nilai Anda A";
}elseif($nilai >=70) {
    echo "Nilai Anda B";
}elseif($nilai >= 60) {
    echo "Nilai Anda C";
}else{
    echo "Anda Bepotensi Drop Out";
}
?>