<?php
include"config.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$qrycus = mysql_query("SELECT * from customer where username='$username' && password='$password'");
$datacus = mysql_fetch_array($qrycus);
$usercus = $datacus['username'];
$passcus = $datacus['password'];
if($usercus==$username && $passcus==$password)
{
	header("location:daftar.php?pesan=sama");
}
else{
	mysql_query("INSERT into customer set nama='$nama', username='$username', password='$password'");
header("location:login.php?pesan=berhasil");
}
?>