<?php

    session_start();
    session_destroy(); // To delete whole session
    unset($_SESSION['login_session']); // To delete a session var

    header("Location: index.php");
    die();

?>
