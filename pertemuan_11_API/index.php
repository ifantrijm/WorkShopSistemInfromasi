<?php
$url = "https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=31.71.01.1001";

$response = file_get_contents($url);
$data = json_decode($response, true);

    $lokasi = $data['data'][0]['lokasi'];
    $cuaca = $data['data'][0]['cuaca'][0][0];

    echo "Provinsi: " . $lokasi['provinsi'] . "<br>";
    echo "Kota: " . $lokasi['kotkab'] . "<br>";
    echo "Kecamatan: " . $lokasi['kecamatan'] . "<br><br>";

    echo "Suhu: " . $cuaca['t'] . "°C<br>";
    echo "Cuaca: " . $cuaca['weather_desc'] . "<br>";
    echo "Kelembapan: " . $cuaca['hu'] . "%<br>";
?>