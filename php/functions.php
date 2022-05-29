<?php
session_start();

include_once("conect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Agendamento</title>
</head>
<body>
    <div class="resumo-agendamento">
        <div class="dados-agendamento">
                <?php 
                //recebimento das variaveis do formulario Agenda.php
                $nome = filter_input(INPUT_POST,'nome', FILTER_DEFAULT);   
                $telefone = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_NUMBER_INT);
                $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_URL);
                $servico = $_POST['servico'];     
                $cliente = $_POST['cliente'];
                $obs = $_POST['obs'];
                $data_agendamento = date('d/m/Y');

                // impressão teste dos dados recebidos
                echo "nome: $nome<br>";
                echo "telefone: $telefone<br>";
                echo "E-mail: $email<br>";
                echo "Tipo de Serviço Agendado: $servico<br>";
                echo "Tipo de Cliente: $cliente<br>";
                echo "Observações ao profissional: $obs<br>";
                echo "Data Atual: $data_agendamento<br>";

?>
<img src="../img/logo.jpg" alt="">
</div>
</div>
</body>
</html>
    