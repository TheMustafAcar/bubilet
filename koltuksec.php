<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>BUBilet Koltuk Seçimi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:#fff;
    }

    .bus-layout {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 1px;
    }

    .seat {
      width: 50px;
      height: 50px;
      margin: 5px;
      background-color: #ccc;
      cursor: pointer;
    }

    .occupied {
      background-color: #FF0000; /* Kırmızı renk */
      cursor: not-allowed;
    }

    .selected {
      background-color: #4CAF50;
      color: #fff;
    }
  </style>
</head>
<body>

  <h1 style="font-size: 25px; text-align: center; ">Koltuk Seçimi</h1>
  
  <div class="bus-layout" id="bus-layout">
    <!-- Koltuklar burada listelenecek -->
    
</div>
<div style="display: flex; justify-content: center;">
    <div>
        <h1>Koridor</h1>
    </div>
</div>
<div class="bus-layout" id="bus-layout2">
    <!-- Koltuklar burada listelenecek -->
    
</div>
<a href="odemebasarili.php"><button type="button" class="btn btn-success" style="margin: 20px;">Ödeme Yap</button></a>




  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const busLayout = document.getElementById("bus-layout");

      // Dolu koltuklar
      const occupiedSeats = [5, 8, 12, 15, 20, 45, 21, 46, 17, 42, 1, 26, 3, 28, 7];

      // Bus koltuklarını oluştur
      for (let i = 1; i <= 50; i++) {
        const seat = document.createElement("div");
        seat.className = "seat";
        seat.textContent = i;

        // Dolu koltuk kontrolü
        if (occupiedSeats.includes(i)) {
          seat.className += " occupied";
          seat.removeEventListener("click", function () {
            toggleSeatSelection(seat);
          });
        } else {
          seat.addEventListener("click", function () {
            toggleSeatSelection(seat);
          });
        }

        busLayout.appendChild(seat);
      }

      // Koltuk seçimini ters çevirme fonksiyonu
      function toggleSeatSelection(seat) {
        seat.classList.toggle("selected");
      }
    });
    document.addEventListener("DOMContentLoaded", function () {
      const busLayout = document.getElementById("bus-layout2");

      // Dolu koltuklar
      const occupiedSeats = [5, 8, 12, 15, 20, 51, 53, 55, 62, 69, 71, 75];

      // Bus koltuklarını oluştur
      for (let i = 51; i <= 75; i++) {
        const seat = document.createElement("div");
        seat.className = "seat";
        seat.textContent = i;

        // Dolu koltuk kontrolü
        if (occupiedSeats.includes(i)) {
          seat.className += " occupied";
          seat.removeEventListener("click", function () {
            toggleSeatSelection(seat);
          });
        } else {
          seat.addEventListener("click", function () {
            toggleSeatSelection(seat);
          });
        }

        busLayout.appendChild(seat);
      }

      // Koltuk seçimini ters çevirme fonksiyonu
      function toggleSeatSelection(seat) {
        seat.classList.toggle("selected");
        if (seat.classList.contains("selected")) {
          selectedSeatNumber = seat.textContent;
        } else {
          selectedSeatNumber = null;
        }

        updateSelectedSeatDiv();
      }

      // Seçilen koltuğu gösteren div'i güncelle
      function updateSelectedSeatDiv() {
        if (selectedSeatNumber !== null) {
          selectedSeatDiv.textContent = "Seçilen Koltuk: " + selectedSeatNumber;
        } else {
          selectedSeatDiv.textContent = "";
        }
      }
    });
  </script>
</body>
</html>
