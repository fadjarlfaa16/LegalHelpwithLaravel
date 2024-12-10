<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user/notification.css">
    <link rel="stylesheet" href="../css/user/addition/navbar.css" />
    <link rel="stylesheet" href="../css/user/addition/sliding-menu.css" />
    <link rel="stylesheet" href="../css/user/addition/footer.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #e3e0cd">
   <!-- Jquery Section -->
   <script src="../js/jquery.js"></script>
   <script>
     $(function () {
       $("#navbar").load("../components/navbar.blade.php", function () {
       });
     });
     $(function () {
       $("#sliding-menu").load("../components/slidingMenu.blade.php");
     });
     $(function () {
       $("#footer").load("../components/footer.blade.php");
     });
   </script>


   <!-- Import Navbar -->
   <nav id="navbar"></nav>
   <!-- Import Sliding menu -->
   <div id="sliding-menu"></div>

   <div class="content-notification" >
      <div class="container mt-5 pt-5">
          <h3 class="text-center mb-4">Notifikasi</h3>
          <!-- Kartu notifikasi pertama -->
           <a href="#">
            <div class="notification-card">
              <div class="notification-title">Permintaan Konsultasi Hukum Baru</div>
              <div class="notification-message">Anda memiliki permintaan baru dari M Zaqi Fathurrahman untuk nasihat hukum mengenai hak properti.</div>
              <div class="notification-time">5 menit yang lalu</div>
            </div>
           </a>
          
          <!-- Kartu notifikasi kedua -->
          <a href="">
          <div class="notification-card">
            <div class="notification-title">Tinjauan Dokumen Selesai</div>
            <div class="notification-message">Tinjauan dokumen Anda telah selesai dengan sukses.</div>
            <div class="notification-time">15 menit yang lalu</div>
          </div>
          </a>
          <!-- Kartu notifikasi ketiga -->
           <a href="">
          <div class="notification-card">
            <div class="notification-title">Pembayaran Diterima</div>
            <div class="notification-message">Pembayaran sebesar $50 telah diterima untuk konsultasi Anda baru-baru ini.</div>
            <div class="notification-time">30 menit yang lalu</div>
          </div>
        </a>
          <!-- Kartu notifikasi keempat -->
           <a href="">
          <div class="notification-card">
            <div class="notification-title">Pesan Baru dari Tim Hukum</div>
            <div class="notification-message">Tim hukum Anda telah mengirimkan pesan mengenai kasus terakhir Anda.</div>
            <div class="notification-time">1 jam yang lalu</div>
          </div>
        </a>
          <!-- Kartu notifikasi kelima -->
           <a href="">
          <div class="notification-card">
            <div class="notification-title">Pengingat Konsultasi Mendatang</div>
            <div class="notification-message">Jangan lupa konsultasi Anda dengan Jane Smith besok pukul 15:00.</div>
            <div class="notification-time">2 jam yang lalu</div>
          </div>
        </div>
        </div>
      </a>
        
      <!-- Import Footer -->
    <footer id="footer"></footer>
    
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
</html>