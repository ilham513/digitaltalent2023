<?php
// var_dump($_POST);

// File json yang akan dibaca
$file = "data.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

//hitung tagihan
$tagihan = $_POST['jumlah'] * 50000;

//cek diskon
$diskon = ($tagihan>= 100000) ? ($tagihan*0.05) : 0;

//hitung tagihan akhir
$tagihan_akhir = $tagihan - $diskon;

// Data array baru
$data [] = array(
	'cabang'     => $_POST['cabang'],
	'nama'  => $_POST['nama'],
	'hp' 	  => $_POST['hp'],
	'jumlah' 	  => $_POST['jumlah'],
	'tagihan' 	  => $tagihan,
	'diskon' 	  => $diskon,
	'tagihan_akhir' => $tagihan_akhir
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// echo '<pre>';print_r($jsonfile);echo '</pre>';

// Menyimpan data ke dalam anggota.json
$anggota = file_put_contents($file, $jsonfile);

header('location: latihan1.php');
?>