<?php
require __DIR__ . '/vendor/autoload.php';

// Jika tidak menggunakan autoload cukup require dua script berikut
// require __DIR__ . '/src/NomorHajiScraper.php
// require __DIR__ . '/src/NomorHajiParser.php

use RioAstamal\Kemenag\NomorHajiScraper;
use RioAstamal\Kemenag\NomorHajiParser;

$nomorPorsi = '1000724825';
$scrapper = NomorHajiScraper::create($nomorPorsi);
$parser = NomorHajiParser::create($scrapper);

$jsonInfoPorsi = $parser->parse();
print_r( $jsonInfoPorsi);
// echo json_encode(array('artikel'=>$jsonInfoPorsi));

/* output
Array
(
    [nomor_porsi] => 3000837XXX
    [nama] => HAMBA ALLAH INDONESIA
    [kabupaten_kota] => KOTA SURABAYA
    [provinsi] => JAWA TIMUR
    [kuota] => 12345
    [posisi_porsi_kuota] => 12233
    [perkiraan_tahun_berangkat_hijriah] => 1444
    [perkiraan_tahun_berangkat_masehi] => 2023
)
*/
