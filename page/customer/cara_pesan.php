<?php
include"../../config.php";
session_start();
if(!isset($_SESSION['username']))
{
  header("location:../../login.php");
}
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cara Belanja</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top" style="background:#d74b35;">
      <div class="container-fluid">
        <div class="navbar-header">
          
        <a class="navbar-brand" href="#"><img src="../../images/logo.png" style="width:150px; margin-top: -70px;"></a>
        </div>
        <div class="collapse navbar-collapse">


        <div class="nav navbar-nav navbar-right">
         <ul id="nav">
          <li ><a href="index.php" style="color:#fff;"><span class="glyphicon glyphicon-home"> Home | </span></a></li>
          <li class="a"><a href="" style="color:#fff;"><span class="glyphicon glyphicon-shopping-cart"> Keranjang | </span></a></li>
          <li><a href="" style="color:#fff;" ><span class="glyphicon glyphicon-list"> Kategori | </span></a>
<ul>
<li><?php include("kat.php");?></li>

</ul>
</li>
         <li class="a"><a href="cara_pesan.php" style="color:#fff;"><span class="glyphicon glyphicon-question-sign"> Cara Belanja | </span></a></li>

         <?php
         $q_cek_cekout = mysql_query("SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]'");
          $cek_cekout = mysql_num_rows($q_cek_cekout);
          if($cek_cekout>=1){
          $queri_cek = mysql_query("SELECT * from chekout where id_pembeli='$_SESSION[id_pembeli]' && status_terima='sudah diterima'");
          $cek = mysql_num_rows($queri_cek);
          if($cek>=1)
          {?>
          <li><a href="index.php?pesan=sudah konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff;"> Konfirmasi | </span></a></li><?php
          }else{
          ?>
          <li><a href="cara_pesan.php?page=konfirmasi"><span class="glyphicon glyphicon-check" style="color:#fff;"> Konfirmasi | </span></a></li>
          <?php }} ?>

         
           <li><a href="#"><span class="glyphicon glyphicon-user" style="color:#fff;"> <?php echo $nama; ?></span></a>
                <ul>
                  <li><a href="../admin/outpage.php"><span class="glyphicon glyphicon-log-out">Keluar</span></a></li>
                </ul>
          </li>
          
          </ul>
          <div class="clear"></div>
          
          </div>
      </div>
    </nav>
    <?php
    @$page= $_GET['page'];
    if($page=="pembelian_selesai")
    {
      include("pembelian_selesai.php");
    }
    else if($page=="konfirmasi")
    {
      include("konfirmasi.php");
    }
    else{
    ?>
     <div class="jumbotron">
      <div class="row">
      <div class="col-md-4" style="margin:30px;">
     <img src="../../img/logo.png">   
    </div>
      <div class="col-md-6" style="margin-left:70px; margin-top: 150px;">
        <h2><b>Selamat datang di toko burung kicau kami.<h1 style="color:#f97b61;"><b>ANDI MURAI</b></h1></h2>
        <p>disini anda bisa membeli dan memesan burung kicau dengan mudah, anda tinggal klik, maka burung sampai di tempat anda. tidak perlu lagi jauh jauh ke toko burung.</p>
      </div>
    </div>
    </div>
    <div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#d74b35;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
Cara Pesan
</div>
		  <p><h3><b>1. Pembayaran dilakukan dalam jangka waktu 1x24 jam setelah melakukan pemesanan.<br>
          2. Pembayaran dapat dilakukan melalui transfer ke Rekening kami. Melalui  Konfirmasi Pembayaran.<br>
          3. Setelah melakukan pembayaran, konfirmasi pembayaran dikirim ke-<br>
          <br>
    <p style="color:#0000ff;">Achmad Waris Afandi,
    BNI,
    No Rek 00112233</p>
    <br>
          4. Selanjutnya buku yang telah dipesan akan dikirimkan dalam waktu maksimal 7 Hari.<br>
          5.Kami mengirimkan barang dengan menggunakan jasa pengiriman barang via POST<br><br></b></p>
    <p style="color:red;">* Harga burung belum termasuk ongkos kirim, dan ongkos kirim akan disesuaikan dengan tujuan pengiriman.</p></h3>
	


      <hr>
      <?php } ?>

      
    </div> 
  <div class="footer" style="width:100%;height:270px;color:#fff;background:#d74b35;">
      <div class="row" style="background:#7e7c78;">
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Tentang Kami</b></h3></li>
        </ul></center>
          <hr>
        <ul>
          <li><b>AM</b> adalah</li>
          <li>Sebuah toko burung kicau online</li>
          <li>yang menyediakan semua</li>
          <li>jenis burung dengan pemilihan</li>
          <li>berdasarkan kategori.</li>
        </ul>
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
        <ul>
          <li style="color:#f97b61"><h3><b>Alamat Kami</b></h3></li>
        </ul></center>
          <hr>
    
          <ul>
          <li>Jl. Andi Donggo</li>
          <li>Malewang Timur</li>
          <li>Bungoro, Pangkep</li>
          <li>Sulawesi Selatan, Indonesia</li>
          <li></li>
        </ul>
      
      </div>
      </div>
      <div class="col-md-4">
      <div style="margin:50px;height:120px;">
        <center>
         <ul>
          <li style="color:#f97b61"><h3><b>Contact Us</b></h3></li>
          <hr>
         <div class="row">
          <div class="col-md-4">
          <a href="www.fecebook.com"><img src="../../images/fb.png" style="width:70px;height:75px;  "></a>
          </div>
          <div class="col-md-4">
          <a href="www.googleplus.com"><img src="../../images/gp.png" style="width:70px;height:75px;"></a>
          </div>
          <div class="col-md-4">
          <a href=""><img src="../../images/Twitter.png" style="width:70px;height:75px;"></a>
          </div>
         </div>
        </ul>
        </center>
      </div>
      </div>
      </div>
        <div class="copyright" style="line-height:50px;">
        <center>&copy; 2020</center>
        </div>
      </div>
  </body>
</html>
