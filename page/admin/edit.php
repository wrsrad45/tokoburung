<?php
include"../../config.php";
$a=$_GET['id'];
$kat=mysql_query("SELECT * FROM kategori WHERE id_ketegori='$a'");
$bo = mysql_fetch_array($kat);
?>
<form action="e.php" method="post">
		<div class="col-md-8" style="margin-bottom:20px;">
 		<b>Nama Kategori</b>
 		<input type="hidden" name="id_ketegori" value =" <?php  echo $bo['id_ketegori'];?> ">
 		<input type="text" name="kategori" value ="<?php  echo $bo['kategori'];?>" style="width:600px;" class="form-control">
 		</div>
 		<div class="col-md-1" style="margin-top:20px">
	<input type="submit" name="simpan" value="simpan" class="btn btn-success">
	</div>
</form>