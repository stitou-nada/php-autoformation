<?php
    session_start();

    $_SESSION["user"] = 'admin';
    $_SESSION["roles"] = ['administrator', 'approver', 'editor'];


?>
    <a href="profile.php">Go to profile page</a>
