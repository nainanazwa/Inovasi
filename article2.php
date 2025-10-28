<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Inovasi Teknologi dalam Pengolahan Sampah Menjadi Energi - Eco Ride</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

  <header class="site-header">
    <img src="../assets/images/header.png" alt="Header" />
  </header>

  <nav class="main-nav">
    <ul class="menu">
      <li><a href="../index.php">Beranda</a></li>
      <li><a href="../index.php#container">Artikel</a></li>
      <li class="dropdown">
        <a href="#" class="dropbtn" onclick="toggleDropdown(event)">Profil</a>
        <div class="dropdown-content">
          <a href="#">Kontak Kami</a>
          <a href="#">Tentang Kami</a>
        </div>
      </li>
    </ul>
  </nav>

  <main>
    <div class="article-content">
      <h1>Inovasi Teknologi dalam Pengolahan Sampah Menjadi Energi</h1>
      <img src="../assets/images/article2.png" alt="Inovasi Teknologi">
      <p>
        Kemajuan teknologi membuka berbagai metode canggih dalam mengubah sampah menjadi energi terbarukan seperti Waste to Energy (WtE), gasifikasi, pirolisis, dan biokonversi anaerobik.
      </p>
      <p>
        Teknologi digital dan Internet of Things (IoT) mulai diterapkan dalam sistem pengelolaan sampah terpadu, sehingga proses lebih efisien dan ramah lingkungan.
      </p>
      <p>
        Dengan inovasi ini, sampah rumah tangga dan industri tidak lagi menjadi masalah, tetapi bisa menjadi sumber energi yang bermanfaat bagi masyarakat.
      </p>
    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-container">
      <p>&copy; 2025 Eco Ride. All Rights Reserved.</p>
    </div>
  </footer>

  <script>
    function toggleDropdown(event) {
      event.preventDefault();
      const dropdown = event.target.closest('.dropdown');
      dropdown.classList.toggle('active');
    }

    document.addEventListener('click', function(e) {
      const dropdowns = document.querySelectorAll('.dropdown');
      dropdowns.forEach(d => {
        if (!d.contains(e.target)) {
          d.classList.remove('active');
        }
      });
    });
  </script>
</body>
</html>
