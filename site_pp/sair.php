<?php

//Criar uma sessão


session_start();


//Destruir as variaves

unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);

//Direcionar para outra página

header('location:index.html');


?>