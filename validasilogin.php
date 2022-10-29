<?php
    session_start();
    if (empty($_SESSION['username'])){
        ?>
        <script>
            window.location = "login.php";
        </script>
        <?php
    }

?>