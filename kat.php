<?php
include"config.php";
$kat = mysql_query("SELECT * from kategori");
while($data_kat = mysql_fetch_array($kat)){
?>
<li><a href="index.php?id=<?php echo $data_kat['id_ketegori'] ?>"><?php echo $data_kat['kategori']; ?></a></li>
<?php } ?>