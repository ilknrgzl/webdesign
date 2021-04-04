<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">	

	</head>
<body>

	
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center col-xs-12">
	<div class="baslık">

<h1>Düşlerimizi Süsleyen Klasik Otomobiller</h1>
  <p>1960'dan beri ayakta kalan akım..</p><p>"İLEKA"</p>
</div></div>
  

	<div class="container">
     
		<div class="row">
			
			<div class="col-sm-4">
				<div class="sütün1">
		<h3> Merak edilenler</h3>
      <p>Her dönem alıcısı bulunan, üretildiği zamanın en önemli modelleri olan klasik otomobillerin ülkemizde de azımsanamayacak kadar çok meraklısı var. </p>
		<p>Peki klasik otomobil almanın incelikleri nelerdir hiç düşündünüz mü?</p><a href="syf1.php">Devamını oku...</a>
		<img src="resimler/IMG_0751.jpg" width="300" height="130" alt=""/></div></div>

			<div class="col-sm-4">
				<div class="sütün2">
				<h3>Online işlemler</h3>
      <p>Bu sayfaya üye olup yorum yapabilisiniz.. </p>
      <a href="kayitol.php">Tıklayınız...</a>
    <img src="resimler/IMG_0753.jpg" width="300" height="130" alt=""/></div></div>
			  			      
   
	  
	  <div class="col-sm-4">
		  <div class="sütün3">
		  
		  <h3>Arama motoru
			 </h3>        
      		 <body>
			 <form action=""> 
Giriş: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Bulunanlar: <span id="txtHint"></span></p> 
<head>
<script>
	
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
				 </head>
			  </body>
<?php
				
if(isset($_COOKIE["loginCokies"])) {
	?>
   <div class="card">
                    <h3> Merhaba <?php echo $_COOKIE["loginCokies"]?> </h3>
				  
					<span> <a href="logout.php">Çıkış</a></span>
                </div>
				
<?php
} else {
   
   ?>
   <div class="card">
                    <h3>Giriş Yap</h3>
				  <div class="formelements">
					  <form action="login.php" method="post">					
						  <span>Kullanıcı Adı:</span> <input type="text" name="kullanici_adi">
						  <span> Parola:</span><input type="password" name="kullanici_parola">
						  <input type="submit" >
					  </form>
				  </div>
                </div>
				
				  <div class="card">
                    <h3> <a href="kayitol.php">Kayıt Ol</a> </h3>
				  
                </div>
   
   <?php
}
?>

			  <div class="footer">
            <h2>Hoşçakalın :) </h2>
        </div>

    </body></p>
     </div></div>
  </div>
</div>
            </div>
        </div>

        

</html>
	
	
	
	
	