<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
    <script src="../js/mask.js" type="text/javascript"></script>
    <title>Projeto23</title>
</head>

<body class="bg-dark">
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


    <div class="container-md text-center">
        <h1 class="mb-4 mt-4">Suas Apostas</h1>
        <table class="table table-dark border-light text-center">
            <thead>
                <tr class="">
                    <th scope="col">Favor</th>
                    <th scope="col">Contra</th>
                    <th scope="col">Liga</th>
                    <th scope="col">Placar</th>
                    <th scope="col">Op</th>
                    <th scope="col">Metodo</th>
                    <th scope="col">ODD</th>
                    <th scope="col">Apostado</th>
                    <th scope="col">Retorno</th>
                    <th scope="col">Lucro</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../model/crudAposta.php';

                function calcularRetorno($apostado, $odd, $op)
                {
                    if ($op == "Green") {
                        return $apostado * $odd;
                    } else {
                        return;
                    }
                }

                $resultados = mostrarAposta(['id']);
                foreach ($resultados as $linha) :
                    $retorno = calcularRetorno($linha['apostado'], $linha['odd'], $linha['op']);
                    $cor = $linha['op'] == "Green" ? "green" : "red";
                    echo "
        <tr>
            <td>{$linha['favor']}</td>
            <td>{$linha['contra']}</td>
            <td>{$linha['liga']}</td>
            <td>{$linha['placar']}</td>
            <td style='color:{$cor}'>{$linha['op']}</td>
            <td>{$linha['metodo']}</td>
            <td>{$linha['odd']}</td>
            <td>R$ " . number_format($linha['apostado'], 2, ',', '.') . "</td>
            <td style='color:{$cor}'>R$ " . number_format($retorno, 2, ',', '.') . "</td>
            <td>R$ " . number_format(($retorno - $linha['apostado']), 2, ',', '.') . "</td>
            <td><a class='btn btn-light' href='editarAposta.php?id={$linha['id']}'>Editar</a></td>
        </tr>
    ";
                endforeach;

                ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

    </script>
    <script>
    </script>
</body>

</html>