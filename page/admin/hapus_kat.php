<?php
include('../../config.php');
$bk=$_GET['id'];
mysql_query("DELETE FROM kategori WHERE id_ketegori='$bk'");
header("location:index.php?page=kategori");
 ?>