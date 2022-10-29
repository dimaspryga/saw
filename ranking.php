<?php
include('koneksi.php');

$url = $_GET['penempatan'];

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
    <h3>PERHITUNGAN <?= strtoupper($url); ?></h3>
    <ul>
        <li>Bobot</li>
        <li>Pendidikan 20%</li>
        <li>IPK 20%</li>
        <li>Tes Tertulis 30%</li>
        <li>Tes Wawancara 30%</li>
    </ul>
    <p>Total = (Pendidikan * 20) + (IPK * 20) + (Tes Tertulis * 30) + (Tes Wawancara * 30)</p>
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
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = "SELECT * FROM tbl_ranking WHERE penempatan='$url'";
            $result = $koneksi->query($sql);

            while ($object = $result->fetch_object()) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $object->nama ?></td>
                    <td><?= $object->penempatan ?></td>
                    <td><?= $object->pendidikan ?></td>
                    <td><?= $object->ipk ?></td>
                    <td><?= $object->tertulis ?></td>
                    <td><?= $object->wawancara ?></td>
                    <th><?= $object->total ?></th>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>

    <h3>RANKING <?= strtoupper($url); ?></h3>
    <table>
        <thead>
            <tr>
                <th>Ranking</th>
                <th>Nama</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $sql = "SELECT * FROM tbl_ranking WHERE penempatan='$url' ORDER BY total DESC";
            $result = $koneksi->query($sql);

            while ($object = $result->fetch_object()) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $object->nama ?></td>
                    <th><?= $object->total ?></th>
                </tr>
            <?php $no++;
            } ?>
        </tbody>
    </table>
</body>

</html>