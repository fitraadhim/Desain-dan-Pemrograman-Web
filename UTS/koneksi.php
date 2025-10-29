<?php
// konfigurasi koneksi postgtreesql
$host = "localhost";
$port = "5432";
$dbname = "klinikgigiadhim";
$user = "postgres";
$pass = '123';

//membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>
