<?php


$NOME = $_REQUEST['nome'];
$NASCIMENTO = $_REQUEST[date'nascimento'];
$BEBIDA = $_REQUEST['bebida'];

$DATA_ATUAL =  date("2022"); 


$IDADE = $DATA_ATUAL - $NASCIMENTO;


if($IDADE<18){
    $dados = array(
        "tipo" => "menor.jpg",
        "mensagem" => 'Você não pode beber pois é menor de idade'
    );
} else {
    switch($BEBIDA){
        case '1' : $dados = array(
         "tipo" => "energetico.jpg",
         "mensagem" => "Olá, $NOME, sua bebida é energetico, Você tem $IDADE anos"
        );
        break;
        case '2' : $dados = array(
         "tipo" => "whisky.jpg",
         "mensagem" => "Olá, $NOME, sua bebida é whisky, Você tem $IDADE anos"
        );
        break;
        case '3' : $dados = array(
          "tipo" => "tequila.jpg",
          "mensagem" => "Olá, $NOME, sua bebida é tequila, Você tem $IDADE anos"
        );
        break;
        case '4' : $dados = array(
            "tipo" => "vinho.jpg",
            "mensagem" => "Olá, $NOME, sua bebida é vinho, Você tem $IDADE anos"
          );
          break;
    }
}

echo json_encode($dados);