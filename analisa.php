<?php
include('koneksi.php');

$url = $_GET['penempatan'];

if (isset($_POST['normalisasi'])) {
    $sqlmaxpendidikan = "SELECT MAX(pendidikan) as max FROM tbl_analisa WHERE penempatan='$url'";
    $querypendidikan  = $koneksi->query($sqlmaxpendidikan)->fetch_object();
    $maxpendidikan = $querypendidikan->max;

    $sqlmaxipk = "SELECT MAX(ipk) as max FROM tbl_analisa WHERE penempatan='$url'";
    $queryipk  = $koneksi->query($sqlmaxipk)->fetch_object();
    $maxipk = $queryipk->max;

    $sqlmaxtertulis = "SELECT MAX(tertulis) as max FROM tbl_analisa WHERE penempatan='$url'";
    $querytertulis  = $koneksi->query($sqlmaxtertulis)->fetch_object();
    $maxtertulis = $querytertulis->max;

    $sqlmaxwawancara = "SELECT MAX(wawancara) as max FROM tbl_analisa WHERE penempatan='$url'";
    $querywawancara  = $koneksi->query($sqlmaxwawancara)->fetch_object();
    $maxwawancara = $querywawancara->max;

    $sqldelete = "DELETE FROM tbl_normalisasi WHERE penempatan='$url'";
    $koneksi->query($sqldelete);

    $sql = "SELECT * FROM tbl_analisa WHERE penempatan='$url'";
    $result = $koneksi->query($sql);
    while ($object = $result->fetch_object()) {
        $pendidikan = number_format($object->pendidikan / $maxpendidikan, 2);
        $ipk = number_format($object->ipk / $maxipk, 2);
        $tertulis = number_format($object->tertulis / $maxtertulis, 2);
        $wawancara = number_format($object->wawancara / $maxwawancara, 2);
        $sql = "INSERT tbl_normalisasi VALUES ('', '$object->nama','$object->penempatan' ,'$pendidikan', '$ipk', '$tertulis', '$wawancara')";
        $koneksi->query($sql);
    }
?>
    <script>
        const url = window.location.search;
        const urlParams = new URLSearchParams(url);
        const penempatan = urlParams.get('penempatan');
        window.location = `normalisasi.php?penempatan=${penempatan}`;
    </script>
<?php }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisa</title>
</head>

<body>
    <h3>ANALISA <?= strtoupper($url); ?></h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>IPK</th>
                <th>Tes Tertulis</th>
                <th>Tes Wawancara</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = "SELECT * FROM tbl_analisa WHERE penempatan='$url'";
            $result = $koneksi->query($sql);
            while ($object = $result->fetch_object()) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $object->nama ?></td>
                    <td><?= $object->pendidikan ?></td>
                    <td><?= $object->ipk ?></td>
                    <td><?= $object->tertulis ?></td>
                    <td><?= $object->wawancara ?></td>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>
    <form action="" method="POST">
        <button type="submit" name="normalisasi">Normalisasi</button>
    </form>


</body>


</html>