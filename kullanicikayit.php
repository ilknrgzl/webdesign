<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css">
<head>
    <body>
		<p style="position: absolute; color:black; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'; font-size:15px; margin-left:900; margin-top:120;"><b> </b> &nbsp; &nbsp;&nbsp;&nbsp;  <a href="index.php">   ANA SAYFA</a></p>
        <div class="header"  >
            <h2 id="baslik" align="center" style="color: black;margin-top:20px;font-size:3rem;">İLEKA</h2>
			
        </div>
<span style = "color:white">
	<?php
				
$servername = "localhost";  //veritabanı sunucusu
$database = "a_ya_veritabani"; //veritabanı ismi
$username = "root"; //veritabanı kullanıcı adi // phpmyadmin.ini dosyasında
$password = ""; //veritabaı şifresi //// phpmyadmin.ini dosyasında

// bağlantı oluştur
$conn = mysqli_connect($servername, $username, $password, $database);

// bağlantı sağlandı mı kontrol et
if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
else
{
	//sorgu oluştur
	$select_sorgu = "insert into kullanicilar (adi,parola) values ('" . htmlspecialchars($_POST['kullanici_adi']) . "' ,'" .  htmlspecialchars($_POST['kullanici_parola'])."')";
	
	//sorguyu bağlantı üzerinde çalıştır
	$sonuc = $conn->query($select_sorgu);
	
	//sorgu hata alldı mı
	if ($conn->errno > 0) {
		die("<b>Sorgu Hatası:</b> " . $conn->error);
	}
	else
	{
		//sorgudan kayıt döndü mü
		if($sonuc === TRUE)
		{
			
			echo "Başarı ile kaydedildi ";
			
		}
		else	
		{
			echo "Kullanıcı Bulunamadi";
		}
		
	}
}

mysqli_close($conn);
				 ?>
		</span>		 
        <div class="footer">
            <h2>Hoşçakalın :) </h2>
        </div>

    </body>
</html>