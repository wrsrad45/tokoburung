<?php
include"../../config.php";
$id = $_GET['id'];
mysql_query("UPDATE chekout set status_terima='sudah diterima' where id_pembeli='$id'");
header("location:index.php?pesan=suwon");
?>