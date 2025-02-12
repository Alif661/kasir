<?php


date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= '6fml2.h.filess.io'; // host server
	$user 	= 'kasir_staynewsup';  // username server
	$pass 	= '6ae8b20a049f1fc6161efc303d07779bfccad003'; // password server, kalau pakai xampp kosongin saja
	$dbname = 'kasir_staynewsup'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
?>

