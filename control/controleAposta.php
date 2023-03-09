<?php
include '../model/crudAposta.php';

$opcao = $_POST['opcao'];

switch ($opcao) {
    case 'Cadastrar':
        cadastrarAposta(
            $_POST["favor"],
            $_POST["contra"],
            $_POST["liga"],
            $_POST["placar"],
            $_POST["op"],
            $_POST["metodo"],
            $_POST["odd"],
            $_POST["apostado"],
        );
        header("Location: ../view/index.php");
        break;
    case 'Editar':
        editarAposta(
            $_POST["id"],
            $_POST["favor"],
            $_POST["contra"],
            $_POST["liga"],
            $_POST["placar"],
            $_POST["op"],
            $_POST["metodo"],
            $_POST["odd"],
            $_POST["apostado"],
        );
        header("Location: ../view/index.php");
        break;
    case 'Excluir':
        excluirAposta(
            $_POST["id"]
        );
        header("Location: ../view/index.php");
        break;
}
?>