<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto23</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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

    <div class="container-sm">
        <h1 class="text-center mt-4 ">Cadastrar Aposta</h1>
        <form method="post" action="../control/controleAposta.php">
            <div class="row">
                <div class="col mt-2">
                    <input type="text" class="form-control" placeholder="Time que apostou" id="favor" name="favor">
                </div>
                <div class="col mt-2">
                    <input type="text" class="form-control" placeholder="Adversario" id="contra" name="contra">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col mt-2">
                    <input type="text" class="form-control" placeholder="Liga" id="liga" name="liga">
                </div>
                <div class="col mt-2">
                    <input type="text" class="form-control" placeholder="Placar" id="placar" name="placar">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col mt-2">
                <label for="op" class="form-label">Operação</label>
                    <select class="form-select" placeholder="Operação" name="op" id="op">
                        <option>Red</option>
                        <option>Green</option>
                    </select>
                </div>
                <div class="col mt-2">
                <label for="metodo" class="form-label">Metodo</label>
                    <select class="form-select" placeholder="Metodo" name="metodo" id="metodo">
                        <option>PG</option>
                        <option>1x2</option>
                        <option>HT</option>
                        <option>HC</option>
                        <option>BTS</option>
                        <option>ESC</option>
                        <option>CD</option>
                        <option>Over</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col mt-2">
                    <input type="text" class="form-control" id="odd" name="odd">
                </div>
                <div class="col mt-2">
                    <input type="text" class="form-control" id="apostado" name="apostado">
                </div>
            </div>
            <input type="hidden" name="id" value="<?= ['id'] ?>">
            <button type="submit" class="btn btn-light mt-4" name="opcao" value="Cadastrar">Cadastrar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>