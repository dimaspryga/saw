<?php
include('koneksi.php');

if (isset($_GET['penempatan'])) {

 

  $penempatan = $_GET['penempatan'];


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
  <title>Saw</title>
</head>

<body>
  <h3>DATA</h3>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Pilih File:
        <input type="file" name="fileToUpload" id="fileToUpload" require="required" accept=".xls, .xlsx, .csv, .ods">
        <input type="submit" value="Import" name="submit">
    </form>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Penempatan</th>
        <th>Pendidikan</th>
        <th>IPK</th>
        <th>Tes Tertulis</th>
        <th>Tes Wawancara</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $sql = "SELECT * FROM tbl_data";
      $result = $koneksi->query($sql);
      while ($object = $result->fetch_object()) { ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $object->nama ?></td>
          <td><?= $object->penempatan ?></td>
          <td><?= $object->pendidikan ?></td>
          <td><?= $object->ipk ?></td>
          <td><?= $object->tertulis ?></td>
          <td><?= $object->wawancara ?></td>
        </tr>
      <?php $no++;
      } ?>
    </tbody>
  </table>

  <!-- <a href="analisa1.php?penempatan=Penyehatan%20Lingkungan"><button type="submit">Penyehatan Lingkungan</button></a> -->

  <?php
  $sqldistinct = "SELECT DISTINCT penempatan FROM tbl_data";
  $result = $koneksi->query($sqldistinct);
  while ($object = $result->fetch_object()) { ?>
    <a href="?penempatan=<?= $object->penempatan; ?>"><button type="submit" name="Submit">Analisa <?= $object->penempatan; ?></button></a>
  <?php }

  ?>




</body>

</html>