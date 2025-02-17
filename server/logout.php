<?php

require('code.php');
session_start();
$file=fopen("logs/baseLogs.php","a");
    fwrite($file, "LogOutAttempted => ");
    fwrite($file, $fetchTime." [");
    fwrite($file, $ipAddress."] [");
    fwrite($file, $_POST['name_login']."]\n");
    fclose($file);
session_unset();
session_destroy();
header('location: ../index.php');
?>