<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexucak.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BUBilet (En Uygun Otobüs ve Uçak Bileti)</title>
</head>
<body>
    <nav class="navbar">
            <a href="indexucak.php" class="navbar-brand"><h1 style="margin-left: 120px; color: #ffffff; font-weight: bold; font-style:italic;">bubilet</h1></a>   
        <div style="margin-right: 40px;">    
            
            <a href="girisyap.php"><button type="button" class="btn btn-success">Giriş Yap</button></a>
           <a href="kayitol.php"><button type="button" class="btn btn-success">Üye Ol</button></a>
        </div>
    </nav>
    <div>
    <nav class="navbar2" style="display: flex; margin-left: 100px;">

        <a href="index.php"><button type="button" class="btn btn-outline-danger" ></i><i class="fa-solid fa-bus" style="color: #ff0000;"></i>Otobüs</button></a>
        <a href="indexucak.php"></a><button type="button" class="btn btn-danger" style="margin-left: 30px;"><i class="fa-solid fa-plane" style="color: #ffffff;"></i>Uçak</button></a>
          
    </nav>
    </div>
    <div style="background-image:url(img/ortabackground.jpg);background-size: cover; background-position: center; width: 100%; height: 500px; display: flex; justify-content:space-around;align-items: center;"
      class="banner">   
      <form method="POST" action="" style="background-color: white; width: 34%; height: 400px; border-radius: 10px; " class="leftcontent"> 
        <div style="margin-top: 40px; position: relative;width:100%; height: 33%; background-color: #ffffff; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h1 style="font-size: 16px; color: #949494; margin-right: 10px; position: absolute; left: 20px; top: 18px; z-index: 10;">Kalkış Noktası</h1>
          <span style="width: 100%; display:flex;flex-direction: row; align-items: center; justify-content: center;"> <span style="position: absolute; left: 10px;"><i  class="fa-solid fa-location-dot" style="scale: 1.2; color: #8f8f8f;"></i></span><input name="kalkis" style="outline: none; position: absolute; left: 30px; bottom: 60px; width: 80%; border: none; padding: 10px;" type="text" id="arama" list="sehirler" placeholder="Şehir seçin"></span>
          
          <datalist id="sehirler">
              <option value="Eskişehir"></option>
               
              
              
          </datalist>  
          <hr style="width: 100%; ">

        </div>  
        <div style="position: relative;width:100%; height: 20%; background-color: #ffffff; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h1 style="font-size: 16px; color: #949494; margin-right: 10px; position: absolute; left: 20px; top: -15px; z-index: 10;">Varış Noktası</h1>
          <span style="width: 100%; display:flex;flex-direction: row; align-items: center; justify-content: center;"> <span style="position: absolute; left: 10px;"><i  class="fa-solid fa-location-dot" style="scale: 1.2; color: #8f8f8f;"></i></span><input name="kalkis" style="outline: none; position: absolute; left: 30px; bottom: 40px; width: 80%; border: none; padding: 10px;" type="text" id="arama" list="sehirler2" placeholder="Şehir seçin"></span>
      
          <datalist id="sehirler2">
            <option value="Bursa"></option>
          </datalist>   
        
          <hr style="width: 100%; ">

        </div>
        <div style="width:100%; height: 33%; background-color: #ffffff; display: flex; justify-content: center; flex-direction: column; align-items: center;">
            <span style="width: 100%;"><h1 style=" font-size: 16px; color: #949494; display: flex; justify-content: left; margin-left: 10px; align-items: center;">Yolculuk Tarihi</h1>
            <div style="margin-left: 160px;">
            <p id="tarihGoster"></p>
      
      <script>
        function tarihGuncelle() {
         var bugun = new Date();
         var gun = bugun.getDate();
         var ay = bugun.getMonth() + 1; // JavaScript'te aylar 0'dan başlar, bu yüzden +1 ekliyoruz.
         var yil = bugun.getFullYear();

         var tarih = gun + '/' + ay + '/' + yil;
       document.getElementById('tarihGoster').innerHTML = 'BUGÜN:  ' + tarih;
  }

       // Sayfa yüklendiğinde ve belirli aralıklarla tarih güncellenir.
       tarihGuncelle(); // Sayfa yüklendiğinde tarih güncellenir.
       setInterval(tarihGuncelle, 1000 * 60 * 60 * 24); // Her 24 saatte bir tarih güncellenir.
      </script>
      </div>

            <input
            class="btn btn-success" style="width: 90%; margin-top: 30px; margin-left: 20px;" type="submit" value="Uçak Bileti Bul">
          </div>
           
      </form> 
 
        <div style="background-color: rgb(255, 255, 255,0.001); width: 40%; position: relative; height: 80%; display: flex; justify-content: space-around; flex-wrap: wrap; align-items: center; " class="rightcontent">
        <div style="background-color: rgb(255, 255, 255,0.5); border-radius: 10px; width: 180px; position: relative; height: 150px; "> <img style="position: absolute; left: 35px;" src="img/7_24.png" alt=""> <a style="margin: 6px; text-align: center; position: absolute; bottom: 10px;">7/24 Müşteri Hizmetleri</a>
        </div>
        <div style="background-color: rgb(255, 255, 255,0.5); border-radius: 10px; width: 180px; position: relative; height: 150px; "> <img style="position: absolute; left: 35px;" src="img/guvenliodeme.png" alt=""> <a style="margin:6px; margin-left: 35px; text-align: center; position: absolute; bottom: 10px;">Güvenli Ödeme</a>

        </div>
        <div style="background-color:  rgb(255, 255, 255,0.5); border-radius: 10px; width: 180px; position: relative; height: 150px; "> <img style="position: absolute; left: 35px;" src="img/komisyonyok.png" alt=""> <a style="margin:6px; margin-left: 10px; text-align: center;  position: absolute; bottom: 10px;">Komisyon Yok, Ücretsiz</a>

        </div>
        <div style="background-color:  rgb(255, 255, 255,0.5); border-radius: 10px; width: 180px; position: relative; height: 150px; "> <img style="position: absolute; left: 45px; width: 90px;" src="img/ziyaretci.png" alt=""> <a style="margin:6px; text-align: center;  position: absolute; bottom: 10px;">Ayda 25 Milyondan Fazla Ziyaretçi</a>

        </div>
        <div style="background-color:  rgb(255, 255, 255,0.5); border-radius: 10px; width: 180px; position: relative; height: 150px; "> <img style="position: absolute; left: 35px;" src="img/hizlibiletal.png" alt=""> <a style="margin:6px; margin-left: 12px; text-align: center;  position: absolute; bottom: 10px;">İki Dakikada Biletini Al</a>

        </div>
        <div style="background-color:  rgb(255, 255, 255,0.5); border-radius: 10px; width: 180px; position: relative; height: 150px; "> <img style="position: absolute; left: 35px;" src="img/iade.png" alt=""> <a style="margin:6px; text-align: center;  position: absolute; bottom: 10px;">İptal Edilen Bilete Kesintisiz İade</a>

        </div>
        
        </div>
    </div>
    <div style="background-color: rgb(255, 255, 255); height:150px; width: 100%; margin-top: 30px; align-items: center; justify-content: center; display: flex; flex-direction: column;">
       <a href="https://www.maximum.com.tr/"> <div  style="width: 1126px; height: 145px; background-image:url(img/maxbackground.png); "></div></a>
        <hr style="width: 80%;">
    </div>
    <h1 style="text-align:center; color:dimgrey; font-size: 32px;">Otobüs Bileti İçin BUBilet</h1>
    <div style="width: 100%; height: 400px; background-color: rgb(255, 255, 255); display: flex; justify-content: center; margin-top: 20px; ">
    <div style="background-color: rgba(255, 255, 255,); width: 1200px; height: 400px;  display: flex; ">
        
        <div class="card" style="width: 18rem; margin-left: 8px;">
            <div style="justify-content: center; display: flex; height: 50%;"><img src="img/7_24mh.png" style="width: 180px; height: 140px; margin-top: 25px;" class="card-img-top" alt="..."></div>
            <div class="card-body" style="height: 50%;">
              <p class="card-text"><h1 style="font-size: 16px; text-align:center;">7/24 Müşteri Hizmetleri</h1><a>BUBilet.com üzerinden yapacağınız tüm işlemlerde müşteri hizmetleri ekibimiz 7/24 yanınızda. Bir tıkla Canlı Destek başlatabilir ve yardım alabilirsiniz.</a>
            </div>
          </div>
        
          <div class="card" style="width: 18rem; margin-left: 10px;">
            <div style="justify-content: center; display: flex; height: 50%;"><img src="img/güvenliode.png" style="width: 230px;" class="card-img-top" alt="..."></div>
            <div class="card-body" style="height: 50%;">
              <p class="card-text"><h1 style="font-size: 16px; text-align:center;">Güvenli Ödeme</h1>Tüm uçak bilet alımlarınızı ister evinizden, ister ofisinizden ya da dilerseniz cep telefonunuzdan kolay, hızlı ve güvenilir bir şekilde gerçekleştirebilirsiniz.</p>
            </div>
          </div>
        
          <div class="card" style="width: 18rem; margin-left: 10px;">
            <div style="justify-content: center; display: flex; height: 50%;"><img src="img/herbutceyeuygun.png" style="width: 220px; height: 120px; margin-top: 38px;" class="card-img-top" alt="..."></div>
            <div class="card-body" style="height: 50%;">
              <p class="card-text"><h1 style="font-size: 16px; text-align:center;">Her Bütçeye Uygun</h1>BUBilet size tüm firmaların uçak biletlerini karşılaştırma imkanı sunar. Bu sayede bütçenize uygun uçak biletini rahatlıkla bulabilir ve satın alabilirsiniz.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem; margin-left: 10px;">
            <div style="justify-content: center; display: flex; height: 50%;"><img src="img/ucak.png" style="width: 230px; height: 130px; margin-top: 30px;" class="card-img-top" alt="..."></div>
            <div class="card-body" style="height: 50%;">
              <p class="card-text"><h1 style="font-size: 16px; text-align:center;">En Seçkin Firmalar</h1>BUBilet olarak en seçkin uçak firmalarını sizler için bir araya topladık. Tüm firmaların uçak biletlerini karşılaştırabilir, uygun otobüs biletini bulabilirsiniz.</p>
            </div>
          </div>
    </div>
    </div>

    <div style="width: 100%; height: 100px; background-color: rgb(255, 255, 255); display: flex; margin-top: 30px;">
      <div style="width:100px; height: 100%; background-color: rgb(255, 255, 255); margin-left: 100px;" ><a style="text-decoration: none;" href="index.php"x><h1 style="margin-left: 100px; color: #ff0000; font-weight: bold; font-style:italic;">bubilet</h1></a>

      </div>
      <div style="width:170px; height: 90%; background-color: rgb(255, 255, 255); margin-left: 300px; margin-top: 10px;"><h1 style="font-size: 25px;"><i class="fa-sharp fa-solid fa-clock-rotate-left" style="color: #949494;"></i>  En Hızlı</h1>
      </div>    
      <div style="width:170px; height: 90%; background-color: rgb(255, 255, 255);margin-left: 155px; margin-top: 10px;" ><h1 style="font-size: 25px;"><i class="fa-solid fa-lock" style="color: #949494;"></i>  En Güvenilir</h1>
      </div>
      <div style="width:180px; height: 90%; background-color: rgb(255, 255, 255); margin-left: 180px; margin-top: 10px;" ><h1 style="font-size: 25px;"><i class="fa-sharp fa-solid fa-wallet" style="color: #949494;"></i>  En Ekonomik</h1>

      </div>
      </div>
      
  
 

    
    
    <div style="height: 100px; width: 100%; background-color: #d40000; display: flex; justify-content: center; align-items: center; ">
      <h1 style="font-size: 20px;"><i class="fa-regular fa-copyright" style="color: #000000;"></i>  Copyright. Tüm Hakları Saklıdır..</h1>

    </div>
</body>

</html>
