<?php
include('validasilogin.php');
include('koneksi.php');

if (isset($_GET['penempatan'])) {
  $penempatan = $_GET['penempatan'];
  $sqldelete = "DELETE FROM tbl_analisa WHERE penempatan='$penempatan'";
  $koneksi->query($sqldelete);

  $sql = "SELECT * FROM tbl_data WHERE penempatan='$penempatan'";
  $result = $koneksi->query($sql);
  while ($object = $result->fetch_object()) {
    if ($object->pendidikan == 'S1') {
      $pendidikan = 5;
    } else if ($object->pendidikan == 'D4') {
      $pendidikan = 4;
    } else if ($object->pendidikan == 'D3') {
      $pendidikan = 3;
    } else if ($object->pendidikan == 'D2') {
      $pendidikan = 2;
    } else if ($object->pendidikan == 'D1') {
      $pendidikan = 1;
    }
    $sql = "INSERT tbl_analisa VALUES ('', '$object->nama','$object->penempatan' ,'$pendidikan', '$object->ipk', '$object->tertulis', '$object->wawancara')";
    $koneksi->query($sql);
  }
?>
  <script>
    const url = window.location.search;
    const urlParams = new URLSearchParams(url);
    const penempatan = urlParams.get('penempatan');
    window.location = `analisa.php?penempatan=${penempatan}`;
  </script>
<?php }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAW</title>
</head>
<body>
<ul>
    <li><a href="?pages=beranda">Beranda</a></li>
    <li><a href="?pages=data">Data</a></li>
    <li><a href="logout.php">Logout</a></li>



    <?php
        if(isset($_GET['pages'])){
            if($_GET['pages'] === "beranda"){
                include('beranda.php');
            }else if($_GET['pages'] === "data"){
                include('data.php');
            }else{
                include('beranda.php');
            }
        }else{
            include('beranda.php');
        }

            
            
    ?>
</ul>
</body>
</html>


