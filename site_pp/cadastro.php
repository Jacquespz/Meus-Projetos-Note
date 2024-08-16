<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPZ Style Tech</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">    
</head>
<body>
     <header>
            <div class="logo">
                <img src="img/logo.png" alt="Logotipo ">
            </div>

            <nav>
                <ul>
                    <li><a href="Index.html">HOME</a></li>
                    <li><a href="celular.html">CELULAR</a></li>
                    <li><a href="roupa.html">ROUPAS</a></li>
                    <li><a href="tenis.html">TÊNIS</a></li>
                    <li><a href="cadastro.php">CADASTRAR</a></li>
                    <li><a href="entrar.php">ENTRAR</a></li>
                    <li><a href="contato.php">CONTATO</a></li>               
                </ul>
            </nav>
     </header> 


<!--INICIO FORMULARIO CADASTRO-->

    <div class="cadastro">
        <div class="cad" id="cadastro">
            <h1>Cadastro de Clientes</h1>
            <form id="cadastroForm" action="cadastro.php" method="post">
                
            <!--<form action="cadastro.php" method="post">-->

                <input type="text" id="nome"name="nome" placeholder="Digite seu nome completo"><br> 

                <input type="email" id="email" name="email" placeholder="Digite seu e-mail"><br> 

                <input type="password" id="senha" name="senha" placeholder="Digite sua senha segura"><br>

                <input type="radio" id="feminino" name="sexo" value="F" >Feminino

                <input type="radio" id="masculino" name="sexo" value="M" >Masculino<br>  

                <input type="submit" name="submit" id="button" value="CADASTRAR"> 
            </form>
        </div>


        <div class="cad">
              <img src="img/cliente.png" alt="site JPZ">
        </div>




    </div>
                
                

<!--Configurações do rodapé-->


<footer>

    <div class="rodape">
        <ul>
            <li><a href="Index.html">HOME</a></li>
            <li><a href="celular.html">CELULAR</a></li>
            <li><a href="roupa.html">ROUPAS</a></li>
            <li><a href="tenis.html">TÊNIS</a></li>
            <li><a href="cadastro.php">CADASTRAR</a></li>
            <li><a href="entrar.php">ENTRAR</a></li>
            <li><a href="contato.php">CONTATO</a></li>  
        </ul>
    </div>

    <div class="rodape">
        <p> Rua da Liberdade, 22 - Bairro Livre</p>
        <p>Diadema - SP - 89870-189</p>
    </div>

    <div class="rodape">
        <p>Siga as nossas Redes Sociais</p>
        <a href=""#""><img src="img/facebook.png" alt="Facebook Mercado Preso"></a>
        <a href=""#""><img src="img/instagram.png" alt="Instagram Mercado Preso"></a>
        <a href=""#""><img src="img/youtube.png" alt="Youtube Mercado Preso"></a>
    </div>

</footer>



<!--Configurações do JavaScript-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/cycle.js"></script>


<!-- TESTE LIMPA FORMULARIO-->

<script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('cadastroForm').onsubmit = function () {
                setTimeout(function () {
                    document.getElementById('cadastroForm').reset();
                }, 10);  // ajusta o tempo se necessário
                return true;  // continue with the form submission
            };
        });
    </script>




<!--Configurações do PHP -->
<?php

if(isset($_POST['submit'])){    // verifica se houve um clique no botao submit
    include_once('conectar.php');  //  chama as configaçoes de acesso ao banco de dados


// pega as informaçoes do formulario e envia para o banco de dados atraves do metodo POST
    $nome =$_POST['nome'];    
    $email =$_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);   //Commando para criptografar a senha
    $sexo =$_POST['sexo'];
    $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome','$email','$senha','$sexo')");
}


?>


</body>
</html>