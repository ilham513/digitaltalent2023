<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">

<style>
.center {
  margin: auto;
  margin-top:100px;
  margin-bottom:100px;
  width: 60%;
  padding: 10px;
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  color: white;
}
td{
  padding: 2px 2px;
}
body {
  background-color: #163a76;
}
h4{
  font-size: 24px;
}
button{
  padding: 3px 12px 3px 12px;
}
</style>
</head>
<body>

<div class="center">
	<?php
	$cars = array (
	  array("Volvo",22,18),
	  array("BMW",15,13),
	  array("Saab",5,2),
	  array("Land Rover",17,15)
	);
	  
	echo $cars[0][0].": In stock: ".$cars[0][1].", terjual: ".$cars[0][2].".<br>";
	echo $cars[1][0].": In stock: ".$cars[1][1].", terjual: ".$cars[1][2].".<br>";
	echo $cars[2][0].": In stock: ".$cars[2][1].", terjual: ".$cars[2][2].".<br>";
	echo $cars[3][0].": In stock: ".$cars[3][1].", terjual: ".$cars[3][2].".<br>";
	?>

	<hr/>
	
	<?php
	$cars = array (
	  array("Volvo",22,18),
	  array("BMW",15,13),
	  array("Saab",5,2),
	  array("Land Rover",17,15)
	);
		
	for ($row = 0; $row < 4; $row++) {
	  echo "<p><b>Row number $row</b></p>";
	  echo "<ul>";
	  for ($col = 0; $col < 3; $col++) {
		echo "<li>".$cars[$row][$col]."</li>";
	  }
	  echo "</ul>";
	}
	?>
	
	<hr/>
	
	<?php
	$barang = ["Buku Tulis", "Penghapus","Spidol"];

	//Menampilkan Isi array
	foreach ($barang as $isi ) {
		echo $isi."<br>";
	}
	$i= 0;
	while($i < count($barang)){
		echo $barang[$i]."<br>";
		$i++;
	}
	?>
	
	<hr/>
	
	<?php
	$cabang =  array("Jakarta", "Depok", "Bogor");
	array_multisort($cabang, SORT_ASC);
	?>

	<select id="cabang" name="cabang">
		<option value="">- Pilih Cabang -</option>
		<?php
		foreach ($cabang as $ap) {
			echo "<option value='" . $ap . "'>" . $ap . "</option>";
		}
		?>
	</select>

	<hr/>
	
	<?php
	// Data 1
	$data [] = array(
		'no'     => 1,
		'nama'   => 'Rudi',
		'alamat' => 'Nganjuk'
	);

	// Data 2
	$data [] = array(
		'no'     => 2,
		'nama'   => 'Dian',
		'alamat' => 'Madiun'
	);

	// Data 3
	$data [] = array(
		'no'     => 3,
		'nama'   => 'Lukman',
		'alamat' => 'Jakarta'
	);


	// Mengencode data menjadi json
	$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
	
	echo '<pre>';print_r($jsonfile);echo '</pre>';

	// Menyimpan data ke dalam anggota.json
	file_put_contents('anggota.json', $jsonfile);
	?>
	
	<hr/>
	
	<?php
	// File json yang akan dibaca
	$file = "anggota.json";

	// Mendapatkan file json
	$anggota = file_get_contents($file);

	// Mendecode anggota.json
	$data = json_decode($anggota, true);

	// Data array baru
	$data [] = array(
		'no'     => 4,
		'nama'   => 'Bayu',
		'alamat' => 'Kediri'
	);

	// Mengencode data menjadi json
	$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
	
	echo '<pre>';print_r($jsonfile);echo '</pre>';

	// Menyimpan data ke dalam anggota.json
	$anggota = file_put_contents($file, $jsonfile);
	?>
	
	<hr/>
	
	<?php
	// File json yang akan dibaca
	$file = "anggota.json";

	// Mendapatkan file json
	$anggota = file_get_contents($file);

	// Mendecode anggota.json
	$data = json_decode($anggota, true);

	// Membaca data array menggunakan foreach
	foreach ($data as $key => $d) {
		// Perbarui data kedua
		if ($d['no'] === 2) {
			$data[$key]['alamat'] = 'Surabaya';
		}
	}

	// Mengencode data menjadi json
	$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
	
	echo '<pre>';print_r($jsonfile);echo '</pre>';

	// Menyimpan data ke dalam anggota.json
	$anggota = file_put_contents($file, $jsonfile);
	?>
	
	<hr/>
	
	<?php
	// File json yang akan dibaca
	$file = "anggota.json";

	// Mendapatkan file json
	$anggota = file_get_contents($file);

	// Mendecode anggota.json
	$data = json_decode($anggota, true);

	// Membaca data array menggunakan foreach
	foreach ($data as $key => $d) {
		// Hapus data kedua
		if ($d['no'] === 4) {
			// Menghapus data array sesuai dengan index
			// Menggantinya dengan elemen baru
			array_splice($data, $key, 1);
		}
	}

	// Mengencode data menjadi json
	$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
	
	echo '<pre>';print_r($jsonfile);echo '</pre>';

	// Menyimpan data ke dalam anggota.json
	$anggota = file_put_contents($file, $jsonfile);
	?>
	
	<hr/>
	
	<?php
	// File json yang akan dibaca (full path file)
	$file = "anggota.json";

	// Mendapatkan file json
	$anggota = file_get_contents($file);

	// Mendecode anggota.json
	$data = json_decode($anggota, true);

	// Membaca data array menggunakan foreach
	foreach ($data as $d) {
		echo $d['no']. "<br>";
		echo $d['nama']. "<br>";
		echo $d['alamat']. "<br>";
	}
	?>
	
	<hr/>
	
	<?php
	// Tangkap variabel dari form
	$vta = $_POST["ttugas"];
	$vtb = $_POST["tuts"];
	$vtc = $_POST["tuas"];
	$vtd = ($vta * 0.2) + ($vtb * 0.3) +($vtc * 0.5);

	//Tampilkan datanya
	echo " Nilai Tugas       : $vta <br>";
	echo "Nilai UTS       : $vtb <br>";
	echo "Nilai UAS     : $vtc <br>";
	echo "Total NILAI      : $vtd <br>";

	if ($vtd >= 90)
	echo "Anda Mendapatkan Nilai A";
	elseif ($vtd >= 80 )
	echo "Anda Mendapatkan Nilai B";
	elseif ($vtd >= 60 )
	echo "Anda Mendapatkan Nilai c";
	else
	echo "Anda Mendapatkan Nilai D";

	// File json yang akan dibaca
	$file = "krs2.json";

	// Mendapatkan file json
	$anggota = file_get_contents($file);

	// Mendecode anggota.json
	$data = json_decode($anggota, true);

	// Data array baru
	$data[] = array (

	'tugas' => "$vta",
	'uts' => "$vtb",
	'uas' => "$vtc",
	'nilai' => "$vtd",


	);

	$konten = json_encode($data, JSON_PRETTY_PRINT);

	//menyimpan konten di file
	file_put_contents($file, $konten);

	//menampilkan data

	foreach ($data as $key => $value)
	{
	echo"<hr>";
  
	echo "Tugas :" .$value['tugas']. '<br>';
	echo "UTS :" .$value['uts']. '<br>';
	echo "UAS :" .$value['uas']. '<br>';
	echo "Nilai :" .$value['nilai']. '<br>';
	}
	?>
	
</div>



</body>
</html>