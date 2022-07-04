
    <?php

    session_start();

    $_SESSION['x'] = 'Oi, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr>';
    print_r($_SESSION['y']);

    //Variavel que verifica se a autenticação for validada

    $usuario_autenticado = false;

    //Usuários do sistema

    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => '123456')
    );

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    */

    foreach ($usuarios_app as $user) {



        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
      
    } else {
        $_SESSION['autenticado'] = 'Não';
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
