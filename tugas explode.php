<?php
	//Contoh explode 1
	
	$Gudang = "OVK, Peralatan, Kulkas vaksin";
	print_r($Gudang);
	$isi_gudang = explode(",", $Gudang);
	echo '<pre>';print_r($isi_gudang);echo'</pre>';

	echo "_____________________________________________________";
	echo "<br>"."<br>";
	
	// Contoh explode 2
	
	echo "OVK 	: ";
	$OVK=" Vaksin, Formalin, Susu skim";
	print_r($OVK);
	$jenis_ovk = explode(",", $OVK);
	echo '<pre>';print_r($jenis_ovk);echo'</pre>';

	echo "_____________________________________________________";
	echo "<br>"."<br>";

	// Contoh explode 3
	
	echo "Golongan Ayam 	: ";
	$Golongan = " Platinum, Gold, Silver";
	print_r($Golongan);
	$gol_ayam = explode(",", $Golongan);
	echo'<pre>';print_r($gol_ayam);echo'</pre>';

	echo "_____________________________________________________";
	echo "<br>"."<br>";

	// Contoh explode 4
	
	echo "Kantor Cabang Region DIY 	: ";
	$unit = " Jogja, Kulon Progo, Klaten, Magelang, Salatiga";
	print_r($unit);
	$kantor_unit = explode(",", $unit);
	echo'<pre>';print_r($kantor_unit);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";

	// Contoh explode 5
	
	echo "Inventaris 	: ";
	$unv = " Motor, Mobil, Komputer, Laptop";
	print_r($unv);
	$jns_unv = explode(",", $unv);
	echo'<pre>';print_r($jns_unv);echo'</pre>';
	
	echo "_____________________________________________________";
	echo "<br>"."<br>";

?>