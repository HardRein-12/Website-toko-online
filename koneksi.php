<?php 
// Isi data webserver mysqli
$host="localhost";
$user="root";
$password="";
$db="digital";

$kon = mysqli_connect($host,$user,$password);
if ($kon){
    echo "Database berhasil tersambung<br>";
}else{
    echo "Database MYSQL gagal tersambung<br>";
}

$hasildb=mysqli_select_db($kon,$db);
if ($hasildb){
    echo "Database $db berhasil terhubung<br>";
}else {
    echo "Database gagal terhubung<br>";
}

?>


