	<?php
include('../../config.php');
$kat="select * from kategori";
$hasil=mysql_query($kat);
while($get_data=mysql_fetch_array($hasil)){

	?><li style=""><a href="index.php?page=detail&id=<?=$get_data['id_ketegori']?>">
		<?php echo $get_data['kategori']?>
	</a></li>
	<?php
	}
	?>
