<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Painel de Agendamento</title>
    <style>
        body{
            width: 100%;
            height: 100%;
            background-color: rgb(175, 193, 228);
            text-align: center;
        }
    </style>
    
</head>
<body>
  <?php 

?>
    <div class="form-agenda">
        <form method="POST" action="functions.php">
            <div class="form-group">
            <!--Dados do usuario-->
                <label >Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Por favor, Digite seu Nome"><br><hr>
                <label >Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Por favor, Digite o numero de seu Telefone"><br><hr>
                <label for="exampleFormControlInput1">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com"><br><hr>             
            </div>
              <!--Descrição se é adulto ou criança-->
            <div class="faixa-etaria">
            <label for="servicos">Faixa Etária do Cliente</label>
              <select class="form-control" id="clientes" name="cliente" onChange="alteraSelect()">
                <option value="description">Selecione a Faixa etária de quem vai ser atendido</option>
                <option value="crianca">Criança(até 12 anos)</option>
                <option value="adolescente">Adolescente(de 13 a 18 anos)</option>
                <option value="adulto">Adulto</option>
              </select>
            </div><br>  
            <div class="form-group">
              <!--seleção do serviço-->
              <label for="servicos">Serviço a Agendar</label>
              <select class="form-control" id="servico" onclick="alteraServico()" name="servico">
                <option value="description">Selecione o serviço desejado</option>
                <option value="corte comum">1 - Corte Comum (tesoura + maquina)</option>
                <option value="corte simples">2 - Corte Simples (Apenas maquina)</option>
                <option value ="tratamento">4 - Tratamento de Barba</option>
                <option value ="pacote completo">5 - Pacote Completo (Corte + Barba à Escolha)</option>
              </select>
    <script>
         let cliente; 
          function alteraSelect(){
             let select = document.querySelector('#clientes');
             let selection = select.options[select.selectedIndex];
             let  selecionado = selection.value;
             console.log(selecionado);
             cliente = selecionado;

                     
          }
          alteraSelect();
          
           
         function alteraServico(){
            if(cliente == "crianca"){
            let select_servico = document.querySelector('#servico');
             let selection_servico = select_servico.options[select_servico.selectedIndex];
             let  selecionado_servico = selection_servico.value; 
             select_servico[3].hidden = true;            ;
             select_servico[4].hidden = true;         
             console.log('Cliente infantil, servicos desabilitados por incompatibilidade:\n ' + select_servico[3].value + " e " +
             select_servico[4].value);              
            }else{
              let select_servico = document.querySelector('#servico');
              let selection_servico = select_servico.options[select_servico.selectedIndex];
              let  selecionado_servico = selection_servico.value;
              select_servico[3].hidden = false;            ;
              select_servico[4].hidden = false;
              console.log('tipo Cliente substituido, reabilitados os serviços:\n ' + select_servico[3].value + " e " +
             select_servico[4].value);
            }
          }   
         
       
       
    </script>

            </div><br>              
            <!--Observações para o profissional-->    
            <div class="form-group">
              <label>Observações</label><br>
              <textarea class="form-control" id="obs" name="obs" rows="3">Digite aqui algo que o profissional precise saber.</textarea>
            </div>
            <input type="submit" value="Cadastrar">
          </form>
          
    </div>
</body>
</html>