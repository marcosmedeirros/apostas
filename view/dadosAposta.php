<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto23</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg bg-faded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Projeto23</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrarAposta.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dadosAposta.php">Dados</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Visualizar</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3 class="mb-4 mt-4 text-center">Apostas</h3>
                <?php
                include '../model/crudAposta.php';
                $resultados = contarCoresOp();
                echo '<table style="auto border-light; border-collapse: collapse; margin: auto;">';
                echo '<thead><tr><th style="text-align:center; padding: 10px;">Total</th><th style="text-align:center; padding: 10px;">Reds</th><th style="text-align:center; padding: 10px;">Greens</th></tr></thead>';
                echo '<tbody><tr><td style="text-align:center; padding: 10px;">' . $resultados['totalCount'] . '</td><td style="text-align:center; padding: 10px;">' . $resultados['redCount'] . '</td><td style="text-align:center; padding: 10px;">' . $resultados['greenCount'] . '</td></tr></tbody>';
                echo '</table>';
                ?>
            </div>

            <div class="col-sm">
                <div>
                    <h3 class="mb-4 mt-4 text-center">Times</h3>
                    <table class="table table-dark border-light text-center">
                        <tbody>
                            <?php
                            $lista_favor = listarFavor();
                            foreach ($lista_favor as $favor) {
                                echo "<tr><td>" . $favor . "</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-sm">
                <div>
                    <h3 class="mb-4 mt-4 text-center">Ligas</h3>
                    <table class="table table-dark border-light text-center">
                        <thead>
                        </thead>
                        <tbody>
                            <?php
                            $lista_liga = listarLigas();
                            foreach ($lista_liga as $liga) {
                                echo "<tr><td>" . $liga . "</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm">
                <h3 class="mb-4 mt-4 text-center">Metodos</h3>
                <table style="border-collapse: separate; border-spacing: 10px; margin: auto;">
                    <tr>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">1x2</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">HT</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">BTS</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">PG</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">Over</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">HC</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">CD</th>
                        <th style="border: 1px solid white; padding: 10px; text-align: center;">ESC</th>
                    </tr>
                    <tr>
                        <?php
                        $contadores = contarMetodos();
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['1x2'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['HT'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['BTS'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['PG'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['Over'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['HC'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['CD'] . "</td>";
                        echo "<td style='border: 1px solid white; padding: 10px; text-align: center;'>" . $contadores['ESC'] . "</td>";
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

</script>