<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var calcularButton = document.getElementById("contact").querySelector("#calcularButton");

            calcularButton.addEventListener("click", function() {
                var valorVenda = document.getElementById("vendaForm").querySelector("#valorVenda").value;
                var quantidade = document.getElementById("quantidade").value;
                var total = parseFloat(valorVenda) * parseInt(quantidade);
                document.getElementById("total").value = total.toFixed(2); // Arredonde para 2 casas decimais
            });
        });
    </script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "createdRow": function(row, data, dataIndex) {
                    $(row).addClass('linha-tabela');
                }
            });

            // Evento de clique na linha da tabela
            $('.linha-tabela').on('click', function() {
                var rowData = $(this).children('td').map(function() {
                    return $(this).text();
                }).get();

                
                $('#codPeca').val(rowData[0]); 
                $('#nomePeca').val(rowData[1]); 
                $('#valorVenda').val(rowData[4]); 
                
            });
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
                        <li><a href="../template/vendaPecas.php" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>Venda</span></a></li>
                        <li><a href="../template/calendario.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Calendario</span></a></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Venda</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="../_scripts/venda.php" method="post" role="form" id="vendaForm" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="codPeca">Codigo da Peça</label>
                                    <input type="text" name="codPeca" class="form-control" id="codPeca" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nomePeca">Nome da Peça</label>
                                    <input type="text" class="form-control" name="nomePeca" id="nomePeca" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="valorVenda">Valor de Venda</label>
                                <input type="number" class="form-control" name="valorVenda" id="valorVenda" required>
                            </div>
                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input type="number" class="form-control" name="quantidade" id="quantidade" required></input>
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" class="form-control" id="total" name="total"></input>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Produto vendido</div>
                            </div>
                            <button type="button" class="btn btn-primary a" id="calcularButton">calcular</button>
                            <button class="btn btn-primary a" type="submit">vender</button>
                        </form>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>codPeca</th>
                                    <th>nome</th>
                                    <th>fornecedor</th>
                                    <th>valorCompra</th>
                                    <th>valorVenda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../_scripts/config.php";
                                $sql = "SELECT * FROM cad_pecas";
                                $query  = $mysqli->query($sql);
                                $dados = $query->fetch_array();
                                while ($dados = $query->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $dados['id']; ?></td>
                                        <td><?php echo $dados['nome']; ?></td>
                                        <td><?php echo $dados['fornecedor']; ?></td>
                                        <td><?php echo $dados['valorCompra']; ?></td>
                                        <td><?php echo $dados['valorVenda']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->



        <?php include "footer.php"; ?>
    </main>

</body>

</html>