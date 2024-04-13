<?php
//Verificar envio do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];
    $estVisitados = $_POST['estVisitados'];
   }

    // Exibir os dados

    echo "Nome:" . $nome . "<br/>";
    echo "Idade: " . $idade . "<br/>";
    echo "Cidade: " . $cidade . "<br/>";
    echo "Estados que visitou: " . implode(", ", $estVisitados) . "<br/>";