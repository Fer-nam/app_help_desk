<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Variavel que verifica se a autenticação for validada

    $usuario_autenticado = false;

    //Usuários do sistema

    $usuarios_app = array(
        array('email'=>'adm@teste.com.br', 'senha'=>'123456'),
        array('email'=>'user@teste.com.br', 'senha'=>'123456')
    );

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */

    foreach($usuarios_app as $user){
       
      
        
       if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;

       }
        
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
    } else{
        header('location: index.php?login=erro');
    }


    /*
    print_r($_GET);

    echo '<br>';

    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];
   

   print_r($_POST );

   echo '<br>';

   echo $_POST['email'];
   echo '<br>';
   echo $_POST['senha'];
    */

    ?>
</body>
</html>