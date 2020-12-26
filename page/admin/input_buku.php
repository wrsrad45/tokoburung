<?php
$qry_kategori = mysql_query("SELECT * from kategori");

	?>
	<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
Tambah Burung
</div>
<form method="post" class="form-group" action="tambah_buku.php" enctype="multipart/form-data" style="margin-top:20px;">
	<select name="kat" class="form-control">
	<?php 
	while($kategori=mysql_fetch_array($qry_kategori)){
	?>
			<option><?php echo $kategori['kategori']; ?></option>
			<?php } ?>
	</select><br>
	<input type="text" name="judul" placeholder="Jenis Burung" class="form-control"><br>
	<input type="text" name="penerbit" placeholder="usia Burung" class="form-control"><br>
	<input type="text" name="pengarang" placeholder="Jenis Kelamin" class="form-control"><br>
	<input type="file" name="gambar" placeholder="Gambar Burung" class="form-control"><br>
	<input type="text" name="halaman" placeholder="Kualitas" class="form-control"><br>
	<input type="text" name="harga" placeholder="Harga Burung" class="form-control"><br>
	<input type="text" name="stok" placeholder="Stok Burung" class="form-control"><br>
	<input type="submit" name="simpan" value="simpan" class="btn btn-success"><br>
	</form>