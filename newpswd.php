<?php
$currentpass = $_POST['currentpass'];
$newpass = $_POST['newpass'];
$confirmpass = $_POST['confirmpass'];

$myfile = fopen('pswd.txt', 'r');
$pswd = fread($myfile, filesize('pswd.txt'));

if (password_verify($currentpass, $pswd)){
    $newpass = password_hash($newpass,PASSWORD_BCRYPT);
    $myfile = fopen("pswd.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $newpass);    
    fclose($myfile);
}

header('location: index.php');