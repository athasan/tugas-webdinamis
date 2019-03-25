<?php
	//Contoh Implode 1
	echo "PT"."<br>"."<br>";
	$PT	= array("Nama PT"=>"Cimoas Adisatwa",
				"Bidang usaha"=>"Budidaya Ayam",
				"Jenis ayam"=>"Boiler");
	print_r($PT);
	$PT	= implode(" ",$PT);
	echo '<pre>';print_r($PT);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
		// Contoh Implode 2
	echo "Golongan Ayam"."<br>"."<br>";
	$Golongan_ayam	= array("Golongan 1"=>"Platinum",
							"Golongan 2"=>"Gold",
							"Golongan 3"=>"Silver");
	print_r($Golongan_ayam);
	$Golongan = implode(" , ", $Golongan_ayam);
	echo '<pre>';print_r($Golongan);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";

	// Contoh Implode 3
	echo "Cara Bermitra"."<br>"."<br>";
	$ttcara = array("Pertama"=>"Memiliki kandang dan peralatan yang memadai",
					"Kedua"=>"Mengisi formulir dan administrasi",
					"Ketiga"=>"Setuju dan siap mengikuti peraturan",
					"Keempat"=>"Tanda tangan kontrak");
	print_r($ttcara);
	$bermitra = implode(" -> ", $ttcara);
	echo '<pre>';print_r($bermitra);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";


	// Contoh Implode 4
	echo "Alamat Kantor Jogja"."<br>"."<br>";
	$alamat = array("Daerah"=>"Jl.Imogiri Barat KM 5,3 No 57",
					"Kecamatan"=>"Sewon",
					"Kelurahan"=>"Bangunharjo",
					"Kode Pos"=>"55187",
					"Kabupaten"=>"Bantul");
	print_r($alamat);
	$kantor_jogja = implode(", ", $alamat);
	echo'<pre>';print_r($kantor_jogja);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	
	// Contoh Implode 5
	echo "Jam Buka"."<br>"."<br>";
	$wkt = array("Jam"=>"07",
				 "Menit"=>"59",
				 "Detik"=>"00");
	print_r($wkt);
	$jam_buka = implode(":", $wkt);
	echo '<pre>';print_r($jam_buka);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";
?>