<?php 
// menghubungkan dengan library excel reader
include "excel_reader.php";
include "SpreadsheetReader.php";
include "koneksi.php";
?>
    
<?php

		//upload data excel kedalam folder uploads
		$target_dir = basename($_FILES['fileToUpload']['name']);
		
		move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_dir);

		$Reader = new SpreadsheetReader($target_dir);

$extension = pathinfo($target_dir, PATHINFO_EXTENSION); 

if ($extension == "xls") {
	// extensi xls
	foreach ($Reader as $Key => $Row)
		{
			// import data excel mulai baris ke-2 (karena ada header pada baris 1)
			if ($Key < 2) continue;		
			$query=mysqli_query($koneksi,"INSERT INTO tbl_data VALUES ('".$Row[0]."', '".$Row[1]."','".$Row[2]."','".$Row[3]."','".$Row[4]."','".$Row[5]."','".$Row[6]."')");
		}
		if ($query) {
				echo "Import data berhasil";
			}else{
				echo "Import data gagal";
			}
} else {
	// extensi xlsx
	foreach ($Reader as $Key => $Row)
		{
			// import data excel mulai baris ke-2 (karena ada header pada baris 1)
			if ($Key < 1) continue;
			// var_dump($Row);			
			$query=mysqli_query($koneksi,"INSERT INTO tbl_data VALUES ('".$Row[0]."', '".$Row[1]."','".$Row[2]."','".$Row[3]."','".$Row[4]."','".$Row[5]."','".$Row[6]."')");
		}
		if ($query) {
				echo "Import data berhasil";
			}else{
				echo "import data gagal";
			}
}
// alihkan halaman ke index.php
header("location:index.php?pages=data".$berhasil);
?>