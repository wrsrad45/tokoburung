<?php
include('../../config.php');
$kd=$_GET['id'];
$id = $_GET['id_pembeli'];
$qry = mysql_query("SELECT * from chekout where id_pembeli='$id' && status_terima='sudah diterima'");
$a = mysql_num_rows($qry);
if ($a=="belum diterima") 
{
echo "<script>alert('Customer belum Mengkonfirmasi bahwa Dia sudah menerima barang.'); window.location = 'index.php?page=laporan'</script>";
}
else{
mysql_query("DELETE FROM chekout WHERE id_chekout='$kd'");
mysql_query("DELETE FROM keranjang where id_pembeli='$id'");
header("location:index.php?page=laporan");}
 ?>