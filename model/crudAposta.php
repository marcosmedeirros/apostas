<?php
include 'conexaoBD.php';

function cadastrarAposta($favor, $contra, $liga, $placar, $op, $metodo, $odd, $apostado)
{
    
           
    connect();
    query("INSERT INTO aposta (favor, contra, liga, placar, op, metodo, odd, apostado) 
    VALUES('$favor', '$contra', '$liga', '$placar', '$op', '$metodo', '$odd', '$apostado')");
    close();
}

function mostrarAposta($id)
{
    connect();
    $consulta = query("SELECT * FROM aposta");
    close();
    $resultados = [];
    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            $resultados[] = $linha;
        }
    }
    return $resultados;
}

function mostrarApostaAlterar($id)
{
    connect();
    $consulta = query("SELECT * FROM aposta WHERE id = $id");
    close();
    $linha = mysqli_fetch_assoc($consulta);
    return $linha;
}

function editarAposta($id, $favor, $contra, $liga, $placar, $op, $metodo, $odd, $apostado)
{
    connect();
    query("UPDATE aposta SET favor='$favor', contra='$contra', liga='$liga', placar='$placar', op='$op',
     metodo='$metodo', odd='$odd', apostado='$apostado' WHERE id=$id");
    close();
}

function excluirAposta($id)
{
    connect();
    query("DELETE FROM aposta WHERE id=$id");
    close();
}

function contarCoresOp() {
    connect();
    $consulta = query("SELECT * FROM aposta");
    close();

    $redCount = 0;
    $greenCount = 0;

    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            if ($linha['op'] === 'Red') {
                $redCount++;
            } elseif ($linha['op'] === 'Green') {
                $greenCount++;
            }
        }
    }

    $totalCount = $redCount + $greenCount;

    return array(
        'redCount' => $redCount,
        'greenCount' => $greenCount,
        'totalCount' => $totalCount
    );
}

function listarFavor() {
    connect();
    $consulta = query("SELECT favor FROM aposta");
    close();

    $lista_favor = array();

    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            $favor = $linha['favor'];
            if (!in_array($favor, $lista_favor)) {
                $lista_favor[] = $favor;
            }
        }
    }

    return $lista_favor;
}

function listarLigas() {
    connect();
    $consulta = query("SELECT liga FROM aposta");
    close();

    $lista_liga = array();

    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            $liga = $linha['liga'];
            if (!in_array($liga, $lista_liga)) {
                $lista_liga[] = $liga;
            }
        }
    }

    return $lista_liga;
}


function listarMetodos() {
    connect();
    $consulta = query("SELECT metodo FROM aposta");
    close();

    $lista_metodo = array();

    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            $lista_metodo[] = $linha['metodo'];
        }
    }

    return $lista_metodo;
}

function contarMetodos() {
    connect();
    $consulta = query("SELECT metodo FROM aposta");
    close();

    $contadores = array(
        "1x2" => 0,
        "HT" => 0,
        "BTS" => 0,
        "PG" => 0,
        "Over" => 0,
        "HC" => 0,
        "CD" => 0,
        "ESC" => 0
    );

    if (mysqli_num_rows($consulta) > 0) {
        while ($linha = mysqli_fetch_assoc($consulta)) {
            $metodo = $linha['metodo'];
            if (isset($contadores[$metodo])) {
                $contadores[$metodo]++;
            }
        }
    }

    return $contadores;
}

?>