<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>
    <main id="main">
      <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="../assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">Auto peça</a></h1>
    </div>

    <nav id="navbar" class="nav-menu navbar">
    <ul>
        <li><a href="../index2.php" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="../template/cadastroPecas.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Cadastro</span></a></li>
        <li><a href="../template/vendaPecas.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Venda</span></a></li>
        <li><a href="../template/calendario.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>Calendario</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->
    
    <div class="container">
            <h1>Calendário de Cadastro</h1>
            <div id="calendar"></div>
        </div>
    <?php include "footer.php"; ?>
    <main id="main">
</body>

</html>