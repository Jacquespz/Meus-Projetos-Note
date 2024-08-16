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
                <img src="img/logo.png" alt="Logotipo JPZ Style Tech">
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


<!--INICIO FORMULARIO ENTRAR-->

<div class="login">

    <div class="logar">

    <h1>LOGIN</h1>

    <form action="login.php" method="post">
        <input type="email" name="email" id="email_usuario" placeholder="Digite seu e-mail">
        <br>
        <input type="password" name="senha" id="senha_usuario" placeholder="Digite sua senha">
        <br>
        <input type="submit" name="submit" id="btn_logar" value="ENTRAR">
    </form>

    </div>


    <div class="logar" id="logar1">
        
        <img src="img/familia.png" alt="Familia">
        
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


</body>
</html>