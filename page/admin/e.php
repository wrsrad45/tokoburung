<?php
include("../../config.php");
$a=$_POST['id_ketegori'];
$b=$_POST['kategori'];

 mysql_query("UPDATE kategori SET   kategori='$b' WHERE id_ketegori='$a'");
 header("location:index.php?page=kategori");
?>