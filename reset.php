<?php
    $pass = password_hash('abc123',PASSWORD_BCRYPT);
    $myfile = fopen('pswd.txt','w');
    fwrite($myfile, $pass);
    fclose($myfile);
?>