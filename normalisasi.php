<?php
include('koneksi.php');

$url = $_GET['penempatan'];

if (isset($_POST['ranking'])) {

    $sqldelete = 'DELETE FROM tbl_ranking';
    $koneksi->query($sqldelete);

    $sql = "SELECT * FROM tbl_normalisasi";
    $result = $koneksi->query($sql);
    while ($object = $result->fetch_object()) {
        $total = ($object->pendidikan * 20) + ($object->ipk * 20) + ($object->tertulis * 30) + ($object->wawancara * 30);
        $sql = "INSERT tbl_ranking VALUES ('', '$object->nama','$object->penempatan' ,'$object->pendidikan', '$object->ipk', '$object->tertulis', '$object->wawancara', '$total')";
        $koneksi->query($sql);
    }
?>
    <script>
        const url = window.location.search;
    const urlParams = new URLSearchParams(url);
    const penempatan = urlParams.get('penempatan');
    window.location = `ranking.php?penempatan=${penempatan}`;
    </script>
<?php }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>NORMALISASI <?= strtoupper($url); ?></h3>

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
            $sql = "SELECT * FROM tbl_normalisasi WHERE penempatan='$url'";
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
        <button type="submit" name="ranking">Ranking</button>
    </form>
</body>

</html>