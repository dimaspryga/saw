<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_saw';

    $koneksi = new mysqli($hostname, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
      }
    //   echo "Connected successfully";
