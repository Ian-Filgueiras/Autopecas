<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Auto peça</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        events: '../_scripts/pecasVendidas.php'
      });
      calendar.render();
    });
  </script>



</head>

<body>
  <main id="main">
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">

        <div class="profile">
          <img src="../assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
          <h1 class="text-light"><a href="../index.php">Auto peça</a></h1>
        </div>

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="../index.php" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="../template/cadastroPecas.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Cadastro</span></a></li>
            <li><a href="../template/vendaPecas.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Venda</span></a></li>
            <li><a href="../template/calendario.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Calendario</span></a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </header><!-- End Header -->

    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Calendario</h2>
        </div>
        <div id="calendar"></div>
      </div>
    </section><!-- End Contact Section -->

    <?php include "footer.php"; ?>
  </main>
</body>

</html>