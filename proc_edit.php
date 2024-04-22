<?php

session_start();
ob_start();

include_once "conexao.php";


$designacao = filter_input_array(INPUT_POST, FILTER_DEFAULT);

foreach($designacao['nome_designacao'] as $designacao_id => $total ){


    $query = "UPDATE tb_designacao SET total_designacao=:total_designacao WHERE cod_designacao=:produto_id";
    $up = $conn->prepare($query);
    $up->bindParam(':total_designacao', $total_designacao);
    $up->bindParam(':produto_id', $produto_id);
    $up->execute();
}

$_SESSION['msg'] = "<p> Alteração realizda com sucesso!</p>";
$url = "index.php";
header("Location: $url");