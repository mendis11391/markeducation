<?php
    session_start();
    unset($_SESSION['markEduUsername']);
    echo '<script>window.location = "index.php";</script>';
?>