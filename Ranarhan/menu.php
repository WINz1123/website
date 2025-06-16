<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เมนูอาหาร | ร้านอร่อยเด็ด</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="arhan.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">อร่อยเด็ด</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="fp.php">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">เมนู</a></li>
          <li class="nav-item"><a class="nav-link" href="#">ติดต่อ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-dark text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">เมนูอาหารของเรา</h1>
      <p class="lead">อร่อย หลากหลาย สดใหม่ทุกวัน</p>
    </div>
  </header>

  <!-- Menu Items -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">เมนูแนะนำ</h2>
      <div class="row g-4">

        <!-- เมนูที่ 1 -->
        <div class="col-md-4">
          <div class="card h-100">
            <img src="image/download.jfif" class="card-img-top" alt="ต้มยำกุ้ง">
            <div class="card-body">
              <h5 class="card-title">ต้มยำกุ้ง</h5>
              <p class="card-text">ต้มยำกุ้งรสแซ่บจัดจ้าน หอมสมุนไพรสด</p>
              <a href="#" class="btn btn-primary">สั่งเลย</a>
            </div>
          </div>
        </div>

        <!-- เมนูที่ 2 -->
        <div class="col-md-4">
          <div class="card h-100">
            <img src="image/download.jfif" class="card-img-top" alt="ผัดไทยกุ้งสด">
            <div class="card-body">
              <h5 class="card-title">ผัดไทยกุ้งสด</h5>
              <p class="card-text">เส้นเหนียวนุ่ม ผัดซอสเข้มข้น</p>
              <a href="#" class="btn btn-primary">สั่งเลย</a>
            </div>
          </div>
        </div>
        

        <!-- เมนูที่ 3 -->
        <div class="col-md-4">
          <div class="card h-100">
            <img src="image/download.jfif" class="card-img-top" alt="กะเพราไก่ไข่ดาว">
            <div class="card-body">
              <h5 class="card-title">กะเพราไก่ไข่ดาว</h5>
              <p class="card-text">ข้าวร้อน ๆ ราดผัดกะเพราไก่ รสจัด</p>
              <a href="#" class="btn btn-primary">สั่งเลย</a>
            </div>
          </div>
        </div>
        <div class="text-center mb-4">
  <button class="btn btn-primary" onclick="history.back()">ย้อนกลับ</button>
</div>

        <!-- เพิ่มเมนูอื่น ๆ ตามต้องการ -->

      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>© 2025 ร้านอาหารอร่อยเด็ด</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


