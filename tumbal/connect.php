<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "";
$connect = mysqli_conenct($host, $user, $pass, $db);
if(mysqli_connect_error())
{
    echo "koneksi databse gagal";

}
else {
    echo "koneksi berhasil";
}