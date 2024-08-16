<?php


//iniciar uma sessão

session_start();

if((!isset($_SESSION['email_cliente'])==true) and (!isset($_SESSION['senha_cliente'])==true))

{

//destruir as variais

unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);
header('Location:entrar.php');

}

else{
    $logado =$_SESSION['email_cliente'];
}

?>










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
                <img src="img/logo.png" alt="Logotipo Mercado Preso">
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


<!--INICIO FORMULARIO SESSÃO DO USUARIO-->

<section class="barra_top">
    <div class="barra">
        <h1>Área do Usuário</h1>
    </div>

    <div class="barra">
        <a href="sair.php">SAIR</a>
    </div>
</section>

<section class="usuario">
    <?php
    echo "<h2>Olá, $logado</h2>";
    ?>

    <p>Seja Bem-vindo a JPZ Style Tech</p>
</section> 






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


<!--Configurações do PHP-->
<?php

if(isset($_POST['submit'])){
    include_once('conectar.php');


    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sexo =$_POST['sexo'];

    $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES ('$nome','$email','$senha','$sexo')");
}


?>




</body>
</html>