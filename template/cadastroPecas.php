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
                    <h1 class="text-light"><a href="../index.php">Auto peça</a></h1>
                </div>

                <nav id="navbar" class="nav-menu navbar">
                    <ul>
                        <li><a href="../index.php" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Home</span></a></li>
                        <li><a href="../template/cadastroPecas.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Cadastro</span></a></li>
                        <li><a href="../template/vendaPecas.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Venda</span></a></li>
                        <li><a href="../template/calendario.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Calendario</span></a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Cadastro</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="../_scripts/cadastro.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome da peça</label>
                                    <input type="text" name="nome" class="form-control" id="nome" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fornecedor">Fornecedor</label>
                                    <input type="text" class="form-control" name="fornecedor" id="fornecedor" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="valorCompra">Valor de Compra</label>
                                <input type="number" class="form-control" name="valorCompra" id="valorCompra" required>
                            </div>
                            <div class="form-group">
                                <label for="valorVenda">Valor de venda</label>
                                <input type="number" class="form-control" name="valorVenda" required></input>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Produto Cadastrado</div>
                            </div>
                            <div class="text-center"><button type="submit">Cadastrar</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


        <?php include "footer.php"; ?>
</main>
</body>

</html>