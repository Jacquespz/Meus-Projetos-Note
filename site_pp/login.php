<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'site_pp';

$conexao = new MYSQLI($host,$usuario,$senha,$banco);   //cod para ter acesso ao banco de dados


$email = $_POST['email'];
$senha = $_POST['senha'];  //capta a informação digitada no formulario atraves do metodo POST

$sql = "SELECT * from cadastro_clientes WHERE email_cliente ='$email'";  //Verifica se tem esta informação no banco de dados

$resultado = mysqli_query ($conexao, $sql);

$num = mysqli_num_rows($resultado);

if($num == 1){
    while($row = mysqli_fetch_assoc($resultado)){
        if(password_verify($senha, $row['senha_cliente'])){          //descritografa a senha
            SESSION_START();                                         //cria uma nova sessão
            $_SESSION['email_cliente'] = $email;
            header('Location:usuario.php');
        }
        else{
            //o campo está vazio
            header('location:entrar.php');
        }
    }
}

?>