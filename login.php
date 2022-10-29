<?php
    include("koneksi.php");

    session_start();
    if (isset($_SESSION['username']) ) {
        ?>
        <script>
            window.location = "index.php";
        </script>
        <?php
    }

    if (isset($_POST['Login'])) {
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $query = "SELECT username FROM tbl_user WHERE username='".$Username."' AND password='".$Password."'";

        $sql = mysqli_query($koneksi, $query);

        $cekdata = mysqli_num_rows($sql);

        if ($cekdata > 0) {
            session_start();
            $_SESSION['username'] = $Username;
            ?>
                <script>
                    window.location = "index.php";
                </script>
            <?php
        }else{
            echo "Login Gagal!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAW | LOGIN</title>
</head>
<body>
    <h2>HTML Forms</h2>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" id="username" name="Username" placeholder="Username"><br>
        <label for="password">Password</label><br>
        <input type="text" id="password" name="Password" placeholder="Password"><br><br>
        <input type="submit" name="Login" value="Login">
    </form> 
</body>
</html>