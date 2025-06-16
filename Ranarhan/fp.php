<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ร้านอาหารอร่อยเด็ด</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="arhan.css">
  <style>
    .hero {
      background-image: url('image/bg-restaurant.jpg'); /* เปลี่ยนภาพตามต้องการ */
      background-size: cover;
      background-position: center;
      color: white;
      padding: 100px 0;
    }
    .overlay {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 60px 20px;
    }
  </style>
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
          <li class="nav-item"><a class="nav-link active" href="#">หน้าแรก</a></li>
          <li class="nav-item"><a class="nav-link" href="menu.html">เมนู</a></li>
          <li class="nav-item"><a class="nav-link" href="#">ติดต่อ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero text-center">
    <div class="overlay">
      <div class="container">
        <h1 class="display-4">ยินดีต้อนรับสู่ร้านอร่อยเด็ด</h1>
        <p class="lead">อาหารไทยต้นตำรับ รสชาติถึงใจ สดใหม่ทุกวัน</p>
        <a href="menu.php" class="btn btn-primary btn-lg mt-3">ดูเมนูอาหาร</a>
      </div>
    </div>
    <div class="text-center mb-4">
  <button class="btn btn-primary" onclick="history.back()">ย้อนกลับ</button>
</div>
.
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>© 2025 ร้านอาหารอร่อยเด็ด</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
