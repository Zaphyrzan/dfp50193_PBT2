<?php
$username = $_POST['username'];
$pass = $_POST['pass'];

$myfile = fopen('pswd.txt', 'r');
$pswd = fread($myfile, filesize('pswd.txt'));
fclose($myfile);

if ($username == 'admin'){
    if (password_verify($pass, $pswd)) {
        header('location: home.php');
    } else {
        fail();
    }
} else {
    fail();
}


function fail(){
    ?>
    <script>
        alert('Wrong Username or Password');
        header('location: index.php');
    </script>
    <?php
}
?>