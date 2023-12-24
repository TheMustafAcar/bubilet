<?php 
session_start();
if (isset($_SESSION["id"])) {
  $name = $_SESSION["ad"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="otobusseferleri.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BUBilet Otobüs Seferleri</title>
</head>
<body>
    <nav class="navbar">
            <a href="index.php" class="navbar-brand"><h1 style="margin-left: 120px; color: #ffffff; font-weight: bold; font-style:italic;">bubilet</h1></a>   
        <div style="margin-right: 40px;"> 
            
        <?php
          if (isset($_SESSION["id"])) {
            echo "<a href='#'><button type='button' class='btn btn-success'>$name</button></a>
            <a href='cikisyap.php'><button type='button' class='btn btn-success'>Çıkış Yap</button></a>";
          } else {
            echo "<a href='girisyap.php'><button type='button' class='btn btn-success'>Giriş Yap</button></a>
            <a href='kayitol.php'><button type='button' class='btn btn-success'>Üye Ol</button></a>";
          }
           ?>
        </div>
    </nav>
    <div style="width: 100%; min-height: 513px; background-color: rgb(255, 255, 255); display: flex; flex-direction: column; align-items: center;">
        <div style="width: 100%; height:120px; background-color: rgb(192, 192, 192); margin-top: 20px; "><h1 style="font-size: 30px; text-align: center;">Seyahat Bilgileri</h1>
        <div style="display:flex; justify-content: center;"> 
    <div>
        <h1 style="font-size: 20px; text-align:center; color:dimgrey; ">Kalkış Noktası</h1>
        <h1 style="font-size: 20px; text-align:center; ">Eskişehir Anadolu Havalimanı</h1>
        </div>
        <i  class="fa-solid fa-right-long" style="color: #000000; margin-top:20px; margin-left:50px;"></i>
        <div style="margin-left: 50px;">
        <h1 style="font-size: 20px; text-align:center; color:dimgrey;">Varış Noktası</h1>
        <h1 style="font-size: 20px; text-align:center; ">Bursa Yenişehir Havalimanı</h1>
        </div>
        <i  class="fa-solid fa-right-long" style="color: #000000; margin-top:20px; margin-left:50px;"></i>
        <div style="margin-left: 50px;">
        <h1 style="font-size: 20px; text-align:center; color:dimgrey;">Tarih</h1>
        
        <div style="display: flex;">
        <h1 style="font-size: 20px; text-align:center; ">Bugün:</h1>
        <p style="margin-left: 5px; font-size:18px;" id="tarihGoster"></p>
        <script>
        function tarihGuncelle() {
         var bugun = new Date();
         var gun = bugun.getDate();
         var ay = bugun.getMonth() + 1; // JavaScript'te aylar 0'dan başlar, bu yüzden +1 ekliyoruz.
         var yil = bugun.getFullYear();

         var tarih = gun + '/' + ay + '/' + yil;
       document.getElementById('tarihGoster').innerHTML = ' ' + tarih;
  }

       // Sayfa yüklendiğinde ve belirli aralıklarla tarih güncellenir.
       tarihGuncelle(); // Sayfa yüklendiğinde tarih güncellenir.
       setInterval(tarihGuncelle, 1000 * 60 * 60 * 24); // Her 24 saatte bir tarih güncellenir.
      </script>
        </div>  
    </div>
        
    
    </div>


    </div>
        <?php
            include("connect.php");
            $sql = "SELECT * FROM ucakseferler";
            $result = mysqli_query($connect, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach($row as $sefer) {
                  echo
                  "<div style='width: 80%; height:120px; background-color:  #F8F8F8F8; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3); border-radius: 10px; margin-top: 50px; display: flex; '>
                   <div>
                      <a href='$sefer[baglanti]' target='_blank'><img style='width: 60px; padding: 10px;'  src='imagefirmaucak/$sefer[resim_adi]' alt=''></a>
                  </div>
                  <div> 
                      <h1 style='font-size: 20px;'><i class='fa-regular fa-clock' style='color: #000000; margin-left: 200px; margin-top: 20px;'></i>  $sefer[saat]</h1>
                      <p style='margin-left: 175px;'>($sefer[sure])</p>
          
                  </div> 
                  
                  <div>
                      <h1 style='font-size: 20px; margin-left: 180px; margin-top: 20px;'><i class='fa-solid fa-suitcase' style='color: #000000;'></i>  Bagaj: $sefer[bagaj]</h1>
                  </div>
                  <div style='margin-left: 150px; margin-top: 10px;'>
                      <h1 style='font-size: 30px;'>$sefer[ucret] TL</h1>
                      
                  </div>
                  <a href='ucakkoltuksec.php'><div style='margin-left:200px; margin-top: 10px;'><button type='button' class='btn btn-danger'>Koltuk Seç</button></div></a>
                  </div>";
              }
            } else {
              echo "";
            }
            
            mysqli_close($connect);
        ?>

    </div>
    </div>
  
    <div style="margin-top:20px; height: 100px; width: 100%; background-color: #d40000; display: flex; justify-content: center; align-items: center;">
      <h1 style="font-size: 20px;"><i class="fa-regular fa-copyright" style="color: #000000;"></i>  Copyright. Tüm Hakları Saklıdır..</h1>

    </div>
</body>

</html>
