<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'uas_1904030064';

$conn = mysqli_connect($host, $user, $pass, $db);

$result = mysqli_query($conn, 'SELECT * FROM pengajar');

$ambil = mysqli_query($conn, 'SELECT * FROM pelajaran');

// ambil data dari tabel pengajar
// mysqli_fetch_row(); mengembalikan data dalam bentuk numerik
// mysqli_fetch_assoc(); mengembalikan data dalam nama field
// mysqli_fetch_array(); mengembalikan data dalam bentuk numerik dan nama field

// while ($camaba = mysqli_fetch_row($result)){
// var_dump($camaba);
// }

// var_dump = menampilkan informasi data


?>